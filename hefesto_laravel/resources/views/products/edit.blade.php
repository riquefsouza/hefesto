<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Editar item {{ $product->name }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data" class="form">
        <!--
        <input type="hidden" name="_method" value="PUT">
        -->
        @method('PUT')
        @include('products._partials.form')
    </form>
</body>
</html>