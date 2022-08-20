$(function ()
{

    $('#name').bind('input', function()  { document.getElementById('name_error').innerHTML = ""; });

    $('#address').bind('input', function()  { document.getElementById('address_error').innerHTML = ""; });





    //$('#logo').bind('input', function() { document.getElementById('logo_error').innerHTML = ""; });



    $('#add-bank').on('submit', function (e) {
        e.preventDefault();


        var r = 0;
        if ($("#name").val() == "") { $('#name_error').html('Required*'); r = 1;  }

        if ($("#address").val() == "") { $('#address_error').html('Required*'); r = 1;  }


        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/add_bank.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'bank.php';

            }
        });

    });
});