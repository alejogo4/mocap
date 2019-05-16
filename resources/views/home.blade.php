@extends('layouts.app')

@section('content')
<div id="fh5co-page">
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

    </aside>
    <div id="fh5co-main">
        {{--  <div class="fh5co-narrow-content">  --}}
            <div class="card-body">
            <form action="newPost" enctype="multipart/form-data" class="form" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="descripcion">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input type="file" class="form-control" name="imgPublicacion">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <input type="file" class="form-control" name="url[]" multiple>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-info" type="submit">Registrar publicación</button>
                </div>
            </form>
        </div>
        </div>
</div>
@endsection
