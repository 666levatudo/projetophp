<style>
td{
	border:1px solid #edecec;
}
th{
	border:1px solid #edecec;
}
</style>
<div class="container" style="height:500px;">
	<div class="row" style="font-size:20px;">
		Projetos Publicados Recentemente 
	</div>
	<div class="row" style="margin-top:20px;">
		<?php
		include "conect.php";
	$sql = mysql_query("SELECT * FROM empresa ");
	while($linha = mysql_fetch_array($sql)){

	?>
			<table class="table">
				<thead class="thead-inverse" style="background: rgb(21,36,58);color:white;">
					<tr>
						<th>Foto</th>
						<th>Nome</th>
						<th style="text-align:center;">Projeto</th>
						<th>email</th>
						<th>Se Candidatar Ao Projeto</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>
						<img src="paginas/fotos/<?php echo $linha['foto']; ?>" alt="" width="50">
						</th>
						<td>
							<?= $linha['nome'] ?>
						</td>
				   
						<td>
							<?= $linha['descricao'] ?>
						</td>
						<td>
							<?= $linha['email'] ?>
						</td>
						<td style="text-align:center;">
							<input type="submit" name="" value="Candidatar" style="background:royalblue;border:none;width:150px;color:white;">
						</td>
					</tr>
				</tbody>
			</table>
			<?php }?>
	</div>
</div>

	