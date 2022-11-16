<?php
if(isset($_POST['submit'])){
//    print_r($_POST["nome"]);
//    print_r("<br>");
//    print_r($_POST["email"]);
//    print_r("<br>");
//    print_r($_POST["telefone"]);
//    print_r("<br>");
//    print_r($_POST["sexo"]);
//    print_r("<br>");
//    print_r($_POST["data_nascimento"]);
//    print_r("<br>");
//    print_r($_POST["cidade"]);
//    print_r("<br>");
//    print_r($_POST["estado"]);
//    print_r("<br>");
//   print_r($_POST["endereco"]);

include_once("./config.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];
$sexo =  $_POST["sexo"];
$data_nasc = $_POST["data_nasc"];
$cidade =  $_POST["cidade"];
$estado = $_POST["estado"];
$endereco = $_POST["endereco"];

$result = mysqli_query($conexao, "INSERT INTO usuario_sistema(nome,email,telefone,senha,sexo,data_nasc,cidade,estado,endereco) 
VALUES('$nome','$email','$telefone','$senha','$sexo','$data_nasc','$cidade','$estado','$endereco')");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style_formulario.css">
</head>
<body>
    <a href="home.php">voltar</a>
    <div class="box">
        <form action="./formulario.php" method="POST">
            <fieldset>
                <legend>formulario de cliente</legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email"  class="labelinput">email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"  class="labelinput">telefone</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha"  class="labelinput">senha</label>
                </div>
                <br><br>
                <p>sexo</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">feminino</label>

                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">masculino</label>

                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">outro</label>
                <br><br>
                <div class="inputbox">
                    <label for="data_nasc"  >data de nascimento</label>
                    <input type="date" name="data_nasc" id="data_nasc"  required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade"  class="labelinput">cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado"  class="labelinput">estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco"  class="labelinput">endereco</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>