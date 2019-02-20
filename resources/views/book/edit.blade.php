<html>
<form method="post" action="{{route('book.update',$books->id)}}">
    @method('PATCH')
    @csrf
    <div>
        Title<input type="text" name="title" value="{{$books->title}}"/><br>
    body<input type="text" name="body"value="{{$books->body}}"/><br>
    content<input type="text" name="content"value="{{$books->content}}"/><br>
    path<input type="text" name="path"value="{{$books->path}}"><br>
    <button type="submit" name="submit">update</button>
    </div>
        
</form>
</html>
