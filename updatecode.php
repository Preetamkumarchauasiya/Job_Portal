<?php
$connection = mysqli_connect("localhost","root");
$database = mysqli_select_db($connection, 'jobs');

if(isset($_POST['updatedata']))
{
    $id = $_POST['update_id'];
    $cName = $_POST['cName'];
    $position = $_POST['position'];
    $ctc = $_POST['ctc'];

    $query = "UPDATE job SET cName='$cName', position='$position', ctc='$ctc' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:index.php");
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>