<?php
// Your code here!
// echo("Hello world!");

// if(isset($_POST["myInput"])){
//     echo("Your input was: " . $_POST["myInput"]);
// }
// 
?>

<html>

<?php
include("header.php")
?>

<body>
    <?php
    include("navbar.php")
    ?>
    <div class="container">
        <h1>Enter the customer:</h1>
        <form method="POST" action="addCustomer.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input name="Email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">First name:</label>
                <input name="FirstName" type="text" class="form-control" id="exampleInputName1"
                    aria-describedby="firstNameHelp" placeholder="Enter first name">
                <small id="firstNameHelp" class="form-text text-muted">Enter your first name.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputSurname1">Last name:</label>
                <input name="LastName" type="text" class="form-control" id="exampleInputSurname1"
                    aria-describedby="lastNameHelp" placeholder="Enter last name">
                <small id="lastNameHelp" class="form-text text-muted">Enter your first name.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPhone1">Phone number:</label>
                <input name="Phone" type="number" class="form-control" id="exampleInputphone1"
                    aria-describedby="phoneHelp" placeholder="Enter your phone number">
                <small id="phoneHelp" class="form-text text-muted">Enter your phone number.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>