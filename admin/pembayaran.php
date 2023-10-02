<?php
include "../koneksi.php";
$proses = mysqli_query($koneksi, "SELECT *from booking")
    or die(mysqli_error($koneksi));

?>
<html>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>

<body>
    <div class="card" style="width: 18rem;">
        <img src="../img/chart.png" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Pembayaran Lapangan</h5>
            <p class="card-text">
                <?php
                $query = "SELECT * FROM booking ORDER BY tanggal DESC LIMIT 1";
                $result = mysqli_query($koneksi, $query) or die(mysqli_error());
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    // Tampilkan data
                    echo "Nama: " . $row['nama'] . "<br>";
                    echo "Phone: " . $row['phone'] . "<br>";
                    echo "Lapangan: " . $row['lapangan'] . "<br>";
                    echo "Tanggal: " . $row['tanggal'] . "<br>";
                    echo "Jam Mulai-Selesai: " . $row['jam_mulai'] . "-" . $row['jam_selesai'] . "<br>";
                    echo "Total Bayar: Rp. " . $row['harga'] . "<br>";
                } else {
                    echo "Tidak ada data yang ditemukan.";
                }

                ?>
            </p>
            <a href="index.php" class="btn btn-primary"
                onclick="return confirmAndShowSuccessMessage('Konfirmasi Pembayaran?');">Bayar</a>

            <script>
                function confirmAndShowSuccessMessage(message) {
                    if (confirm(message)) {
                        alert('Pembayaran berhasil!'); // Menampilkan pesan pembayaran berhasil
                        return true; // Lanjutkan navigasi jika pengguna mengkonfirmasi
                    } else {
                        alert('Pembayaran gagal!'); // Menampilkan pesan pembayaran berhasil
                        return false; // Batalkan navigasi jika pengguna tidak mengkonfirmasi
                        window.location.href = 'pembayaran.php'; // Mengarahkan pengguna kembali ke halaman pembayaran.php jika tidak mengkonfirmasi
                    }
                }
            </script>
            <a href="cancel.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Cancel</a>

        </div>
    </div>
</body>

</html>