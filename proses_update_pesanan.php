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

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  obat  SET  ID_PEGAWAI ='".$id_pegawai."', STOK  = '".$stok."', TGL_KADARLUASA  = '".$tgl_kadarluasa."', JENIS  = '".$jenis."', NAMA_OBAT  = '".$nama_obat."', HARGA  = '".$harga."' WHERE ID_OBAT ='".$id_obat."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='obat.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='obat.php'</script>";
    }
  } else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: obat.php'); 
  }