<table border="1">
    <thead>
        <tr>
            <td>ID</td>
              <td>title</td>
                <td>body</td>
                  <td>content</td>
                    <td>path</td>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
    <tr><td>
        {{$book->id}}
        </td>
        <td>
        {{$book->title}}
        </td>
        <td>
        {{$book->body}}
        <td>
        {{$book->path}}
        </td>
        <td>
        {{$book->content}}
        </td>
        <td> <a href="{{route('book.edit',$book->id)}}">Edit</a></td>
        <td> <form action="{{route('book.destroy',$book->id)}}" method="post">
            @csrf
            
            @method('DELETE')
            <button type="submit">delete</button>
            </form></td>
    </tr>
    @endforeach
    </tbody>
    
</table>