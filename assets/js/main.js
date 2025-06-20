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
    const toggleIntegration = document.getElementById('integrations');
    const toggleIntegrationDiv = document.getElementById('integration-menu');

    function showMenu(menu) {
        menu.classList.add('show');
    }

    function hideMenu(menu) {
        menu.classList.remove('show');
    }

    // Handle Resources hover
    toggleButton.addEventListener('mouseenter', () => showMenu(toggleDiv));
    toggleButton.addEventListener('mouseleave', () => setTimeout(() => {
        if (!toggleDiv.matches(':hover')) hideMenu(toggleDiv);
    }, 100));
    toggleDiv.addEventListener('mouseenter', () => showMenu(toggleDiv));
    toggleDiv.addEventListener('mouseleave', () => hideMenu(toggleDiv));

    // Handle Integrations hover
    toggleIntegration.addEventListener('mouseenter', () => showMenu(toggleIntegrationDiv));
    toggleIntegration.addEventListener('mouseleave', () => setTimeout(() => {
        if (!toggleIntegrationDiv.matches(':hover')) hideMenu(toggleIntegrationDiv);
    }, 100));
    toggleIntegrationDiv.addEventListener('mouseenter', () => showMenu(toggleIntegrationDiv));
    toggleIntegrationDiv.addEventListener('mouseleave', () => hideMenu(toggleIntegrationDiv));

    // Hide both on scroll
    document.addEventListener('scroll', function () {
        hideMenu(toggleDiv);
        hideMenu(toggleIntegrationDiv);
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
        $('#diwaliOffer').hide()
    })
    $("#submit-button").submit(function (e) {
        var email = $("#useremail").val();
        // console.log(email);
        $("#joinWaitlistModal").css('display', 'flex');
        $("#email").val(email);
        return false;
    });
    $(".scrollDown").click(function () {
        $('html, body').animate({
            scrollTop: $("#rateCal").offset().top
        }, 100);
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
            // console.log(item.name, item.value);
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
                } else {
                    $('.error-message').text(response.message);
                    $('.error-message').show();
                }
                $('.loading').hide();
                gtag_report_conversion(window.location);
                $('#thankyou').css('display', 'flex');
            },
            error: function (xhr, status, error) {
                $('.error-message').text('There was an error sending your message. Please try again later.').show();
                $('.loading').hide();
            }
        });
        return false;
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

    $('#shiprates-carousel').owlCarousel({
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
                items: 4,
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
    $('input[name="lookupType"]').change(function () {
        const selectedType = $(this).val();
        localStorage.setItem('lookupType', selectedType);
        toggleInputs(selectedType);
        $('.tracking-table').addClass('hidden');
        // location.reload();
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

    $(document).ready(function () {
        const initialType = $('input[name="lookupType"]:checked').val();
        toggleInputs(initialType);
    });

    $('#mobile_no').on('input', function () {
        this.value = this.value.replace(/\D/g, '');
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });


    $('#lookupForm').submit(function (e) {
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
            success: function (response) {
                if (response.success) {
                    let data = response.records;
                    let shipment_data = response.records[0].shipment_details;
                    let tableRows = '';
                    let tableHead = `
                        <tr>
                            <th class="br-1" scope="col" width="30%">Product Name</th>
                            <th scope="col">Courier</th>
                            <th scope="col" class="edd-column">EDD</th>
                            <th scope="col" width="20%">Status</th>
                            <th class="br-2 headcol" scope="col">Action</th>
                        </tr>`;
                    $('#order-date').html(data[0].creation_date.split(' ')[0]);
                    $('#order-id').html(data[0].seller_order_id);
                    shipment_data.forEach(function (item) {
                        let product_details = item.product_details;
                        let order_status = item.current_tracking_status_desc;
                        // let order_status = item.current_tracking_status_desc.replaceAll('_', ' ');
                        let color;
                        if (order_status == "Delivered" || order_status == "RTO Delivered") {
                            color = 'delivered';
                        } else if (order_status == "Out for Delivery" || order_status == "RTO Out for Delivery") {
                            color = 'label';
                        } else if (order_status == "Undelivered" || order_status == "CANCELLED") {
                            color = 'cancel';
                        } else {
                            color = 'intransit';
                        }
                        $('.tracking-table').removeClass('hidden');
                        let additionalInfo;
                        // let eddColumn = ''; // EDD column content
                        let eddValue = item.current_courier_edd && item.current_courier_edd.trim() ? item.current_courier_edd.split(' ')[0] : 'N/A';
                        if (order_status !== "Undelivered" || order_status !== "RTO In Transit" || order_status !== "RTO Out for Delivery" || order_status !== "RTO Delivered") {
                            eddColumn = `<td class="align-middle edd-column">${eddValue}</td>`;
                        }
                        if (product_details.length > 1) {
                            // Get the additional product names for the tooltip
                            let additionalProducts = product_details.slice(1).map(product => product.product_name).join(', ');
                            additionalInfo = ` (+${product_details.length - 1} more products)`;
                            tableRows += `
                            <tr>
                                <td class="align-middle" width="30%">${product_details[0].product_name} <img class="d-none" src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/info.svg"
                                                    alt="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="More Products: ${additionalProducts}"> <p>${additionalInfo}</p></td>
                                <td class="align-middle">${item.courier_name}</td>
                                 ${eddColumn}
                                <td class="align-middle" width="20%"><span class="${color}">${order_status}</span></td>
                                <td class="headcol align-middle"><button class="solid-action-btn" onClick=trackBy('${item.awb}')>Track <i class="fas fa-arrow-up"></i></button></td>
                            </tr>`;
                        } else {
                            additionalInfo = `SKU: ${product_details[0].product_sku}`;
                            tableRows += `
                            <tr>
                                <td class="align-middle" width="30%">${product_details[0].product_name} <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/info.svg"
                                                    alt="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="${additionalInfo}"></td>
                                <td class="align-middle">${item.courier_name}</td>
                                 ${eddColumn}
                                <td class="align-middle" width="20%"><span class="${color}">${order_status}</span></td>
                                <td class="headcol align-middle"><button class="solid-action-btn" onClick=trackBy('${item.awb}')>Track <i class="fas fa-arrow-up"></i></button></td>
                            </tr>`;
                        }
                    });
                    $('#trackingTable thead').html(tableHead);
                    $('#trackingTable tbody').html(tableRows);
                    $('#trackingTable').removeClass('hidden');
                    $('#responseMessage').html('');

                    // Hide the EDD column if necessary
                    if (shipment_data.some(item => item.current_tracking_status_desc === "Undelivered" || item.current_tracking_status_desc === "RTO In Transit" || item.current_tracking_status_desc === "RTO Out for Delivery" || item.current_tracking_status_desc === "RTO Delivered" || item.current_tracking_status_desc === "Delivered")) {
                        $('.edd-column').hide();
                    }
                } else {

                    $('#responseMessage').html('Shipment Not found....!');
                    setTimeout(function () {
                        $('#responseMessage').hide();
                    }, 3000); //hide error message
                    $('#trackingTable').addClass('hidden');
                }
                $('#order_id').val("");
                $('#mobile_no').val("");
                $('#awb_no').val("");
                $('.ship-loading').hide();
            },
            error: function () {
                $('#responseMessage').html('An error occurred. Please try again.');
            }
        });

    });
});
function trackBy(awbNo) {
    if (awbNo) {
        window.open('https://app.rapidshyp.com/t/' + awbNo, '_blank');
    } else {
        $('#responseMessage').html('AWB number is not available.');
    }
}

