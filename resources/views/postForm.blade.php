<form action="{{ url('form') }}" method="post">
	   {{ csrf_field() }}
	Name: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	<input type="submit">
</form>