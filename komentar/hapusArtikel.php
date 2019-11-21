<?php  
    // Lampirkan db dan User
    require_once "db.php";
    require_once "User.php";

    // Buat object user
    $user = new User($db);

    // Jika belum login
    if(!$user->isLoggedIn()){
        header("location: login.php"); //Redirect ke halaman login
    }

    // Ambil data user saat ini
    $currentUser = $user->getUser();
	
?>

<?php include 'fungsi/config.php'; 
cekPunyaKomen($_GET['id']);
header("location: logout.php"); 
//echo "<meta http-equiv='refresh' content='1;url=index.php'>";?>