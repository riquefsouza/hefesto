<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar item {{ $id }}</h1>

    <form action="{{ route('products.update', $id) }}" method="post">
        <!--
        <input type="hidden" name="_method" value="PUT">
        -->
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>