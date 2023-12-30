<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Bootstrap Table Example</title>
</head>
<body>

<div class="container mt-4">
  <h2>Student Table</h2>
  <table class="table">
    <thead>

      <tr>
        <th>Serial</th>
        <th>Student Name</th>
        <th>Class Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getAllStudentByClass as $key => $studentInfo)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>
                   @foreach ( $studentInfo->students  as $studentName )
                      <li> {{ $studentName->student_name }}</li>
                   @endforeach
                </td>
                <td>{{ $studentInfo->class_name }}</td>
            </tr>
        @endforeach
        <!-- Add more rows as needed -->
    </tbody>
    
  </table>
</div>


<div class="container mt-4">
    <h2>Student Table 2</h2>
    <table class="table">
      <thead>
  
        <tr>
          <th>Serial</th>
          <th>Student Name</th>
          <th>Class Name</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($getAllClassByStudent as $key => $studentInfo)
              <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $studentInfo->student_name }}</td>
                  <td>{{ $studentInfo->getClass->class_name   }}</td>
              </tr>
          @endforeach
          <!-- Add more rows as needed -->
      </tbody>
      
    </table>
  </div>

<!-- Bootstrap JS and Popper.js (Optional, for some Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
