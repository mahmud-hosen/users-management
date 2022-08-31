
<!-- ................................. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
   <div class="row">
    <div class="col-md-8">
       <nav class="navbar sticky-top navbar-light  " style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="/">Simple Data Set</a>
        <a class="navbar-brand" href="excelFile">Import/Export Excel File</a>
       </nav>
    </div>
  </div>
 

  @if(!$employees->isEmpty())
  <div class="row mt-5">
    <div class="col-md-4">
      <h2> Employee Information </h2>
    </div>
  </div>
   
  <div class="row">
    <div class="col-md-8">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>SI</th>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach($employees as $employee)
          <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>

          </tr>
          @endforeach
        
        </tbody>
      </table>
    </div>
  </div>
 </div>
  @else
  <div class="row ">
    <div class="col-md-8">
      <div class="alert alert-danger text-center mt-5" role="alert">
       Employee information is not inserted in the Database.
      </div>
    </div>
  </div>
  @endif

  

</div>

</body>
</html>

