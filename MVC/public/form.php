<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <div id="form">
       <label>Login/Email</label>
       <input type="text " name="user-email" id="user-email"></br>

       <input type="hidden" id="fxEmail" name="fxEmail" value="addEmail"></br>

       <button type="button" onclick="actEmail()">Enviar</button>
    </div>
    <span id="alertMsg"></span>
    <script>
        function actEmail(){
            let userEmail = $('#user-email').val();
            let fxEmail = $('#fxEmail').val();

            // Maneira de se passar em javaScript Puro
            // let fxEmail = document.getElementById(fxEmail).value();
            
            // AJAX
            $.ajax({
                url:"../private/controller/Email.controller.php",
                method: "POST",
                async: true,
                data:{
                    userEmail:userEmail,
                    fxEmail:fxEmail
                }
            })
            .done(function(result){
                if(result['status']){
                    $('#alertMsg').html(result.msg);
                }else{
                    $('#alertMsg').html(result.msg);
                }
            })
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>