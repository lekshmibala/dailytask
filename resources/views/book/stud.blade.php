<html>
<form method="post" action="{{route('stud.store')}}">
    @csrf
    <div>
    name<input type="text" name="name"><br>
    class<input type="text" name="class"><br>
    course<input type="text" name="course"><br>
    college<input type="text" name="college"><br>
    <button type="submit" name="submit">add</button>
    </div>
        
</form>
</html>
