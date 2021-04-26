<?php  
session_start();  
if(!isset($_SESSION["Username"]))
{
 header("location:login.php");
}
$username=$_SESSION["Username"];
require 'db_conn.php'; 
?>
<html>
<head>
<!--Snippets-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css"/>

<!--DESIGNING-->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/css/util.css">
	<link rel="stylesheet" type="text/css" href="form/css/main.css">
<!--===============================================================================================-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/libs/css/design.css">
<!--W3 School Link-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--Google Font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
<!--w3 Links-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--to-do-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
 body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
    }
</style>

<div class="container" style="width:100%;height:100%;">
<body style="background-image: url('images/background.jpg');background-repeat: repeat;background-position:center;overflow-x:auto; background-size: cover;height:auto;width:100%;">
<?php
$chk=$_SESSION['check'];
if($chk == 0)
{
	$username=$_SESSION["Username"];
echo'<script>alert("WELCOME'.$username.'!")</script>';
}
$_SESSION['check']=1;
?>

<style>
img {
  border-radius: 50%;
}
div.flex {
    display: flex;
    border: 1px solid black;
    margin: 5px;
    padding: 5px;
}
 body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
		background-size: cover;
    }

.file-upload {
  background-color: #ffffff;
  width: 300px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}

.inputContainer i {
   position: absolute;
}
.inputContainer {
   width: 100%;
   margin-bottom: 10px;
}
.icon {
   padding: 15px;
   color: rgb(49, 0, 128);
   width: 70px;
   text-align: left;
}
.Field {
   width: 100%;
   padding: 10px;
   text-align: center;
   font-size: 20px;
   font-weight: 500;
}
</style>



<div class="container" style="color:white;overflow-y:auto" >
<center>
    <div class="col-xl-6 container" style="">
<p style="font-family: 'Titillium Web', sans-serif; color:white; font-size:20px;">Create Vehicle Number</p>  

<form action="" method="POST" enctype="multipart/form-data">
	<center>
	
	
	<?php
$username=$_SESSION["Username"];
//$con=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash") or die('Unable To connect');
$con=mysqli_connect("localhost","root","","fuelosti_dash");
//$con=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");

   $res=mysqli_query($con,"select Photo from profile where Username = '$username' ");   
   while($row=mysqli_fetch_array($res))
   {
   echo'<div style="position: relative;">';
	//echo'<img src=" echo"<img src="data:image/png;base64,'.base64_encode($row['Photo'] ).'" height="100" width="100"/>';	" class=\"img\" style=\"width:150px;margin-bottom:0.3in;\"/>";
	 echo '<img src="data:image/png;base64,'.base64_encode($row['Photo'] ).'" style="position:relative;" height="100" width="100"/>'; 
   }
   mysqli_close($con);
   echo'</div>';
?>

	
	<p style="color:white;font-size:20px;"><?php echo $username; ?></p>	
	</center>
	
	<?php
	$check = 0;
if(isset($_POST['title']))
{
$title = $_POST['title'];
$con=mysqli_connect("localhost","root","","fuelosti_dash");
//$con=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");

   $res=mysqli_query($con,"select VehNo from veh_list where Username = '$username' ");   
   if($res)
   {   
    if(empty($title)){
        header("Location:Home.php");
    }else if($check==0){
		$check = 1;
		$url = 'http://fuelostic.com/WEB_APP/dash-pro/Home.php';
        $stmt = $conn->prepare("INSERT INTO todos(title,admin) VALUE(?,'$username')");
        $res = $stmt->execute([$title]);
		echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;

       
        $conn = null;
        exit();
    }
   }
} 
   //echo'<a href="#">
//$todos = $conn->query("SELECT * FROM todos");';
?>
<?php
//$con=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");
$con=mysqli_connect("localhost","root","","fuelosti_dash");
   $res=mysqli_query($con,"SELECT * FROM todos where admin = '$username' ");   
   while($row=mysqli_fetch_array($res))
   {
	//echo $row['title'];
   }
?>

	
<style>
.button-cross {    
     
     font-size: 8pt;
     font-family: tahoma;
     margin-top: 0px;
     margin-right: 0px;     
     top:0;
     right:0;
	 
 }
