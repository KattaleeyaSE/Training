@if($book != null)
  <form action="/book/{{$book->id}}" method="post">
  		
  		{{ csrf_field() }}
      
      {!! method_field('patch') !!}

    		Name:<br>
    		<input type="text" name="name" value="{{$book->name}}">
    		<br>
    		Detail:<br>
    		<input type="text" name="detail" value="{{$book->detail}}">
    		<br>
    		Rate:<br>
    		<input type="text" name="rate" value="{{$book->rate}}">
  	  	<br><br>
  	  	<input type="submit" value="Submit">
  </form> 
@endif