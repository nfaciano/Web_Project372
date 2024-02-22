$(document).ready(function() {
    $('#contact-form').submit(function(e) {
        e.preventDefault(); // Prevent default form submission

        // Basic validation
        var name = $('#name').val().trim();
        var email = $('#email').val().trim();
        var message = $('#message').val().trim();
        var isValid = true;

        // Check if all the fields are filled
        if(name === '') {
            alert('Please enter your name.');
            isValid = false;
        } else if(email === '') {
            alert('Please enter your email.');
            isValid = false;
        } else if(message === '') {
            alert('Please enter a message.');
            isValid = false;
        }

        if(isValid) {
            // Here you will implement the AJAX submission later
            alert('Thank you for contacting us. We will get back to you soon.');
            // Reset the form after submission
            $('#contact-form')[0].reset();
        }
    });
});
