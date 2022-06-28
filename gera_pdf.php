<?php 

	// inicializo uma área de buffer    
	ob_start();

	// pagina.php vai agora gerar um html dentro de um buffer
	require 'read_logs.php';

	// pego o html o que está armazenado no buffer, armazeno na variável html e encerro o buffer
	$html = ob_get_clean();

	// carrego o dompdf e referencio ele
	require_once 'dompdf/autoload.inc.php';
	use Dompdf\Dompdf;

	// instancio o Dompdf
	$dompdf = new Dompdf();
	
	// carrega a página html no dompdf
	$dompdf->loadHtml($html);

	// seto as opções do pdf
	$dompdf->setPaper('A4', 'landscape');

	// renderizo o HTML como PDF
	$dompdf->render();

	// executo a saída do PDF no próprio browser
	$dompdf->stream();

 ?>
