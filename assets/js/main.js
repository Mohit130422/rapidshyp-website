$(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
        $(".navbar-expand-lg").addClass("active-head");
        $('.navbar-collapse').removeClass('show');
        $('#navbar-close').addClass('hidden');
        $('.navbar-toggler-icon').removeClass('hidden');
    } else {
        //remove the background property so it comes transparent again (defined in your css)
        $(".navbar").removeClass("active-head");
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('resources');
    const toggleDiv = document.getElementById('sub-menu');

    // Function to toggle the div visibility
    function toggleDivVisibility() {
        toggleDiv.style.display = toggleDiv.style.display === 'none' ? 'block' : 'none';
    }

    // Toggle div visibility on button click
    toggleButton.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevents the click event from reaching the document click listener
        toggleDivVisibility();
    });

    // Hide div when clicked outside of it
    document.addEventListener('click', function (event) {
        if (!toggleDiv.contains(event.target) && event.target !== toggleButton) {
            toggleDiv.style.display = 'none';
        }
    });

    // Hide div when scrolling
    document.addEventListener('scroll', function () {
        toggleDiv.style.display = 'none';
    });
});


$(document).ready(function () {
    $(function () {
        $('#ChangeToggle').click(function () {
            $('.navbar-toggler-icon').toggleClass('hidden');
            $('#navbar-close').toggleClass('hidden');
        });
    });
    $(".active").on("mouseenter", function () {
        $(this).carousel('pause')
    }, function () {
        $(this).carousel('cycle')
    })
    $(".openWaitlistModal").click(function () {
        $("#joinWaitlistModal").css('display', 'flex');
    })
    $(".close").click(function () {
        $('#joinWaitlistModal').hide()
    })
    $("#submit-button").submit(function (e) {
        var email = $("#useremail").val();
        // console.log(email);
        $("#joinWaitlistModal").css('display', 'flex');
        $("#email").val(email);
        return false;
    });
    $("#explore-form").submit(function (e) {
        var exploreEmail = $("#explore-email").val();
        // console.log(email);
        $("#joinWaitlistModal").css('display', 'flex');
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
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 5
            }
        }
    })
    $('#key-features').owlCarousel({
        loop: false,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                loop: true,
                dots: false,
                autoplay: true,
                slideTransition: 'linear',
                autoplayTimeout: 4000,
                autoplaySpeed: 4000,
                autoplayHoverPause: true,
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
    $('#feature-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }
    })

    // Set the target day and time (Thursday 10:00 AM)
    var targetDay = 4; // Thursday (0=Sunday, 1=Monday, ..., 6=Saturday)
    var targetHour = 11; // 11:00 AM
    var targetMinute = 0;
    var targetSecond = 0;

    var now = new Date();
    var target = new Date();
    target.setDate(now.getDate() + (targetDay + 7 - now.getDay()) % 7); // next target day
    target.setHours(targetHour, targetMinute, targetSecond, 0);

    function updateCountdown() {
        var currentTime = new Date();
        var timeDifference = target - currentTime;

        if (timeDifference <= 0) {
            // Countdown is over
            $('#countdown').html("<img src='assets/images/icon/congrats.gif'> ");
        } else {
            var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
            $('#countdown').html("<img src='assets/images/icon/congrats.gif'> ");
            // $('#countdown').html("<img src='assets/images/icon/countdown.gif'> " + days + "d : " + hours + "h : " + minutes + " m : " + seconds + "s");
        }
    }

    // Update countdown every second
    var countdownInterval = setInterval(updateCountdown, 1000);

    // Initial call to display countdown immediately
    updateCountdown();
});