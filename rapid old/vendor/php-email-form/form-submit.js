$(document).ready(function() {
    $('.php-email-form').on('submit', function(e) {
        e.preventDefault();

     
        var formData = $(this).serializeArray();
        var data = {};
        formData.forEach(function(item) {
            data[item.name] = item.value;
        });
   
        var json = JSON.stringify(data);

        $('.loading').show();
        $('.error-message').hide();
        $('.sent-message').hide();

        $.ajax({
            url: 'https://www.rapidshyp.com/webhooks/receive_lead.php',
            type: 'POST',
            data: json,
            contentType: 'application/json',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('.sent-message').text(response.message);
                    $('.sent-message').show();
                    $('.php-email-form').trigger('reset'); // Reset the form on success
                } else {
                    $('.error-message').text(response.message);
                    $('.error-message').show();
                }
                $('.loading').hide();
            },
            error: function(xhr, status, error) {
                $('.error-message').text("An error occurred: " + xhr.responseText);
                $('.error-message').show();
                $('.loading').hide();
            }
        });
    });
});