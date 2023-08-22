<form action="/rooms/{{ $room->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="number">Number</label>
    <input type="text" name="number" id="number" value="{{$room->number}}">
    <br>
    <label for="type">Type</label>
    <input type="text" name="type" id="type" value="{{$room->type}}">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{$room->price}}">
    <br>
    
    <input type="submit" value="Edit">
</form>