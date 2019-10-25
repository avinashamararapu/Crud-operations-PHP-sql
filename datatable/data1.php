<!DOCTYPE html>
<title>Data Table</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.semanticui.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<body>

  <?php
// Create connection
$conn = mysqli_connect("localhost","root","Toor@123","avinash");
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "select id,name,age,salary from Users";
$result = mysqli_query($conn,$sql);
?>

<table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Age</th>
                 <th>Salary</th>
                <th>Update</th>
                <!-- <th>Start date</th> -->
               
            </tr>
        </thead>
        <tbody>
          <?php
          foreach($result as $row)
          {
          ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['salary'] ?></td>
            <td><button type="submit" name="update" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'] ?>" style="width:auto;">Update</button></td>
            <td></td>

            </tr>

              <!-- Button trigger modal -->
              <!-- <button type="button" class="btn btn-primary" >
                Launch demo modal
              </button> -->

              <!-- Modal -->
              <form action="update.php" method="POST">
              <div style="z-index: 5000;" class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                          <div class="container">

                           <label for="uname">ID<b></b></label>
                          <input type="text" value="<?php echo $row['id'] ?>" placeholder="Enter ID" name="id">

                          <label for="uname"><b>Name</b></label>
                          <input type="text" value="<?php echo $row['name'] ?>" placeholder="Enter name" name="name" required>

                           <label for="uname"><b>Age</b></label>
                          <input type="text" value="<?php echo $row['age'] ?>" placeholder="Enter Age" name="age" required>

                           <label for="uname"><b>Salary</b></label>
                          <input type="text" value="<?php echo $row['salary'] ?>" placeholder="Enter Salary" name="salary" required>

                        
                            <button type="submit" name="submit">ADD</button>
                       
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

              <!-- update form -->
            <!--  <div id="id02" class="modal">
              
                      <form class="modal-content animate" action="test.php" method="post">
                        <div class="imgcontainer">
                          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                         
                        </div>

                        

                        <div class="container" style="background-color:#f1f1f1">

                      </form>
            </div> -->



            <?php
          }
          ?>
        </tbody>
  




  <center>      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add </button> </center>
         
        <tfoot>
            <tr>
         
        
            </tr>
        </tfoot>
    </table>








    <!-- Add Form -->
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="test.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="container">

       <label for="uname">ID<b></b></label>
      <input type="text" placeholder="Enter ID" name="id">

      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter name" name="name" required>

       <label for="uname"><b>Age</b></label>
      <input type="text" placeholder="Enter Age" name="age" required>

       <label for="uname"><b>Salary</b></label>
      <input type="text" placeholder="Enter Salary" name="salary" required>

    
        <button type="submit" name="submit">ADD</button>
   
    </div>

    <div class="container" style="background-color:#f1f1f1">

  </form>
</div>


<!-- Add function -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- update function -->
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

 <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
    </html>
