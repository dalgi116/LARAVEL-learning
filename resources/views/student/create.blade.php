@include('layouts.style')

<br>
<br>
<br>

<a href="./">
  <button type="btn btn-primary">BACK</button>
</a>

<div class="container" style="text-align:center">
  <form action="{{url('student')}}" method="post">
    <br>
    <h2 aling="center">Create a database index</h2>
    <br>
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors -> all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if(Session::has('success'))
      <div class="alert alert-success">
          <p>{{\Session::get('success')}}</p>
      </div>
    @endif

    @csrf
    <input type="text" name="firstName" class="form-control" placeholder="Enter first name...">
    <br>
    <input type="text" name="lastName" class="form-control" placeholder="Enter last name...">
    <br>
    <input type="submit" class="btn btn-primary">
  </form>
</div>
