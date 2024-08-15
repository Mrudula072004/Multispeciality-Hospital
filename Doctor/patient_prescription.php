<?php 
include("Header.php");
include("dbconnect.php");


if(isset($_POST['btn_save']))
   {
    $sql="insert into tbl_prescription(patient_name,address,age,pre_date,prescription,presc_details,doct_name,contact)values('".$_POST['name']."','".$_POST['address']."','".$_POST['age']."','".$_POST['date']."','".$_POST['prescription']."','".$_POST['pre_details']."','".$_POST['doctor_name']."','".$_POST['hosp_contact']."')";
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
          <h1 class="text-capitalize mb-5 text-lg">Ward Details</h1>

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
            
               <form id="#" class="appoinment-form" method="post" action="patient_prescription.php">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                               <!--  <input name="name" id="name" type="text" class="form-control" placeholder="Patient Name"> -->
                               <select class="form-control" name="name" id="sname">
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
                                <input name="address" id="address" type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
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
                                <input name="age" id="age" type="Number" class="form-control" placeholder="Age">
                            </div>
                        </div>
                        
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="Date">
                            </div>
                        </div>

                        
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="prescription" rows="4" id="prescription" type="number" class="form-control" placeholder="Prescription"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="pre_details" rows="4" id="pre_details" type="number" class="form-control" placeholder="Prescription Details"></textarea>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="doctor_name" id="doctor_name" type="text" class="form-control" placeholder="Doctor Name">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="hosp_contact" id="hosp_contact" type="text" class="form-control" placeholder="Hospital Contact">
                            </div>
                        </div>
                    </div>
                  
                    <button class="btn btn-main btn-round-full" name="btn_save" type="submit" onclick="send()">Submit</button>
                </form>
            </div>
        </div>
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
     var prescription=document.getElementById("prescription").value;
      var sname=document.getElementById("sname").value;
       var pre_details=document.getElementById("pre_details").value;
         var doctor_name=document.getElementById("doctor_name").value;
         var date=document.getElementById("date").value;
  Email.send({
    Host : "smtp.elasticemail.com",
    Username : "ketangorule29@gmail.com",
    Password : "0AF563A2DC2D559D914C2FFF8ECFDA31115A",
    To : email,
    From : "codeexperttech@gmail.com",
    Subject : "Prescription",
    Body : 
    "Name: "+sname +"<br>"+
    "Prescription: "+prescription +"<br>"+
    "Details: "+pre_details +"<br>"+
    "Doctor Name: "+doctor_name +"<br>"+
    "Date: "+date
    
}).then(
  message => alert(message)
);
}
</script>

<?php 
include("Footer.php");

?>