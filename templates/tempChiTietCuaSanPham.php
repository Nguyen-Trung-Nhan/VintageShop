<div id="chitietsp">
<div id="chitietleft">
    <img src="images/<?php echo $hinhURL; ?>">
</div>
<div id="chitietright">
    <div>
        <span class="label">Tên sản phẩm:</span>
        <span class="productname"><?php echo $tenSanPham; ?></span>
    </div>
    <div>
        <span class="label">Giá:</span>
        <span class="price"><?php echo $giaSanPham ?> đ</span>
    </div>
    <div>
        <span class="label">Hãng sản xuất:</span>
        <span class="factory"><?php echo $tenHangSanXuat; ?></span>
    </div>
    <div>
        <span class="label">Loại sản phẩm:</span>
        <span class="data"><?php echo $tenLoaiSanPham; ?></span>
    </div>
    <div>
        <span class="label">Số lượng:</span>
        <span class="data"><?php echo $soLuongTon; ?> sản phẩm</span>
    </div>
    <div class="giohang">
        <?php 
            if(isset($_SESSION["maTaiKhoan"]))
            {
                ?>
                    <a href="index.php?a=12&id=<?php echo $maSanPham; ?>">
                        <img src="img/shopping_cart.png" width="32">
                    </a>
                <?php
            }
        ?>
    </div>
</div>
<div id="mota"><?php echo $moTa; ?></div>
</div>



<h2>5 Sản Phẩm Cùng Loại </h2>
<?php
            $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
                    FROM SanPham sp
                    WHERE sp.BiXoa = 0 AND sp.MaLoaiSanPham = $maLoaiSanPham and sp.MaSanPham != $maSanPham
                    LIMIT 0,5";
            $list = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($list)){
            $maSanPham = $row["MaSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $hinhURL = $row["HinhURL"];
            include ("templates/tempThumbProduct.php");
            }

?>

