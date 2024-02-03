<!-- Header -->
<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $number = $_POST['number'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO user(firstname,lastname,gender, email, number) VALUES('{$firstname}','{$lastname}','{$gender}','{$email}','{$number}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add User details </h1>
<div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="firstname" >first name</label>
        <input type="text" name="firstname" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="lastname" >last name</label>
        <input type="text" name="lastname" class="form-control">
      </div>

      <div class="form-group">
        <label for="gender" >gender</label>
        <input type="text" name="gender" class="form-control">
      </div>

      <div class="form-group">
        <label for="email" >Email ID</label>
        <input type="text" name="email"  class="form-control">
      </div>
        <small id="emailHelp" class="form-text text-muted"></small>
    
      <div class="form-group">
        <label for="number" >number</label>
        <input type="text" name="number"  class="form-control">
      </div>    

      <div class="form-group">
         <input type="submit"  name="create" class="btn btn-primary mt-2" value="Add">
      </div>
    </form>    
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="students.php" class="btn btn-warning mt-5"> Back </a>
  <div>
