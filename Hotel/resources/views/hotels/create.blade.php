<form action="/hotels" method="post">
    @csrf
    <label for="room_id">Room</label>
    <select name="room_id" id="room_id">
        @foreach($rooms as $room)
            <option value="{{$room->id}}">{{$room->id}}</option>
        @endforeach
    </select>
    <br>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <br>
    <input type="submit" value="Create">
</form>