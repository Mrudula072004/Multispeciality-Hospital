<?php 
include("Header.php");
include("dbconnect.php");
if(isset($_POST['btn_appoinment']))
   {
    $sql="insert into tbl_appointment(patient_name,address,gender,dob,age,contact,appo_date,doctor_name,status,patient_id)values('".$_POST['name']."','".$_POST['Address']."','".$_POST['gender']."','".$_POST['date']."','".$_POST['age']."','".$_POST['phone']."','".$_POST['datetime']."','".$_POST['doctor_name']."','Pending','".$_SESSION['pid']."')";
    if (mysqli_query($conn,$sql)) 
    {
      echo "<script>alert('Booking Successful')</script>";
    }
    else
    {
      echo "Not inserted".mysqli_error($conn);
    }
}
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>

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
            <h2 class="mb-2 title-color" style="margin-top: 7px;">Book an appoinment</h2>
            
               <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control text" placeholder="Full Name" onkeypress="javascript: return isString(event)">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="age" id="age" type="number" class="form-control" placeholder="Age"onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                         
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
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="date of birth" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone Number" onkeypress="javascript: return isNumber(event)">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="doctor_name" id="exampleFormControlSelect2">
                                  <option>Select Doctor</option>
                                  <?php
        $result=mysqli_query($conn,"select * from tbl_doctor_signup where sign_id='".$_POST['sign_ID']."'");
         
          while($data=mysqli_fetch_array($result))
          {
            echo '
                                  <option value="'.$data['sign_id'].'">'.$data['full_name'].'</option>
                                  ';
                                }
                                  ?>
                                  
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="Address" id="Address" class="form-control" rows="6" placeholder="Address" onkeypress="javascript: return isAlphanumric(event)"></textarea>
                    </div>

                    <button class="btn btn-main btn-round-full" name="btn_appoinment" href="confirmation.html">Make Appoinment<i class="icofont-simple-right ml-2"></i></button>
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