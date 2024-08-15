<?php 
include("Header.php");
include("dbconnect.php");


if(isset($_POST['btn_save']))
   {
    $sql="insert into tbl_test_report(patient_name,gender,age,date,test_type,problem,report,description)values('".$_POST['patient_name']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['datetime']."','".$_POST['test']."','".$_POST['problem']."','".$_POST['report']."','".$_POST['report_desc']."')";
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
    
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color" style="margin-top: 7px;">Patient Treatment Dedails</h2>
            
               <form id="#" class="appoinment-form" method="post" action="test_report.php">
                     <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <!-- <input name="patient_name" id="patient_name" type="text" class="form-control" placeholder="Patient Name"> -->
                                <select class="form-control" name="patient_name" id="sname">
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
                   <br>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        
                       

                        
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="gender" id="gender">
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
                                <input name="test" id="test" type="text" class="form-control" placeholder="Test Type" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="problem" id="problem" type="text" class="form-control" placeholder="Problem" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="report" id="report" type="text" class="form-control" placeholder="Report" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group-2 mb-4">
                        <textarea name="report_desc" id="report_desc" class="form-control" rows="3" placeholder="Report Description" onkeypress="javascript: return isAlphanumric(event)"></textarea>
                    </div>
                    </div>
                    </div>
                    
      
                    <button onclick="send()" class="btn btn-main btn-round-full" name="btn_save" type="submit" >Submit</button>

                </form>
            
      </div>
    </div>
  </div>
</section>

<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script type="text/javascript">
  function send()
  {
    var email=document.getElementById("email").value;
     var sname=document.getElementById("sname").value;
     var age=document.getElementById("age").value;
     var gender=document.getElementById("gender").value;
     var datetime=document.getElementById("datetime").value;
     var test=document.getElementById("test").value;
     var report=document.getElementById("report").value;
           Email.send({
    Host : "smtp.elasticemail.com",
    Username : "ketangorule29@gmail.com",
    Password : "0AF563A2DC2D559D914C2FFF8ECFDA31115A",
    To : email,
    From : "codeexperttech@gmail.com",
    Subject : "Test Report",
    Body : 
    "Name: "+ sname  +"<br>"+
    "Age: "+age +"<br>"+
    "Gender: "+gender +"<br>"+
    "Date: "+datetime +"<br>"+
    "Test: "+test +"<br>"+
    "Report: "+report

    
}).then(
  message => alert(message)
);
}
</script>
<?php 
include("Footer.php");

?>