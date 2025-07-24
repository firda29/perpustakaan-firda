<h1 class="mt-4">Tambah Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">

                    <?php
                    if(isset($_POST['submit'])) {
                        $judul = $_POST['judul'];
                        $kelas = $_POST['kelas'];
                        $tahun_pembelian = $_POST['tahun_pembelian'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $jumlah = $_POST['jumlah'];
                        $query = mysqli_query($koneksi, "INSERT INTO buku(judul,kelas,tahun_pembelian,penerbit,tahun_terbit,jumlah) values ('$judul','$kelas','$tahun_pembelian','$penerbit','$tahun_terbit','$jumlah')");
                        
                        if($query) {
                            echo '<script>alert("Tambah data berhasil.");</script>';
                        }else{
                            echo '<script>alert("Tambah data gagal.");</script>';
                        }
                    }
                ?>

                    <!-- <div class="row mb-3">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" class="form-control">
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while($kategori = mysqli_fetch_array($kat)) { 
                                ?>
                                <option value="<?php echo $kategori['id_kategori'];?>"><?php echo $kategori['kategori'];?></option>
                                <?php
                                }
                            ?>
                            </select>
                        </div>
                    </div> -->

                    <div class="row mb-3">
                        <div class="col-md-2">Judul Buku</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Kelas</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="kelas"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Pembelian</div>
                        <div class="col-md-8"><input type="number" class="form-control" name="tahun_pembelian"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="number" class="form-control" name="tahun_terbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Jumlah</div>
                        <div class="col-md-8"><input type="number" class="form-control" name="jumlah">
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <a href="?page=buku" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>