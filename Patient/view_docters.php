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
          
          <h1 class="text-capitalize mb-5 text-lg">Docters Details</h1>

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
            <h2 class="mb-2 title-color">Docters</h2>
          
               
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                               
                            <table class="table table-bordered">
                                <thead>
                                 <tr>
                                 <th scope="col">Sign Id</th>
                                 <th scope="col">Doctor Name</th>
                                 <th scope="col">Address</th>
                                 <th scope="col">Gender</th>
                                 <th scope="col">Date Of Birth</th>
                                 <th scope="col">Age</th>
                                    <th scope="col">Book</th>
                                

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                        $result=mysqli_query($conn,"select * from tbl_patient_signup");

                                        while($data=mysqli_fetch_array($result))
                                        {
                                           echo '

                                             <tr>
                                            
                                              <form action="appoinment.php" method="post">                                        
                                             <input type="hidden" name="sign_ID" value="'.$data["sign_ID"].'">


                                             <td>'.$data["sign_ID"].'</td>
                                            <td>'.$data["full_name"].'</td>
                                            <td>'.$data["address"].'</td>
                                            <td>'.$data["gender"].'</td>
                                             <td>'.$data["dob"].'</td>
                                             <td>'.$data["age"].'</td>
                                              <td><input type="submit" name="btn" value="Book" class="btn btn-primary"></td>
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