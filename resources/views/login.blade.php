<!DOCTYPE html>
<html>
<style>
/* Add padding to container elements */
.container {
    padding: 16px;
    width: 600px;
    margin: 0 auto;
     border: 1px solid #ccc;
}

h2 {
    width: 0150px;
    margin: 0 auto;
    padding-bottom: 30px;
    padding-top: 30px
}
/* Set a style for all buttons */
button {
    background-color: #1E90FF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

input[type=text], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
<body>

<h2>Login Form</h2>
<form method="POST" action="{{url('user/login')}}">
  {{ csrf_field() }}
  <div class="container">
   
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>

    <div class="form-group">
      <label for="">Password</label>
      <input type="text" class="form-control" id="password" placeholder="Password" name="password" required>
    </div>
    
    <button type="Login" class="btn btn-primary">Login</button>
  </div>

   @if (Session::has('status'))
            <div class="alert alert-box {{Session::get('alert-class')}}" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 style="font-size:14px;margin-bottom:2px">{{ Session::get('status') }}</h4>
            </div>
     @endif
</form>

</body>
</html>

<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>