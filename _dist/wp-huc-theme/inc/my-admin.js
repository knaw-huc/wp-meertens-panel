(function($){
$(document).ready(function() {

    var $page_template = $('template_output.php')
        ,$metabox = $('.pods-form-ui-row-name-testfield'); // For example

    $page_template.change(function() {
        if ($(this).val() == 'default') {
            $metabox.show();
        } else {
            $metabox.hide();
        }
    }).change();

});
})(jQuery);
