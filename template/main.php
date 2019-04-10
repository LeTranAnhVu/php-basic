<?php

?>

<main>
    <h1>Form handling</h1>
    <div class="row container">
        <form
            action="./services/register.php"
            method="POST"
            class="col s12"
            autocomplete="off">
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" name="firstName" autocomplete="off">
                    <label for="first_name">First Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                        <input id="email" type="email" name="email" autocomplete="off">
                    <label for="email">Email</label>
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
