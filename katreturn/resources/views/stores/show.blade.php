@if($store != null)
	Id : {{$store->id}} <br/>
	Title : {{$store->title}} <br/>
	Price : {{$store->price}} <br/>
	
@endif

<a href="/store">
	Back
</a>