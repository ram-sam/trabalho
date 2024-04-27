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
    <form action="{{route('produto.store')}}" method='post'>
        @csrf
        <div id='name'>
            <label for="name">nome </label>
            <input type="text" name='name' id='price'>
        </div>
        
        <div id='price'>
            <label for="price">price </label>
            <input type="number" name="price" id="price">
        </div>

        <div id='category'>
            <label for="category">category </label>
            <input type="text" name='category' id='category'>
        </div>

        <div id='brand'>
            <label for="brand">brand </label>
            <input type="text" name='brand' id='brand'>
        </div>
        <button type="submit">submit</button>
    </form>
</body>
</html>