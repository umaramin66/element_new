$(function ()
{

$('#add-client').on('submit', function (e) {
    e.preventDefault();

    //addLoading();

    $.ajax({
        url: "assets/ajax/insert_new_company.php",
        type: 'POST',
        data: new FormData(this),
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success: function (data) {

            //hideLoading();
           // alert('Lead Has Been Added Successfully');
            swal({
                title: "Company Has Been Added Successfully!",
            });
            window.location.href = 'edit-company.php';

        }
    });

    });




    $('#edit-company').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({
            url: "assets/ajax/update_company.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Updated Successfully');
                swal({
                    title: "Company Has Been Updated Successfully!",
                });
                window.location.href = 'edit-company.php';

            }
        });

    });
});