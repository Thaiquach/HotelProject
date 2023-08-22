<form action="/customers" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <br>
    
    <input type="submit" value="Create">
</form>