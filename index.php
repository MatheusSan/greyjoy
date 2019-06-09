<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="teste.js"></script>
<script src="lib/moment/moment.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="coleta.js"></script>
    <input type="text" id="msg">
    <button onclick='clicou()'>OK</button>
    <script>
        function clicou(){
            const input = document.getElementById('msg');
            let mensagem = input.value;
            let array = collectMsg(mensagem);
            $.ajax({type:"POST",
            url:"wjson.php",
            data:"msg="+array,
            success:function(data) {

            }
        });
        }
        
    </script>
</body>
</html>