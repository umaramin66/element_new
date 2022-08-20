$(function ()
{
     $('#job_title').bind('input', function()  { document.getElementById('job_title_error').innerHTML = ""; });

    $('#company_business_name').bind('input', function() { document.getElementById('company_business_name_error').innerHTML = ""; });


    $('#add-step3').on('submit', function (e) {
        e.preventDefault();

        var r = 0;
         if ($("#job_title").val() == "") { $('#job_title_error').html('Required*'); r = 1;  }

        if ($("#company_business_name").val() == "") { $('#company_business_name_error').html('Required*'); r = 1;  }

        if(r == 1)
        {
            return;
        }
        //addLoading();

        $.ajax({
            url: "assets/ajax/individual_step_3.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Added Successfully');
                window.location.href = 'application-step4.php';

            }
        });

    });
});