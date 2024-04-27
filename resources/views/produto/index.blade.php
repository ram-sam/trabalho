<ul>
    @foreach($produtos as $item)
    <a href="{{route('produto.show',$item->id)}}"><li>{{$item-> brand}} - {{$item -> name}} {{$item->price}}</li></a>
    @endforeach
</ul>