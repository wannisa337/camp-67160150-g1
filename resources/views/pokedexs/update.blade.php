@extends('template.default')

@section('content')
    <h1>Pokedex Update</h1>
    <form action="{{url ('/pokedexs/'.$pokedex_update->id)}}"method="post" enctype="multipart/form-data">
        @csrf
         @method('PUT')
       <div class="row">

        <div class="col-md-6">
            <label>Name</label>
            <input class="form-control"
                   type="text"
                   name="name"
                   value="{{ $pokedex_update->name }}">

            <label>Type</label>
            <input class="form-control"
                   type="text"
                   name="type"
                   value="{{ $pokedex_update->type }}">

            <label>Species</label>
            <input class="form-control"
                   type="text"
                   name="species"
                   value="{{ $pokedex_update->species }}">

            <label>Height</label>
            <input class="form-control"
                   type="number"
                   name="height"
                   value="{{ $pokedex_update->height }}">
        </div>

        <div class="col-md-6">
            <label>Weight</label>
            <input class="form-control"
                   type="number"
                   name="weight"
                   value="{{ $pokedex_update->weight }}">

            <label>HP</label>
            <input class="form-control"
                   type="number"
                   name="hp"
                   value="{{ $pokedex_update->hp }}">

            <label>Attack</label>
            <input class="form-control"
                   type="number"
                   name="attack"
                   value="{{ $pokedex_update->attack }}">

            <label>Defense</label>
            <input class="form-control"
                   type="number"
                   name="defense"
                   value="{{ $pokedex_update->defense }}">
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
