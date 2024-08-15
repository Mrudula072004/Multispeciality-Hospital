<?php 
include("Header.php");
include("dbconnect.php");


if(isset($_POST['btn_save']))
   {
    $sql="insert into tbl_medicalbill(patient_name,date,bill_item,bill_description,bill_rate,bill_quantity,bill_price)values('".$_POST['patient_name']."','".$_POST['date']."','".$_POST['item_name']."','".$_POST['item_desc']."','".$_POST['rate']."','".$_POST['qty']."','".$_POST['t_price']."')";
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
          <h1 class="text-capitalize mb-5 text-lg">Medical Bill Details</h1>

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
            <h2 class="mb-2 title-color">Bill Details</h2>
            
               <form id="#" class="appoinment-form" method="post" action="medical_bill.php">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                              <!--   <input name="patient_name" id="patient_name" type="text" class="form-control" placeholder="Patient Name"> -->
                                <select class="form-control" name="patient_name" id="sname">
                                  <option>Select Patient</option>
                                  <?php
        $result=mysqli_query($conn,"select DISTINCT(patient_name) from tbl_appointment where doctor_name='".$_SESSION['did']."'");
         
          while($data=mysqli_fetch_array($result))
          {
            echo '
                                  <option>'.$data['patient_name'].'</option>
                                  ';
                                }
                                  ?>
                                  
                                </select>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="Date">
                            </div>
                        </div>
                    </div>
                    <br>
                     <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        
                       

                        
                   </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="item_name" id="item_name" type="text" class="form-control" rows="3" placeholder="Item Name"></textarea>
                            </div>
                        </div>
                        
                         <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="item_desc" id="item_desc" type="text" class="form-control" rows="3" placeholder="Item Description"></textarea>
                            </div>
                        </div>
<script type="text/javascript">
  function cal()
  {
    var a=document.getElementById("rate").value;
    var b=document.getElementById("qty").value;

    document.getElementById("t_price").value=a*b;
  }
</script>
                        
                   </div>
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="rate" id="rate" onkeyup="cal()" type="number" class="form-control" placeholder="Rate">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="qty" id="qty" onkeyup="cal()" type="number" class="form-control" placeholder="Quantity">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="t_price" onkeyup="cal()" id="t_price" type="number" class="form-control" placeholder="Total Price">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            
                        </div>
                    </div>
                    
                    <button onclick="send()" class="btn btn-main btn-round-full" name="btn_save">Submit</button>
                </form>
            </div>

        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script type="text/javascript">
  function send()
  {
    var email=document.getElementById("email").value;
     var sname=document.getElementById("sname").value;
     var date=document.getElementById("date").value;
     var item_name=document.getElementById("item_name").value;
     var rate=document.getElementById("rate").value;
     var qty=document.getElementById("qty").value;
     var t_price=document.getElementById("t_price").value;
           Email.send({
    Host : "smtp.elasticemail.com",
    Username : "ketangorule29@gmail.com",
    Password : "0AF563A2DC2D559D914C2FFF8ECFDA31115A",
    To : email,
    From : "codeexperttech@gmail.com",
    Subject : "Medical Bill",
    Body : 
    "Name: "+sname +"<br>"+
    "Date: "+date +" <br>"+
    "Item Name: "+item_name +"<br> "+
    "Rate: "+rate+" <br>"+
    "Qty: "+qty+"<br> "+
    "Total: "+t_price
}).then(
  message => alert(message)
);
}
</script>
<?php 
include("Footer.php");

?>