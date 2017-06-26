<a href="/store/create">Create</a>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th> 
    <th>Detail</th>
    <th>Rate</th>
    <th>Show</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  @for($i = 0 ; $i < sizeof($stores) ; $i ++)
      <tr>
        <td>{{$stores[$i]->id}}</td>
        <td>{{$stores[$i]->title}}</td>
        <td>{{$stores[$i]->price}}</td>

        <td>
            <a href="/store/{{$stores[$i]->id}}">Show</a>
        </td>        
        <td>
            <a href="/store/{{$stores[$i]->id}}/edit">Edit</a>
        </td>        
        <td>
            <form action="/store/{{$stores[$i]->id}}" method="post">
                  {{ csrf_field() }}
      
                  {!! method_field('delete') !!}
                <input type="submit" value="Delete">
            </form>
        </td>
      </tr>
  @endfor

</table>