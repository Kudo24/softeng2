<?php
$data = [
  'title' => 'Dashboard',
  'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../../index.php');
  exit;
}

?>

<h1>Welcome <?php echo $_SESSION['fname']; ?></h1>
<a href="../includes/logout.inc.php">log out</a>