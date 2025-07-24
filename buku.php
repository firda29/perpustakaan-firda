<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a style="margin-bottom: 20px;" href="?page=buku_tambah" class="btn btn-primary">+ Tambah Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Judul Buku</th>
                        <th style="text-align: center;">Kelas</th>
                        <th style="text-align: center;">Tahun Pembelian</th>
                        <th style="text-align: center;">Penerbit</th>
                        <th style="text-align: center;">Tahun Terbit</th>
                        <th style="text-align: center;">Jumlah</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i++; ?></td>
                            <td><?php echo $data['judul'];?></td>
                            <td><?php echo $data['kelas'];?></td>
                            <td style="text-align: center;"><?php echo $data['tahun_pembelian'];?></td>
                            <td style="text-align: center;"><?php echo $data['penerbit'];?></td>
                            <td style="text-align: center;"><?php echo $data['tahun_terbit'];?></td>
                            <td style="text-align: center;"><?php echo $data['jumlah'];?></td>
                            
                            <td class="text-center">
                                <a href="?page=buku_ubah&&id=<?php echo $data['id_buku']; ?>" class="btn btn-primary text-white">Ubah</a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=buku_hapus&&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>