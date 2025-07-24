<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a style="margin-bottom: 20px;" href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">User</th>
                        <th style="text-align: center;">Buku</th>
                        <th style="text-align: center;">Ulasan</th>
                        <th>Rating</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['ulasan']; ?></td>
                            <td style="text-align: center;"><?php echo $data['rating']; ?></td>
                            <td class="text-center">
                                <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-primary text-white">Ubah</a>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
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