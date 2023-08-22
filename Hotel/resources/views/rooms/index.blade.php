<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Number</th>
        <th>Type</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($rooms as $rooms)
        <tr>
            <td>{{ $rooms->id }}</td>
            <td>{{ $rooms->number }}</td>
            <td>{{ $rooms->type }}</td>
            <td>{{ $rooms->price }}</td>
            
            <td>
                <a href="/rooms/{{$rooms->id}}/edit">Edit</a>
                <form action="/rooms/{{ $rooms->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/rooms/create'" />
<a href="/customers" class="btn btn-success">Customer</a>
<a href="/hotels" class="btn btn-success">Hotel</a>
<a href="/books" class="btn btn-success">Book</a>