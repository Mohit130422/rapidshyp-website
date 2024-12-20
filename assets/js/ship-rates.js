$(document).ready(function () {
    const $rateLoader = $('.rateLoader');
    const $rateResult = $('#rateResult');
    const $rateTableBody = $('#rateTableBody');
    const $errorMessage = $('#errorMessage');

    function fetchRates() {
        const formData = new FormData($('#shiprateForm')[0]);
        console.log(formData);
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

    fetchRates();
});
