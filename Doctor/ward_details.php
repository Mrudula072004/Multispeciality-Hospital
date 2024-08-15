<?php 
include("Header.php");
include("dbconnect.php");


if(isset($_POST['btn_save']))
   {
    $sql="insert into tbl_ward_details(hospital_name,floor_number,department_name,ward_name,bed_no,total_rooms,department_head,ward_head,ward_contact,description)values('".$_POST['hosp_name']."','".$_POST['floor_no']."','".$_POST['depart_name']."','".$_POST['ward_name']."','".$_POST['bed_no']."','".$_POST['total_room']."','".$_POST['depart_head']."','".$_POST['ward_head']."','".$_POST['ward_phone']."','".$_POST['ward_desc']."')";
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
            <h2 class="mb-2 title-color">Ward Details</h2>
            
               <form id="#" class="appoinment-form" method="post" action="ward_details.php">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="hosp_name" id="hosp_name" type="text" class="form-control" placeholder="Hospital Name">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="floor_no" id="floor_no" type="Number" class="form-control" placeholder="Floor Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="depart_name" id="depart_name" type="text" class="form-control" placeholder="Department Name">
                            </div>
                        </div>
                        
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ward_name" id="ward_name" type="text" class="form-control" placeholder="Ward Name">
                            </div>
                        </div>

                        
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="total_room" id="total_room" type="number" class="form-control" placeholder="Total Rooms">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="bed_no" id="bed_no" type="Number" class="form-control" placeholder="No. of Beds">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="depart_head" id="depart_head" type="text" class="form-control" placeholder="Department Head">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ward_head" id="ward_head" type="text" class="form-control" placeholder="Ward Head">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ward_phone" id="ward_phone" type="Contact" class="form-control" placeholder="Ward Contact">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="ward_desc" id="ward_desc" type="text" class="form-control" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-main btn-round-full" name="btn_save">Submit</button>
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