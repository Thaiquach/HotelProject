<form action="/books" method="post">
    @csrf
    <label for="hotel_id">Hotel</label>
    <select name="hotel_id" id="hotel_id">
        @foreach($hotels as $hotel)
            <option value="{{$hotel->id}}">{{$hotel->id}}</option>
        @endforeach
    </select>
    <br>
    <label for="customer_id">Customer</label>
    <select name="customer_id" id="customer_id">
        @foreach($customers as $customer)
            <option value="{{$customer->id}}">{{$customer->id}}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" value="Create">
</form>