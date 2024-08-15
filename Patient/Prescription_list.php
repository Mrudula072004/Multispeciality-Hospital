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
          
               <form id="#" class="appoinment-form" method="post" action="#">
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
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                 $counter=1;
                                        $result=mysqli_query($conn,"select * from tbl_prescription where patient_name='".$_SESSION['pname']."'");

                                        while($data=mysqli_fetch_array($result))
                                        {
                                           echo '

                                             <tr>
                                             <form action="update_patient_prescription.php" method="POST">
                                              
                                              <input type="hidden" name="prescription_id" value="'.$data["prescription_id"].'">
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
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include("Footer.php");

?>