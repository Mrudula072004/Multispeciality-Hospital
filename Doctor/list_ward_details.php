<?php 
include("Header.php");
include("dbconnect.php");

?>

<link rel="stylesheet"
          href="https://unpkg.com/purecss@2.0.6/build/pure-min.css"
          integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5"
          crossorigin="anonymous"
          origin="anonymous"
    />

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white"></span>
          <h1 class="text-capitalize mb-5 text-lg">Ward Details List</h1>

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
            <h2 class="mb-2 title-color">Ward Details List</h2>
             
               
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="container">
    
 
      <!-- Here pure-table class is used -->
      <table class="pure-table">
        <thead>
          <tr>
            <th> Ward ID</th>
            <th> Hospital Name</th>
            <th> Floors</th>
             <th> Department Name</th>
            <th> Ward Name</th>
            <th> Bed</th>
            <th> Total Room</th>
           <th> Department Head</th>
           <th> Ward Head</th>
            <th> Ward Contact</th>
           <th> Action</th>
          </tr>
        </thead>
 
        <tbody>

          <?php

$counter=1;
          $result=mysqli_query($conn,"select * from tbl_ward_details");
          while($data=mysqli_fetch_array($result))
          {
            echo'
            
            <form action="update_ward_details.php" method="Post">
            <tr>
            <input type="hidden" name="ward_id" id="ward_id" value="'.$data["ward_id"].'">
            <input type="hidden" name="hospital_name" value="'.$data["hospital_name"].'">
            <input type="hidden" name="floor_number" value="'.$data["floor_number"].'">
            <input type="hidden" name="department_name" value="'.$data["department_name"].'">
            <input type="hidden" name="ward_name" value="'.$data["ward_name"].'">
            <input type="hidden" name="bed_no" value="'.$data["bed_no"].'">
            <input type="hidden" name="total_rooms" value="'.$data["total_rooms"].'">
            <input type="hidden" name="department_head" value="'.$data["department_head"].'">
            <input type="hidden" name="ward_head" value="'.$data["ward_head"].'">
            <input type="hidden" name="ward_contact" value="'.$data["ward_contact"].'">
            <input type="hidden" name="description" value="'.$data["description"].'">
            
             <td>'.$counter++.'</td>
             <td>'.$data["hospital_name"].'</td>
              <td>'.$data["floor_number"].'</td>
                 <td>'.$data["department_name"].'</td>
            <td>'.$data["ward_name"].'</td>
           <td>'.$data["bed_no"].'</td>
            <td>'.$data["total_rooms"].'</td>
            <td>'.$data["department_head"].'</td>
            <td>'.$data["ward_head"].'</td>
               
                  <td>'.$data["ward_contact"].'</td>
            <td>
            <input type="submit" class="btn btn-primary" name="update" value="Update">   
            <input type="button" name="info_dlt" id="btn_wd_delete" class="btn btn-danger" value="Delete">
            </td>
            
          </tr>
          </form>
          
          ';


          }

          ?>


         
 
          <!--Here pure-table-odd class used
            to change background of row-->
          
           
         
        </tbody>
      </table>
    </div>
  </div>
 
                        
                         

                        
                   </div>

                    
                
            </div>
            
        </div>
      </div>
    </div>
  
</section>

<script>
  $(document).ready(function() {
  
      $(document).on('click',"#btn_wd_delete",function(){
       
    var id = $(this).closest("tr").find("#ward_id").val(); 
       
       if(confirm("Do you want to Delete this Record?"))
                { 
            $.ajax({
                type:'POST',
                url:'Ajax_Delete.php',
                data:
                {
                  query:"delete from tbl_ward_details where ward_id='"+id+"'" 
                },

                    cache: false,
                   success:function(data){
                  
               
                    alert(data);
                      location.reload(true);
                }
            }); 
        }
        else
        {
          return false;

        }
    
});
      });

</script>

<?php 
include("Footer.php");

?>