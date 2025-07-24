<h2 align="center">Laporan Peminjaman Buku SMK YP 17 Baradatu</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Buku</th>
        <th>Jumlah Buku</th>
        <th>Jumlah Pinjam</th>
        <th>Tanggal</th>
        <th>Status</th>
    </tr>

    <?php
    include "koneksi.php";
    $i = 1;
    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $i++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td style="text-align: center;"><?php echo $data['jumlah']; ?></td>
            <td style="text-align: center;"><?php echo $data['jumlah_peminjaman']; ?></td>
            <td style="text-align: center;"><?php echo date('d-m-Y', strtotime($data['tanggal_peminjaman'])); ?></td>
            <td><?php echo $data['status_peminjaman']; ?></td>

        </tr>
    <?php
    }
    ?>
</table>

<script>
    window.print();
    setTimeout(function() {
        window.close();
    }, 100);
</script>