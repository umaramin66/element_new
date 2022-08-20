$(function ()
{
    // $('#invoice_type').bind('input', function()  { document.getElementById('#invoice_type_error').innerHTML = "" });
    //
    // $('#invoice_date').bind('input', function()  { document.getElementById('#invoice_date_error').innerHTML = "" });
    //
    // $('#vendor_detail').bind('input', function()  { document.getElementById('#vendor_detail_error').innerHTML = "" });
    //
    // $('#invoice_to').bind('input', function()  { document.getElementById('#invoice_to_error').innerHTML = "" });
    //
    // $('#delivery_to').bind('input', function()  { document.getElementById('#delivery_to_error').innerHTML = "" });
    //
    //
    // $('#invoice_amount').bind('input', function()  { document.getElementById('#invoice_amount_error').innerHTML = "" });
    //
    // $('#gst').bind('input', function()  { document.getElementById('#gst_error').innerHTML = "" });
    //
    // $('#deposit_inc_gst').bind('input', function()  { document.getElementById('#deposit_inc_gst_error').innerHTML = "" });
    //
    // $('#total_amount_due').bind('input', function()  { document.getElementById('#total_amount_due_error').innerHTML = "" });
    //
    //
    //
    // $('#amount').bind('input', function()  { document.getElementById('#amount_error').innerHTML = "" });


    $('#private-sale-invoice-form').on('submit', function (e) {
        e.preventDefault();

        if ($("#invoice_type").val() == "")
        {
            $('#invoice_type_error').html('Required*');
            return;
        }
        if ($("#invoice_date").val() == "")
        {
            $('#invoice_date_error').html('Required*');
            return;
        }

        if ($("#vendor_detail").val() == "")
        {
            $('#vendor_detail_error').html('Required*');
            return;
        }
        if ($("#invoice_to").val() == "")
        {
            $('#invoice_to_error').html('Required*');
            return;
        }
        if ($("#delivery_to").val() == "")
        {
            $('#delivery_to_error').html('Required*');
            return;
        }

        if ($("#invoice_amount").val() == "")
        {
            $('#invoice_amount_error').html('Required*');
            return;
        }
        if ($("#gst").val() == "")
        {
            $('#gst_error').html('Required*');
            return;
        }
        if ($("#deposit_inc_gst").val() == "")
        {
            $('#deposit_inc_gst_error').html('Required*');
            return;
        }
        if ($("#total_amount_due").val() == "")
        {
            $('#total_amount_due_error').html('Required*');
            return;
        }


        //addLoading();

        $.ajax({
            url: "assets/ajax/private_sale_invoice.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {
                $("#privateSaleInvoiceModal").modal('hide');
            }
        });

    });
});