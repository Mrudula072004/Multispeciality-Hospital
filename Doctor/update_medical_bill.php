<?php 
include("Header.php");
include("dbconnect.php");
error_reporting(0);

if(isset($_POST['btn_update']))
   {
      $sql="update tbl_medicalbill set patient_name='".$_POST['patient_name']."',date='".$_POST['date']."',bill_item='".$_POST['item_name']."',bill_description='".$_POST['item_desc']."',bill_rate='".$_POST['rate']."',bill_quantity='".$_POST['qty']."',bill_price='".$_POST['t_price']."' where  bill_id ='".$_POST['mb_id']."'";

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
            <h2 class="mb-2 title-color">Update Bill Details</h2>
            
                <form id="#" class="appoinment-form" method="post" action="update_medical_bill.php">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">

<input type="hidden" name="mb_id" value="<?php echo $_POST["bill_id"]?>">


                                <input name="patient_name" id="patient_name" type="text" class="form-control" placeholder="Patient Name" value="<?php echo $_POST['patient_name']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="Date" value="<?php echo $_POST['date']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="item_name" id="item_name" type="text" class="form-control" rows="3" placeholder="Item Name"><?php echo $_POST['bill_item']?></textarea>
                            </div>
                        </div>
                        
                         <div class="col-lg-6">
                            <div class="form-group">
                                <textarea name="item_desc" id="item_desc" type="text" class="form-control" rows="3" placeholder="Item Description"><?php echo $_POST['bill_description']?></textarea>
                            </div>
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
                   <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="rate" onkeyup="cal()" id="rate" type="text" class="form-control" placeholder="Rate" value="<?php echo $_POST['bill_rate']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <input name="qty" onkeyup="cal()" id="qty" type="number" class="form-control" placeholder="Quantity" value="<?php echo $_POST['bill_quantity']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="t_price" onkeyup="cal()" id="t_price" type="text" class="form-control" placeholder="Total Price" value="<?php echo $_POST['bill_price']?>">
                            </div>
                        </div>
                       <div class="col-lg-6">
                            
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