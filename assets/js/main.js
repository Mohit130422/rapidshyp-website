$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".navbar").addClass("active-head");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".navbar").removeClass("active-head");
    }
});


$(document).ready(function(){
    $(function() {
        $('#ChangeToggle').click(function() {
          $('.navbar-toggler-icon').toggleClass('hidden');
          $('#navbar-close').toggleClass('hidden');  
        });
    });
    $(".openWaitlistModal").click(function(){
        $("#joinWaitlistModal").css('display','flex');
    })
    $(".close").click(function(){
        $('#joinWaitlistModal').hide()
        location.reload(true);
    })
    $("#submit-button").submit(function(e){
        var email = $("#useremail").val();
        // console.log(email);
        $("#joinWaitlistModal").css('display','flex');
        $("#email").val(email);
        return false;
    });
    $("#explore-form").submit(function(e){
        var exploreEmail = $("#explore-email").val();
        // console.log(email);
        $("#joinWaitlistModal").css('display','flex');
        $("#email").val(exploreEmail);
        return false;
    });  
    $('.php-email-form').on('submit', function (e) {
        e.preventDefault();

        var formData = $(this).serializeArray();
        var data = {};
        formData.forEach(function (item) {
            data[item.name] = item.value;
        });

        var json = JSON.stringify(data);
        console.log(json);


        $('.loading').show();
        $('.error-message').hide();
        $('.sent-message').hide();

        $.ajax({
            url: 'https://www.rapidshyp.com/webhooks/receive_lead.php',
            type: 'POST',
            data: json,
            contentType: 'application/json',
            dataType: 'json',
            success: function (response) {
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
            error: function (xhr, status, error) {
                // $('.error-message').text("An error occurred: " + xhr.responseText);
                $('.error-message').show();
                $('.loading').hide();
            }
        });
    });  
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
});