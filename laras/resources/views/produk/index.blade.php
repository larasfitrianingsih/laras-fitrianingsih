<!DOCTYPE html>
<html>
<head>
<title>produk saya</title>
</head>
<body>
<h1>data produk</h1>
<table border="1">
	<thead>
		<tr>No</tr>
		<tr>Name Produk</tr>
	</thead>
	<tbody>
		@foreach ($produk as $i => $v)
		<tr>
			<td> {{$i+1}}</td>
			<td> {{$v}}</td>
			</tr>
			@endforeach
			
</table>
</body>
</html>
