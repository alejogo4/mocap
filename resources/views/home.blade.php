@extends('layouts.app')

@section('content')
<div id="fh5co-page">
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

    </aside>
    <div id="fh5co-main">
        <div class="fh5co-narrow-content">
            <form action="newPost" method="POST">
                <input type="text" name="nombre">
                <input type="text" name="descripcion">
                <input type="file" name="imgPublicacion">
                <input type="file" name="url[]" multiple>
                <button type="submit">Registrar publicación</button>
            </form>
        </div>
    </div>
</div>
@endsection
