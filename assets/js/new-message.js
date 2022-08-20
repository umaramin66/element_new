$(function ()
{
    $('#email').bind('input', function()  { document.getElementById('email_error').innerHTML = ""; });

    $('#subject').bind('input', function()  { document.getElementById('subject_error').innerHTML = ""; });

    $('#message').bind('input', function()  { document.getElementById('message_error').innerHTML = ""; });

    $('#new-message').on('submit', function (e) {
        e.preventDefault();


        var r = 0;

        if ($("#email").val() == "") { $('#email_error').html('Required*'); r = 1;  }

        if ($("#subject").val() == "") { $('#subject_error').html('Required*'); r = 1;   }

        // if ($("#message").val() == "") { $('#message_error').html('Required*'); r = 1;   }


        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/new_message.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                swal({
                    title: "Email has been sent",

                });
                window.location.href = 'new-message.php';

            }
        });

    });
});