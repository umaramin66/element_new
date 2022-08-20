$(function ()
{

$('#delete_id').on('click', function (e) {
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
        
        url: "assets/ajax/delete_data_contact.php",
        type: 'GET',

      /*  data: {
            name: name,
            company_name: company_name,
            contactno: contactno,
            association: association,
            notes:notes,
            id:	id
        },*/
        data: new FormData(this),
        
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success: function (data) {

            //hideLoading();
            alert('contact Has Been deleted Successfully');
            window.location.href = 'contacts.php';

        }
    });

    });
});