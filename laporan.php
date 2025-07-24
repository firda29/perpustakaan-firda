<h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a style="margin-bottom: 20px;" href="cetak.php" target="_blank" class="btn btn-primary"> <i class="fa fa-print"></i>Cetak Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Kelas</th>
                        <th style="text-align: center;">Buku</th>
                        <th style="text-align: center;">Jumlah Buku</th>
                        <th style="text-align: center;">Jumlah Pinjam</th>
                        <th style="text-align: center;">Tanggal</th>
                        <th style="text-align: center;">Status</th>
                    </tr>
                    <?php
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
            </div>
        </div>
    </div>
</div>