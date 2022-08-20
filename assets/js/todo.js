$(function ()
{

    $('#message1').bind('input', function()  { document.getElementById('message_error').innerHTML = ""; });
    // $('#gender').bind('input', function()  { document.getElementById('gender_error').innerHTML = ""; });

    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        var r = 0;

        if ($("#message1").val() == "") { $('#message_error').html('Required*'); r = 1;  }

        // if($("input:radio[name='gender']").is(":checked")) { }  else { $('#gender_error').html('Required*'); r = 1;   }

        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/todo.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                // alert('Lead Has Been Added Successfully');
               // window.location.href = 'index.php';
                $("#myModal").modal('hide');
            }
        });

    });
});

