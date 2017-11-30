<div class="row" style="font-size:20px;">
    Alunos Cadastrados no Sistema
</div>
<div class="row" style="margin-top:20px;">
    <?php

$sql = mysql_query("SELECT * FROM empresa ");
while($linha = mysql_fetch_array($sql)){

?>
        <table class="table">
            <thead class="thead-inverse" style="background: rgb(21,36,58);color:white;">
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th style="text-align:center;">Cpf/Cnpj</th>
                    <th style="text-align:center;">Projeto</th>
                    <th>Habilidades</th>
                    <th>email</th>
                    <th>Deletar Usuário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><img src="../paginas/fotos/<?php echo $linha['foto']; ?>" alt="" width="50"></th>
                    <td>
                        <?= $linha['nome'] ?>
                    </td>
                    <td>
                        <?= $linha['cpfs'] ?>
                    </td>
                    <td>
                        <?= $linha['descricao'] ?>
                    </td>
                    <td>
                        <?= $linha['habilidades'] ?>
                    </td>
                    <td>
                        <?= $linha['email'] ?>
                    </td>
                    <td style="text-align:center;">
                <div class="botao_deletar">    
                     <form action="deletar.php" method="post" enctype="multipart/form-data" name="ajax_form">
                      <input type="image" src="../assets/img/x-clipart-3.png" width="30">
                      <input type="hidden" value="<?= $linha['id'] ?>" name="id">
                      </form>
                </div>      
                    </td>
                </tr>
            </tbody>
        </table>
        <?php }?>
</div>


	