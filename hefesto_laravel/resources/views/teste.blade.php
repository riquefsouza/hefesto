<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    TESTE 
    {{ $teste }}
    {!! $teste2 !!}

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        <!--
        <input type="text" name="_token" value="{{ csrf_token() }}">
        -->
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="text" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>