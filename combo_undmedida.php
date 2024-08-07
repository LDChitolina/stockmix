<?php
class Connection{
    public function lista_undmedida($id=null){
        $saida = "";
        $conn = new mysqli("127.0.0.1","root","","stockmix_2");
        $query = 'SELECT und_id, und_sigla FROM unidade_medida';
        $result = mysqli_query($conn, $query);
        if($result){
            while ($row = mysqli_fetch_assoc($result)){
                $check = ($row['und_id'] == $id) ? 'selected = 1' : '';
                $saida .= "<option $check value={$row['und_id']}>{$row['und_sigla']}</option>\n";
                    
            }
            mysqli_close($conn);
            echo $saida;
            return true;
        }
}
}
?>