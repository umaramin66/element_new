$(function ()
{

    $('#docs1').on('submit', function (e) {
    e.preventDefault();



    //addLoading();

    $.ajax({
        url: "assets/ajax/docs.php",
        type: 'POST',
        data: new FormData(this),
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success: function (data) {

            swal({
                title: "Documet Successfully Added",

            });
            console.log("ahmad");
            console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad");
            console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad");
            console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad");
           // window.location.reload();

        }
    });

});
});