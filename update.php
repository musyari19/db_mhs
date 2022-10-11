<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['NIM'])) {
    if (!empty($_POST)) {
        $NIM = isset($_POST['NIM']) ? $_POST['NIM'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
        $Fakultas = isset($_POST['Fakultas']) ? $_POST['Fakultas'] : '';
        $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE mahasiswa SET NIM = ?, nama = ?, email = ?, jurusan = ?, Fakultas = ?, gambar = ? WHERE NIM = ?');
        $stmt->execute([$NIM, $nama, $email, $jurusan, $Fakultas, $gambar, $_GET['NIM']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM mahasiswa WHERE NIM = ?');
    $stmt->execute([$_GET['NIM']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that NIM!');
    }
} else {
    exit('No NIM specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['NIM']?></h2>
    <form action="update.php?NIM=<?=$contact['NIM']?>" method="post">
        <label for="NIM">NIM</label>
        <label for="nama">Nama</label>
        <input type="text" name="NIM" value="<?=$contact['NIM']?>" NIM="NIM">
        <input type="text" name="nama" value="<?=$contact['nama']?>" NIM="nama">
        <label for="email">Email</label>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="email" value="<?=$contact['email']?>" NIM="email">
        <input type="text" name="jurusan" value="<?=$contact['jurusan']?>" NIM="jurusan">
        <label for="Fakultas">Fakultas</label>
        <input type="text" name="Fakultas" value="<?=$contact['Fakultas']?>" NIM="title">
        <label for="gambar">gambar</label>
        <input type="text" name="gambar" value="<?=$contact['gambar']?>" NIM="title">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>