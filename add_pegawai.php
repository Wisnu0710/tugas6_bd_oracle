<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_obat = $_POST['id_obat'];
  $id_pegawai = $_POST['id_pegawai'];
  $stok = $_POST['stok'];
  $tgl_kadarluasa = $_POST['tgl_kadarluasa'];
  $jenis = $_POST['jenis'];
  $nama_obat = $_POST['nama_obat'];
  $harga = $_POST['harga'];

$query = "INSERT INTO OBAT (ID_OBAT,ID_PEGAWAI,STOK,TGL_KADARLUASA,JENIS,NAMA_OBAT,HARGA) VALUES ('".$id_obat."','".$id_pegawai."','".$stok."','".$tgl_kadarluasa."','".$jenis."','".$nama_obat."','".$harga."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='obat.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='obat.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: obat.php'); 
}