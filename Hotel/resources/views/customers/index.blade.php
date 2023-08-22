<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    @foreach($customers as $customers)
        <tr>
            <td>{{ $customers->id }}</td>
            <td>{{ $customers->name }}</td>
            <td>{{ $customers->email }}</td>
            <td>{{ $customers->phone }}</td>
            
            <td>
                <a href="/customers/{{$customers->id}}/edit">Edit</a>
                <form action="/customers/{{ $customers->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/customers/create'" />
<a href="/books" class="btn btn-success">Book</a>
<a href="/hotels" class="btn btn-success">Hotel</a>
<a href="/rooms" class="btn btn-success">Room</a>