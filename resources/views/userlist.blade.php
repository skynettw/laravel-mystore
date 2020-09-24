<h2>User list</h2>
<table>
<tr><td>id</td><td>Name</td><td>Email</td></tr>
@foreach ($users as $user) 
@if ($loop->odd)
<tr bgcolor=#ffccff>
@else
<tr bgcolor=#ccffff>
@endif
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
</tr>
@endforeach
</table>