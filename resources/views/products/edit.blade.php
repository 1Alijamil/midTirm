<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تعديل منتج</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            تعديل منتج
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">اسم المنتج:</label>
                    <input type="text" class="form-control" name="product_name" value={{ $product->name }} />
                </div>
                <div class="form-group">
                    <label for="name">وصف المنتج:</label>
                    <input type="text" class="form-control" name="product_description"
                           value={{ $product->description}} />
                </div>
                <div class="form-group">
                    <label for="price">سعر المنتج :</label>
                    <input type="text" class="form-control" name="product_price" value={{ $product->price }} />
                </div>
                <div class="form-group">
                    <label for="quantity">كمية المنتج:</label>
                    <input type="text" class="form-control" name="product_qty" value={{ $product->quantity }} />
                </div>
                <button type="submit" class="btn btn-primary">تعديل المنتج</button>
            </form>
        </div>
    </div>
</div>
<script src="js/app.js" type="text/js"></script>
</body>

</html>
