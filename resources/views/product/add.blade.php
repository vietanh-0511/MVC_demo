<form action={{ url('/add') }} method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="productName">product name:</label>
        <input type="text" name="product_name" id="product_name" required>
    </div>
    <div>
        <label for="price">price</label>
        <input type="text" name="price" id="price" required>
    </div>
    <div>
        <label for="description">description</label>
        <input type="textarea" name="description" id="description" required>
    </div>
    <div>
        <label for="image">image</label>
        <input type="file" name="image" id="image" accept="image/png, image/jpeg" required>
    </div>
    <button type="submit">Add</button>
</form>
