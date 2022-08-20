$(function ()
{

    $('#add-client8').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({
            url: "assets/ajax/individual_step_8.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {
                //hideLoading();
               // alert('Your Application Has Been Completed');
                window.location.href = 'application-step2.php';
            }
        });

    });
});

