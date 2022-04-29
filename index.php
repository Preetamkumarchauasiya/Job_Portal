<?php include 'header.php'?>

<!-- Button trigger modal -->
<div class="content">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
  Post Job
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Job Data</h5>
        </div>
        <form action="config.php" method="POST">
        <div class="modal-body">
            <div class="mb-3">
            <label for="Company" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="Company" name="cname">
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="demail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="skills" class="form-label">Skills</label>
                <input type="Skills" class="form-control" id="Skills" name="skills">
            </div>
            <div class="mb-3">
            <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="Position" name="position">
            </div>
            <div class="mb-3">
            <label for="job" class="form-label">Job Description</label>
                <input type="textarea" class="form-control" id="job" name="jd">
            </div>
            <div class="mb-3">
            <label for="CTC" class="form-label">CTC</label>
                <input type="text" class="form-control" id="CTC" name="ctc">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
    

<!-- Edit POP UP Form Boostrap -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="updatecode.php" method="POST">
      <div class="modal-body">
            <input type="hidden" name="update_id" id="update_id">
            <div class="mb-3">
            <label for="Company" class="form-label">Company Name</label>
                <input type="text" class="form-control" name="cName" id="cName">
            </div>
            <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="demail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="skills" class="form-label">Skills</label>
                <input type="text" class="form-control" id="skills" name="Skills">
            </div>
            <div class="mb-3">
            <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position">
            </div>
            <div class="mb-3">
            <label for="job" class="form-label">Job Description</label>
                <input type="textarea" class="form-control" id="jdesc" name="jd">
            </div>
            <div class="mb-3">
            <label for="CTC" class="form-label">CTC</label>
                <input type="text" class="form-control" id="ctc" name="ctc">
            </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <?php 
        $connection = mysqli_connect("localhost","root");
        $database = mysqli_select_db($connection, 'jobs');

        $query = "SELECT * FROM job";
        $query_run = mysqli_query($connection, $query);
    ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Company Name</th>
            <th scope="col">Position</th>
            <th scope="col">CTC</th>
            <th scope="col">EDIT</th>
            </tr>
        </thead>
    <?php
        if($query_run)
        {
            foreach($query_run as $rows)
            {
    ?>
        <tbody>
        <tr>
            <td> <?php echo $rows['id']; ?></td>
            <td> <?php echo $rows['cName']; ?></td>
            <td> <?php echo $rows['position']; ?></td>
            <td> <?php echo $rows['ctc']; ?></td>
            
            <td> 
                <button type="button" class="btn btn-primary editbn">EDIT</button>
            </td>
        </tr>
        </tbody>
    <?php
            }
        }
        else
        {
            echo "No Record Found";
        }
    ?>
    </table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('.editbn').on('click', function(){
            
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#cName').val(data[1]);
            $('#position').val(data[2]);
            $('#ctc').val(data[3]);
            //$('#email').val(data[4]);
            //$('#skills').val(data[5]);
            //$('#jdesc').val(data[6]);
            
        });
    });
</script>

</body>
</html>