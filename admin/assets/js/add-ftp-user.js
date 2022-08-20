$(function ()
{

    $('#email').bind('input', function()  { document.getElementById('email_error').innerHTML = ""; });


    $('#password').bind('input', function() { document.getElementById('password_error').innerHTML = ""; });

    //$('#logo').bind('input', function() { document.getElementById('logo_error').innerHTML = ""; });



    $('#add-ftp-user').on('submit', function (e) {
        e.preventDefault();


        var r = 0;
        if ($("#email").val() == "") { $('#emaill_error').html('Required*'); r = 1;  }



        if ($("#password").val() == ""){ $('#password_error').html('Required*'); r = 1;   }




        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/add-ftp-user.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'add-ftp-user.php';

            }
        });

    });
});