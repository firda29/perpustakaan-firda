<h1 class="mt-4">Ubah Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">

                    <?php
                    $id = $_GET['id'];
                    if(isset($_POST['submit'])) {
                        $judul = $_POST['judul'];
                        $kelas = $_POST['kelas'];
                        $tahun_pembelian = $_POST['tahun_pembelian'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $jumlah = $_POST['jumlah'];
                        $query = mysqli_query($koneksi, "UPDATE buku SET judul = '$judul', kelas='$kelas',tahun_pembelian='$tahun_pembelian', penerbit='$penerbit', tahun_terbit='$tahun_terbit', jumlah='$jumlah' WHERE id_buku = $id ");
                        
                        if($query) {
                            echo '<script>alert("Ubah data berhasil.");</script>';
                        }else{
                            echo '<script>alert("Ubah data gagal.");</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = $id");
                    $data = mysqli_fetch_array($query);
                ?>

                    <!-- <div class="row mb-3">
                        <div class="col-md-2">Judul Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while($buku = mysqli_fetch_array($buk)) { 
                                ?>
                                <option <?php if($buku['id_buku'] == $data['id_buku']) echo'selected'; ?> value="<?php echo $buku['id_buku'];?>"><?php echo $buku['buku'];?></option>
                                <?php
                                }
                            ?>
                            </select>
                        </div>
                    </div> -->

                    <div class="row mb-3">
                        <div class="col-md-2">Judul Buku</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['judul'];?>" class="form-control" name="judul"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Kelas</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['kelas'];?>" class="form-control" name="kelas"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Pembelian</div>
                        <div class="col-md-8"><input type="number" value="<?php echo $data['tahun_pembelian'];?>" class="form-control" name="tahun_pembelian"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['penerbit'];?>" class="form-control" name="penerbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="number" value="<?php echo $data['tahun_terbit'];?>" class="form-control" name="tahun_terbit"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">Jumlah</div>
                        <div class="col-md-8"><input type="number" value="<?php echo $data['jumlah'];?>" class="form-control" name="jumlah"></div>
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