$(function ()
{

$('#add-client').on('submit', function (e) {
    e.preventDefault();

    //addLoading();
    $('#b_n').prop('disabled', true);
    $(this).submit(function() {
        return false;
    });
    $.ajax({
        url: "assets/ajax/insert_new_lead.php",
        type: 'POST',
        data: new FormData(this),
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success: function (data) {

            //hideLoading();
           // alert('Lead Has Been Added Successfully');
            swal({
                title: "Lead Has Been Added Successfully!",
            });
            window.location.href = 'leads.php';

        }
    });

    });




    $('#edit-lead').on('submit', function (e) {
        e.preventDefault();

        //addLoading();

        $.ajax({
            url: "assets/ajax/update_lead.php",
            type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                //alert('Lead Has Been Updated Successfully');
                swal({
                    title: "Lead Has Been Updated Successfully!",
                });
                window.location.href = 'leads.php';

            }
        });

    });

    $("#search-row").hide();

    $('#search-leadss').keyup(function(event)
    {
        var txt1 = $(this).val();
        if(txt1 == "")
        {
            $("#main-row").show();
            $("#search-row").hide();
        }


        if(event.keyCode == 13){
            var txt = $(this).val();
            if(txt != '')
            {
                //addLoading();
                $.ajax({
                    url:"assets/ajax/lead_search.php",
                    method:"post",
                    data:{query:$(this).val()},
                    dataType:"text",
                    success:function(data)
                    {

                        $("#dd").html(data);
                        $("#main-row").hide();
                        $("#search-row").show();
                        // hideLoading();
                    }
                });
            }

        }
    });


});