<?php
// Your code here!
// echo("Hello world!");

// if(isset($_POST["myInput"])){
//     echo("Your input was: " . $_POST["myInput"]);
// }
// ?>

<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </head>
<body>
    
    <div class="container">
    <h1>Enter the customer:</h1>
    <form method="POST" action="addCustomer.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputName1">First name:</label>
    <input name="FirstName" type="text" class="form-control" id="exampleInputName1" aria-describedby="firstNameHelp" placeholder="Enter first name">
    <small id="firstNameHelp" class="form-text text-muted">Enter your first name.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputSurname1">Last name:</label>
    <input name="LastName" type="text" class="form-control" id="exampleInputSurname1" aria-describedby="lastNameHelp" placeholder="Enter last name">
    <small id="lastNameHelp" class="form-text text-muted">Enter your first name.</small>
  </div>  
  <div class="form-group">
    <label for="exampleInputPhone1">Phone number:</label>
    <input name="Phone" type="number" class="form-control" id="exampleInputphone1" aria-describedby="phoneHelp" placeholder="Enter your phone number">
    <small id="phoneHelp" class="form-text text-muted">Enter your phone number.</small>
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</body>
</html>