</style>

       <div class="add-section">
          <form action="" method="POST">             
                <input type="text" 
                     name="title" 
                     style="border-color: #ff6666"
                     placeholder="Enter vehicle Name" />
              <button type="submit">Add &nbsp; <span>&#43;</span></button>             
          </form>
       </div>
       <?php 
	    $todos = $conn->query("SELECT * FROM todos where admin = '$username' ");
       ?>
       <div class="show-todo-section">
            
            <?php
			$con=mysqli_connect("localhost","root","","fuelosti_dash");
			//$con=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");
				$res=mysqli_query($con,"SELECT * FROM todos where admin = '$username' "); 
					$i = 0;
					$T=[];					
				while($row=mysqli_fetch_array($res))
				{	
					
					$T[$i]=$row['title'];	
					$i++;					
				}
				
				$_POST['i'] = $i;
				$k=$_POST['i'];
				for($j=0;$j<$k;$j++)
				{
					//echo "<p>fdfdf".$j."= ".$T[$j]."</p>";
					$_SESSION['Sess[$j]']=$T[$j];
					$_POST['T[$j]']=$T[$j];
				}
			?>

			<?php
			$_POST['i'] = $i;
				$k=$_POST['i'];
				echo'<p>Vehicle List</p>';
				for($j=0;$j<$k;$j++)
				{
					
					//echo "<p>fdfdf".$j."= ".$T[$j]."</p>";
				}
				$con=mysqli_connect("localhost","root","","fuelosti_dash");
				//$con=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");
				
				$res=mysqli_query($con,"SELECT * FROM todos where admin = '$username' "); 
					$co = 0;
				while($row=mysqli_fetch_array($res))
				{	  
					echo'<div class="todo-item">';
					echo"<div class='float-right'><a href='app/remove.php?title=".$row['title']."'><img class='button-cross' src='images/cross.png' style='width:18px;height:18px;' /></a></div>";
					echo"<a href=vehicle/dist/index.php?nm=".$row['title']."><b> ".$row['title']." </b></a><br>";
					echo '<p>Assigned: '.$row['date_time'].'</p>';
					//"<a href='doct.php?nm=".$row['fname']."'> Choose </a>";
					echo'</div>';
					$co++;					
				}
			?>
			
			
       </div>
	  
	   
	   
	   
	   
	   
	   
	   
	   

	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
    



    <script src="js/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function(){
           

            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('app/check.php', 
                      {
                          id: id
                      },
                      (data) => {
                          if(data != 'error'){
                              const h2 = $(this).next();
                              if(data === '1'){
                                  h2.removeClass('checked');
                              }else {
                                  h2.addClass('checked');
                              }
                          }
                      }
                );
            });
        });
    </script>
	
	
</form>



<!--TABLE-->

  <!--<h3><p style="font-family: 'Titillium Web', sans-serif; color:white;margin-botton:0.2in;font-weight:35px;font-size:28px;">Vehicle List</p></h3>-->          
 
    <?php
    //$conn=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");
	//$conn = mysqli_connect("dbelectronics1.db.6007246.ca7.hostedresource.net","dbelectronics1","Db@12345678","dbelectronics1");
	//$conn=mysqli_connect("localhost","root","","fuelosti_dash");
	//if (!$conn) {
	//die("Connection failed: " . mysqli_connect_error());
	//}
	
	//if(isset($_POST['VehNo']))
	//{
	//$VehNo=$_POST['VehNo'];
	//$sql="SELECT VehNo from Veh_List where VehNo='$VehNo' AND Username='$username' LIMIT 1";
	//$result = mysqli_query($conn, $sql);	
	//if(mysqli_num_rows($result) > 0)
	//{		
	   
		//echo'<div class="row col-md-6 col-md-offset-2 custyle">
		//<center>
        //<table class="table striped" style="color:white;margin-bottom:0.8in;text-align:center;">
        //';
		//while($row = mysqli_fetch_assoc($result)) 
		//{  
			//$_SESSION['V']=$row["VehNo"];
            //echo'<thead>
           // <tr>
            //<th class="text-center" style="font-size:20px;">Vehicle Number</th></th>
            //<th style="font-size:20px;">Action</th>
            //</tr>
            //</thead>
            //<tr id="vn">
            //<td class="text-center">'.$_SESSION['V'].'</td>
            //<td><a href="http://localhost/dash-pro-server/dash-pro/index.php" id="veh" class="btn btn-info btn-md"><span class="glyphicon glyphicon-map-marker"></span>Map</a></td>
            //<td id="del" class="text-center"><a href="#" class="btn btn-danger btn-md" name="del"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            //</tr>
            //';
                    	
        //} 
        //echo'</table>';
        //echo"</center>";
        //echo'</div><br>';
	//}
	//else
	//{
	    //echo"<center style=\"margin-botton:0.2in;\">No Record To Display!</center>   <br>";
	//}
	//}
	//mysqli_close($conn);
	?>
<style>
.footer1 {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
</style>

<center>
  <p class="footer1">Designed By <img style="height:20px;width:20px;" src="images/iconicpages.png" /><a style="color:white;text-decoration: none;" href="https://www.iconicpages.com">Iconicpages</a></p>

</center>
</div>
</center>
<br>
	</div>
</body>
</div>

</html>

