<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <form action={{ url('/update/'.$updateItem[0]->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="productName">product name:</label>
                    <input type="text" name="product_name" id="product_name" value="{!! $updateItem[0]->product_name !!}">
                </div>
                <div>
                    <label for="price">price</label>
                    <input type="text" name="price" id="price" value={!! $updateItem[0]->price !!}>
                </div>
                <div>
                    <label for="description">description</label>
                    <input type="textarea" name="description" id="description" value={!! $updateItem[0]->product_description !!}>
                </div>
                <div>
                    <label for="image">image</label>
                    <input type="file" name="image" id="image" accept="image/png, image/jpeg" value="{!! $updateItem[0]->image !!}">
                </div>
                <button type="submit">update</button>
            </form>

        </div>
    </div>
</div>
