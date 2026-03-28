<?php

 $userMaster = "admin@login.com";
 $passMaster = "123456";

 $email = $_POST['email'];
 $senha = $_POST['senha'];

 if ($email == $userMaster && $senha == $passMaster) {

    header("Location: index.php");
 } else {

    header("Location: login.php?erro=1");
 }
 exit();
 ?>

 <?php if (isser($_GET['erro'])): ?>
    <p class="error-alert">Usuario ou senha incorretos!</p>
    <?php endif; ?>