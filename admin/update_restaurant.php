<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();




if(isset($_POST['submit']))        
{
	
			
		
			
		  
		
		
		if(empty($_POST['c_name'])||empty($_POST['res_name'])||$_POST['email']==''||$_POST['phone']==''||$_POST['url']==''||$_POST['o_hr']==''||$_POST['c_hr']==''||$_POST['o_days']==''||$_POST['address']=='')
		{	
											$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>All fields Must be Fillup!</strong>
															</div>';
									
		
								
		}
	else
		{
		
				$fname = $_FILES['file']['name'];
								$temp = $_FILES['file']['tmp_name'];
								$fsize = $_FILES['file']['size'];
								$extension = explode('.',$fname);
								$extension = strtolower(end($extension));  
								$fnew = uniqid().'.'.$extension;
   
								$store = "Res_img/".basename($fnew);                   
	
					if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
					{        
									if($fsize>=1000000)
										{
		
		
												$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Max Image Size is 1024kb!</strong> Try different Image.
															</div>';
	   
										}
		
									else
										{
												
												
												$res_name=$_POST['res_name'];
				                                 
												$sql = "update restaurant set c_id='$_POST[c_name]', title='$res_name',email='$_POST[email]',phone='$_POST[phone]',url='$_POST[url]',o_hr='$_POST[o_hr]',c_hr='$_POST[c_hr]',o_days='$_POST[o_days]',address='$_POST[address]',image='$fnew' where rs_id='$_GET[res_upd]' ";  // store the submited data ino the database :images												mysqli_query($db, $sql); 
													mysqli_query($db, $sql); 
												move_uploaded_file($temp, $store);
			  
													$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Record Updated!</strong>.
															</div>';
                
	
										}
					}
					elseif($extension == '')
					{
						$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>select image</strong>
															</div>';
					}
					else{
					
											$error = 	'<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>invalid extension!</strong>png, jpg, Gif are accepted.
															</div>';
						
	   
						}               
	   
	   
	   }



	
	
	

}








?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Update Restaurant</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">

        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        
                        <span><img src="images/icn.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
    
                    <ul class="navbar-nav mr-auto mt-md-0">
                     
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                            
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                             
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                           
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                             
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                      
                    </ul>
               
                    <ul class="navbar-nav my-lg-0">                                                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                               <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      
        <div class="left-sidebar">
       
            <div class="scroll-sidebar">
    
                <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a href="all_users.php">  <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Restaurant</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_restaurant.php">All Restaurants</a></li>
								<li><a href="add_category.php">Add Category</a></li>
                                <li><a href="add_restaurant.php">Add Restaurant</a></li>
                                
                            </ul>
                        </li>
                      <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menues</a></li>
								<li><a href="add_menu.php">Add Menu</a></li>
                              
                                
                            </ul>
                        </li>
						 <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li>
                         
                    </ul>
                </nav>
        
            </div>
     
        </div>
   
        <div class="page-wrapper">
      
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
            </div>
         
            <div class="container-fluid">
     
                  
									
									<?php  echo $error;
									        echo $success; ?>
									
									
                                    <?php
