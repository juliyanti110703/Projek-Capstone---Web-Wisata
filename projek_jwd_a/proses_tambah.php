<?php 
  if($_POST){ 
    include_once("connection.php");

     $id_paket_wisata = $_POST['nama_paket']; 
     $nama_pemesan = $_POST['nama_pemesan']; 
     $no_tlp = $_POST['no_tlp']; 
     $tgl_pesan = $_POST['tgl_pesan']; 
     $jumlah_hari = $_POST['jumlah_hari'];

    if(isset($_POST['layanan_penginapan']) ){ 
        $layanan_penginapan = "Y"; 
      }else{ 
        $layanan_penginapan = "N"; 
      } 
   
    if(isset($_POST['layanan_transportasi']) ){ 
        $layanan_transportasi = "Y"; 
      }else{ 
        $layanan_transportasi = "N"; 
      } 
   
    if(isset($_POST['layanan_makan']) ){ 
        $layanan_makan = "Y"; 
      }else{ 
        $layanan_makan = "N"; 
      }
  } 