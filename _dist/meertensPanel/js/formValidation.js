// prepFormForm();
// for test use set timeout
var myVar = setTimeout(prepFormForm, 600);
var valItems;

function prepFormForm() {
  valItems = document.getElementsByClassName('val');

  for(var i = 0; i < valItems.length; i++) {
    (function(index) {
      valItems[index].addEventListener("focusout", function() {
         validateForm(index);
       })
    })(i);
  }
}





function validateForm(field) {
  var fieldElement = valItems[field];
  var fieldVal = fieldElement.value;
  var fieldclasses = fieldElement.className.replace("val ", "");
  fieldclasses = fieldclasses.trim();
  var fieldId = fieldElement.id;
  var valArr = fieldclasses.split(" ");
  //console.log(valArr);
  var feedbackArr = [];
  var visualFeedback = false;

  // check all the validataions
  for (var i = 0; i < valArr.length; i++) {
    switch (valArr[i]) {

      // EMPTY
      case 'notEmpty':
      //console.log('n e',notEmpty(fieldVal));
      if (!notEmpty(fieldVal)) {
        //feedbackArr.push('This field can not be empty.');
        feedbackArr.push('Dit veld mag niet leeg zijn.');
        visualFeedback = true;
        //console.log(fieldElement.tagName);

        fieldElement.addEventListener(handleTagnameForEvent(fieldElement.tagName), function() {
          //console.log('add');
          validateForm(field);
         })

      }
      break;

      // VALID EMAIL
      case 'email':
        //console.log(hasAT(fieldVal));
        if (!hasAT(fieldVal)) {
          //feedbackArr.push('A valid emailadress contains at least a @ symbol');
          feedbackArr.push('Voeg het @ symbool toe');
          visualFeedback = true;
          fieldElement.addEventListener("keypress", function() {
             validateForm(field);
           })
        } else {
          if (!validEmail(fieldVal)) {
            //feedbackArr.push('A valid emailadress contains at least one dot (.) and not at the end');
            feedbackArr.push('Minimaal een punt is vereist. Deze mag niet aan het einde staan.');
            visualFeedback = true;
          }

        }
      break;
    }
  }





  // List the feedbackArr
  var listFeedback = ''
  for (var i = 0; i < feedbackArr.length; i++) {
    listFeedback += '<li>'+feedbackArr[i]+'</li>'
  }

  if (visualFeedback) {
    document.getElementById(fieldId).parentElement.classList.remove("hcformMessageFieldOK");
    document.getElementById(fieldId).parentElement.classList.add("hcformMessageFieldWarning");
    document.getElementById('msg_'+fieldId).innerHTML = '<ul>'+listFeedback+'</ul>';
  } else {
    document.getElementById(fieldId).parentElement.classList.remove("hcformMessageFieldWarning");
    document.getElementById(fieldId).parentElement.classList.add("hcformMessageFieldOK");
    document.getElementById('msg_'+fieldId).innerHTML = '';
  }


}


function notEmpty(vl){
  if ((vl != "") && (vl != "-")) {
    return true;
  }else{
    return false;
    }
}

function isNumber(vl){
  if (isNaN(vl)){
    return true;
  }else{
    return false;
    }
}

function hasAT(vl) {
  return vl.indexOf('@') !== -1

}


function validEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}


function handleTagnameForEvent(tagName) {
  var out = '';
  switch (tagName) {
    case 'INPUT':
      out = 'keypress';
      break;
    case 'SELECT':
      out = 'change';
      break;
    default:

  }
  return out;
}
