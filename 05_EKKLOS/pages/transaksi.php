<?php
    // $_GET["id"] didapat dari url yang bernama id
    // $_GET["id"] di simpan ke dalam variabel id
     $id = $_GET["index"];
    // echo $id; untuk menampilkan id
    /** id akan dipakai unutk mencari index array yang dipilih*/ 

    require "../data/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Schoolmart</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Properti</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/washing-machine.png" alt="" width="30" class="d-inline-block align-text-top">Eskop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" href="home.php">Beranda</a>
            <a class="nav-link" href="#transaksi.php">Transaksi</a>
            </div>
            <div class="navbar-nav ms-auto">
            <a class="nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>
        
<body>
<div class="container my-5">
    <form action="" method="POST">
        <div class="row">
        <div class="col-md-6 col-sm-12">
        <div class="mb-2">
        <label for="no-transaksi" class="form-label">No. Transaksi</label>
        <input type="number" id="no-transaksi" class="form-control" required>
    </div>

    <div class="mb-2">
        <label for="tanggal-transaksi" class="form-label">Tanggal Transaksi</label>
        <input type="date" id="tanggal-transaksi" class="form-control" required>
    </div>

    <div class="mb-2">
        <label for="nama-customer" class="form-label">Nama Customer</label>
        <input type="text" id="nama-customer" class="form-control" required>
    </div>

    <div class="mb-2">
        <label for="paket" class="form-label">Pilih Rumah</label>
        <input type="text" id="tipe" class="form-control" value="<?= $rumah[$id][0] ?>" readonly>
    </div>

    <div class="mb-4">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" id="harga" class="form-control" value="<?= $rumah[$id][2] ?>" readonly>
    </div>

    <div>
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" id="jumlah" class="form-control">
    </div>


<div class="my-2">
<button type="button" class="btn btn-sm btn-dark w-100" onclick="hitungTotal()">Hitung Total Harga</button>
</div>
</div>
</div>

<div class="mb-2">
    <label for="total-harga" class="form-label">Total Harga</label>
    <input type="text" id="total-harga" class="form-control" readonly>
</div>

<div class="row">
<div class="col-6">
<div class="mb-2">
    <label for="pembayaran" class="form-label">Pembayaran</label>
    <input type="text" id="pembayaran" class="form-control" required>
</div>

<button type="button" class="btn btn-sm btn-dark w-100"onclick="hitungKembalian()">Hitung Kembalian</button>
</div>

<div class="col-6">
<div class="mb-2">
    <label for="kembalian" class="form-label">Kembalian</label>
    <input type="text" id="kembalian" class="form-control" readonly>
</div>
<button type="button" class="btn btn-sm btn-dark w-100"onclick="simpan()">Simpan Transaksi</button>
</div>
</div>
</form>

</div>

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min
.js" integrity="sha384-
ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>
<script>
// HITUNG TOTAL HARGA
function hitungTotal() {
let hargarumah = parseInt(document.getElementById('harga').value);
// Harga rumah = mengambil element dari id harga
let harga = parseInt (document.getElementById('jumlah').value);
let totalHarga = hargarumah * harga;
// Total harga = harga rumah sebelumnya
document.getElementById("total-harga").value = totalHarga;
// mengambil element dari id total-harga di ubah menjadi nilai kemudian jadi total harga
}
// HITUNG KEMBALIAN
function hitungKembalian() {
let total = parseInt(document.getElementById("total-harga").value);
// total = mengambil data berdasarkan id total-harga menjadi nilai
let pembayaran = parseInt(document.getElementById("pembayaran").value);
// pembayaran = mengambil data berdasarkan id pembayaran menjadi nilai
if (pembayaran >= total) {
// nilai dari pembayaran harus lebih besar daripada total
let kembalian = pembayaran - total;
// kembalian = pembayaran - total
document.getElementById("kembalian").value = kembalian;
// mengambil element kembalian lalu mengubah menjadi nilai dan menjadi kembalian
} else {
alert("Uang Tidak Cukup");
// jika pembayaran kurang dari total maka akan muncul notif uang tidak cukup
}

}
// SIMPAN TRANSAKSI
function simpan() {
alert('Data Berhasil Disimpan');
// jika tombol yang ber id simpan di tekan maka akan ada notif data berhasil disimpan
window.location = 'home.php';
// lalu setelah notif maka user akan di kirim ke halaman home.php
}
</script>
</body>
</html>