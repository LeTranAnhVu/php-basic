

<?php


/*
 * isset(var) : check if var is valid
 * empty(var) : nguoc voi ben tren
 * htmlspecialchars prevent XSS
 * filter_var(string, filter):
 * preg_match(/regex/, string)
 * $_GET, $_POST : array contains the params from the form
 *
 * */




?>
<!DOCTYPE html>
<html>
<head>
    <title>simple web using php</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="./style/main.css">

</head>
<body>
<?php include './template/header.php'?>

<?php include './template/main.php'?>


<?php include './template/footer.php'?>
</body>
</html>
