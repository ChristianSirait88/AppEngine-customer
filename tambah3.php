<?php 
    $conn = new mysqli('localhost', 'root', '', 'gofashion');

    $kode_pakaian = $_POST['kode_pakaian'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];
    $status = 0;

    $query = mysqli_query($conn, "INSERT INTO pembelian VALUES ('', '$kode_pakaian','$nama','$alamat','$ukuran','$harga', '$status')")
    or die(mysqli_error($conn));

    if($query){
        echo "<script>alert('Pembelian berhasil!'); window.location.href='produk.php'</script>";
    }else{
        echo "<script>alert('Pembelian gagal!'); window.location.href='produk.php'</script>";
    }
?>