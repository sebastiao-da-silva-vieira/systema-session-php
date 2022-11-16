<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            margin-top: 20%;
            margin-left: 45%;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            
        }
        a{
            text-decoration: none;
            border: dodgerblue solid 3px;
            color: white;
            padding: 10px;
            border-radius: 10px;  
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>sistema de login</h1>
    <div class="box">
        <a href="login.php">login</a>
        <a href="formulario.php">cadastre-se</a>
    </div>
</body>
</html>