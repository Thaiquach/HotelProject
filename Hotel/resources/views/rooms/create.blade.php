<form action="/rooms" method="post">
    @csrf
    <label for="number">Number</label>
    <input type="text" name="number" id="number">
    <br>
    <label for="type">Type</label>
    <input type="text" name="type" id="type">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    <br>
    
    <input type="submit" value="Create">
</form>