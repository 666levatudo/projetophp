<?php
    include "conect.php";
    $id = $_POST['id'];

    $del = mysql_query("DELETE FROM empresa WHERE  id = '$id' ");
    echo "<script>alert('Empresa Deletada com Susseso!');</script>";
    echo "<script>window.location = 'painel_adm.php?link=2';</script>";
?>