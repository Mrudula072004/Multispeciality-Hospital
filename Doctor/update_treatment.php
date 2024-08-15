<?php 
include("Header.php");
include("dbconnect.php");
error_reporting(0);

if(isset($_POST['btn_update']))
   {
      $sql="update tbl_treatment set patient_name='".$_POST['patient_name']."',gender='".$_POST['gender']."',age='".$_POST['age']."',date='".$_POST['datetime']."',problem='".$_POST['problem']."',treat_type='".$_POST['treatment']."',spec_name='".$_POST['doct_name']."',nt_date='".$_POST['nt_date']."',prob_description='".$_POST['prob_desc']."',
        treat_description='".$_POST['treat_desc']."' 
        where t_id='".$_POST['treat_id']."'";

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
          <h1 class="text-capitalize mb-5 text-lg">Update Treatment
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
      

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Upadate Treatment</h2>
            
               <form name="patient_treatment" class="treatment-form" method="post" action="update_treatment.php">
                     <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">


<input type="hidden" name="treat_id" value="<?php echo $_POST["t_id"]?>">


                                <input name="patient_name" id="patient_name" type="text" value="<?php echo $_POST['patient_name']?>" class="form-control" placeholder="Patient Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="age" id="age" type="number" class="form-control" value="<?php echo $_POST['age']?>" placeholder="Age"onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>

                        
                      
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="gender" id="exampleFormControlSelect2" value="<?php echo $_POST['gender']?>">
                                  <option><?php echo $_POST['gender']?></option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="datetime" id="datetime" type="date" class="form-control" value="<?php echo $_POST['date']?>" placeholder="appoiment Date"onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="problem" id="problem" type="text" class="form-control" placeholder="Problem"  value="<?php echo $_POST['problem']?>"onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="treatment" id="treatment" type="text" class="form-control" placeholder="Treatment Type" value="<?php echo $_POST['treat_type']?>" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="doct_name" id="doct_name" type="text" class="form-control" placeholder="Specialist Name" value="<?php echo $_POST['spec_name']?>" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="nt_date" id="nt_date" type="date" class="form-control" placeholder="Next Treatment Date" value="<?php echo $_POST['nt_date']?>" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="prob_desc" id="prob_desc" class="form-control" rows="3" placeholder="Problem Description"  onkeypress="javascript: return isAlphanumric(event)"><?php echo $_POST['prob_description']?></textarea>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="treat_desc" id="treat_desc" class="form-control" rows="3" placeholder="treatment Description" value="" onkeypress="javascript: return isAlphanumric(event)"><?php echo $_POST['treat_description']?></textarea>
                    </div>

                    <button class="btn btn-main btn-round-full" name="btn_update" >Update</button>
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