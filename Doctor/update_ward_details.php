<?php 
include("Header.php");
include("dbconnect.php");
error_reporting(0);

if(isset($_POST['btn_update']))
   {
      $sql="update tbl_ward_details set hospital_name='".$_POST['hosp_name']."',floor_number='".$_POST['floor_no']."',department_name='".$_POST['depart_name']."',ward_name='".$_POST['ward_name']."',bed_no='".$_POST['bed_no']."',total_rooms='".$_POST['total_room']."',department_head='".$_POST['depart_head']."',ward_head='".$_POST['ward_head']."',ward_contact='".$_POST['ward_phone']."',
        description='".$_POST['ward_desc']."' 
        where ward_id ='".$_POST['w_id']."'";

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
          <h1 class="text-capitalize mb-5 text-lg">Update Ward Details</h1>

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
            <h2 class="mb-2 title-color">Update Ward Details</h2>
            
               <form id="#" class="appoinment-form" method="post" action="update_ward_details.php">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">

<input type="hidden" name="w_id" value="<?php echo $_POST["ward_id"]?>">


                                <input name="hosp_name" id="hosp_name" type="text" class="form-control" placeholder="Hospital Name" value="<?php echo $_POST['hospital_name']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="floor_no" id="floor_no" type="Number" class="form-control" placeholder="Floor Number" value="<?php echo $_POST['floor_number']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="depart_name" id="depart_name" type="text" class="form-control" placeholder="Department Name" value="<?php echo $_POST['department_name']?>">
                            </div>
                        </div>
                        
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ward_name" id="ward_name" type="text" class="form-control" placeholder="Ward Name" value="<?php echo $_POST['ward_name']?>">
                            </div>
                        </div>

                        
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="total_room" id="total_room" type="number" class="form-control" placeholder="Total Rooms" value="<?php echo $_POST['total_rooms']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="bed_no" id="bed_no" type="Number" class="form-control" placeholder="No. of Beds" value="<?php echo $_POST['bed_no']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="depart_head" id="depart_head" type="text" class="form-control" placeholder="Department Head" value="<?php echo $_POST['department_head']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ward_head" id="ward_head" type="text" class="form-control" placeholder="Ward Head" value="<?php echo $_POST['ward_head']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="ward_phone" id="ward_phone" type="Contact" class="form-control" placeholder="Ward Contact" value="<?php echo $_POST['ward_contact']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="ward_desc" id="ward_desc" type="text" class="form-control" placeholder="Description"><?php echo $_POST['description']?></textarea>
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