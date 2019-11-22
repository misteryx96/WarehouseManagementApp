<?php

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Mladen Karic');
$pdf->SetTitle('Repromaterijali');
$pdf->SetSubject('Repromaterijali');

$pdf->SetTopMargin(50);

$pdf->setFooterMargin(25);
$pdf->SetAutoPageBreak(true, 25);

$textfont = 'freesans';
$pdf->SetFont($textfont,'B', 20);

// add a page (required with recent versions of tcpdf)
$pdf->AddPage();
$pdf->SetXY(0, 40);

$pdf->Cell(0,0, "Kartica Artikla - Usluga", 0,1,'C');

$pdf->SetY(60);
$pdf->SetFont($textfont,'R', 10);


$html = '<br><br><br><br><table border="1" cellpadding="2" cellspacing="2" align="center"> <tr><th>Ime artikla:</th>
		<th>Kod artikla:</th><th>Status artikla:</th><th>Za distributore:</th><th>Pid:</th>
		<th>HTS:</th><th>Tax:</th><th>Eccn:</th><th>Izlazi</th><th>Projekat:</th>
	</tr>';


foreach($data as $d){

	$distributors = $d['ServiceProduct']['is_for_distributors'] ? 'Da' : 'Ne';
	$html .= "
					<tr>
						<td>{$d['Item']['name']}</td>
						<td>{$d['Item']['code']}</td>
						<td>{$d['ServiceProduct']['status']}</td>
						<td>{$distributors}</td>
						<td>{$d['ServiceProduct']['pid']}</td>
						<td>{$d['ServiceProduct']['hts_number']}</td>
						<td>{$d['ServiceProduct']['tax_group']}</td>
						<td>{$d['ServiceProduct']['eccn']}</td>
						<td>{$d['ServiceProduct']['release_date']}</td>
						<td>{$d['ServiceProduct']['project']}</td>
					</tr><br>
				 ";
}

$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

//Generate pdf file
$filename .= '.pdf';
$pdf->Output('usluga.pdf', 'D');

?>
