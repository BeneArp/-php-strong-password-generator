<?php

    session_start();
    $password = $_SESSION['password'];

?>

<?php 
    // includo l'head
    include __DIR__ . '/head.php'; 
?>

<div class="container-md text-center">
    <div class="ms-box light-blue">
            <h3>La tua Password è:</h3>
            <h3><?php echo $password ?></h3>
    </div>
</div>


<style>
    body{
        background-color: rgb(0 22 50);
    }

    .ms-box{
        border-radius: 10px;
        margin: 2em 0;
        padding: 1.5em 1em;
        background-color: rgb(248 249 250);
    }

    h1,h2{
        color: rgb(128 139 152);
    }

    .light-blue{
        background-color:rgb(207 244 252) ;
        color: rgb(13 81 96);
    }
</style>