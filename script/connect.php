<?php
    $banco = new PDO('sqlite:db_formulario.db');

    $sql =  "SELECT name 
             FROM sqlite_master WHERE type='table'";

            
    $stmt = $banco->query($sql);

    $tables = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($tables as $table){
        echo $table['name']. "<br>";
    }

?>