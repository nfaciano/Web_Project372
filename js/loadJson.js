$(document).ready(function(){
    $.ajax({
        url: 'https://nfaciano.rhody.dev/web_projects372/data/contactInfo.json',
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $('#contact-message').text(data.contact.messagePrompt);
            $('#contact-email').text(data.contact.email).attr('href', 'mailto:' + data.contact.email);
        },
        error: function(){
            console.log('Error loading contact information');
        }
    });
});