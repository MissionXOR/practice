<h1>All students List</h1>
@foreach ($data as $id=>$student )
    <h3>
        {{ $student->name }} |
        {{ $student->email }} |
        {{ $student->age }}
    </h3>
@endforeach