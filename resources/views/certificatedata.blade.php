
<h1>This is certificate</h1>

@foreach($data as $d)
  <h1>{{$d->id}}</h1>
  <h1>{{$d->name}}</h1>
  <h1>{{$d->address}}</h1>
  <h1>{{$d->fathername}}</h1>
@endforeach