<?php

$dontWant = ['.', '..', 'index.php'];
$sub = str_replace('index.php', null, $_SERVER['PHP_SELF']);
$dirs = scandir(getcwd());
$links = null;
foreach ($dirs as $dir) {
    if (!in_array($dir, $dontWant) && preg_match('/.+(\.php)$/', $dir)) {
        $links[$dir] = $sub . $dir;
    }
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$username = null;
if($_SESSION){
$username = $_SESSION['username'];

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>simple web using php</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="../style/main.css">

</head>
<body>

<nav class="container-fluid">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">hello</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><?php echo $username ?></li>
            <?php foreach ($links as $key => $value) { ?>
                <li><a href="<?php echo $value ?>">
                        <?php echo htmlspecialchars(explode('.', $key)[0]) ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
