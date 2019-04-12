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


//start connect
include('../services/db_connection.php');

//query
$sql = "SELECT * FROM users ORDER BY age ";
$result = mysqli_query($conn, $sql);

//result
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);



//close connect
mysqli_close($conn);
?>

<?php include '../template/header.php' ?>
    <section>
        <h1>home page</h1>
        <table>
            <?php foreach ($users as $user){ ?>
                <p>
                    <?php echo $user['name'].'-'.$user['age']?>
                </p>

            <?php }?>
        </table>
    </section>
<?php include '../template/footer.php' ?>

