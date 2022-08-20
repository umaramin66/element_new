$(function ()
{

    $('#edit-bank').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({
            url: "assets/ajax/update_bank.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Updated Successfully');
                swal({
                    title: "Bank Has Been Updated Successfully!",
                });
                window.location.href = 'bank.php';

            }
        });

    });
});