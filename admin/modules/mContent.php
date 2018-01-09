<?php
    $a = (isset($_GET['a'])) ? $_GET['a'] : 1; 
    switch ($a) {
        case 1:
            include ("pages/pHome.php");
            break;
        case 2:
            include ("pages/pQuanLySanPham.php");
            break;
        case 3:
            include ("pages/exThem.php");
            break;
        case 4:
            include ("pages/exSua.php");
            break;
        case 5:
            include ("pages/exXoa.php");
            break;
        case 6:
            include ("pages/pLietKe.php");
            break;
        case 7:
            include ("pages/pTimKiem.php");
            break;
        case 8:
            include ("pages/pQuanLyLoaiSanPham.php");
            break;
        case 9:
            include ("pages/pLietKeLoaiSanPham.php");
            break;
        case 10:
            include ("pages/pTimKiemLoaiSanPham.php");
            break;
        case 20:
            include ("pages/exDangXuat.php");
            break;

}