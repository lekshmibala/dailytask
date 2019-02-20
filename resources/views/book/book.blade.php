
<html>
<form method="post" action="{{route('book.store')}}">
    @csrf
    <div>
    Title<input type="text" name="title"><br>
    body<input type="text" name="body"><br>
    content<input type="text" name="content"><br>
    path<input type="text" name="path"><br>
    <button type="submit" name="submit">add</button>
    </div>
        
</form>
</html>