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
<h2>Signup Form</h2>
<form method="POST" action="user/posts">
  {{ csrf_field() }}
  <div class="container">
    <div class="form-group">
      <label for="name">Name</label><br>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
    </div>

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>

    <div class="form-group">
      <label for="">Position</label>
      <input type="text" class="form-control" id="position" placeholder="Position" name="position" required>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Experience</label>
      <input type="text" class="form-control" id="experience" placeholder="Experience" name="experience" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</body>
</html>