<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insumos</title>
</head>
<body>
<?php

    $dados = $_POST;
    $conn = new mysqli("127.0.0.1","root","","stockmix_2");
    $sql = "INSERT INTO insumos
	        (ins_nomecurto, ins_desc, ins_und)
            VALUES
            ('{$dados['nomecurto']}',
            '{$dados['descricao']}',
            '{$dados['und_sigla']}')";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        echo 'Registro Inserido com Sucesso!';
    }else{
        print mysqli_error($conn);
    }
    mysqli_close($conn);

?>
    </br>
    <button onclick="window.location='lista_insumos.php'">
        <img src="img/lista.png" style="width: 17px"> Ver lista de insumos
    </button>

</body>
</html>