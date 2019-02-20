<table border="1">
    <thead>
        <tr>
            <td>ID</td>
              <td>name</td>
                <td>class</td>
                  <td>course</td>
                    <td>college</td>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
    <tr><td>
        {{$book->id}}
        </td>
        <td>
        {{$book->name}}
        </td>
        <td>
        {{$book->class}}
        <td>
        {{$book->course}}
        </td>
        <td>
        {{$book->college}}
        </td>
        <td> <a href="{{route('stud.edit',$book->id)}}">Edit</a></td>
        <td> <form action="{{route('stud.destroy',$book->id)}}" method="post">
            @csrf
            
            @method('DELETE')
            <button type="submit">delete</button>
            </form></td>
    </tr>
    @endforeach
    </tbody>
    
</table>