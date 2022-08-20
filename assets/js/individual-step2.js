$(function ()
{

    $('#first_name').bind('input', function()  { document.getElementById('first_name_error').innerHTML = ""; });

    $('#application_name').bind('input', function()  { document.getElementById('application_name_error').innerHTML = ""; });

    $('#last_name').bind('input', function() { document.getElementById('last_name_error').innerHTML = ""; });

    $('#email').bind('input', function() { document.getElementById('email_error').innerHTML = ""; });



    $('#contact_no').bind('input', function() { document.getElementById('contact_no_error').innerHTML = ""; });

    $('#gender').bind('input', function()  { document.getElementById('gender_error').innerHTML = ""; });

    $('#birth_date').bind('input', function()  { document.getElementById('birth_date_error').innerHTML = ""; });

    $('#driver_license_no').bind('input', function() { document.getElementById('driver_license_no_error').innerHTML = ""; });

    $('#driver_license_expiry_date').bind('input', function() { document.getElementById('driver_license_expiry_date_error').innerHTML = ""; });



    $('#add-step2').on('submit', function (e) {
        e.preventDefault();


        var r = 0;

        if ($("#first_name").val() == "") { $('#first_name_error').html('Required*'); r = 1;  }

        if ($("#application_name").val() == "") { $('#application_name_error').html('Required*'); r = 1;   }

        if ($("#last_name").val() == "") { $('#last_name_error').html('Required*'); r = 1;   }

        if ($("#email").val() == "") { $('#email_error').html('Required*'); r = 1;  }



        if($("input:radio[name='gender']").is(":checked")) { }  else { $('#gender_error').html('Required*'); r = 1;   }

        if ($("#birth_date").val() == "") { $('#birth_date_error').html('Required*'); r = 1;   }

        if ($("#driver_license_no").val() == ""){ $('#driver_license_no_error').html('Required*'); r = 1;   }

        if ($("#driver_license_expiry_date").val() == ""){ $('#driver_license_expiry_date_error').html('Required*'); r = 1;   }

        if ($("#contact_no").val() == ""){ $('#contact_no_error').html('Required*'); r = 1;  }


        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/individual_step_2.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'application-step3.php';

            }
        });

    });
});