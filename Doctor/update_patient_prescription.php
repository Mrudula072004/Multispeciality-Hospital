<?php 
include("Header.php");
include("dbconnect.php");

error_reporting(0);
if(isset($_POST['btn_update']))
   {
      $sql="update tbl_prescription set patient_name='".$_POST['name']."',address='".$_POST['address']."',age='".$_POST['age']."',pre_date='".$_POST['date']."',prescription='".$_POST['prescription']."',presc_details='".$_POST['pre_details']."',doct_name='".$_POST['doctor_name']."',contact='".$_POST['hosp_contact']."' 
        where prescription_id='".$_POST['presc_id']."'";

      $result=mysqli_query($conn,$sql);
      if($result)
      {
        echo "<script>alert('Record Updated')</script>";
      }
      else
      {
        echo mysqli_error($conn);
      }
   }

?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white"></span>
          <h1 class="text-capitalize mb-5 text-lg">Patient sPrescription</h1>

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
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Patient Prescription</h2>
            
               <form id="#" class="appoinment-form" method="post" action="update_patient_prescription.php">
                    <div class="row">
                      <input name="presc_id" id="name" type="hidden" class="form-control"  value="<?php echo $_POST['prescription_id']?>"> 
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Patient Name" value="<?php echo $_POST['patient_name']?>"> 
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="address" id="address" type="text" class="form-control" placeholder="Address" value="<?php echo $_POST['address']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="age" id="age" type="Number" class="form-control" placeholder="Age" value="<?php echo $_POST['age']?>">
                            </div>
                        </div>
                        
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="Date" value="<?php echo $_POST['pre_date']?>">
                            </div>
                        </div>

                        
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="prescription" rows="4" id="prescription" type="number" class="form-control" placeholder="Prescription"><?php echo $_POST['prescription']?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="pre_details" rows="4" id="pre_details" type="number" class="form-control" placeholder="Prescription Details"><?php echo $_POST['presc_details']?></textarea>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="doctor_name" id="doctor_name" type="text" class="form-control" placeholder="Doctor Name" value="<?php echo $_POST['doct_name']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="hosp_contact" id="hosp_contact" type="text" class="form-control" placeholder="Hospital Contact" value="<?php echo $_POST['contact']?>">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-main btn-round-full" name="btn_update">Update</button>
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