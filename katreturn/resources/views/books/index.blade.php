<a href="/book/create">Create</a>

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

  @for($i = 0 ; $i < sizeof($books) ; $i ++)
      <tr>
        <td>{{$books[$i]->id}}</td>
        <td>{{$books[$i]->name}}</td>
        <td>{{$books[$i]->detail}}</td>
        <td>{{$books[$i]->rate}}</td>
        <td>
            <a href="/book/{{$books[$i]->id}}">Show</a>
        </td>        
        <td>
            <a href="/book/{{$books[$i]->id}}/edit">Edit</a>
        </td>        
        <td>
            <form action="/book/{{$books[$i]->id}}" method="post">
                  {{ csrf_field() }}
      
                  {!! method_field('delete') !!}
                <input type="submit" value="Delete">
            </form>
        </td>
      </tr>
  @endfor

</table>