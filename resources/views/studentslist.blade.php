<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
<div class="card mb-3">
  <img class="card-img-top" src="https://eitrawmaterials.eu/wp-content/uploads/2019/05/Label-brochure-1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all the informations about students in the system</p>
    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->cne}}</td>
            <td>{{ $student->firstName }}</td>
            <td>{{ $student->secondName }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->speciality }}</td>
            <td>
              
                <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/destroy/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
           
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </div>
</div>
    
   
</body>
</html>