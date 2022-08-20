$(function ()

{
     $('#groceries').bind('input', function()  { document.getElementById('groceries_error').innerHTML = ""; });

    $('#utility_bills').bind('input', function() { document.getElementById('utility_bills_error').innerHTML = ""; });

     $('#insurance_bills').bind('input', function() { document.getElementById('insurance_bills_error').innerHTML = ""; });

    $('#mobile_phone').bind('input', function() { document.getElementById('mobile_phone_error').innerHTML = ""; });

    $('#fuel_car_expenses').bind('input', function() { document.getElementById('fuel_car_expenses_error').innerHTML = ""; });

    $('#rent').bind('input', function()  { document.getElementById('rent_error').innerHTML = ""; });

    $('#mortagege_repayment').bind('input', function()  { document.getElementById('mortagege_repayment_error').innerHTML = ""; });


    $('#add-step5').on('submit', function (e) {
        e.preventDefault();

        var r = 0;

        if ($("#groceries").val() == "") { $('#groceries_error').html('Required*'); r = 1;   }

        if ($("#utility_bills").val() == "") { $('#utility_bills_error').html('Required*'); r = 1;  }

         if ($("#other_regular_expenses").val() == "") { $('#other_regular_expenses_error').html('Required*'); r = 1;   }

        if ($("#mobile_phone").val() == "") { $('#mobile_phone_error').html('Required*'); r = 1;  }

        if ($("#fuel_car_expenses").val() == "") { $('#fuel_car_expenses_error').html('Required*');  r = 1;  }

        //if ($("#rent").val() == "") { $('#rent_error').html('Required*'); r = 1;  }

        //if ($("#mortagege_repayment").val() == "") { $('#mortagege_repayment_error').html('Required*'); r = 1;   }


        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/individual_step_5.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {
                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'application-step6.php';
            }
        });

    });
});