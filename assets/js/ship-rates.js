$(document).ready(function () {
    const $rateLoader = $('.rateLoader');
    const $rateResult = $('#rateResult');
    const $rateTableBody = $('#rateTableBody');
    const $errorMessage = $('#errorMessage');
    // let inputField = document.getElementById("pickup-pincode");
    // let inputField2 = document.getElementById("delivery-pincode");
    // let value1 = inputField.value;
    // let value2 = inputField2.value;
    // console.log("Pickup value: " + value1);
    // console.log("Delivery value: " + value2);

    function fetchRates() {
        const formData = new FormData($('#shiprateForm')[0]);
        $rateLoader.show();
        $rateResult.hide();
        $rateTableBody.empty();

        $.ajax({
            url: 'rates.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                $rateLoader.hide();
                if (data.result === 'error') {
                    $errorMessage.text(data.message).show();
                } else {
                    $rateResult.show();
                    let rows = '';
                    data.forEach(row => {
                        rows += `<tr class="rate-row" data-mode="${row.mode}">
                                    <td>${row.courier}</td>
                                    <td>${row.icon}</td>
                                    <td>${row.weight}</td>
                                    <td>${row.rate}</td>
                                </tr>`;
                    });
                    $rateTableBody.html(rows);
                }
            },
            error: function () {
                $rateLoader.hide();
                $errorMessage.text('Failed to fetch rates. Please try again later.').show();
            }
        });
    }
    window.onload = function(){
        fetchRates();
     // document.forms['shiprateForm'].submit();
    }
    // setTimeout(function() { fetchRates(); }, 1000);
    $(".showrates").click(function () {
        $('html, body').animate({
            scrollTop: $("#rateResult").offset().top
        }, 100);
    });
});
