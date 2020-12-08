@include('layouts.style')

<br>
<br>
<br>

<div class="container" style="text-align:center">
  <form action="{{url('student')}}" method="post">
    <br>
    <h2 aling="center">Create a database index</h2>
    <br>
    @csrf
    <input type="text" name="firstName" class="form-control" placeholder="Enter first name...">
    <br>
    <input type="text" name="lastName" class="form-control" placeholder="Enter last name...">
    <br>
    <input type="submit" class="btn btn-primary">
  </form>
</div>
