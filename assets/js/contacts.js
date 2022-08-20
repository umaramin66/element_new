$(function ()
{

$('#add-contact').on('submit', function (e) {
    e.preventDefault();

    //addLoading();

    $.ajax({
        
        url: "assets/ajax/insert_new_contact.php",
        type: 'POST',
        data: new FormData(this),
        
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success: function (data) {

            //hideLoading();
            alert('contact Has Been Added Successfully');
            window.location.href = 'contacts.php';

        }
    });

    });
});