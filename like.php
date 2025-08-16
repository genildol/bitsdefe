<?php
include "db.php";

if (isset($_POST['page_id'])) {
    $page_id = $conn->real_escape_string($_POST['page_id']);

    // Verifica se a página já existe no banco
    $check = $conn->query("SELECT * FROM page_likes WHERE page_id='$page_id'");

    if ($check->num_rows > 0) {
        // Se já existe, incrementa
        $conn->query("UPDATE page_likes SET total_likes = total_likes + 1 WHERE page_id='$page_id'");
    } else {
        // Se não existe, cria com 1 curtida
        $conn->query("INSERT INTO page_likes (page_id, total_likes) VALUES ('$page_id', 1)");
    }

    // Retorna o novo total
    $result = $conn->query("SELECT total_likes FROM page_likes WHERE page_id='$page_id'");
    $row = $result->fetch_assoc();
    echo $row['total_likes'];
}
?>
