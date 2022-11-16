<?php
    session_start();
    include_once('./config.php');
    print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        header('Location: login.php');
        unset($_SESSION['email']); //destruindo as variaveis se nao forem verdadeiras 
        unset($_SESSION['senha']);
    }
    $logado = $_SESSION['email'];

    $mysql = "SELECT * FROM usuario_sistema ORDER BY id  DESC";

    $result = $conexao->query($mysql);
    print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <style>
         body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            text-align: center;
            color: white;
        }
        .table-bg{
            background: rgba(0, 0, 0, 0.5);
            border-radius: 15px 15px 0 0;
        }
    </style>
</head>
<body>
    <a href="sair.php">sair</a>
    <h1>acessou o sistema</h1>
<!--
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">email</th>
                    <th scope="col">telefone</th>
                    <th scope="col">senha</th>
                    <th scope="col">sexo</th>
                    <th scope="col">data_nasc</th>
                    <th scope="col">cidade</th>
                    <th scope="col">estado</th>
                    <th scope="col">endereco</th>
                    <th>acoes</th>
                
                </tr>
            </thead>
            <tbody>
            //<?php
            //    while($User_data = mysqli_fetch_assoc($result)){
            //        echo "<tr>";
            //        echo "<td>".$User_data['id']."</td>";
            //        echo "<td>".$User_data['nome']."</td>";
            //        echo "<td>".$User_data['email']."</td>";
            //        echo "<td>".$User_data['telefone']."</td>";
            //        echo "<td>".$User_data['senha']."</td>";
            //        echo "<td>".$User_data['sexo']."</td>";
            //        echo "<td>".$User_data['data_nasc']."</td>";
            //        echo "<td>".$User_data['cidade']."</td>";
            //        echo "<td>".$User_data['estado']."</td>";
            //        echo "<td>".$User_data['endereco']."</td>";
            //        echo "<td>"."<a class='btn btn-primary' href='edit.php?id-$User_data[id]'>editar</a>"."</td>";
            //        echo "<tr>";
            //    }
            
            
            ?>
            </tbody>
        </table>
    </div> -->
</body>
</html>
