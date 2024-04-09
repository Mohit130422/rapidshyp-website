$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".navbar").addClass("active-head");
        $('.navbar-collapse').removeClass('show'); 
        $('#navbar-close').addClass('hidden'); 
        $('.navbar-toggler-icon').removeClass('hidden'); 
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".navbar").removeClass("active-head");
    }
});

$(document).mouseup(function(e) 
{
    var container = $(".hover-menu");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
    }
});


$(document).ready(function(){
    $(function() {
        $('#ChangeToggle').click(function() {
          $('.navbar-toggler-icon').toggleClass('hidden');
          $('#navbar-close').toggleClass('hidden');  
        });
    });
    $(".active" ).on( "mouseenter", function() { 
        $(this).carousel('pause') 
      }, function () { 
        $(this).carousel('cycle') 
    })
    $("#resources").click(function(){
        $(".hover-menu").toggle();
    })
    $(".openWaitlistModal").click(function(){
        $("#joinWaitlistModal").css('display','flex');
    })
    $(".close").click(function(){
        $('#joinWaitlistModal').hide()
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
    $('#product-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout: 8000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:5
            }
        }
    })
});