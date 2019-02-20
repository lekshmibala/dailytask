<html>
<form method="post" action="{{route('stud.update',$books->id)}}">
    @method('PATCH')
    @csrf
    <div>
        Title<input type="text" name="name" value="{{$books->name}}"/><br>
    body<input type="text" name="class"value="{{$books->class}}"/><br>
    content<input type="text" name="course"value="{{$books->course}}"/><br>
    path<input type="text" name="college"value="{{$books->college}}"><br>
    <button type="submit" name="submit">update</button>
    </div>
        
</form>
</html>