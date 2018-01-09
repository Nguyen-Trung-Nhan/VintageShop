<a href="index.php">
            <img src="img/logo.jpg" alt="image not found" class="logo">
</a>
<?php
        if(isset($_SESSION['maTaiKhoan']) && isset($_SESSION['maLoaiTaiKhoan']) && $_SESSION['maLoaiTaiKhoan'] == 2 )
        {
            include("mThongTinTaiKhoan.php");
        }
        else
        {
            DataProvider::ChangeURL("../index.php");
        }
?>