<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    @include("navbar")
  @if($layout == 'index')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-7">
          @include("studentsList")
        </section>
        <section class="col-5">
          
        </section>
      </div>
    </div>
  @elseif($layout == 'create')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-7">
          @include("studentsList")
        </section>
        <section class="col-5">
        <form action="{{url('/store')}}" method="post">
          @csrf
            <div class="mb-3">
              <label class="form-label">SID</label>
              <input name="sid" type="text" class="form-control"  placeholder="Enter SID">
            </div>
            <div class="mb-3">
              <label class="form-label">First Name</label>
              <input name="firstName" type="text" class="form-control"  placeholder="Enter First Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Last Name</label>
              <input name="lastName" type="text" class="form-control"  placeholder="Enter Last Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Age</label>
              <input name="age" type="text" class="form-control"  placeholder="Enter Age">
            </div>
            <div class="mb-3">
              <label class="form-label">Special</label>
              <input name="special" type="text" class="form-control"  placeholder="Enter Special">
            </div>
   
            <input type ="submit" class="btn btn-info" value="Save">
            <input type ="reset" class="btn btn-warning" value="Reset">

          </form>
        </section>
      </div>
    </div>
  @elseif($layout == 'show')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("studentsList")
        </section>
        <section class="col">
          
        </section>
      </div>
    </div>
  @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-7">
          @include("studentsList")
        </section>
        <section class="col-5">
        <form action="{{url('/update/'. $student->id)}}" method="post">
          @csrf
            <div class="mb-3">
              <label class="form-label">SID</label>
              <input name="sid" value="{{$student->sid}}" type="text" class="form-control"  placeholder="Enter SID">
            </div>
            <div class="mb-3">
              <label class="form-label">First Name</label>
              <input name="firstName" value="{{$student->firstName}}" type="text" class="form-control"  placeholder="Enter First Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Last Name</label>
              <input name="lastName" value="{{$student->lastName}}" type="text" class="form-control"  placeholder="Enter Last Name">
            </div>
            <div class="mb-3">
              <label class="form-label">Age</label>
              <input name="age" value="{{$student->age}}" type="text" class="form-control"  placeholder="Enter Age">
            </div>
            <div class="mb-3">
              <label class="form-label">Special</label>
              <input name="special" value="{{$student->special}}" type="text" class="form-control"  placeholder="Enter Special">
            </div>
   
            <input type ="submit" class="btn btn-info" value="Update">
            <input type ="reset" class="btn btn-warning" value="Reset">

          </form>
        </section>
      </div>
    </div>
  @endif
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>