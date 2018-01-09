<div class="header">
    <a href="index.php">
            <img src="img/logo.jpg" alt="image not found" class="logo">
    </a>
    <table width="310" height="20" class="formTimKiem">
    <tr><td>
    <form action="index.php?a=16" method="POST" class="TimKiem" >
        Tìm kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem">
        <button type="submit" name="btnTim">Tìm</button>
    </form>
    </td></tr>
    </table>
    <?php
        if(isset($_SESSION['maLoaiTaiKhoan']) && $_SESSION['maLoaiTaiKhoan'] == 2 )
            DataProvider::ChangeURL("admin/index.php");
        if(isset($_SESSION['maTaiKhoan']))
        {
            include ("modules/mThongTinTaiKhoan.php");
        }
        else
        {
            include ("modules/mDangNhapTaiKhoan.php");
        }
    ?>
</div>
<div class="sliderboxHead">
    <div id="sliderbox" >
        <img src="img/clock-slider1.jpg" alt="image not found">
        <img src="img/clock-slider2.jpg" alt="image not found">
        <img src="img/clock-slider3.jpg" alt="image not found">
        <img src="img/clock-slider4.jpg" alt="image not found">
    </div>
</div>