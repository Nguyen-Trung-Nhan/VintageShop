<?php
    include_once ('lib/DataProvider.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <title>Vintage Shop</title>
</head>
<body>
    <div class="container">
        <div class="header"> 
            <?php include ('modules/mHeader.php'); ?>
        </div>
        <div class="sidebar">
            <?php include ('modules/mMenuHang.php'); ?>
            <?php include ('modules/mMenuLoai.php'); ?>   
        </div>
        <div class="content">
            <?php include ('modules/mContent.php'); ?>
        </div>
        <div class="footer">
                <?php include ('modules/mFooter.php'); ?>                
        </div>
    </div>
</body>
</html>