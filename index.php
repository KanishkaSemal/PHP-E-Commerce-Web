<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website</title>
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  

 <!-- font awesome link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!--css file-->
 <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- navbar -->

   <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/Cart.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_area/index.php?insert_brand">Admin dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Login</a>
        </li>

  </ul>
</nav>

<!--third child -->
<div class="bg-light">
  <h3 class="text-center">Kani Store</h3>
  <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>


<!--fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- products -->
     <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/milk.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chocolate</h5>
    <p class="card-text">Chocolate is one of the most popular food types and flavors in the world.</p>
    <p class="card-text">Price: 1000/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fresh Apple</h5>
    <p class="card-text">Apples are always tasty.Eat once you will ask for more.</p>
    <p class="card-text">Price: 200/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/th.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bell Pepper</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p class="card-text">Price: 150/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/book.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Books</h5>
    <p class="card-text">Books play a quintessential roal in every students life by introducing them to a world.</p>
    <p class="card-text">Price: 300/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/juices.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fresh Juices</h5>
    <p class="card-text">Juices are good health.Juices are good for health.</p>
    <p class="card-text">Price: 100/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>

     </div>
     <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/mango.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fresh Mango</h5>
    <p class="card-text">Mangoes are always tasty.Eat once you will ask for more.</p>
    <p class="card-text">Price: 500/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
  </div>
</div>
</div>
<div class="col-md-2 bg-secondary p-0">
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Delivery Brands<h4></a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand1</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand2</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand3</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand4</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand5</a>
    </li>
  </ul>



  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Categories<h4></a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories1</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories2</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories3</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories4</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories5</a>
    </li>
  </ul>
</div>


     <!--last child -->
     <div class="bg-info p-3 text-center">
    <p>All rights reserved @- Designed by Kani-2024</p>
   </div>
</body>
</html>