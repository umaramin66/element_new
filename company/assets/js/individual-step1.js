$(function ()
{

    $('#add-step1').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({
            url: "assets/ajax/individual_step_1.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'application-step8.php';

            }
        });

    });
});