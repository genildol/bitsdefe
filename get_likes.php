<?php
include "db.php";

if (isset($_GET['page_id'])) {
    $page_id = $conn->real_escape_string($_GET['page_id']);
    $result = $conn->query("SELECT total_likes FROM page_likes WHERE page_id='$page_id'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row['total_likes'];
    } else {
        echo 0;
    }
}
?>
