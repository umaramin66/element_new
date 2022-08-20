$(function ()
{
    $('#forget').on('submit', function (e) {
        e.preventDefault();




        if ($("#email").val() == "")
        {
            $('#email_error').html('Required*');
            return;
        }

        $.ajax({
            url: "assets/ajax/forget_password.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                if(data == "false") {
                    swal({
                        title: "Email not found",
                    });
                }
                else {
                   window.location.href= 'confirm-password.php?email='+data;
                }

            }
        });
    });

    $('#new-password').on('submit', function (e) {
        e.preventDefault();

        if ($("#email").val() == "") {
            $('#email_error').html('Required*');
            return;
        }
        if ($("#password").val() == "") {
            $('#password_error').html('Required*');
            return;
        }
        if ($("#password").val() != $("#confirm_password").val()) {
            $('#password_error').html('Passwords do not match*');
            return;
        }


        $.ajax({
            url: "assets/ajax/new_password.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            success: function (data) {

                if (data == "false") {
                    swal({
                        title: "Email not found",
                    });
                } else {
                    window.location.href = 'login.php';
                    //hideLoading();
                    alert(' Password Changed Has Been  Successfully');
                }

            }
        });
    });
});
