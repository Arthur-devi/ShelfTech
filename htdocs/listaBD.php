<?php
include_once "chart.php";

$result_usuario = "SELECT * FROM balanca_iot ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>statusSensor</th>
				<th>datahora</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<th><?php echo $row_usuario['id']; ?></th>
					<td><?php echo $row_usuario['statusSensor']; ?></td>
					<td><?php echo $row_usuario['datahora']; ?></td>
				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nada encontrado!</div>";
}
