<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0">All Courses and Enrolled Students</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Course Title</th>
                            <th>Course Code</th>
                            <th>Enrolled Students</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->title }}</td>
                            <td><code>{{ $course->code }}</code></td>
                            <td>
                                <ul class="list-unstyled mb-0">
                                    @foreach($course->students as $student)
                                        <li><i class="bi bi-person"></i> {{ $student->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/students" class="btn btn-primary mt-3">Back to Students</a>
            </div>
        </div>
    </div>
</body>
</html>
