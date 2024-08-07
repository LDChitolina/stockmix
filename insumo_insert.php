<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insumos</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        input[readonly="1"] {
        background:#e0e0e0;
        border:1px solid #b0b0b0;
        }
        form {
        display: table;
        border: 1px solid #888;
        width: 80%;
        padding: 10px;
        }
        form > label, form > input, form > select {
        float:left;
        margin-top: 5px;
        padding-top:4px;
        padding-bottom:4px;
        }
        form > label {
        clear:both;
        width:25%;
        font-family: 'Open Sans';
        font-weight: bold;
        }
        form > input[type="submit"] {
        margin-left: 25%;
        clear:both;
        }
        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 50px;
            height: 30px;
        }

        .logo h2 {
            margin-left: 10px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<div class="container">
<div class="logo">
                <img src="img/logo.png" alt="Logo" class="imglogo">
                <h4>STOCKMIX</h4>
            </div>
    <h2>Inserir de Insumo</h2>
    <form method="POST" action="insumo_save_insert.php">
        <label>Código</label>
        <input type="text" name="id" id="iins_id" readonly="1" style="width=10%">
        <br>
        <label>Nome curto</label>
        <input type="text" name="nomecurto" id="iins_nomecurto" style="width=50%">
        <br>
        <label>Descrição</label>
        <input type="text" name="descricao" id="iins_desc" style="width=60%">
        <br>
        <label>Unidade de medida</label>
        <select name="und_sigla" style="width:10%">
            <option>
            <?php
            require_once 'combo_undmedida.php';
            $conexao = new Connection;
            $conexao->lista_undmedida();
            
            ?>
            </option>
        </select>
        <input type="submit">
    </form>
    </div>
</body>
</html>