<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
</head>
<body>
    


<form action="{{ route('product.edit',$product->id)}}" method="POST">
    @method('PUT')
	@csrf
		Name of the product:<br>
		<input type="text" name="name" value="{{$product->name }}">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>

</body>
</html>