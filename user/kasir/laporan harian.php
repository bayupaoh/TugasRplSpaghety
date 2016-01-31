<?php
    include("../../koneksi/koneksi.php");

    #ambil data di tabel dan masukkan ke array
    $query = "SELECT no_pesanan,tgl_pesanan,total_harga FROM pesanan WHERE Status='Bayar' AND date(tgl_pesanan)=curdate()";
    $sql = mysql_query ($query);
    $data = array();
    while ($row = mysql_fetch_assoc($sql)) {
    array_push($data, $row);
    }


	#ambil data di tabel dan masukkan ke array
    $query2 = "SELECT sum(total_harga) as total FROM pesanan WHERE Status='Bayar' AND date(tgl_pesanan)=curdate()";
    $sql2 = mysql_query ($query2);
	$total=0;
    while ($row = mysql_fetch_assoc($sql2)) {
		$total=$row['total'];
    }

    #setting judul laporan dan header tabel
    $judul = "LAPORAN PENDAPATAN HARIAN";
	$tulis_total="Total Pendapatan : Rp.".$total;

    $header = array(
    array("label"=>"No Pesan", "length"=>40, "align"=>"C"),
	array("label"=>"Tgl Pesan", "length"=>40, "align"=>"C"),
	array("label"=>"Total Harga", "length"=>40, "align"=>"C")
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
