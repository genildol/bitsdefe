<?php
$host = "localhost";
$user = "bitsdefe_user";   // usuário criado no cPanel
$pass = "";  // senha do usuário
$dbname = "bitsdefe_site"; // banco de dados criado

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>

<?php
include "db.php";
$page_id = "igreja";

$result = $conn->query("SELECT total_likes FROM page_likes WHERE page_id='$page_id'");
$row = $result->fetch_assoc();
$total_likes = $row ? $row['total_likes'] : 0;
?>

<div id="like-section">
    <button onclick="likePage('<?php echo $page_id; ?>')">👍 Curtir</button>
    <span id="like-count"><?php echo $total_likes; ?></span> curtidas
</div>

