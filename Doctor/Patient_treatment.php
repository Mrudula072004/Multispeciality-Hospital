<?php 
include("Header.php");
include("dbconnect.php");


if(isset($_POST['btn_save']))
   {
    $sql="insert into tbl_treatment(patient_name,gender,age,date,problem,treat_type,spec_name,nt_date,prob_description,treat_description)values('".$_POST['patient_name']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['datetime']."','".$_POST['problem']."','".$_POST['treatment']."','".$_POST['doct_name']."','".$_POST['nt_date']."','".$_POST['prob_desc']."','".$_POST['treat_desc']."')";
    if (mysqli_query($conn,$sql))
     {
        echo "<script>alert('Record inserted')</script>";
     }
     else
     {
       echo   "Not inserted".mysqli_error($conn);
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
          <h1 class="text-capitalize mb-5 text-lg">Patient Treatment
</h1>

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
      <div class="col-lg-4">
        <div class="mt-3">
        <img src="../images/appoiment.jpg" style="width: 420px; height: 520px; border-radius: 5px;">
          
            
             
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color" style="margin-top: 7px;">Patient Treatment Dedails</h2>
            
               <form id="#" class="appoinment-form" method="post" action="Patient_treatment.php">
                     <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <!-- <input name="patient_name" id="patient_name" type="text" class="form-control" placeholder="Patient Name"> -->
                                
                                <select class="form-control" name="patient_name" id="exampleFormControlSelect2">
                                  <option>Select Patient</option>
                                  <?php
        $result=mysqli_query($conn,"select DISTINCT(patient_name) from tbl_appointment where doctor_name='".$_SESSION['did']."'");
         
          while($data=mysqli_fetch_array($result))
          {
            echo '
                                  <option>'.$data['patient_name'].'</option>
                                  ';
                                }
                                  ?>
                                  
                                </select>
                            
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="age" id="age" type="number" class="form-control" placeholder="Age"onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>

                        
                      
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="gender" id="exampleFormControlSelect2">
                                  <option>Select Gender</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="datetime" id="datetime" type="date" class="form-control" placeholder="appoiment Date"onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="problem" id="problem" type="text" class="form-control" placeholder="Problem" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="treatment" id="treatment" type="text" class="form-control" placeholder="Treatment Type" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="doct_name" id="doct_name" type="text" class="form-control" placeholder="Specialist Name" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nt_date" id="nt_date" type="text" class="form-control" placeholder="Next Treatment Date" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="prob_desc" id="prob_desc" class="form-control" rows="3" placeholder="Problem Description" onkeypress="javascript: return isAlphanumric(event)"></textarea>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="treat_desc" id="treat_desc" class="form-control" rows="3" placeholder="treatment Description" onkeypress="javascript: return isAlphanumric(event)"></textarea>
                    </div>

                    <button class="btn btn-main btn-round-full" name="btn_save" >Submit<i class="icofont-simple-right ml-2"></i></button>
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