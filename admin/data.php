<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>Admin Panel</h1></a>

    <span>
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="logout.php" class="text-decoration-none text-white">Logout</a>
    </span>
  </div>
</nav>
<?php
    $con = mysqli_connect('localhost','root','','book_db');
    $Record = mysqli_query($con, "SELECT * FROM `book_form`");
    $row_count=mysqli_num_rows($Record);
    ?>


<h2 class="text-center mb-4 mt-3">Records</h2>
<div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

          

    <table class="table table-secondary table-bordered" >
        <thead class="text-center">
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Ph No</th>
            <th>Address</th>
            <th>Location</th>
            <th>Total Guests</th>
            <th>Arrival</th>
            <th>Leaving</th>
            <th>Delete</th>
           
        </thead>
        <tbody class="text-dark text-center">
            <?php
                   $i =  0;
               while($row = mysqli_fetch_array($Record)){
                    echo "
                    <tr>
                    <td>";?><?php echo ++$i;?><?php echo "</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[location]</td>
                    <td>$row[guests]</td>
                    <td>$row[arrivals]</td>
                    <td>$row[leaving]</td>
                
                    <td><a href='delete.php? ID=$row[id]' class='btn btn-outline-danger'>Delete</a></td>
                </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
    </div>
<div class="col-md-12 text-center d-flex justify-content-center">
    <h3 class="text-danger">Total</h3>
    <h1 class="bg-danger text-white"><?php echo $row_count;?></h1>
</div>
</div>
    </div>
</body>
</html>