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
                <th>id</th>
                <th>name</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr style="{{ $loop->odd ? 'background: #e1e1e1;' : '' }}">
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="action-buttons">

                    <form action="{{ route('category.update',$category->id)}}">
                        <button type="submit">update</button>
                    </form>


                    <form action="{{ route('category.destroy',$category->id) }} " method="get">
                        @method('DELETE')
                        @csrf
                        <button type="submit">delete</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('category.create')}}">
        <button type=submit style="margin-left: 650px;">Create a new category</button>
    </form>
</body>

</html>