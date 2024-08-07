<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Insumos</title>
    
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

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
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

        .button{
            width: 10%;
            height: 25%;
            margin-top: 10px;
            box-shadow: 10px:
        }

        .imgbutton{
            width: 10px;
        }
    </style>
    
</head>
<body>
<div class="container">
    <div class="logo">
                <img src="img/logo.png" alt="Logo" class="imglogo">
                <h4>STOCKMIX</h4>
            </div>
    <h2>Lista de Insumo</h2>
    <?php

    $conn = new mysqli("127.0.0.1","root","","stockmix_2");
    $query = 'SELECT ins_id as ID, ins_nomecurto as Nome, ins_desc as Descrição, und_sigla as Unidade
              FROM insumos INNER JOIN unidade_medida ON insumos.ins_und = unidade_medida.und_id';
    $result = mysqli_query($conn, $query);

    print '<table>';
    print '     <thead>';
    print '         <tr>';
    print '             <th></th>';
    print '             <th></th>';
    print '             <th>ID</th>';
    print '             <th>Nome</th>';
    print '             <th>Descrição</th>';
    print '             <th>Unidade</th>';
    print '             </tr>';
    print '     </thead>';
    print '     <tbody>';

    if($result){
        while ($row = mysqli_fetch_assoc($result)){
        
        $id = $row['ID'];
        $nome = $row['Nome'];
        $descricao = $row['Descrição'];
        $und_medida = $row['Unidade'];

            print '         <tr>';
            print '             <td aling="center">';
            print "                 <a href='insumo_edit.php?id={$id}'>";
            print '                 <img src="img/edit.png" style="width: 15px">';
            print '             </td>';
            print '             <td aling="center">';
            print "                 <a href='insumo_delete.php?id={$id}'>";
            print '                 <img src="img/delete.png" style="width: 15px">';
            print '             </td>';
            print "             <td>{$id}</td>";
            print "             <td>{$nome}</td>";
            print "             <td>{$descricao}</td>";
            print "             <td>{$und_medida}</td>";
            print '         </tr>';

        }
    }

    print '    </tbody>';
    print '</table>';

    mysqli_close($conn);
    ?>

    <button onclick="window.location='insumo_insert.php'" class="button">
        <img src="img/insert.png" class="imgbutton" > Inserir
    </button>
</div>
</body>
</html>