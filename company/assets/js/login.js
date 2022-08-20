$('#signin').on('click', function () {

    var email = $("#email").val();
    var password = $("#password").val();

    $("#password-text").html("");
    $("#email-text").html("");

    if(email == "")
    {
        $("#email-text").html("Email Required");
        $("#password-text").html("");
        return;
    }

    if(password == "")
    {
        $("#password-text").html("Password Required");
        $("#email-text").html("");
        return;
    }

    $.ajax({
        url:"assets/ajax/login.php",
        method:"post",
        data:{email:email,password:password},
        dataType:"json",
        success:function(data)
        {
            if(data == "false")
            {
                //alert("credentials not found");
                swal({
                    title: "Credentials not found",
                });
            }
            else
            {
               // alert(data);
                window.location.href="index.php";
            }
        }
    });

});