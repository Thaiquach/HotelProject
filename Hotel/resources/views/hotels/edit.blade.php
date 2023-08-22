<form action="/hotels/{{ $hotels->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="room_id">Room</label>
    <select name="room_id" id="room_id">
        @foreach($rooms as $room)
            <option value="{{$room->id}}" @if($room->id == $hotels->room_id) selected @endif>{{$room->id}}</option>
        @endforeach
    </select>
    <br>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$hotels->name}}">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{$hotels->address}}">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{$hotels->phone}}">
    <br>
    <input type="submit" value="Edit">
</form>