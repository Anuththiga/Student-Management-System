<table class="table">
  <thead>
    <tr>
      <th scope="col">SID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Special</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{$student ->sid}}</td>
      <td>{{$student ->firstName}}</td>
      <td>{{$student ->lastName}}</td>
      <td>{{$student ->age}}</td>
      <td>{{$student ->special}}</td>
      <td>
        <a href="{{url('edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
