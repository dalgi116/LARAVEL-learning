<div class="container" style="text-align:center">
  <div class="row">
    <br>
    <h2 aling="center">Add data</h2>
    <form action="{{url('student')}}" method="post">
      @csrf
        <input type="text" name="firstName" class="form-control" placeholder="Enter first name...">
        <br>
        <input type="text" name="lastName" class="form-control" placeholder="Enter last name...">
        <br>
        <input type="submit" class="btn btn-primary">
    </form>
  </div>
</div>
