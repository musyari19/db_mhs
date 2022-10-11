<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'db_mhs';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	exit('Failed to connect to database!');
    }
	function query($query) {

global $conn

$result = mysqli_query($conn,

$rows []:

7

$query) |

while ( $row = mysqli_fetch_assoc($result)) {

$rows [] = $row;

return $rows;

13

14

}
	function cari($keyword){
		$query = "SELECT * FROM mahasiswa
							WHERE
							NIM LIKE '%$keyword%' OR
							nama LIKE '%$keyword%' OR
							email LIKE '%$keyword%' OR
							jurusan LIKE '%$keyword%' OR
							Fakultas LIKE '%$keyword%' 
							";
					return query($query);
	}
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Data Mahasiswa</h1>
            <a href="halaman_utama.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Account</a>
			<a href="logout.php">Logout</a>< 

    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>