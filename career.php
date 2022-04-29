<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Career</title>
    <style>
        .navbar{
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }       
        h1,p{
            color: black;
            font-weight: bold;
        }
        .row{
            padding:0px;
            margin:0px;
        }
        .jobs{
            border: 1px solid black;
            box-shadow: 5px 5px 4px 5px grey;
            padding: 5px;
            float:left;
            width: 400px;
            height:250px;
            background: #98AFC7;
            margin:40px;
        }
    </style>
</head>
<body>

<div class="row">
    <div class="col-12">
        <div class="jumbotron jumbotron-fluid" style="background-image: url('01.jpg'); background-size: cover;">
        <div class="container">
            <h1 class="display-4" style="text-align:center; font-weight: bold;">Job Portal</h1>
            <p class="lead" style="text-align:center; font-weight: bold;">Best Jobs Available matching your skills</p>
            <a style="color:black; font-size:25px; text-decoration:none;" href="index.php">Home &ensp;</a>
            <a style="color:black; font-size:25px; text-decoration:none;" href="Login.php">Sign out</a>
        </div>
        </div>
    </div>
</div>

<div class="row">
<?php
session_start();
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
echo "";
$sql="SELECT cname,position,jdesc,ctc,skills FROM job";
$result=mysqli_query($conn,$sql);
$i=0;
if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
        echo'
        <div class="col-md-4">
        <div class="jobs">
        <h3 style="text-align:centre;">'.$rows['position'].'</h3>
        <h4 style="text-align:centre;">'.$rows['cname'].'</h4>
        <p style="color:black; text-align:justify;">'.$rows['jdesc'].'</p>
        <p style="color:black;"><b>Skills Required: </b>'.$rows['skills'].'</p>
        <p style="color:black;"><b>CTC: </b>'.$rows['ctc'].'</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Apply Now
        </button>
        
        </div>
        </div>';
    }
}
else{
    echo"";
  }
  mysqli_close($conn);
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="config.php" method="POST">
      <div class="modal-body">
            <div class="mb-3">
                <label for="Company" class="form-label">Name</label>
                <input type="text" class="form-control" id="Company" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="skills" class="form-label">Skills</label>
                <input type="Skills" class="form-control" id="Skills" name="Skills">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Year of Passing/Passout</label>
                <input type="text" class="form-control" id="Position" name="pass">
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">Why do we hire you?</label>
                <input type="text" class="form-control" id="job" name="hire">
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="cname" name="cname">
            </div>
            <div class="mb-3">
                <label for="CTC" class="form-label">Post applying for</label>
                <input type="text" class="form-control" id="CTC" name="posts">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>