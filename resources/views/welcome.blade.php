<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Students List</h1>
                <a href="/newStudent" class="btn btn-success btn-sm mb-4">Add Student</a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id=>$student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->age }}</td>
                            <td>
                                <a href="{{ route('view.student',$student->id) }}" class="btn btn-primary">view</a>
                            </td>
                            <td>
                                <a href="{{ route('delete.student',$student->id) }}" class="btn btn-danger">delete</a>
                            </td>
                            <td>
                                <a href="{{ route('update.student',$student->id) }}" class="btn btn-warning">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{-- <div class="mt-5">
                    {{-- {{ $data->links() }} --}}
                </div> --}}
            </div>
        </div>
    </div>
</body>
</html>




