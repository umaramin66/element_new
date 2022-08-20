$(function ()
{

$('#edit-contact').on('submit', function (e) {
    e.preventDefault();

    //addLoading();

/* use for debugging
        var name = $('#client_name').val();
		var company_name = $('#company_name').val();
		var contactno = $('#contact_no').val();
        var association = $('#association').val();
        var notes = $('#notes').val();
        var id = $('#edit_id').val();

       alert(name+" "+company_name+" "+contactno+" "+association+" "+notes+" "+id)
        */

    $.ajax({
        
        url: "assets/ajax/edit_data_contact.php",
        type: 'POST',
        data: new FormData(this),
        
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success: function (data) {

            //hideLoading();
            swal({
                title: "Contact Has Been Updated Successfully!",
            });
            //alert('Contact Has Been Updated Successfully');
            window.location.href = 'contacts.php';

        }
    });

    });
});