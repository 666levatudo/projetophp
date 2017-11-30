<div class="row" style="font-size:20px;">
    Alunos Cadastrados no Sistema
</div>
<div class="row" style="margin-top:20px;">
    <?php

$sql = mysql_query("SELECT * FROM aluno ");
while($linha = mysql_fetch_array($sql)){

?>
        <table class="table">
            <thead class="thead-inverse" style="background: rgb(21,36,58);color:white;">
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>Período</th>
                    <th>Participa de Outros Períodos?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><img src="../usuarios/foto/<?php echo $linha['foto']; ?>" alt="" width="50"></th>
                    <td>
                        <?= $linha['nome'] ?>
                    </td>
                    <td>
                        <?= $linha['matricula'] ?>
                    </td>
                    <td>
                        <?= $linha['curso'] ?>
                    </td>
                    <td>
                        <?= $linha['periodo'] ?>
                    </td>
                    <td>
                        <?= $linha['desbloco'] ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php }?>
</div>