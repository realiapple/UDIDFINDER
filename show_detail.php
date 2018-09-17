<?php 
    $subject = "iUDID";
    $body  = "I'm SparkD3V <br /> This is iUDID: {$_GET['UDID']} <br />";
    $body .= "Device product: {$_GET['DEVICE_PRODUCT']} <br />";
    $body .= "Device version: {$_GET['DEVICE_VERSION']} <br />";
    $body .= "Device name: {$_GET['DEVICE_NAME']} <br />";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>iUDID-The UDID Fetcher</title>

    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <section>
  <!--for demo wrap-->
  <h1>iUDID</h1><br>
  <p>This is the tool to get the UDID and your device information with just a install of a profile.Here are the details you have requested for</p>
  <div class="tbl-header"><b>
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Types</th>
          <th>Your-Details</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
		
          <td>UDID</td>
		  	<td></td>
          <td><p><?php echo $_GET['UDID']; ?></p></td>
          
        </tr>
        <tr>
          <td>Device Type</td>
		  <td></td>
          <td><p><?php echo $_GET['DEVICE_PRODUCT']; ?></p></td>
          
        </tr>
        <tr>
          <td>Device Version</td>
		  <td></td>
          <td><p><?php echo $_GET['DEVICE_VERSION']; ?></p></td>  
        </tr>
		<tr><td>Device Name</td>
			<td></td>
			<td><p><?php echo $_GET['DEVICE_NAME']; ?></p></td>
		</tr>
        <tr>
          <td>Developer</td>
		  <td></td>
          <td><a href="https://www.twitter.com/sparkd3v">SparkD3V</td></a>
          
        </tr>
        <tr>
          <td>Dev's Website</td>
		  <td></td>
          <td><a href="http://sparkd3v.tk">SparkD3V.tk</td>   
        </tr>
      </tbody>
    </table></b>
  </div>
  <p>
	  To Send This info by email 
   <a href="mailto:?subject=<?php echo $subject ?>&body=<?php echo $body?>"><button type="button" class="btn btn-danger">Mail It!</button></a></p> 
</section>



<div class="made-with-love">
  Made with
  <i> ♥ </i> by
  <a href="https://twitter.com/sparkd3v">SparkD3V❤️</a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
