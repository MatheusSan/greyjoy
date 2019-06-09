<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <input type="text" id="name">
    <input type="text" id="surname">
    <input type="text" id="mobile">
    <input type="text" id="email">
    <script>
        var name = $("#name").val();
        var surname = $("#surname").val();
        var mobile = $("#mobile").val();
        var email = $("#email").val();
        $.ajax({type:"POST",
            url:"wjson.php",
            data:"name="+name+"&surname="+surname+"&mobile="+mobile+"&email="+email,
            success:function(data) {

            }
        });
    </script>
</body>
</html>