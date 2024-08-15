<?php 
include("Header.php");
include("dbconnect.php");
?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          
          <h1 class="text-capitalize mb-5 text-lg">Test Report</h1>

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
            <h2 class="mb-2 title-color">Test Report List</h2>
          
               <form id="#" class="appoinment-form" method="post" action="#">
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                            <table class="table table-bordered">
                                <thead>
                                 <tr>
                                 <th scope="col">Report ID</th>
                                 <th scope="col">Patient Name</th>
                                 <th scope="col">Age</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">Test Type</th>
                                 <th scope="col">Problem</th>
                                 <th scope="col">Report Status</th>
                                 
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php
                                $counter=1;
                                        $result=mysqli_query($conn,"select * from tbl_test_report where patient_name='".$_SESSION['pname']."'");

                                        while($data=mysqli_fetch_array($result))
                                        {
                                           echo '

                                             <tr>
                                             <form action="update_test_report.php" method="POST">
                                              
                                              <input type="hidden" name="tr_id" id="tr_id" value="'.$data["tr_id"].'">
                                             <input type="hidden" name="patient_name" value="'.$data["patient_name"].'">
                                             <input type="hidden" name="gender" value="'.$data["gender"].'">
                                             <input type="hidden" name="age" value="'.$data["age"].'">
                                             <input type="hidden" name="date" value="'.$data["date"].'">
                                             <input type="hidden" name="test_type" value="'.$data["test_type"].'">
                                             <input type="hidden" name="problem" value="'.$data["problem"].'">
                                             <input type="hidden" name="report" value="'.$data["report"].'">
                                             <input type="hidden" name="description" value="'.$data["description"].'">


                                             <td>'.$counter++.'</td>
                                            <td>'.$data["patient_name"].'</td>
                                            <td>'.$data["age"].'</td>
                                            <td>'.$data["date"].'</td>
                                             <td>'.$data["test_type"].'</td>
                                             <td>'.$data["problem"].'</td>
                                             <td>'.$data["report"].'</td>
                                             
                                             
                                             
                                            
                                          </form>
                                        </tr>
                                        ';
                                        }


                                        ?>
                                   
                                   </td>

                               </tr>
                               
                                </tr>    
                            </tbody>
                        </table>
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