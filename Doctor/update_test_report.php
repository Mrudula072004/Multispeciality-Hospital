<?php 
include("Header.php");
include("dbconnect.php");

error_reporting(0);
if(isset($_POST['btn_update']))
   {
      $sql="update tbl_test_report set patient_name='".$_POST['patient_name']."',gender='".$_POST['gender']."',age='".$_POST['age']."',date='".$_POST['datetime']."',test_type='".$_POST['test']."',problem='".$_POST['problem']."',report='".$_POST['report']."',description='".$_POST['report_desc']."' where tr_id='".$_POST['test_id']."'";

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
            
               <form id="#" class="appoinment-form" method="post" action="update_test_report.php">
                     <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">

<input type="hidden" name="test_id" value="<?php echo $_POST["tr_id"]?>">


                                <input name="patient_name" id="patient_name" type="text" class="form-control" placeholder="Patient Name" value="<?php echo $_POST["patient_name"]?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="age" id="age" type="number" class="form-control" placeholder="Age"onkeypress="javascript: return isNumber(event)" value="<?php echo $_POST["age"]?>">
                            </div>
                        </div>

                        
                      
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="gender" id="exampleFormControlSelect2">
                                  <option><?php echo $_POST["gender"]?></option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="datetime" id="datetime" type="date" class="form-control" placeholder="appoiment Date"onkeypress="javascript: return isNumber(event)" value="<?php echo $_POST["date"]?>">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="test" id="test" type="text" class="form-control" placeholder="Test Type" onkeypress="javascript: return isNumber(event)" value="<?php echo $_POST["test_type"]?>">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="problem" id="problem" type="text" class="form-control" placeholder="Problem" onkeypress="javascript: return isNumber(event)" value="<?php echo $_POST["problem"]?>">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="report" id="report" type="text" class="form-control" placeholder="Report" onkeypress="javascript: return isNumber(event)" value="<?php echo $_POST["report"]?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group-2 mb-4">
                        <textarea name="report_desc" id="report_desc" class="form-control" rows="3" placeholder="Problem Description" onkeypress="javascript: return isAlphanumric(event)"><?php echo $_POST["description"]?></textarea>
                    </div>
                    </div>
                    </div>
                    

                    <button class="btn btn-main btn-round-full" name="btn_update" >Update<i class="icofont-simple-right ml-2"></i></button>
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