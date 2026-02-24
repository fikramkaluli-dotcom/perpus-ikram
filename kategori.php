<?php  
session_start();
include 'koneksi.php';
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">kategori</h1>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12">

                    
                        <a href="tambah_kategori.php" class="btn btn-primary">Tambah kategori</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <?php if (isset($_SESSION['user']['level']) && $_SESSION['user']['level'] == 'admin') : ?>
                                            <th>Aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i = 1; 
                                        $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while ($data = mysqli_fetch_array($query)) :
                                        ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $data['nama_kategori']; ?></td>
                                            <td>
                                                <a href="?page_kategori_ubah&&id=<?= $data['id_kategori']; ?>" class="btn btn-info">Ubah</a>
                                                <a href="?page_kategori_hapus&&id=<?= $data['id_kategori']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')" class="btn btn-danger">Hapus</a>
                                            </td>
                                        
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->