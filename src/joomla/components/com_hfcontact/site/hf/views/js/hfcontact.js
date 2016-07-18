jQuery.noConflict();

jQuery(document).ready(function() {

    jQuery('.clearfield').clearField();

    //jQuery.validator.messages.required = "";
    //jQuery.validator.messages.email = "";
    jQuery('#hf-contact-form').validate({
        submitHandler: function(form) {
            jQuery(form).ajaxSubmit({
                target: "#hf-contact-response",

                // success identifies the function to invoke when the server response
                // has been received; here we apply a fade-in effect to the new content
                success: function() {
                    jQuery("#hf-contact-response").dialog({
                        modal: true,
                        title: 'Email Sent'
                    });
                }
            });
        },
        rules: {
            captcha: {
                required: true,
                remote: "index2.php?option=com_hfcontact&task=CaptchaAction_validate&format=raw"
            }
        },
        messages: {
            captcha: "Correct captcha is required."
        }
    });

});

