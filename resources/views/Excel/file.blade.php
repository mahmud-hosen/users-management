<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Information</title>
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
        <a class="navbar-brand" href="#">Sticky top</a>
        <a class="navbar-brand" href="excelFile">Import/Export Excel File</a>

       </nav>
    </div>
  </div>
 
  <div class="row">
     <h2> Student Information Import from Excel File.</h2>
    <div class="col-md-8">
      <form action="{{ url('excelImport') }}" method="post" enctype="multipart/form-data">
        @csrf
     
        <div class="form-group">
          <input type="file" class="form-control-file border" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Import</button>
       </form>
    </div>
  </div>

  
  @if(!$students->isEmpty())
  <div class="row mt-5">
    <div class="col-md-4">
      <h2> Student Information </h2>
    </div>
    <div class="col-md-4">
      <a class="btn btn-info float-right" href="excelExport" role="button">Export</a>

    </div>
  </div>
   
  <div class="row">
    <div class="col-md-8">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
          </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
          <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->department }}</td>

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
       Student Information is not inserted in the Database.
      </div>
    </div>
  </div>
  @endif

  

</div>

</body>
</html>
