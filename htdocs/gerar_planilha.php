<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
	session_start();
	ob_start();
	include_once('chart.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'Planilha.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="2">';
		$html .= '<tr>';
		$html .= '<td colspan="4">Planilha</tr>';

		
		
		$html .= '<tr>';
		$html .= '<td><b>statusSensor</b></td>';
		$html .= '<td><b>id</b></td>';
		$html .= '<td><b>datahora</b></td>';
	
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM balanca_iot";
		$resultado_msg_contatos = mysqli_query($conn, $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["statusSensor"].'</td>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["datahora"].'</td>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 2222 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>