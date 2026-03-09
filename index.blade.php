<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Students and their Courses</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Student Name</th>
                            <th>Enrolled Courses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td><strong>{{ $student->name }}</strong></td>
                            <td>
                                @foreach($student->courses as $course)
                                    <span class="badge bg-info text-dark">{{ $course->title }} ({{ $course->code }})</span>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/courses" class="btn btn-secondary mt-3">View All Courses</a>
            </div>
        </div>
    </div>
</body>
</html>
