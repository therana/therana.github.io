/*global jQuery:false */
(function ($) {



    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       false       // trigger animations on mobile devices (true is default)
      }
    );
    wow.init();


    //scroll to top
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
            } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
    });


    $('#contact-submit').click(function () {
        $('.first-name-error, .last-name-error, .contact-email-error, .contact-subject-error, .contact-message-error').hide();
        var first_nameVal = $('input[name=first_name]').val();
        var last_nameVal = $('input[name=last_name]').val();
        var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
        var emailVal = $('#contact_email').val();
        var contact_subjectVal = $('input[name=contact_subject]').val();
        var messageVal = $('textarea[name=message]').val();

        //validate

        if (first_nameVal == '' || first_nameVal == 'First Name *') {
            $('.first-name-error').html('<i class="fa fa-exclamation"></i> First name is required.').fadeIn();
            return false;
        }
        if (last_nameVal == '' || last_nameVal == 'Last Name *') {
            $('.last-name-error').html('<i class="fa fa-exclamation"></i> Last name is required.').fadeIn();
            return false;
        }
        if (emailVal == "" || emailVal == "Email Address *") {

            $('.contact-email-error').html('<i class="fa fa-exclamation"></i> Your email address is required.').fadeIn();
            return false;

        } else if (!emailReg.test(emailVal)) {

            $('.contact-email-error').html('<i class="fa fa-exclamation"></i> Invalid email address.').fadeIn();
            return false;
        }
         if (contact_subjectVal == '' || contact_subjectVal == 'Subject *') {
            $('.contact-subject-error').html('<i class="fa fa-exclamation"></i> Subject is required.').fadeIn();
            return false;
        }
        if (messageVal == '' || messageVal == 'Message *') {
            $('.contact-message-error').html('<i class="fa fa-exclamation"></i> Please provide a message.').fadeIn();
            return false;
        }

        var data_string = $('.contact-form').serialize();

        $('#contact-submit').hide();
        $('#contact-loading').fadeIn();
        $('.contact-error-field').fadeOut();

        $.ajax({
            type: "POST",
            url: "mailer.php",
            data: data_string,

            //success
            success: function (data) {

                $('.contact-box-hide').slideUp();
                $('.contact-message').html('<i class="fa fa-check contact-success"></i><div>Your message has been sent.</div>').fadeIn();
            },
            error: function (data) {

                $('.btn-contact-container').hide();
                $('.contact-message').html('<i class="fa fa-exclamation contact-error"></i><div>Something went wrong, please try again later.</div>').fadeIn();
            }

        }) //end ajax call
        return false;
    });


})(jQuery);
