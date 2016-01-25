<?php
    include("../../koneksi/koneksi.php");
    
    #ambil data di tabel dan masukkan ke array
    $query = "SELECT monthname(tgl_pesanan)as tanggal ,count(total_harga) as total FROM pesanan WHERE Status='Bayar' AND year(tgl_pesanan)=year(now()) GROUP by month(tgl_pesanan)";
    $sql = mysql_query ($query);
    $data = array();
    while ($row = mysql_fetch_assoc($sql)) {
    array_push($data, $row);
    }
	
	
	#ambil data di tabel dan masukkan ke array
    $query2 = "SELECT count(total_harga) as total FROM pesanan WHERE Status='Bayar' AND year(tgl_pesanan)=year(now())";
    $sql2 = mysql_query ($query2);
	$total=0;
    while ($row = mysql_fetch_assoc($sql2)) {
		$total=$row['total'];
    }
	
    #setting judul laporan dan header tabel
    $judul = "LAPORAN PENDAPATAN TAHUNAN";
	$tulis_total="Total Pendapatan : Rp.".$total;
	
    $header = array(
	array("label"=>"Bulan", "length"=>40, "align"=>"C"),
	array("label"=>"Total Pendapatan", "length"=>40, "align"=>"C")
	);
     
    #sertakan library FPDF dan bentuk objek
    require_once ("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
     
    #tampilkan judul laporan
    $pdf->SetFont('Arial','B','12');
    $pdf->Cell(0,20, $judul, '0', 1, 'C');
	$mydate=getdate(date("U"));
    $pdf->SetFont('Arial','B','10');
    $pdf->Cell(0,10, "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]", '0', 1, 'C');
    $pdf->SetFont('Arial','B','10');
    $pdf->Cell(0,20, $tulis_total, '0', 1, 'L');
          
    #buat header tabel
    $pdf->SetFont('Arial','','10');
    $pdf->SetFillColor(128,0,0);
    $pdf->SetTextColor(255);
    $pdf->SetDrawColor(20,10,0);
    foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 7, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf->Ln();
     
    #tampilkan data tabelnya
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $fill=false;
    foreach ($data as $baris) {
    $i = 0;
    foreach ($baris as $cell) {
    $pdf->Cell($header[$i]['length'], 7, $cell, 1, '0', $kolom['align'], $fill);
    $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
    }
     
    #output file PDF
	
    $pdf->Output();
    ?>