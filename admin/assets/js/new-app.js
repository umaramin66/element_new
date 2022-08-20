$(function ()
{

    $('#new-app').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({
            url: "assets/ajax/new_app.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
               // alert('Link has been sent');
                swal({
                    title: "Link has been sent!",
                });
                //window.location.href = 'application-step2.php';

            }
        });

    });
});




