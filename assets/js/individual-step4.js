$(function ()
{
      $('#income_net_after_tax').bind('input', function() { document.getElementById('income_net_after_tax_error').innerHTML = ""; });

    $('#add-step4').on('submit', function (e) {
        e.preventDefault();
        
         if ($("#income_net_after_tax").val() == "") { $('#income_net_after_tax_error').html('Required*'); return; }

        //addLoading();

        $.ajax({
            url: "assets/ajax/individual_step_4.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'application-step5.php';

            }
        });

    });
});