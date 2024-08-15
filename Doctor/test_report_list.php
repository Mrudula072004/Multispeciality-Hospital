<?php 
include("Header.php");
include("dbconnect.php");



?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          
          <h1 class="text-capitalize mb-5 text-lg">Test Report</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  
      <div class="col-lg-12">
           <div class="col-lg-12 grid-margin stretch-card">
            <h2 class="mb-2 title-color">Test Report List</h2>
          
               
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                            <table class="table table-bordered">
                                <thead>
                                 <tr>
                                 <th scope="col">Report ID</th>
                                 <th scope="col">Patient Name</th>
                                 <th scope="col">Age</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">Test Type</th>
                                 <th scope="col">Problem</th>
                                 <th scope="col">Report Status</th>
                                 <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                $counter=1;
        $result=mysqli_query($conn,"select * from tbl_test_report");
         
          while($data=mysqli_fetch_array($result))
          {
                                           echo'
                                      <form action="update_test_report.php" method="POST">
                                             <tr>
                                             
                                              
                                              <input type="hidden" name="tr_id" id="tr_id" value="'.$data["tr_id"].'">
                                             <input type="hidden" name="patient_name" value="'.$data["patient_name"].'">
                                             <input type="hidden" name="gender" value="'.$data["gender"].'">
                                             <input type="hidden" name="age" value="'.$data["age"].'">
                                             <input type="hidden" name="date" value="'.$data["date"].'">
                                             <input type="hidden" name="test_type" value="'.$data["test_type"].'">
                                             <input type="hidden" name="problem" value="'.$data["problem"].'">
                                             <input type="hidden" name="report" value="'.$data["report"].'">
                                             <input type="hidden" name="description" value="'.$data["description"].'">


                                             <td>'.$counter++.'</td>
                                            <td>'.$data["patient_name"].'</td>
                                            <td>'.$data["age"].'</td>
                                            <td>'.$data["date"].'</td>
                                             <td>'.$data["test_type"].'</td>
                                             <td>'.$data["problem"].'</td>
                                             <td>'.$data["report"].'</td>
                                             
                                             
                                            <td><input type="submit" class="btn btn-primary" name="update" value="Update">  
                                            <input type="button" name="info_dlt" id="btn_tr_delete" class="btn btn-danger" value="Delete">
                                              </td>
                                          
                                        </tr>
                                        </form>
                                        ';
                                        }


                                        ?>
                                   
                                   
                               
                                </tr>    
                            </tbody>
                        </table>
                
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(document).ready(function() {
  
      $(document).on('click',"#btn_tr_delete",function(){
       
    var id = $(this).closest("tr").find("#tr_id").val(); 
       
       if(confirm("Do you want to Delete this Record?"))
                { 
            $.ajax({
                type:'POST',
                url:'Ajax_Delete.php',
                data:
                {
                  query:"delete from tbl_test_report where tr_id='"+id+"'" 
                },

                    cache: false,
                   success:function(data){
                  
               
                    alert(data);
                      location.reload(true);
                }
            }); 
        }
        else
        {
          return false;

        }
    
});
      });

</script>

<?php 
include("Footer.php");

?>