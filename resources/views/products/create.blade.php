<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إضافة منتج</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></head>

<body>
<div class="container">
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
         إضافة منتج
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('products.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">اسم المنتج:</label>
                    <input type="text" class="form-control" name="product_name" />
                </div>
                <div class="form-group">
                    <label for="name">وصف المنتج:</label>
                    <input type="text" class="form-control" name="product_description" />
                </div>
                <div class="form-group">
                    <label for="price">سعر المنتج :</label>
                    <input type="text" class="form-control" name="product_price" />
                </div>
                <div class="form-group">
                    <label for="quantity">كمية المنتج:</label>
                    <input type="text" class="form-control" name="product_qty" />
                </div>
                <button type="submit" class="btn btn-primary">إضافة</button>
            </form>
        </div>
    </div>
</div>
<script src="js/app.js" type="text/js"></script>
</body>

</html>
