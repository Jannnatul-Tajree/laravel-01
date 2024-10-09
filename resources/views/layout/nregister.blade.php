@include('layout.header')
<div class="container">
<div class="row d-flex justify-content-center m-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
                    <form method="post" action="{{route('register.post')}}">
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input placeholder="Enter your Name" type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input placeholder="Enter your Email" type="gmail" name="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">password</label>
                        <input placeholder="Enter your password" type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>