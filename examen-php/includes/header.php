<?php
if (!isset($pageTitle)) {
    $pageTitle = "Mi sitio en PHP de futbolistas";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?>Futbolista</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/lightbox.css?v=<?php echo time(); ?>">

</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a href="index.php" class="logo">Futbolistas</a>
    
            <button class="nav-toggle" aria-label="Abrir menú">
                ☰
            </button>
    
            <nav class="main-nav">
                <a href="index.php">Index</a>
                <a href="login.php">Login</a>
                <a href="galeria.php">Galeria</a>
            </nav>
        </div>
    </header>
    <section class="container site-content">
