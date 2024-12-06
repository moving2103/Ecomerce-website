<?php
  include("includes/connect.php");
  include("functions/common_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website bán quần áo PHP và MySQL</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- CSS link -->
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- narbar -->
     <div class="container-fluid p-0"> <!-- p-0 de thanh dieu huong full man -->
        <!-- first-child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src= "./img/T1_esports_logo.svg.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Đăng ký</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tổng tiền:</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second-child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>

<!-- third-child -->
 <div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communications is at the heart of e-commerce and community</p>
 </div>

 <!-- fourth-child -->
  <div class="row">
    <div class="col-md-10">
      <!-- products -->
       <div class="row">
        <!-- fetching products -->
         <?php
         //calling function
            get_all_products();
            get_unique_categories();
            get_unique_brands();
            cart();
         ?>
  <!-- row end -->
    </div>
  <!-- column end -->
    </div>
       
     <!-- sidenav -->
    <div class="col-md-2 bg-secondary p-0 ">
      <!-- brands to be dispayed  -->
      <ul class="navbar-nav me-auto text-center bg-dark">
        <li class="nav-item">
          <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
        </li>
  <?php
    getbrands();
  ?>
      </ul>
      <!-- categories to be dispayed -->
      <ul class="navbar-nav me-auto text-center bg-dark">
        <li class="nav-item">
          <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        </li>
        <?php
          getcategories();
        ?>
      </ul>
    </div>
  </div>

<!-- footer -->
    <?php
        include('./includes/footer.php');
    ?>
     </div>


<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>