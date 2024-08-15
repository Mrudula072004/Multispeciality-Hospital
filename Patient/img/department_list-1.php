<?php
include('Header.php');
include("dbconnect.php");
?>

<div class="container-fluid" >

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Department ID</th>
                                            <th>Department Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                              
                                    <tbody>
                                        <?php
                                        $result=mysqli_query($conn,"select * from tbl_department");

                                        while($data=mysqli_fetch_array($result))
                                        {

                                            echo '

                                             <tr>
                                             <form action="update_department.php" method="GET">
                                             <input type="hidden" name="dept_id" value="'.$data["dept_id"].'">
                                             <input type="hidden" name="dept_name" value="'.$data["dept_name"].'">
                                             <input type="hidden" name="description" value="'.$data["discription"].'">


                                            <td>'.$data["dept_id"].'</td>
                                            <td>'.$data["dept_name"].'</td>
                                            <td>'.$data["discription"].'</td>
                                            <td>
                                                <button class="btn btn-primary">Update</button>
                                                <button class="btn btn-danger">Delete</button>

                                            </td>
                                          </form>
                                        </tr>
                                        ';
                                        }


                                        ?>
                                       
                                        
                                        
                                       
                                    </tbody>

                                         
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


<?php
include('Footer.php');

?>
