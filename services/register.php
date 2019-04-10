<?php

if(isset($_POST['submit'])){
//    print_r($_POST);

//    email
    if(empty($_POST['email'])) {
        echo 'email is required ' . '<br>';
    }else {
        echo htmlspecialchars($_POST['email']).'<br>';
    }


    if(empty($_POST['firstName'])) {
        echo 'firstname is required ' . '<br>';
    }else {
        echo htmlspecialchars($_POST['firstName']).'<br>';
    }
}else {
}


//<script>window.location="https://google.com"</script>