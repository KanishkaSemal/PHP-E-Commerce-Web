<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert page</title>
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--css file-->
 <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
       <h1 class="text-center">Insert Products</h1>
      </div>
  
       <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_title" class="form-label">Product title</label>
          <input type="text" name="product_title" 
          id="product_title" class="form-control"
          placeholder="Enter product title" autocomplete="off" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="description" class="form-label">Product description</label>
          <input type="text" name="description" 
          id="description" class="form-control"
          placeholder="Enter product description" autocomplete="off" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_keywords" class="form-label">Product keywords</label>
          <input type="text" name="product_keywords" 
          id="product_keywords" class="form-control"
          placeholder="Enter product_keywords" autocomplete="off" required="required">
        </div>


        <div class="form-outline mb-4 w-50 m-auto">
          <select name="product_categories" id="" class="form-select">
            <option value="">Select a Category</option>
            <option value="">Category1</option>
            <option value="">Category2</option>
            <option value="">Category3</option>
            <option value="">Category4</option>
          </select>
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <select name="product_brands" id="" class="form-select">
            <option value="">Select a Brands</option>
            <option value="">Brands1</option>
            <option value="">Brands2</option>
            <option value="">Brands3</option>
            <option value="">Brands4</option>
          </select>
        </div>


        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_image1" class="form-label">Product image 1</label>
          <input type="file" name="product_image1" 
          id="product_image1" class="form-control"
          required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
          <label for="product_image2" class="form-label">Product image 2</label>
          <input type="file" name="product_image2" 
          id="product_image2" class="form-control"
          required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>


        
        
       </form>
</body>
</html>