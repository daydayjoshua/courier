<?PHP
 session_start();
 
 if($_SESSION['USER_NUM']==""){
	 header("location: Track_Package_online.php");
		exit();
	 }
?>
<html>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Lagoon Logistics</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />


</head>
<header class="header_area">
    <div class="top_menu d-lg-block d-none">
      <div class="container">
        
        <div class="float-right">
          <ul class="right_side">
            <li>
              <a href="login.html">
                <i class="lnr lnr-phone-handset"></i>
                012-6532-568-9746
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lnr lnr-envelope"></i>
                emergency@colorlib.com
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg w-100">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="img/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row w-100">
              <div class="col-lg-12 pr-lg-0">
                <ul class="nav navbar-nav ml-auto justify-content-end">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="services.html">Services</a>
                  </li>

                  <li class="nav-item ">
                    <a class="nav-link" href="Track_Package_online.php">Tracking</a>
                  </li>
                  
                  
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

	

              <tr>
                <td height="263" valign="top"><table width="600" border="0" align="center">
                  <tr>
                    <td><?php
					
					
					
					 $num=$_SESSION['USER_NUM'];
					 
					 
					
					
					   	//Include database connection details
	              require_once('admin/Connection/conn.php');
				  $addadmin = mysql_query("select * from tracking where num = '$num'");
				if(!$addadmin){
					echo("error accur in performating the query" . mysql_error());
					}
                     while($row=mysql_fetch_array($addadmin)) {
						
					 $id = $row['id'];
					 $num= $row['num'];
					 $shipdat= $row['ship_date'];
					 $estimate_dat=$row['Estimated_Date'];
					 $ship_type=$row['Shipment_type'];
					 $content=$row['Content'];
					 $receive=$row['receiver_name'];
					 $address=$row['receiver_address'];
					 $country=$row['country'];
					 $phone=$row['telephone'];
					 $status=$row['status']; 
					 
					}
					
?></td>
                  </tr>
                  <tr>
                    <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><fieldset>
                          <legend><span class="style10">Tracking Information</span></legend>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><table width="400" border="0" align="center" cellpadding="0" cellspacing="3">
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="47%"><span class="style13"><b>Tracking Number :</b></span></td>
                                  <td width="53%"><?php echo $num;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Ship date :</span></td>
                                  <td><?php echo $shipdat;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Estimated Date for Delivery</span></td>
                                  <td><?php echo $estimate_dat;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Shipment type</span>:</td>
                                  <td><?php echo $ship_type;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Content:</span></td>
                                  <td><?php echo $content;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Receiver Name:</span></td>
                                  <td><?php echo $receive;?></td>
                                </tr>
                                <tr>
                                  <td valign="top"><span class="style13"><b>Receiver Address:</span></td>
                                  <td><?php echo $address;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Item Location:</span></td>
                                  <td><?php echo $country;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Telephone</span></td>
                                  <td><?php echo $phone;?></td>
                                </tr>
                                <tr>
                                  <td><span class="style13"><b>Status:</span></td>
                                  <td><?php echo $status;?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><label>
                                  <div align="right"><a href="Track_Package_online.php">Exit</a></div>
                                  </label></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                        </fieldset></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
  </tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="227" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="79" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="93" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="118" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="78" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="46" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="166" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="52" height="1" alt=""></td>
	</tr>
</table>


  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>