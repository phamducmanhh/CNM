
<h1>Sửa danh mục bài viết</h1>
<form name="theloai-formadd" method="POST" action="giaodien/xulydanhmucbaiviet.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>" enctype="multipart/form-data">
    <div class="clear-both"></div>
    <div class="box-content">
        <label>Tên danh mục bài viết: </label>
        <input type="text" name="tendanhmuc_bv" value="" />
        <input name="btn_edit" type="submit" title="Lưu danh mục" value="Lưu" />
        <div class="clear-both"></div>
    </div>
</form>


