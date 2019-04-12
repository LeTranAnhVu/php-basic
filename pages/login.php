<?php
/**
 * Created by PhpStorm.
 * User: gumi-imac-05
 * Date: 2019-04-12
 * Time: 17:18
 */
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST['submit'])) {
    unset($_SESSION['username']);
    $_SESSION['username'] = $_POST['username'];
}
?>

<?php
include('../template/header.php'); ?>

<main>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="username">
        <input value="submit" type="submit" name="submit">
    </form>
</main>


<?php
include('../template/footer.php'); ?>
