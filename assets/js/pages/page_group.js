var PageGroupForm = (function() {
  return {
    //Contact Form
    initPageGroupForm: function() {
      // Validation
      $('#group-reservation').validate({
        // Rules for form validation
        rules: {
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          organization: {
            required: true
          },
          phonenumber: {
            required: true
          },
          date: {
            required: true
          },
          groupsize: {
            required: true
          },
          length: {
            required: true
          },
          message: {
            required: false
          }
        },

        // Messages for form validation
        messages: {
          name: {
            required: 'Please enter your name'
          },
          email: {
            required: 'Please enter your email address',
            email: 'Please enter a VALID email address'
          },
          organization: {
            required: "Please enter your organization's name"
          },
          phonenumber: {
            required: 'Please enter a phone number'
          },
          date: {
            required: 'Please enter a date'
          },
          groupsize: {
            required: 'Please enter a groupsize'
          },
          length: {
            required: 'Please enter a time length'
          }
        },
        // Ajax form submition
        submitHandler: function(form) {
          $(form).ajaxSubmit({
            beforeSend: function() {
              $('#group-reservation button[type="submit"]').attr(
                'disabled',
                true
              );
            },
            success: function() {
              $('#group-reservation').addClass('submited');
            },
            error: function(e) {
              console.log(e);
            }
          });
        },

        // Do not change code below
        errorPlacement: function(error, element) {
          error.insertAfter(element.parent());
        }
      });
    }
  };
})();
