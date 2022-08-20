$(function ()
{


    $('#email').bind('input', function() { document.getElementById('email_error').innerHTML = ""; });
    $('#subject').bind('input', function() { document.getElementById('subject_error').innerHTML = ""; });
    $('#message').bind('input', function() { document.getElementById('message_error').innerHTML = ""; });
    $('#broker_notes').bind('input', function() { document.getElementById('notes_error').innerHTML = ""; });



    $('#send-message').on('submit', function (e) {
        e.preventDefault();


        if ($("#email").val() == "") { $('#email_error').html('Required*'); return; }

        if ($("#subject").val() == "") { $('#subject_error').html('Required*'); return; }

        if ($("#message").val() == "") { $('#message_error').html('Required*'); return; }


        var url = $("#url").val();
        //addLoading();

        $.ajax({
            url: "assets/ajax/send_email.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                $("#myModal").modal('hide');
                swal({
                    title: "Email has been sent!",
                });
                window.location.href = url;

            }
        });

    });

    $('#broker-notes').on('submit', function (e) {
        e.preventDefault();


        if ($("#broker_notes").val() == "") { $('#notes_error').html('Required*'); return; }


            var url = $("#url").val();
        //addLoading();

        $.ajax({
            url: "assets/ajax/broker_notes.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                swal({
                    title: "Notes has been added!",
                });
                window.location.href = url;

            }
        });

    });

    $('.call_client').click(function(){
        var id = $(".call_client").attr("id");
        $.ajax({
            url: "assets/ajax/call_notes.php",
            type: 'POST',
            data: {lead_id : id},
            dataType: 'text',
            success: function (data) {

            }
        });
    });




});