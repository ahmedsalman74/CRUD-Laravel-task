<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>category_id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $products )
            <tr style="{{ $loop->odd ? 'background: #e1e1e1;' : '' }}">
                <td>{{ $products->name }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->category_id }}</td>
                <td class="action-buttons">

                    <form action="{{ route('product.update',$product->id)}}">
                        <button type="submit">update</button>
                    </form>


                    <form action="{{ route('product.destroy',$product->id) }} " method="get">
                        @method('DELETE')
                        @csrf
                        <button type="submit">delete</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('product.create')}}">
        <button type=submit style="margin-left: 650px;">Create a new product</button>
    </form>
</body>

</html>