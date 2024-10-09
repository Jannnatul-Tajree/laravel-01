@include('layout.header')
<div class="container"></div>
<div class="row d-flex justify-content-center m-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <form method="post" action="{{route('login.post')}}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input placeholder="Enter your Email" type="gmail" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input placeholder="Enter your password" type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</div>
</div>