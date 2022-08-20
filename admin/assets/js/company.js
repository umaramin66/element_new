$(function ()
{

    $('#name').bind('input', function()  { document.getElementById('name_error').innerHTML = ""; });

    //$('#username').bind('input', function()  { document.getElementById('username_error').innerHTML = ""; });

    $('#trading_name').bind('input', function() { document.getElementById('trading_name_error').innerHTML = ""; });

    $('#abn').bind('input', function() { document.getElementById('abn_error').innerHTML = ""; });

    $('#office_address').bind('input', function() { document.getElementById('office_address_error').innerHTML = ""; });

    $('#acl_no').bind('input', function()  { document.getElementById('acl_no_error').innerHTML = ""; });

    $('#credit_rep_no').bind('input', function()  { document.getElementById('credit_rep_no_error').innerHTML = ""; });

    $('#contact_no').bind('input', function() { document.getElementById('contact_no_error').innerHTML = ""; });

    $('#number_of_directors').bind('input', function() { document.getElementById('number_of_directors_error').innerHTML = ""; });

    $('#contact_email').bind('input', function()  { document.getElementById('contact_email_error').innerHTML = ""; });

    $('#password').bind('input', function() { document.getElementById('password_error').innerHTML = ""; });

    //$('#logo').bind('input', function() { document.getElementById('logo_error').innerHTML = ""; });



    $('#add-company').on('submit', function (e) {
        e.preventDefault();


        var r = 0;
        if ($("#name").val() == "") { $('#first_name_error').html('Required*'); r = 1;  }

        //if ($("#username").val() == "") { $('#username_error').html('Required*'); r = 1;  }

        if ($("#trading_name").val() == "") { $('#application_name_error').html('Required*'); r = 1;   }

        if ($("#abn").val() == "") { $('#btn_error').html('Required*'); r = 1;   }

        if ($("#office_address").val() == "") { $('#office_address_error').html('Required*'); r = 1;  }

        if ($("#acl_no").val() == "") { $('#acl_no_error').html('Required*'); r = 1;   }

        if ($("#credit_rep_no").val() == ""){ $('#credit_rep_no_error').html('Required*'); r = 1;   }

        if ($("#contact_no").val() == ""){ $('#contact_no_error').html('Required*'); r = 1;   }

        if ($("#number_of_directors").val() == ""){ $('#number_of_directors_error').html('Required*'); r = 1;  }

         if ($("#contact_email").val() == ""){ $('#contact_email_error').html('Required*'); r = 1;   }

        if ($("#password").val() == ""){ $('#password_error').html('Required*'); r = 1;   }

        //if ($("#logo").val() == ""){ $('#logo_error').html('Required*'); r = 1;  }


        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/add_company.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'company.php';

            }
        });

    });
});