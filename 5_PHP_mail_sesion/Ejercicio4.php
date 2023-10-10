<?php
session_start();

if (!isset($_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'] = array();
}

$current_page = $_SERVER['REQUEST_URI'];

if (!in_array($current_page, $_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'][] = $current_page;
}

$pages_visited = count($_SESSION['visited_pages']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página 1</title>
</head>
<body>
    <h1>Página 1</h1>
    <p>Número de páginas visitadas durante esta sesión: <?php echo $pages_visited; ?></p>
    <a href="index4.php">Ir a la página 2</a>
</body>
</html>
