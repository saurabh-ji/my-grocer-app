re_once 'includes/config.php'; // DB connection

try {
    $stmt = $conn->query("SELECT * FROM products ORDER BY created_at DESC");
    $products = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching products: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Grocery Shop</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Your CSS -->
</head>
<body>
    <h1>Welcome to My Grocery Shop</h1>
    <div class="products-container" style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php if (count($products) > 0): ?>
            <?php foreach ($products as $product): ?>
                <div class="product-card" style="border:1px solid #ccc; padding:15px; width: 250px;">
                    <?php if (!empty($product['image_url'])): ?>
                        <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 100%; height: 150px; object-fit: cover;">
                    <?php else: ?>
                        <div style="width:100%; height:150px; background: #eee; display:flex; align-items:center; justify-content:center;">
                            No Image
                        </div>
                    <?php endif; ?>
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <p><?= nl2br(htmlspecialchars($product['description'])) ?></p>
                    <p><strong>Price:</strong> ₹<?= number_format($product['price'], 2) ?></p>
                    <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <label>
                            Quantity:
                            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">
                        </label>
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products available.</p>
        <?php endif; ?>
    </div>
</body>
</html>

