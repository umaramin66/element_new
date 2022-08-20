$(function ()
{

    $('#add-referrer').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({

            url: "assets/ajax/insert_new_referrer.php",
            type: 'POST',
            data: new FormData(this),

            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                alert('Referrer Has Been Added Successfully');
                window.location.href = 'referrer.php';

            }
        });

    });
});