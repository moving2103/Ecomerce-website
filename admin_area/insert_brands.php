<?php
    include("../includes/connect.php");
    if(isset($_POST["insert_brand"]))
    {
        $brand_title = $_POST["brand_title"];
        $select_query="Select * from `brands` where brand_title = '$brand_title'";
        $result_select = mysqli_query($con, $select_query);
        $number = mysqli_num_rows($result_select);
        if($number > 0)
        {
            echo "<script>alert('Nhãn hàng này đã tồn tại trong database')</script>";
        }
        else
        {
            $insert_query="insert into `brands` (brand_title) value ('$brand_title')";
            $result = mysqli_query($con, $insert_query);
            if($result)
            {
                echo "<script>alert('Nhãn hàng đã được thêm')</script>";
            }
        }
        
    }
?>
<h2 class="text-center">Thêm Nhãn Hàng</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-dark text-light" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="Brands" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-secondary text-light p-2 my-0 border-0" name="insert_brand" value="Thêm nhãn hàng">
    </div>
</form>