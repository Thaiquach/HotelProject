<form action="/books/{{ $books->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="hotel_id">Hotel</label>
    <select name="hotel_id" id="hotel_id">
        @foreach($hotels as $hotel)
            <option value="{{$hotel->id}}" @if($hotel->id == $books->hotel_id) selected @endif>{{$hotel->id}}</option>
        @endforeach
    </select>
    <br>
    <label for="customer_id">Customer</label>
    <select name="customer_id" id="customer_id">
        @foreach($customers as $customer)
            <option value="{{$customer->id}}" @if($customer->id == $books->customer_id) selected @endif>{{$customer->id}}</option>
        @endforeach
    </select>
    <br>
    
    <input type="submit" value="Edit">
</form>