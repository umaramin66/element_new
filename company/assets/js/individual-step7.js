$(function ()
{

    $('#add-client7').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({
            url: "assets/ajax/individual_step_7.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                var ss = $("#no_of_applicant").val();
                if(ss == 2)
                {
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    console.log("ahmad");
                    swal({
                        title: "Your Application Has Been Completed Successfully! You are now redirecting to Second Application",

                    });
                    window.location.href='application.php';
                }
                else {
                    //hideLoading();

                    if ($("#customer_id").val() == "") {
                        // Broker is filling up the form
                        // alert('');
                        swal({
                            title: "Your Application Has Been Completed Successfully! Redirecting Back to Dashboard",

                        });


                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        console.log("ahmad");
                        window.location.href = 'index.php';

                    } else {

                        window.location.href = 'complete-new-page.php';
                    }
                }

            }
        });

    });
});