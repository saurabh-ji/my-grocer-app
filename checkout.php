v class="container mt-5">
  <h2>Checkout</h2>
  <form method="post" action="process_order.php">
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Address</label>
      <textarea name="address" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
      <label>Phone</label>
      <input type="text" name="phone" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Place Order</button>
  </form>
</div>
<?php include 'includes/footer.php'; ?>

