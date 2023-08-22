<form action="/customers/{{ $customer->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$customer->name}}">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$customer->email}}">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{$customer->phone}}">
    <br>
    
    <input type="submit" value="Edit">
</form>