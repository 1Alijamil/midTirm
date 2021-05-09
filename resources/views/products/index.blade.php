<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>كل المنتجات</title>
</head>
<body>
<div class="container">

    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>المنتجات</h3>
            </div>
            <div>
                <a style="margin: 19px;" href="{{ route('products.create')}}"
                   class="btn btn-primary">إضافة منتج</a>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>الرقم</th>
                <th>اسم المنتج</th>
                <th>وصف المنتج</th>
                <th>سعر المنتج</th>
                <th>الكمية</th>
                <th width="280px">Actions</th>

            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <div class="row" style="margin-left: 20px;">

                            <a class="btn btn-info" href="{{ route('products.edit',$product->id)}}">تعديل</a>

                            <form style="padding-left: 20px;" action="{{ route('products.destroy', $product->id)}}"
                                  method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">حذف</button>
                            </form>

                        </div>


                    </td>

                </tr>
            @endforeach

        </table>
    </div>
</div>
</body>
</html>
