@if($book != null)
	Id : {{$book->id}} <br/>
	Name : {{$book->name}} <br/>
	Detail : {{$book->detail}} <br/>
	Rate : {{$book->rate}} <br/>
@endif

<a href="/book">
	Back
</a>