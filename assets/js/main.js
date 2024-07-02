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
                    setTimeout(function() {
                        window.location.reload(); // Reload the page after 4 seconds
                    }, 8000);
                } else {
                    $('.error-message').text(response.message);
                    $('.error-message').show();
                }
                $('.loading').hide();
                gtag_report_conversion(window.location);
            },
            error: function (xhr, status, error) {
                $('.error-message').text('There was an error sending your message. Please try again later.').show();
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
    $('#publishers').owlCarousel({
        loop: false,
        margin: 20,
        loop: true,
        dots: false,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    })

    //shipment tracking js

    const savedLookupType = localStorage.getItem('lookupType');
    if (savedLookupType) {
        $('input[name="lookupType"][value="' + savedLookupType + '"]').prop('checked', true);
        toggleInputs(savedLookupType);
    }

    $('input[name="lookupType"]').change(function() {
        const selectedType = $(this).val();
        localStorage.setItem('lookupType', selectedType);
        location.reload();
    });

    function toggleInputs(lookupType) {
        if (lookupType === 'order_id') {
            $('#orderInput').removeClass('hidden');
            $('#awbInput').addClass('hidden');
        } else {
            $('#orderInput').addClass('hidden');
            $('#awbInput').removeClass('hidden');
        }
    }

    toggleInputs($('input[name="lookupType"]:checked').val());

    $('#mobile_no').on('input', function() {
        this.value = this.value.replace(/\D/g, '');
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });


    $('#lookupForm').submit(function(e) {
        e.preventDefault();
        let lookupType = $('input[name="lookupType"]:checked').val();
        let formData = {};
        let apiUrl = 'lookup.php';

        if (lookupType === 'order_id') {
            let mobileNo = $('#mobile_no').val();
            if (!/^\d{10}$/.test(mobileNo)) {
                $('#responseMessage').html('Please enter a valid 10-digit mobile number.');
                return;
            }

            formData = {
                order_id: $('#order_id').val(),
                mobile_no: mobileNo,
                csrf: $('#csrf').val()
            };
        } else {
            formData = {
                awb_no: $('#awb_no').val(),
                csrf: $('#csrf').val()
            };
        }
        $('.ship-loading').show();
        $.ajax({
            url: apiUrl,
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    let data = response.records;
                    let shipment_data = response.records[0].shipment_details;
                    let tableRows = '';
                    $('#order-date').html(data[0].creation_date.split(' ')[0]);
                    $('#order-id').html(data[0].seller_order_id);
                    shipment_data.forEach(function(item) {
                        item.product_details.forEach(function(product){
                            let order_status = item.current_tracking_status_desc.replaceAll('_', ' ');
                            if(item.current_tracking_status_desc == "Delivered" || item.current_tracking_status_desc == "RTO Delivered"){
                                var color = 'delivered';
                            }else if (item.current_tracking_status_desc == "OUT_FOR_DELIVERY"){
                                var color = 'label';
                            }else if (item.current_tracking_status_desc == "Undelivered" || item.current_tracking_status_desc == "CANCELLED"){
                                var color = 'cancel';
                            }else{
                                var color = 'intransit'
                            }
                            $('.tracking-table').css('display','block');
                        tableRows += `
                            <tr>
                                <td class="align-middle" width="30%">${product.product_name} <img src="assets/images/icon/info.svg"
                                                    alt="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="SKU:${product.product_sku}"></td>
                                <td class="align-middle">${item.courier_name}</td>
                                <td class="align-middle">${item.current_courier_edd.split(' ')[0]}</td>
                                <td class="align-middle" width="20%"><span class="${color}">${item.current_tracking_status_desc}</span></td>
                                 <td class="headcol align-middle"><button class="solid-action-btn" onClick=trackBy('${item.awb}')>Track <i class="fas fa-arrow-up"></i></button></td>
                            </tr>`;
                        })
                    });
                    $('#trackingTable tbody').html(tableRows);
                    $('#trackingTable').removeClass('hidden');
                    $('#responseMessage').html('');              

                   
                } else {
                    
                    $('#responseMessage').html('Shipment Not found....!');
                    setTimeout(function() {
                        $('#responseMessage').hide();
                    }, 3000); //hide error message
                    $('#trackingTable').addClass('hidden');
                }
                $('#lookupForm').trigger('reset');
                $('.ship-loading').hide();
            },
            error: function() {
                $('#responseMessage').html('An error occurred. Please try again.');
            }
        });
    });
});
function trackBy(awbNo){
    if (awbNo) {
        window.open('https://app.rapidshyp.com/t/' + awbNo,'_blank');
    } else {
        $('#responseMessage').html('AWB number is not available.');
    }
}