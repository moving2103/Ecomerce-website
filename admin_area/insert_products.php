<?php
    include("../includes/connect.php");
    //Lay du lieu tu form
    if(isset($_POST['insert_product']))
    {
        $product_title = $_POST['product_title'];
        $description = $_POST['description'];
        $product_keywords = $_POST['product_keywords'];
        $product_categories = $_POST['product_category'];
        $product_brands = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_status = 'true';
    

    //truy cap thogn tin hinh anh
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    //duong dan tam thoi cho hinh anh
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    //kiemtra rong
    if($product_title == '' or $description == '' or $product_keywords == '' or $product_categories == '' or $product_brands == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '')
    {
        echo "<script>alert('Vui lòng điền đầy đủ thông tin!')</script>";
        exit();
    }
    else
    {
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");

        //insert query 
        $insert_products = "insert into `products` (product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) 
        values ('$product_title', '$description', '$product_keywords', '$product_categories', '$product_brands', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";
        $result_query = mysqli_query($con, $insert_products);
        if($result_query)
        {
            echo "<script>alert('Thêm sản phẩm thành công!')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS link -->
     <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Thêm sản phẩm</h1>
        <!-- form -->
         <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Tiêu đề sản phẩm</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Nhập tên sản phẩm" autocomplete="off" required="required">
            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Mô tả sản phẩm</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Nhập mô tả sản phẩm" autocomplete="off" required="required">
            </div>
            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Từ khóa sản phẩm</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Nhập từ khóa sản phẩm" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Chọn danh mục</option>
                    <?php
                        $select_query = "select * from `categories`";
                        $result_query = mysqli_query($con, $select_query);
                        while($row = mysqli_fetch_assoc($result_query))
                        {
                            $category_title = $row['category_title'];
                            $category_id = $row['category_id'];
                            echo "<option value = '$category_id'>$category_title</option>";
                        }
                    ?>
                </select>
                
            </div>
            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="" class="form-select">
                    <option value="">Chọn nhãn hàng</option>
                    <?php
                        $select_query = "select * from `brands`";
                        $result_query = mysqli_query($con, $select_query);
                        while($row = mysqli_fetch_assoc($result_query))
                        {
                            $brand_title = $row['brand_title'];
                            $brand_id = $row['brand_id'];
                            echo "<option value = '$brand_id'>$brand_title</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Hình ảnh sản phẩm 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
            <!-- image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Hình ảnh sản phẩm 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <!-- image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Hình ảnh sản phẩm 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>
            <!-- price -->
            <div class="form-outline mb-2 w-50 m-auto">
                <label for="product_price" class="form-label">Giá sản phẩm</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Nhập giá sản phẩm" autocomplete="off" required="required">
            </div>
            <!-- button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product"class="btn btn-info" value="Thêm sản phẩm">
            </div>
         </form>
         
    </div>
</body>
</html>