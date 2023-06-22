<h1>User List</h1>
<table boarder="1">
    <tr>
       <td>ID</td>
       <td>Name</td>
       <td>Email</td>
       <td>Profile Photo</td>
    </tr>
@foreach($collection as $item)
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['first_name']}}</td> 
    <td>{{$item['last_name']}}</td>
    <td>{{$item['email']}}</td>
    <td><img src={{$item['avatar']}}/></td>
</tr>
@endforeach
</table>