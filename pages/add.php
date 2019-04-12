<?php
/**
 * Created by PhpStorm.
 * User: gumi-imac-05
 * Date: 2019-04-12
 * Time: 11:45
 */
?>


<?php
include('../template/header.php'); ?>

<section>
    <main>
        <h1>Form handling</h1>
        <div class="row container">
            <form
                action="register.php"
                method="POST"
                class="col s12"
                autocomplete="off">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" name="name" autocomplete="off">
                        <label for="name">Name:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="age" type="number" name="age" autocomplete="off">
                        <label for="age">Age:</label>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" name="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>

    </main>
</section>


<?php
include('../template/footer.php'); ?>