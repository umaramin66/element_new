$('#lender_invoice_client_name').bind('input', function()  { document.getElementById('#lender_invoice_client_name_error').innerHTML = ""; })

$('#lender_invoice_application_id').bind('input', function()  { document.getElementById('#lender_invoice_application_id_error').innerHTML = ""; })

$('#lender_invoice_broker_reference').bind('input', function()  { document.getElementById('#lender_invoice_broker_reference_error').innerHTML = ""; })

$('#settlement_date').bind('input', function()  { document.getElementById('#settlement_date_error').innerHTML = ""; })

$('#amount_financed').bind('input', function()  { document.getElementById('#amount_financed_error').innerHTML = ""; })

$('#total_brokerage').bind('input', function()  { document.getElementById('#total_brokerage_error').innerHTML = ""; })

$('#total_doc_fee').bind('input', function()  { document.getElementById('#total_doc_fee_error').innerHTML = ""; })

$('#total_origination_fee').bind('input', function()  { document.getElementById('#total_origination_fee_error').innerHTML = ""; })

$(function ()
{

    $('#lender-invoice-form').on('submit', function (e) {
        e.preventDefault();

        if ($("#lender_invoice_client_name").val() == "")
        {
            $('#lender_invoice_client_name_error').html('Required*');
            return;
        }
        if ($("#lender_invoice_application_id").val() == "")
        {
            $('#lender_invoice_application_id_error').html('Required*');
            return;
        }
        if ($("#lender_invoice_broker_reference").val() == "")
        {
            $('#lender_invoice_broker_reference_error').html('Required*');
            return;
        }

        if ($("#settlement_date").val() == "") {
            $('#settlement_date_error').html('Required*');
            return;
        }
        if ($("#amount_financed").val() == "") {
            $('#amount_financed_error').html('Required*');
            return;
        }
        if ($("#total_brokerage").val() == "") {
            $('#total_brokerage_error').html('Required*');
            return;
        }
        if ($("#total_doc_fee").val() == "") {
            $('#total_doc_fee_error').html('Required*');
            return;
        }
        if ($("#total_origination_fee").val() == "") {

            $('#total_origination_fee_error').html('Required*');
            return;
        }

        var broker_id = $("#broker_id").val();
        var lead_id   = $("#lead_id").val();


        //addLoading();

        $.ajax({
            url: "assets/ajax/lender_invoice.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                var lender_invoice_id = data;



                window.location.href = 'http://auzzietech.com/element_new/pdf/lender-invoice.php?lender_invoice_id='+lender_invoice_id+'&lead_id='+lead_id+'&broker_id='+broker_id;
                // $("")

                $("#lenderInvoiceModal").modal('hide');


            }
        });
    });
});