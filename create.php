<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    
    $NIM = isset($_POST['NIM']) && !empty($_POST['NIM']) && $_POST['NIM'] != 'auto' ? $_POST['NIM'] : NULL;
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
    $Fakultas = isset($_POST['Fakultas']) ? $_POST['Fakultas'] : '';
    $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
    $stmt = $pdo->prepare('INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$NIM, $nama, $email, $jurusan, $Fakultas, $gambar]);
    $msg = 'Created Successfully!';
}

?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="NIM">NIM</label>
        <label for="nama">Nama</label>
        <input type="text" name="NIM" value="" NIM="NIM">
        <input type="text" name="nama" NIM="nama">
        <label for="email">Email</label>
        <label for="jurusan">jurusan</label>
        <input type="text" name="email" NIM="email">
        <input type="text" name="jurusan" NIM="jurusan">
        <label for="Fakultas">Fakultas</label>
        <label for="gambar">gambar</label>
        <input type="text" name="Fakultas" NIM="Fakultas">
        <input type="text" name="gambar" NIM="gambar">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>