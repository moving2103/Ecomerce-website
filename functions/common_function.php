<?php

    include("./includes/connect.php");
  //Lay 9 san pham bat ki khi chua nhan vao category, brand
    function getproducts()
    {
        global $con; 
          // condition to check isset or not 
        if(!isset($_GET['category'])){
          if(!isset($_GET['brand']))
        {
          $select_query = "Select * from `products` order by rand() LIMIT 0,3";
          $result_query = mysqli_query($con, $select_query);
          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description.</p>
                <a href='#' class='btn btn-dark'>Add To Cart</a>
                <a href='#' class='btn btn-secondary'>View More</a>
              </div>
          </div>
        </div>";
          }
    }
  }
}

  //lay san pham khi nhan vao danh muc
  function get_unique_categories()
    {
        global $con; 
          // condition to check isset or not 
        if(isset($_GET['category']))
        {
          $category_id = $_GET['category'];
          $select_query = "Select * from `products` where category_id=$category_id";
          $result_query = mysqli_query($con, $select_query);
          $num_of_rows = mysqli_num_rows($result_query);
          if($num_of_rows==0)
          {
            echo "<h2 class = 'text-center text-danger'>Sản phẩm chưa có ở danh mục này!</h2>";
          }
          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description.</p>
                <a href='#' class='btn btn-dark'>Add To Cart</a>
                <a href='#' class='btn btn-secondary'>View More</a>
              </div>
          </div>
        </div>";
          }
        }
      }
    //get all products
    function get_all_products()
    {
      global $con; 
      // condition to check isset or not 
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand']))
    {
      $select_query = "Select * from `products` order by rand()";
      $result_query = mysqli_query($con, $select_query);
      while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
          <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text'>$product_description.</p>
            <a href='#' class='btn btn-dark'>Add To Cart</a>
            <a href='#' class='btn btn-secondary'>View More</a>
          </div>
      </div>
    </div>";
      }
}
}
    }
  //lay sp khi nhan vao danh muc
  function get_unique_brands()
    {
        global $con; 
          // condition to check isset or not 
        if(isset($_GET['brand']))
        {
          $brand_id = $_GET['brand'];
          $select_query = "Select * from `products` where brand_id=$brand_id";
          $result_query = mysqli_query($con, $select_query);
          $num_of_rows = mysqli_num_rows($result_query);
          if($num_of_rows==0)
          {
            echo "<h2 class = 'text-center text-danger'>Nhãn hàng này chưa có sản phẩm!</h2>";
          }
          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description.</p>
                <a href='#' class='btn btn-dark'>Add To Cart</a>
                <a href='#' class='btn btn-secondary'>View More</a>
              </div>
          </div>
        </div>";
          }
    }
  }


    function getbrands()
    {
        global $con;
        $select_brands = "Select * from `brands`";
        $result_brands = mysqli_query($con,$select_brands);
        while($row_data = mysqli_fetch_assoc($result_brands)){
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            echo "<li class='nav-item bg-secondary'>
            <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
            </li>";
        }
    }

    function getcategories()
    {
        global $con;
        $select_categories = "Select * from `categories`";
        $result_categories = mysqli_query($con,$select_categories);
        while($row_data = mysqli_fetch_assoc($result_categories)){
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<li class='nav-item bg-secondary'>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
            </li>";
        }
    }

    function search_product()
    {
      global $con; 
         if(isset($_GET['search_data_product']))
         {
          $search_data_value = $_GET['search_data'];
          $search_query = "Select * from `products` where product_keywords like '%$search_data_value%'";
          $result_query = mysqli_query($con, $search_query);
          $num_of_rows = mysqli_num_rows($result_query);
          if($num_of_rows==0)
          {
            echo "<h2 class = 'text-center text-danger'>Không tìm thấy sản phẩm có Keyword liên quan tới $search_data_value!</h2>";
          }
          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
              <div class='card-body'>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description.</p>
                <a href='#' class='btn btn-dark'>Add To Cart</a>
                <a href='#' class='btn btn-secondary'>View More</a>
              </div>
          </div>
        </div>";
          }
    }
  }
?>
