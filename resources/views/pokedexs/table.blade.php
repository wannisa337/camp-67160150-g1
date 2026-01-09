<h1>Pokedex Lists</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Species</th>
            <th>Height</th>
            <th>Weight</th>
            <th>HP</th>
            <th>Attack</th>
            <th>Defense</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>

    @foreach ($pokedexs as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->species }}</td>
        <td>{{ $item->height }}</td>
        <td>{{ $item->weight }}</td>
        <td>{{ $item->hp }}</td>
        <td>{{ $item->attack }}</td>
        <td>{{ $item->defense }}</td>
        <td>
            <img src="{{ asset('images/'.$item->image_url) }}" width="80">
        </td>
        <td>
            <a class="btn btn-warning" href="{{ url('/pokedexs/'.$item->id.'/edit') }}">
                แก้ไข
            </a>

            <form action="{{ url('/pokedexs/'.$item->id) }}" method="post" style="display:inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger">ลบ</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
