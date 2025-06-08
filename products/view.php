v class="container mt-5">
  <h2>Product Name</h2>
  <img src="../assets/images/products/sample.jpg" alt="Product Image" class="img-fluid" width="300">
  <p>Price: ₹100</p>
  <p>Description: Fresh organic vegetables directly from the farm.</p>
  <form method="post" action="../cart.php">
    <input type="hidden" name="product_id" value="1">
    <input type="number" name="quantity" value="1" min="1" class="form-control w-25">
    <button type="submit" class="btn btn-success mt-2">Add to Cart</button>
  </form>
</div>
<?php include '../includes/footer.php'; ?>

