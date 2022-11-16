
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }
        div{
            background-color: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 5%;
            border-radius: 15px;
        }
        h1{
            color: white;
        }
        input{
            outline: none;
            padding: 15px;
        }
        .inputsubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
    <a href="home.php">voltar</a>
    <div>
        <h1>login</h1>
            <form action="./testelogin.php" method="POST">
            <input type="text" placeholder="email" name="email">
            <br><br>
            <input type="password" placeholder="senha" name="senha" >
            <br><br>
            <input type="submit" value="enviar" name="submit" class="inputsubmit">
        </form>
    </div>
</body>
</html>