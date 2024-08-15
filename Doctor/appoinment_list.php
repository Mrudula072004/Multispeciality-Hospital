<?php 
include("Header.php");
include("dbconnect.php");

if(isset($_POST['btn_accept']))
   {
    $sql="update tbl_appointment set status='".$_POST['btn_accept']."'  where appo_id ='".$_POST['appo_id']."'";
    if (mysqli_query($conn,$sql)) 
    {
      echo "<script>alert('Record Updated')</script>";
      
    }
    else
    {
      echo "Not Updated".mysqli_error($conn);
    }
}
if(isset($_POST['btn_decline']))
   {
    $sql="update tbl_appointment set status='".$_POST['btn_decline']."'  where appo_id ='".$_POST['appo_id']."'";
    if (mysqli_query($conn,$sql)) 
    {
      echo "<script>alert('Record Updated')</script>";
      
    }
    else
    {
      echo "Not Updated".mysqli_error($conn);
    }
}
?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          
          <h1 class="text-capitalize mb-5 text-lg">Appointment Status</h1>

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
          <div class="col-lg-12 grid-margin stretch-card">
            <h2 class="mb-2 title-color">Appointment Status</h2>
          
               
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                               
                            <table class="table table-bordered">
                                <thead>
                                 <tr>
                                 <th scope="col">Appointment No</th>
                                 <th scope="col">Patient Name</th>
                                 <th scope="col">Address</th>
                                 <th scope="col">Gender</th>
                                 <th scope="col">Date Of Birth</th>
                                 <th scope="col">Age</th>
                                 <th scope="col">Contact</th>
                                 <th scope="col">Appointment Date</th>
                                 <th scope="col">Status</th>
                                 <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $counter=1;
                                        $result=mysqli_query($conn,"select * from tbl_appointment where doctor_name='".$_SESSION['did']."'");

                                        while($data=mysqli_fetch_array($result))
                                        {
                                           echo '

                                             <tr>
                                             <form action="appoinment_list.php" method="POST">
                                              
                                              <input type="hidden" name="appo_id" value="'.$data["appo_id"].'">
                                             <input type="hidden" name="Patient Name" value="'.$data["patient_name"].'">
                                             <input type="hidden" name="Address" value="'.$data["address"].'">
                                             <input type="hidden" name="Gender" value="'.$data["gender"].'">
                                             <input type="hidden" name="dob" value="'.$data["dob"].'">
                                             <input type="hidden" name="age" value="'.$data["age"].'">
                                             <input type="hidden" name="contact" value="'.$data["contact"].'">
                                             <input type="hidden" name="appo_date" value="'.$data["appo_date"].'">


                                             <td>'.$counter++.'</td>
                                            <td>'.$data["patient_name"].'</td>
                                            <td>'.$data["address"].'</td>
                                            <td>'.$data["gender"].'</td>
                                             <td>'.$data["dob"].'</td>
                                             <td>'.$data["age"].'</td>
                                             <td>'.$data["contact"].'</td>
                                             <td>'.$data["appo_date"].'</td>
                                             <td>'.$data["status"].'</td>
                                             
                                             
                                            <td>
                                            <input type="submit" class="btn btn-success" value="Accept" name="btn_accept"></td>
                                            <td><button type="submit" class="btn btn-danger" value="Decline" name="btn_decline">Decline</button>

                                            </td>
                                          </form>
                                        </tr>
                                        ';
                                        }


                                        ?>
                           
                  </td>
                    </td>
                               </tr>
                                </tr>    
                            </tbody>
                        </table>
                
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include("Footer.php");

?>