
$('#invoice_to').bind('input', function()  { document.getElementById('#invoice_to_error').innerHTML = ""; })

$('#delivery_to').bind('input', function()  { document.getElementById('#delivery_to_error').innerHTML = ""; })

$('#asset_description').bind('input', function()  { document.getElementById('#asset_description_error').innerHTML = ""; })

$('#gross_price').bind('input', function()  { document.getElementById('#gross_price_error').innerHTML = ""; })

$('#less_trade_in').bind('input', function()  { document.getElementById('#less_trade_in_error').innerHTML = ""; })

$('#less_deposit').bind('input', function()  { document.getElementById('#less_deposit_error').innerHTML = ""; })

$('#plus_finance_payout_on_trade_in').bind('input', function()  { document.getElementById('#plus_finance_payout_on_trade_in_error').innerHTML = ""; })

$('#refund_to_customer').bind('input', function()  { document.getElementById('#refund_to_customer_error').innerHTML = ""; })

$('#total_finance_amount').bind('input', function()  { document.getElementById('#total_finance_amount_error').innerHTML = ""; })

$(function ()
{
$('#tax-invoice-form').on('submit', function (e) {
    e.preventDefault();

    if ($("#invoice_to").val() == ""){

        $('#invoice_to_error').html('Required*');
        return;
    }

    if ($("#delivery_to").val() == "")
    {
        $('#delivery_to_error').html('Required*');
        return;
    }
    if ($("#asset_description").val() == "")
    {
        $('#asset_description_error').html('Required*');
        return;
    }
    if ($("#gross_price").val() == "")
    {
        $('#gross_price_error').html('Required*');
        return;
    }

    if ($("#less_trade_in").val() == "")
    {
        $('#less_trade_in_error').html('Required*');
        return;
    }
    if ($("#less_deposit").val() == "")
    {
        $('#less_deposit_error').html('Required*');
        return;
    }
    if ($("#plus_finance_payout_on_trade_in").val() == "")
    {
        $('#plus_finance_payout_on_trade_in_error').html('Required*');
        return;
    }
    if ($("#refund_to_customer").val() == "")
    {
        $('#refund_to_customer_error').html('Required*');
        return;
    }
    if ($("#total_finance_amount").val() == "")
    {

        $('#total_finance_amount_error').html('Required*');
        return;
    }

    var broker_id = $("#broker_id").val();
    var lead_id   = $("#lead_id").val();

    //addLoading();

    $.ajax({
        url: "assets/ajax/tax_invoice.php",
        type: 'POST',
        data: new FormData(this),
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success: function (data) {

            //hideLoading();
            //alert('Lead Has Been Added Successfully');
            //window.location.href = 'application-step3.php';
            // $("")

            $("#TaxInvoiceModal").modal('hide');

            var tax_id = data;



            window.location.href = 'http://auzzietech.com/element_new/pdf/tax-invoice.php?tax_id='+tax_id+'&lead_id='+lead_id+'&broker_id='+broker_id;

        }
    });

});
});