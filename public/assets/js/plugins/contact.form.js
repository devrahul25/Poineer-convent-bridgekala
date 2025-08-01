/**
 *
 * -----------------------------------------------------------------------------
 *
 * Template : Bizup - Creative Agency & Portfolio HTML Template
 * Author : reacthemes
 * Author URI : https://reactheme.com/ 
 *
 * -----------------------------------------------------------------------------
 *
 **/

(function ($) {
    'use strict';
    // Get the form.
    var form = $('#contact-form');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#name, #email, #message').val('');
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
    });

    // Admission form data
    var admissionForm = $('#admission-form');
    // Success message div
    var formMessages = $('#form-messages-admission');

    $(admissionForm).submit(function (e) {
        e.preventDefault();

        // Use FormData to handle the form with file input
        var admissionFormData = new FormData(admissionForm[0]);

        $.ajax({
            type: 'POST',
            url: $(admissionForm).attr('action'),
            data: admissionFormData,
            contentType: false,   // Important for file upload
            processData: false,   // Prevent jQuery from converting the form data
            success: function (response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                $(formMessages).text(response);
                // Optionally reset the form
                // $(admissionForm)[0].reset();
            },
            error: function (data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occurred and your message could not be sent.');
                }
            }
        });
    });

})(jQuery);