<?php 
include("Header.php");
include("dbconnect.php");
?>
<?php 
if(isset($_POST['btn_appoinment']))
   {
    $sql="insert into tbl_appointment(patient_name,address,gender,dob,age,contact,appo_date)values('".$_POST['name']."','".$_POST['Address']."','".$_POST['gender']."','".$_POST['date']."','".$_POST['age']."','".$_POST['phone']."','".$_POST['datetime']."')";
    if (mysqli_query($conn,$sql)) 
    {
       echo "<script>alert('Record Updated')</script>";
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
          <h1 class="text-capitalize mb-5 text-lg">Update Appoinment</h1>

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
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+84 789 1256 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
            <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
               <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="age" id="age" type="number" class="form-control" placeholder="Age">
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
                                <input name="datetime" id="datetime" type="date" class="form-control" placeholder="appoiment Date">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="date of birth">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="Address" id="Address" class="form-control" rows="6" placeholder="Address"></textarea>
                    </div>

                    <button class="btn btn-main btn-round-full" name="btn_appoinment" href="confirmation.html">Update Appoinment<i class="icofont-simple-right ml-2"></i></button>
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