<form action="/store" method="post">
		
		{{ csrf_field() }}

  		Title:<br>
  		<input type="text" name="title" value="">
  		<br>
  		Price:<br>
  		<input type="text" name="price" value="">
  		<br>
  		
	  	<input type="submit" value="Submit">
</form> 
