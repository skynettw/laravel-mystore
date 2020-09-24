<button><a href="{{ route('home') }}">Home</a></button>
<h2>Video List</h2>
<table>
<tr><td>影片集</td><td>擁有者</td></tr>
    @foreach($data as $item)
        <tr>
        <td>{{$item->vname}}</td>
        <td>{{$item->uname}}</td>
        </tr>
    @endforeach
</table>