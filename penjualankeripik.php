<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
  
  //Mendapatkan Nilai Variable
 
  
  $id_penjualan=$_POST['id_penjualan'];
  $id_barang = $_POST['id_barang'];
  $jumlahtersedia=$_POST['jumlahtersedia'];
  $jumlahterjual=$_POST['jumlahterjual'];
  $stokakhir=($jumlahtersedia-$jumlahterjual);
  $stokakhir = round($stokakhir,2);
  
  //Pembuatan Syntax SQL
  $sql = "INSERT INTO penjualan (id_penjualan,id_barang,jumlahtersedia,jumlahterjual,stokakhir)
   VALUES ('$id_penjualan','$id_barang','$jumlahtersedia','$jumlahterjual','$stokakhir')";
  
  //Import File Koneksi database
  require_once('../koneksi.php');
  
  //Eksekusi Query database
  if(mysqli_query($con,$sql)){
   echo 'Berhasil Menambahkan keripik';
  }else{
   echo 'Gagal Menambahkan keripik';
  }
  mysqli_close($con);
 }
?>