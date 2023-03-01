<?php 
include('db-inc.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer class="container-fluid text-center" style="background-color: #393939 ;">
    <div class="container-fluid">
	<div class="col-sm-3 hov">
	
 <?php
  include('Social ican.php')
?>
	</div>&nbsp;&nbsp;
	<div class="container-fluid" style="height:80px;padding-top:20px;">
	       <h3 style="color:#cdd51f;height:40px;width:40pxpadding-top:40px;">Contact Kisiwa Technical Training Institute:</h3>

      <p style="color:#cdd51f;height:20px;width:20pxpadding-top:20px;"><strong>Address:&nbsp;</strong>30200,Kabuchai,Bungoma County</p>

      <p style="color:#cdd51f;height:20px;width:20pxpadding-top:20px;"><strong>Website:&nbsp;</strong>Kisiwtech.ac.ke</p>
      
      <p style="color:#cdd51f;height:20px;width:20pxpadding-top:20px;"><strong>Phone Number:&nbsp;</strong>(+254) 12345678</p><br><br><br>
	</div>&nbsp;

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#000408;height:80px;padding-top:20px;color:#f0f0f0;">
  <p>Developed By Ramsley Lichuma | All Rights Reserved 2022</p>
</footer>

<!--Footer2 start Here-->