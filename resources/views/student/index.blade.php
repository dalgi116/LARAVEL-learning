@include('layouts.style')

<br>
<br>
<br>

<a href="./">
  <button type="btn btn-primary">BACK</button>
</a>

<div class="container" style="text-align:center">
  <div align="right">
    <a href="{{route('student.create')}}" class="btn btn-primary">Add student</a>
  </div>
  <br>
  <h2 aling="center">List of students</h2>
  <br>
  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
  @endif
  <table class="table table-boarded">
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach($students as $row)
    <tr>
      <td>{{$row['firstName']}}</td>
      <td>{{$row['lastName']}}</td>
      <td></td>
      <td></td>
    </tr>
    @endforeach
  </table>
</div>