$('input[name="options"]').change(function () {
    var filter = $(this).attr('id');
    $('.rate-row').each(function () {
        var mode = $(this).data('mode');
        if (filter === 'all' || filter === mode) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
});

$(document).ready(function () {
    const $pickupPin = $('#pickup-pincode');
    const $deliverPin = $('#delivery-pincode');
    const $rateLoader = $('.rateLoader');
    const $rateResult = $('#rateResult');
    const $rateTableBody = $('#rateTableBody');
    const $errorMessage = $('#errorMessage'); // For displaying error messages

    // Check input length using jQuery
    function checkLength($input, min, max) {
        const valueLength = $input.val().length;
        if (valueLength < min) {
            showError($input, `${getFieldName($input)} must be at least ${min} characters`);
            return false;
        } else if (valueLength > max) {
            showError($input, `${getFieldName($input)} must be less than ${max} characters`);
            return false;
        } else {
            showSuccess($input);
            return true;
        }
    }

    // Show input error messages
    function showError($input, message) {
        const $formControl = $input.parent();
        $formControl.addClass('error').removeClass('success');
        $formControl.find('small').text(message);
    }

    // Show success color
    function showSuccess($input) {
        const $formControl = $input.parent();
        $formControl.addClass('success').removeClass('error');
    }

    // Get field name
    function getFieldName($input) {
        return $input.attr('id').charAt(0).toUpperCase() + $input.attr('id').slice(1);
    }

    // Validate pin codes when typing (key up event)
    $pickupPin.on('keyup', function () {
        checkLength($pickupPin, 6, 6);
    });

    $deliverPin.on('keyup', function () {
        checkLength($deliverPin, 6, 6);
    });

    // Handle form submission with jQuery
    $('#calForm').on('submit', function (event) {
        event.preventDefault();

        const isPickupPinValid = checkLength($pickupPin, 6, 6);
        const isDeliverPinValid = checkLength($deliverPin, 6, 6);

        if (isPickupPinValid && isDeliverPinValid) {
            const formData = new FormData(this);

            // Hide previous error messages
            $errorMessage.hide();

            // Reset rate result table and hide it before starting the new request
            $rateTableBody.empty();
            $rateResult.hide();

            // Show the loader
            $rateLoader.show();

            // Fetch rates via AJAX
            $.ajax({
                url: 'rates.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (data) {
                    // Hide loader
                    $rateLoader.hide();

                    if (data.result === 'error') {
                        // If pincode(s) are not serviceable, check which one is invalid and show error near that input
                        if (data.message.includes('Pincode(s) not serviceable')) {
                            if (data.invalid_pincode === 'pickup') {
                                showError($pickupPin, 'Pickup pincode not serviceable');
                            } else if (data.invalid_pincode === 'delivery') {
                                showError($deliverPin, 'Delivery pincode not serviceable');
                            }
                        } else {
                            // Display any other server error
                            $errorMessage.text(data.message).show();
                        }
                    } else if (Array.isArray(data)) {
                        $rateResult.show();
                        let rows = '';

                        data.forEach(function (row) {
                            rows += `<tr class="rate-row" data-mode="${row.mode}">
                                        <td>${row.courier}</td>
                                        <td>${row.icon}</td>
                                        <td>${row.weight}</td>
                                        <td>${row.rate}</td>
                                    </tr>`;
                        });

                        // Append the rows to the table
                        $rateTableBody.html(rows);

                        // Reset the form
                        // $('#calForm')[0].reset();
                    } else {
                        $errorMessage.text('An unexpected error occurred. Please try again.').show();
                    }
                },
                error: function (xhr) {
                    // $rateLoader.hide();

                    let message = 'Failed to fetch rates. Please try again later.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    }

                    // Display a general error message or server-provided message
                    $errorMessage.text(message).show();
                }
            });
        }
    });
    // Handle reset button click
    $('#calForm').on('reset', function () {
        // Hide rate result table when reset is clicked
        $rateResult.hide();
        // Hide error message if any
        $errorMessage.hide();
        // Remove error or success classes from form inputs
        $('input').parent().removeClass('error success');
    });
});

$(document).ready(function () {
    // Initial setup: show form-container, hide track-container
    $('.form-container').show();
    $('.track-container').hide();

    $('.lp-nav-link').on('click', function (e) {
        e.preventDefault(); // prevent default anchor behavior

        // Remove active class from all tabs and add to the clicked one
        $('.lp-nav-link').removeClass('active');
        $(this).addClass('active');

        // Get target tab ID from href attribute
        var target = $(this).attr('href');

        // Show/hide corresponding containers
        if (target === '#tabs-1') {
            $('.form-container').show();
            $('.track-container').hide();
        } else if (target === '#tabs-2') {
            $('.form-container').hide();
            $('.track-container').show();
        }
    });
});

const calculateBtn = document.getElementById('calculateBtn');
const actualWeightEl = document.querySelector('.actual-weight');
const chargeableWeightEl = document.querySelector('.chargeable-weight');
const inputWeightEl = document.querySelector('.input-weight');
const volumeResultEl = document.querySelector('.volumeResult');
const showError = (input, message) => {
    input.classList.add('input-error');
    let error = input.parentElement.querySelector('.error-message');
    if (!error) {
        error = document.createElement('div');
        error.className = 'error-message';
        input.parentElement.appendChild(error);
    }
    error.textContent = message;
};
const showSuccess = (input) => {
    input.classList.remove('input-error');
    const error = input.parentElement.querySelector('.error-message');
    if (error) {
        input.parentElement.removeChild(error);
    }
};
const calculateWeight = () => {
    let totalVolume = 0;
    let valid = true;

    document.querySelectorAll('.parcel').forEach(parcel => {
        const length = parcel.querySelector('.length');
        const width = parcel.querySelector('.width');
        const height = parcel.querySelector('.height');

        const lengthValue = parseFloat(length?.value);
        const widthValue = parseFloat(width?.value);
        const heightValue = parseFloat(height?.value);

        if (lengthValue > 0 && widthValue > 0 && heightValue > 0) {
            totalVolume += (lengthValue * widthValue * heightValue) / 5000;
            showSuccess(length);
            showSuccess(width);
            showSuccess(height);
        } else {
            [length, width, height].forEach(input => {
                input?.classList.add('input-error');
            });
            const errorMsg = parcel.querySelector('.error-message') || document.createElement('div');
            errorMsg.className = 'error-message';
            errorMsg.textContent = 'Please fill in all dimensions correctly.';
            if (!parcel.contains(errorMsg)) parcel.appendChild(errorMsg);
            valid = false;
        }
    });

    if (!valid) {
        volumeResultEl.style.display = 'none';
        return;
    }

    actualWeightEl.textContent = `${totalVolume.toFixed(1)} KG`;

    const inputWeight = parseFloat(inputWeightEl?.value);
    if (!inputWeight || inputWeight <= 0) {
        showError(inputWeightEl, 'Please enter a valid weight');
        volumeResultEl.style.display = 'none';
        return;
    } else {
        showSuccess(inputWeightEl);
    }

    const actualWeight = parseFloat(actualWeightEl.textContent);
    const greaterWeight = Math.max(actualWeight, inputWeight);
    chargeableWeightEl.textContent = `${greaterWeight.toFixed(1)} KG`;

    volumeResultEl.style.display = 'flex';
};
calculateBtn?.addEventListener('click', calculateWeight);


document.getElementById('viewMoreBtn').addEventListener('click', function () {
    const hiddenColumns = document.querySelectorAll('.hidden-column');
    console.log('hiddenColumns', hiddenColumns);
    const isHidden = hiddenColumns[0].style.display === 'none' || hiddenColumns[0].style.display === '';
    console.log('isHidden', isHidden);

    // Toggle visibility of hidden columns
    hiddenColumns.forEach(column => {
        column.style.display = isHidden ? 'block' : 'none';
    });

    // Toggle button text
    this.textContent = isHidden ? 'View Less' : 'View More';
});
