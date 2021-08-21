<?php

//logout.php

session_start();

session_destroy();

header('location:home/startup/index.php');

?>