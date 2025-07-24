<h1 class="mt-4">Tambah Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">

                    <?php
                    if(isset($_POST['submit'])) {
                        $nama = $_POST['nama'];
                        $kelas = $_POST['kelas'];
                        $id_buku = $_POST['id_buku'];
                        $jumlah_peminjaman= $_POST['jumlah_peminjaman'];
                        $tanggal_peminjaman= $_POST['tanggal_peminjaman'];
                        $status_peminjaman = $_POST['status_peminjaman'];
                         
                        $query = mysqli_query($koneksi, "INSERT INTO peminjaman(nama, kelas, id_buku, jumlah_peminjaman, tanggal_peminjaman, status_peminjaman) 
                        VALUES ('$nama','$kelas','$id_buku','$jumlah_peminjaman','$tanggal_peminjaman','$status_peminjaman')");

                        if($query) {
                            echo '<script>alert("Tambah data berhasil.");</script>';
                        }else{
                            echo '<script>alert("Tambah data gagal.");</script>';
                        }
                    }
                    
                ?>

                    <!-- <div class="row mb-3">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while($buku = mysqli_fetch_array($buk)) { 
                                ?>
                                <option value="<?php echo $buku['id_buku'];?>"><?php echo $buku['id_buku'];?></option>
                                <?php
                                }
                            ?>
                            </select>
                        </div>
                    </div> -->

                    <div class="row mb-3">
                        <div class="col-md-2">Nama</div>
                        <div class="col-md-8">
                            <input type="name" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Kelas</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="kelas">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" id="" class="form-control">
                                <option value="">Pilih Buku</option>
                              <?php 
                               $data_buku = mysqli_query($koneksi, "SELECT * FROM buku");
                               var_dump($data_buku);
                              while ($data = mysqli_fetch_array($data_buku)){
                              ?>
                                <option value="<?php echo $data['id_buku'] ?>"><?php echo $data['judul']; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Jumlah Pinjam</div>
                        <div class="col-md-8">
                            <input type="number" class="form-control" name="jumlah_peminjaman">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tanggal</div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="tanggal_peminjaman">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Status Peminjaman</div>
                        <div class="col-md-8">
                            <select name="status_peminjaman" class="form-control">
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                            </select>
                        </div>
                    </div>
            </div>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>