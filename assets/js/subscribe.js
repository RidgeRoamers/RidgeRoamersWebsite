var FooterSubscribe = function () {

    return {

        //Contact Form
        initFooterSubscribe: function () {
            // Validation
            $("#footer-subscribe").validate({
                // Rules for form validation
                rules:
                {
                    email:
                    {
                        required: true,
                        email: true
                    }
                },

                // Messages for form validation
                messages:
                {
                    email:
                    {
                        required: 'Please enter your email address',
                        email: 'Please enter a VALID email address'
                    }
                },

                // Ajax form submition
                submitHandler: function(form)
                {
                    $(form).ajaxSubmit(
                        {
                            beforeSend: function()
                            {
                                $('#footer-subscribe button[type="submit"]').attr('disabled', true);
                            },
                            success: function()
                            {
                                $("#footer-subscribe").addClass('submited');
                            }
                        });
                },

                // Do not change code below
                errorPlacement: function(error, element)
                {
                    error.insertAfter(element.parent());
                }
            });
        }

    };

}();