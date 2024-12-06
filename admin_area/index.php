<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS link -->
     <link rel="stylesheet" href="../style.css">
     <style>
    .admin_image{
        width: 100px;
        object-fit: contain;
        margin-left: 10px;
    }
    .footer{
        position: absolute;
        bottom: 0;
    }
    
     </style>
</head>
<body>
    <!-- navbar -->
     <div class="container-fluid p-0">
        <!-- first-child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="../imgs/logo/administrator.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second-child -->
         <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
         </div>
         <!-- third-child -->
          <div class="row">
            <div class="col-md-12 bg-dark p-1 d-flex align-items-center mb-3">
                <div class="p-3">
                    <a href="#"><img src="../imgs/logo/admin-panel.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_products.php" class="nav-link bg-secondary text-light  my-0 border-0">Thêm sản phẩm</a></button>
                    <button><a href="" class="nav-link bg-secondary text-light  my-0 border-0 ">Xem sản phẩm</a></button>
                    <button><a href="index.php?insert_category" class="nav-link bg-secondary text-light  my-0 border-0">Thêm danh mục</a></button>
                    <button><a href="" class="nav-link bg-secondary text-light  my-0 border-0">Xem danh mục</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link bg-secondary text-light  my-0 border-0">Thêm nhãn hàng</a></button>
                    <button><a href="" class="nav-link bg-secondary text-light  my-0 border-0">Xem nhãn hàng</a></button>
                    <button><a href="" class="nav-link bg-secondary text-light  my-0 border-0">Tất cả sản phẩm</a></button>
                    <button><a href="" class="nav-link bg-secondary text-light  my-0 border-0">Tổng thanh toán</a></button>
                    <button><a href="" class="nav-link bg-secondary text-light  my-0 border-0">Danh sách người dùng</a></button>
                    <button><a href="" class="nav-link bg-secondary text-light  my-0 border-0">Đăng xuất</a></button>
                </div>
            </div>
          </div>
          <!-- fourth-child -->
          <div class="container my-3">
            <?php
                if(isset($_GET['insert_category']))
                {
                    include("insert_categories.php");
                }
                if(isset($_GET['insert_brands']))
                {
                    include("insert_brands.php");
                }
            ?>
          </div>
          <!-- last-child -->
          <div class="bg-dark text-light p-3 text-center footer">
            <p>COPYRIGHTⓒ2024 T1 SHOP. ALL RIGHTS RESERVERED.</p>
          </div>
            
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>