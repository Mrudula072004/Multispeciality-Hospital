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
          
          <h1 class="text-capitalize mb-5 text-lg">Prescription</h1>

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
  <div class="container">
    <div class="row">
     

      <div class="col-lg-12">
           <div class="col-lg-12 grid-margin stretch-card">
            <h2 class="mb-2 title-color">Prescription</h2>
          
              
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                               
                            <table class="table table-bordered">
                                <thead>
                                 <tr>
                                 <th scope="col">Prescription No</th>
                                 <th scope="col">Patient Name</th>
                                 <th scope="col">Preescripttion</th>
                                 <th scope="col">Preescripttion Details</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">Docctor Name</th>
                                 <th scope="col">Contact</th>
                                 <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                $counter=1;
                                        $result=mysqli_query($conn,"select * from tbl_prescription");

                                        while($data=mysqli_fetch_array($result))
                                        {
                                           echo '

                                             <tr>
                                             <form action="update_patient_prescription.php" method="POST">
                                              
                                              <input type="hidden" name="prescription_id" id="prescription_id" value="'.$data["prescription_id"].'">
                                             <input type="hidden" name="patient_name" value="'.$data["patient_name"].'">
                                             <input type="hidden" name="address" value="'.$data["address"].'">
                                             <input type="hidden" name="age" value="'.$data["age"].'">
                                             <input type="hidden" name="pre_date" value="'.$data["pre_date"].'">
                                             <input type="hidden" name="prescription" value="'.$data["prescription"].'">
                                             <input type="hidden" name="presc_details" value="'.$data["presc_details"].'">
                                             <input type="hidden" name="doct_name" value="'.$data["doct_name"].'">
                                             <input type="hidden" name="contact" value="'.$data["contact"].'">


                                             <td>'.$counter++.'</td>
                                            <td>'.$data["patient_name"].'</td>
                                            <td>'.$data["prescription"].'</td>
                                            <td>'.$data["presc_details"].'</td>
                                             <td>'.$data["pre_date"].'</td>
                                             <td>'.$data["doct_name"].'</td>
                                             <td>'.$data["contact"].'</td>
                                             
                                             
                                             
                                            <td>
                                            <input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                                            <td>   
                                             <input type="button" name="info_dlt" id="btn_pr_delete" class="btn btn-danger" value="Delete">
                                              </td>
                                          </form>
                                        </tr>
                                        ';
                                        }


                                        ?>
                                   
                                   </td>

                               </tr>
                               
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
  
      $(document).on('click',"#btn_pr_delete",function(){
       
    var id = $(this).closest("tr").find("#prescription_id").val(); 
       
       if(confirm("Do you want to Delete this Record?"))
                { 
            $.ajax({
                type:'POST',
                url:'Ajax_Delete.php',
                data:
                {
                  query:"delete from tbl_prescription where prescription_id='"+id+"'" 
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