<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--css file-->
 <link rel="stylesheet" href="../style.css">
 <style>
  .admin_image{
  width: 100px;
  object-fit: contain;
}

.footer{
  position: absolute;
  bottom:0;
}
 </style>
</head>
<body>
<!-- navbar -->
 <div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <img src="../images/Cart.png" alt="" class="logo">
      <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="" class="nav-link">Welcome guest</a>
          </li>
        </ul>

      </nav>

    </div>
  </nav>

  <!-- second child -->
   <div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
   </div>

   <!-- third child -->
    <div class="row">
      <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
        <div class="px-3">
          <a href="#"><img src="../images/pineapple2.jpg" alt="" class="admin_image"></a>
          <p class="text-light text-center">Admin Name</p>
        </div>
        <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
        <div class="button text-center">
          <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
          <button class="my-3"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
          <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
      </div>
    </div>
     <!-- fourth child -->
      <div class="container my-5">
        <?php
        if(isset($_GET['insert_category'])){
          include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
          include('insert_brands.php');
        }
        ?>
      </div>

    <!--last child -->
    <div class="bg-info p-3 text-center footer">
    <p>All rights reserved @- Designed by Kani-2024</p>
   </div>
 </div>

<!-- js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>