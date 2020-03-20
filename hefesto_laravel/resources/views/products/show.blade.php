<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Produto {{ $product->name }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $product->name }} <a href="{{ route('products.index') }}"><<</a></h1>
    
    <ul>
        <li><strong>Nome: </strong>{{ $product->name }}</li>
        <li><strong>Preço: </strong>{{ $product->price }}</li>
        <li><strong>Descrição: </strong>{{ $product->description }}</li>
    </ul>

    <form action="{{ route('products.destroy', $product->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar o produto: {{ $product->name }}</button>
    </form>

</body>
</html>