<?php
// Include the database connection file
include('../includes/connect.php');

// Check if the form is submitted
if (isset($_POST['insert_cat'])) {
    // Get the category title from the form
    $category_title = $_POST['cat_title'];

    // Insert the category into the database
    $insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
    $result = mysqli_query($con, $insert_query);

    // Check if the query was successful
    if ($result) {
        echo "<script>alert('Category has been inserted successfully')</script>";
    } else {
        echo "<script>alert('Failed to insert category')</script>";
    }
}
?>


<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1">
      <i class="fa-solid fa-receipt"></i>
    </span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
    <button class="bg-info p-2 my-3 border-0">Insert Categories</button>
  </div>
</form>
