<ul>
    <li>{{$produto->name}}</li>
    <li>{{$produto->category}}</li>
    <li>{{$produto->brand}}</li>
    <li>{{$produto->price}}</li>
    <button><a href="{{route('produto.edit',$produto->id)}}">edit</a></button>

    <form action="{{route('produto.destroy',$produto->id)}}" method='post'>
        @csrf
        @method('delete')
        <button>delete</button>
    </form>
</ul>