<html>
<head>
<title></title>
</head>
<body>
<form method="post" action="{{ url('/calc')}}">
{{ csrf_field()}}
ENTER FIRST NUMBER : <input type="text" name="number1"><br/>
ENTER SECOND NUMBER : <input type="text" name="number2"><br/>
<input type="submit" value="ADD">
</form> 
</body>
</html>