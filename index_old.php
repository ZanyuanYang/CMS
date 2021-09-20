<?php include "includes/header.php"; ?>
<?php include "includes/db.php"?>

    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

   <?php

echo loggedInUserId();

if(userLikedThisPost(22)){
    echo "USER LIKED it";
}else{
    echo "did not like it";
}




   ?>