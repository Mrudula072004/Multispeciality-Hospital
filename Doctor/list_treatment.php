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
          <h1 class="text-capitalize mb-5 text-lg">Treatment List</h1>

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
            <h2 class="mb-2 title-color">Treatment List</h2>
             
               
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="container">
    
 
      <!-- Here pure-table class is used -->
      <table>
        <thead>
          <tr>
            <th> Treatment Id</th>
            <th> Patient Name</th>
            <th> Gender</th>
            <th> Problem</th>
            <th> Treatment</th>
            <th> Treatment Date</th>
            <th> Action</th>
            
           
          </tr>
        </thead>
 
        <tbody>
        <?php
        $counter=1;
        $result=mysqli_query($conn,"select * from tbl_treatment");
         
          while($data=mysqli_fetch_array($result))
          {
            echo '

            <tr>
            <form action="update_treatment.php" method="post">
            <input type="hidden" name="t_id" id="t_id" value="'.$data["t_id"].'">
            <input type="hidden" name="patient_name" value="'.$data["patient_name"].'">
            <input type="hidden" name="gender" value="'.$data["gender"].'">
            <input type="hidden" name="age" value="'.$data["age"].'">
            <input type="hidden" name="date" value="'.$data["date"].'">
            <input type="hidden" name="problem" value="'.$data["problem"].'">
            <input type="hidden" name="treat_type" value="'.$data["treat_type"].'">
            <input type="hidden" name="spec_name" value="'.$data["spec_name"].'">
            <input type="hidden" name="nt_date" value="'.$data["nt_date"].'">
            <input type="hidden" name="prob_description" value="'.$data["prob_description"].'">
            <input type="hidden" name="treat_description" value="'.$data["treat_description"].'">

           <td>'.$counter++.'</td>
            <td>'.$data["patient_name"].'</td>
            <td>'.$data["gender"].'</td>
            <td>'.$data["problem"].'</td>
            <td>'.$data["treat_type"].'</td>
             <td>'.$data["nt_date"].'</td>
            <td>
            <input type="submit" class="btn btn-primary" name="update" value="Update">   
            <input type="button" name="info_dlt" id="btn_tr_delete" class="btn btn-danger" value="Delete"></td>
        
            </form>
          </tr>

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
  </div>
</section>

<script>
  $(document).ready(function() {
  
      $(document).on('click',"#btn_tr_delete",function(){
       
    var id = $(this).closest("tr").find("#t_id").val(); 
       
       if(confirm("Do you want to Delete this Record?"))
                { 
            $.ajax({
                type:'POST',
                url:'Ajax_Delete.php',
                data:
                {
                  query:"delete from tbl_treatment where t_id='"+id+"'" 
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