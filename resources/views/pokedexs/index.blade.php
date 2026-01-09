@extends('template.default')

@section('content')
    <h1>Pokedex Create</h1>
    <form action="{{url ('/pokedexs')}}"method="post" enctype="multipart/form-data">
        @csrf
       <div class="row">
                <div class="col-md-6">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name">

                    <label>Type</label>
                    <input class="form-control" type="text" name="type">

                    <label>Species</label>
                    <input class="form-control" type="text" name="species">

                    <label>Height</label>
                    <input class="form-control" type="number" name="height">
                </div>

                <div class="col-md-6">
                    <label>Weight</label>
                    <input class="form-control" type="number" name="weight">

                    <label>HP</label>
                    <input class="form-control" type="number" name="hp">

                    <label>Attack</label>
                    <input class="form-control" type="number" name="attack">

                    <label>Defense</label>
                    <input class="form-control" type="number" name="defense">
                </div>
            </div>

            <label class="mt-2">Image</label>
            <input class="form-control" type="file" name="image">

            <div class="text-end mt-3">
                <button class="btn btn-success px-4" type="submit">
                    บันทึก
                </button>
            </div>
    </form>
    @include('pokedexs.table')
@endsection
