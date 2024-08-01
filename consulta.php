<?php
    include "conect.php";
    //consulta!!!
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"]. " " . $registro["senha"]. 
            " - Email: " . $registro["email"]. "<br>";
        }
    }else{
        echo "nenhum registro encontrado.";
    }
    //consulta especifica
    echo"<BR>Nomes que começam com 's'<br>";
    $sql = "SELECT id, nome, senha, email FROM usuario where nome like 's%'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email:". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }

    echo"<BR>ordenar os registros por email<br>";
    $sql = "SELECT id, nome, senha, email FROM usuario order by email";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email:". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
?>