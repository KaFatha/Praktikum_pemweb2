<?php 
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h1>Selamat Datang <?= $_SESSION['user']['name']; ?></h1>


<?php 
require_once 'footer.html'; 
?>