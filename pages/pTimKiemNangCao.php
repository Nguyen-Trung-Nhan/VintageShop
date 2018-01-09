<h2>Sản Phẩm Tìm Kiếm</h2>
<?php
    include ("templates/tempTimKiemNangCao.php");
    if(isset($_POST["txtTenSanPham"]) && ($_POST["txtTenSanPham"] != "")){
    $timKiem = $_POST['txtTenSanPham'];
    $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
            FROM SanPham sp 
            WHERE sp.BiXoa = 0 and sp.TenSanPham like '%$timKiem%'" ;
    $list = DataProvider::executeQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $maSanPham = $row["MaSanPham"];
        $tenSanPham = $row["TenSanPham"];
        $giaSanPham = $row["GiaSanPham"];
        $hinhURL = $row["HinhURL"];
        include ("templates/tempThumbProduct.php");
        }
    }
    if(isset($_POST["txtLoaiSanPham"]) && $_POST["txtLoaiSanPham"] != ""){
        $timKiem = $_POST['txtLoaiSanPham'];
        $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
                FROM SanPham sp, loaisanpham lsp
                WHERE sp.BiXoa = 0 and lsp.TenLoaiSanPham like '%$timKiem%' and sp.MaLoaiSanPham = lsp.MaLoaiSanPham";
        $list = DataProvider::executeQuery($sql);
        while($row = mysqli_fetch_array($list)){
            $maSanPham = $row["MaSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $hinhURL = $row["HinhURL"];
            include ("templates/tempThumbProduct.php");
            }
    }
    if(isset($_POST["txtNhaSanXuat"]) && $_POST["txtNhaSanXuat"] != ""){
        $timKiem = $_POST['txtNhaSanXuat'];
        $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
                FROM SanPham sp, hangsanxuat nsx
                WHERE sp.BiXoa = 0 and nsx.TenHangSanXuat like '%$timKiem%' and sp.MaHangSanXuat = nsx.MaHangSanXuat ";
        $list = DataProvider::executeQuery($sql);
        while($row = mysqli_fetch_array($list)){
            $maSanPham = $row["MaSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $hinhURL = $row["HinhURL"];
            include ("templates/tempThumbProduct.php");
            }
    }

    if(isset($_POST["nbFrom"]) && $_POST["nbFrom"] != "" && isset($_POST["nbTo"]) && $_POST["nbTo"] != ""){
        $timKiem1 = $_POST['nbFrom'];
        $timKiem2 = $_POST['nbTo'];
        $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
                FROM SanPham sp
                WHERE sp.BiXoa = 0 and sp.GiaSanPham >=$timKiem1 and sp.GiaSanPham <= $timKiem2 ";
        $list = DataProvider::executeQuery($sql);
        while($row = mysqli_fetch_array($list)){
            $maSanPham = $row["MaSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $hinhURL = $row["HinhURL"];
            include ("templates/tempThumbProduct.php");
            }
    }
?>
