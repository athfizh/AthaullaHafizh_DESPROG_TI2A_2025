<?php
// file: berita_manage.php (READ)
include 'admin_header.php'; 
?>

<div class="admin-content">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Kelola Berita</h2>
        <a href="berita_add.php" class="laboix-btn">Tambah Berita Baru</a>
    </div>

    <?php 
    // Tampilkan pesan sukses jika ada
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-success mt-3">'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }
    ?>

    <table class="table table-striped table-hover mt-4">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul Berita</th>
                <th>Admin</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT b.*, a.nama_admin FROM berita b JOIN admin a ON b.id_admin = a.id_admin ORDER BY b.tgl_berita DESC");
            $no = 1;
            while($data = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><img src="uploads/<?php echo $data['gambar_berita']; ?>" alt="" width="100"></td>
                <td><?php echo $data['judul_berita']; ?></td>
                <td><?php echo $data['nama_admin']; ?></td>
                <td><?php echo date('d M Y', strtotime($data['tgl_berita'])); ?></td>
                <td>
                    <a href="berita_edit.php?id=<?php echo $data['id_berita']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="berita_delete.php?id=<?php echo $data['id_berita']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include 'admin_footer.php'; 
?>