if (isset($_POST['submit'])) {
    $id = intval($_GET['res_upd']);

    // Sanitize input
    $res_name = mysqli_real_escape_string($db, $_POST['res_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $url = mysqli_real_escape_string($db, $_POST['url']);
    $o_hr = mysqli_real_escape_string($db, $_POST['o_hr']);
    $c_hr = mysqli_real_escape_string($db, $_POST['c_hr']);
    $o_days = mysqli_real_escape_string($db, $_POST['o_days']);
    $c_name = intval($_POST['c_name']);
    $address = mysqli_real_escape_string($db, $_POST['address']);

    // File upload logic
    if (!empty($_FILES['file']['name'])) {
        $filename = $_FILES['file']['name'];
        $tempname = $_FILES['file']['tmp_name'];
        $folder = "Res_img/" . $filename;

        if (move_uploaded_file($tempname, $folder)) {
            $image_sql = ", image='$filename'";
        } else {
            echo "<script>alert('Image upload failed');</script>";
            $image_sql = "";
        }
    } else {
        $image_sql = "";
    }

    // Final update query
    $update = "UPDATE restaurant SET 
        title='$res_name', 
        email='$email', 
        phone='$phone', 
        url='$url', 
        o_hr='$o_hr', 
        c_hr='$c_hr', 
        o_days='$o_days', 
        c_id='$c_name', 
        address='$address'
        $image_sql
        WHERE rs_id='$id'";

    if (mysqli_query($db, $update)) {
        echo "<script>alert('Restaurant updated successfully'); window.location='all_restaurant.php';</script>";
    } else {
        echo "<script>alert('Update failed');</script>";
    }
}
?>
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            
                                <h4 class="m-b-0 ">Update Restaurant</h4>
                            
                                <?php
$id = intval($_GET['res_upd']);
$ssql = "SELECT * FROM restaurant WHERE rs_id='$id'";
$res = mysqli_query($db, $ssql);
$row = mysqli_fetch_array($res);
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-body">
        <hr>
        <div class="row p-t-20">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Restaurant Name</label>
                    <input type="text" name="res_name" value="<?php echo htmlspecialchars($row['title']); ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label>Bussiness E-mail</label>
                    <input type="text" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" class="form-control form-control-danger">
                </div>
            </div>
        </div>

        <div class="row p-t-20">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label>Website URL</label>
                    <input type="text" name="url" value="<?php echo htmlspecialchars($row['url']); ?>" class="form-control form-control-danger">
                </div>
            </div>
        </div>

        <?php
        $open = $row['o_hr'];
        $close = $row['c_hr'];
        $days = $row['o_days'];
        $cat = $row['c_id'];
        ?>

        <div class="row">
            <div class="col-md-6">
                <label>Open Hours</label>
                <select name="o_hr" class="form-control custom-select">
                    <option>--Select your Hours--</option>
                    <?php
                    foreach (["6am", "7am", "8am", "9am", "10am", "11am"] as $val) {
                        echo "<option value='$val'" . ($val == $open ? " selected" : "") . ">$val</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-6">
                <label>Close Hours</label>
                <select name="c_hr" class="form-control custom-select">
                    <option>--Select your Hours--</option>
                    <?php
                    foreach (["3pm", "4pm", "5pm", "6pm", "7pm", "8pm"] as $val) {
                        echo "<option value='$val'" . ($val == $close ? " selected" : "") . ">$val</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-6">
                <label>Open Days</label>
                <select name="o_days" class="form-control custom-select">
                    <option>--Select your Days--</option>
                    <?php
                    foreach (["mon-tue", "mon-wed", "mon-thu", "mon-fri", "mon-sat", "24hr-x7"] as $val) {
                        echo "<option value='$val'" . ($val == $days ? " selected" : "") . ">$val</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-6">
                <label>Image</label>
                <input type="file" name="file" class="form-control">
                <?php if (!empty($row['image'])): ?>
                    <p>Current Image: <img src="Res_img/<?php echo htmlspecialchars($row['image']); ?>" width="80"></p>
                <?php endif; ?>
            </div>

            <div class="col-md-12">
                <label>Select Category</label>
                <select name="c_name" class="form-control custom-select">
                    <option>--Select Category--</option>
                    <?php
                    $cat_query = mysqli_query($db, "SELECT * FROM res_category");
                    while ($rows = mysqli_fetch_array($cat_query)) {
                        $selected = ($rows['c_id'] == $cat) ? "selected" : "";
                        echo "<option value='{$rows['c_id']}' $selected>{$rows['c_name']}</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <h3 class="box-title m-t-40">Restaurant Address</h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <textarea name="address" style="height:100px;" class="form-control"><?php echo htmlspecialchars(trim($row['address'])); ?></textarea>
            </div>
        </div>
    </div>

    <div class="form-actions">
        <input type="submit" name="submit" class="btn btn-primary" value="Save">
        <a href="all_restaurant.php" class="btn btn-inverse">Cancel</a>
    </div>
</form>
                            </div>
                        </div>
                    </div>
					<footer class="footer"> © 2022 - Online Food Ordering System</footer>
                </div>
       
            </div>
            
        </div>
  
    </div>
  
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>