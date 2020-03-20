{{--
<div class="alert">
    <p>Alert - {{ $content ?? '' }}</p>
</div>
--}}


@if ($errors->any())
<ul>
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
</ul>
@endif
