<?php
	include "conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Encontrar Aluno</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container" style="height:500px;">
            <div class="row" style="font-size:20px;">
    Alunos Cadastrados no Sistema
</div>
<div class="row" style="margin-top:20px;">
    <?php

$sql = mysql_query("SELECT * FROM aluno ");
while($linha = mysql_fetch_array($sql)){

?>
        <table class="table">
            <thead class="thead-inverse" style="background: rgb(21,36,58);color:white;text-align:center;">
                <tr>
                    <th style="border-right:1px solid #edecec;">Foto</th>
                    <th style="border-right:1px solid #edecec;">Nome</th>
                    <th style="border-right:1px solid #edecec;">Matrícula</th>
                    <th style="border-right:1px solid #edecec;">Curso</th>
                    <th style="border-right:1px solid #edecec;">Período</th>
                    <th style="border-right:1px solid #edecec;">Especialidades</th>
					<th>Ver Perfil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="border:1px solid #edecec;">
					<img src="http://prodatta.inf.br/projeto_integrador/usuarios/foto/<?php echo $linha['foto']; ?>" alt="" width="50">
					</th>
                    <td style="border:1px solid #edecec;">
                        <?= $linha['nome'] ?>
                    </td>
                    <td style="border:1px solid #edecec;">
                        <?= $linha['matricula'] ?>
                    </td>
                    <td style="border:1px solid #edecec;">
                        <?= $linha['curso'] ?>
                    </td>
                    <td style="border:1px solid #edecec;">
                        <?= $linha['periodo'] ?>
                    </td>
                    <td style="border:1px solid #edecec;">
                        <?= $linha['habilidades'] ?>
                    </td>
					<td style="border:1px solid #edecec;">
						<input type="submit" name="" value="Ver" style="background: royalblue;border:none;color:white;margin-left: 25%;margin-top:25%;">
					</td>
                </tr>
            </tbody>
        </table>
        <?php }?>
</div>
        </div>
    </div>
</body>
</html>