<form action="/book" method="post">
		
		{{ csrf_field() }}

  		Name:<br>
  		<input type="text" name="name" value="">
  		<br>
  		Detail:<br>
  		<input type="text" name="detail" value="">
  		<br>
  		Rate:<br>
  		<input type="text" name="rate" value="">
	  	<br><br>
	  	<input type="submit" value="Submit">
</form> 
