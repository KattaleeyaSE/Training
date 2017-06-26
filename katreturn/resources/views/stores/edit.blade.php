
@if($store != null)
<form action="/store/{{$store->id}}" method="post">
		
		{{ csrf_field() }}
    {!! method_field('patch') !!}

  		Title:<br>
  		<input type="text" name="title" value="{{$store->title}}">
  		<br>
  		Price:<br>
  		<input type="text" name="price" value="{{$store->price}}">
  		<br>
  		
	  	<input type="submit" value="Submit">
</form> 
@endif