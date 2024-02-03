<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="studentcreate.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Add student</a>
      <a href="studentcreate.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Add course</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">id</th>
              <th  scope="col">first name </th>
              <th  scope="col">last name </th>
              <th  scope="col"> gender</th>
              <th  scope="col"> email </th>
              <th  scope="col"> number </th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM user";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $firstname = $row['firstname'];        
              $lastname = $row['lastname'];        
              $gender = $row['gender'];        
              $email = $row['email'];         
              $number = $row['number'];        

              echo "<tr >";
              echo " <td > {$id }</td>";
              echo " <td > {$firstname}</td>";
              echo " <td > {$lastname}</td>";
              echo " <td >{$gender} </td>";
              echo " <td >{$email} </td>";
              echo " <td >{$number} </td>";

              echo " <td class='text-center'> <a href='studentview.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='studentupdate.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='studentdelete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>
