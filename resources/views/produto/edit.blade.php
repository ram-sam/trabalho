<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <form action="{{route('produto.update',$produto->id)}}" method='post'>
        @csrf
        @method('put')
        <div id='name'>
            <label for="name">nome </label>
            <input type="text" name='name' id='price' value='{{$produto->name}}'>
        </div>
        
        <div id='price'>
            <label for="price">price </label>
            <input type="number" name="price" id="price" value='{{$produto->price}}'>
        </div>

        <div id='category'>
            <label for="category">category </label>
            <input type="text" name='category' id='category' value='{{$produto->category}}'>
        </div>

        <div id='brand'>
            <label for="brand">brand </label>
            <input type="text" name='brand' id='brand' value='{{$produto->brand}}'>
        </div>
        <button type="submit">submit</button>
    </form>
</body>
</html>