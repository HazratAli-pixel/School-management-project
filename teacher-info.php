<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html>
   <head>
      <title>Profile Card</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title >চাপড়া আলিম কাশিরাম মাদ্রাসা</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="js/vanilla-tilt.babel.min.js"> -->

    
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- bangla fonts link -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    
      
<style>
    *{
margin: 0px;
padding: 0px;
/* background: #f1f1f1; */

/* font-family: arial; */
font-family: SolaimanLipi, Arial, sans-serif
}


.card-container{
width: 345px;
height: 450px;
background: #FFF;
border-radius: 6px;
box-shadow: 0px 1px 10px 1px #000;
overflow: hidden;
display: inline;
float: left;
margin-left: 20px;
margin-top: 20px;
}
.upper-container{
height: 90px;
background: #7F00FF;
}
.image-container{
background: blueviolet;


}
.image-container img{
width: 150px;
height: 150px;
border-radius: 50%;
padding: 0px;
border: 5px solid #f1f1f1;;
transform: translate(90px,10px);
}
.lower-container{
height: 500px;
background: #f1f1f1;
/* background-color: #f1f1f1; */
padding: 0px;
padding-top: 80px;
text-align: center;
}
.lower-container h3, h4{
box-sizing: border-box;
line-height: 1.3;
font-weight: lighter;
}
.lower-container h4{
color: #7F00FF;
opacity: 1;
margin: 10px 0px;
font-weight: bold;
}
.lower-container p{
font-size: 16px;
color: teal;
margin-bottom: -10px;
}

.lower-container p:nth-last-child(1){
font-size: 16px;
color: teal;
margin-bottom: 00px;
}
.btn{
padding: 12px 30px;
background: transparent;
color: #7F00FF;
border: 2px solid #7F00FF;
border-radius: 30px;
font-size: 12px;
text-decoration: none;
font-weight: bold;
transition: all .3s ease-in;
}
.btn:hover{
background: #7F00FF;
color: white;

}
.card-container:hover{
    transform:  scale (1.02);

}
</style>




</head>
   
<body>
<?php include_once ('includes/header.php')
   ?>
   <?php $sql = "SELECT * from  tblblooddonars where status = 1";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
?>
       <div class="container" style="background: #f1f1f1;">
           <br>
           <br>
           <br>
           <br>
           <hr>
           <h1 style="text-align: center; ">শিক্ষক ও কর্মচারী</h1>
           <hr>
            <div class="row principal-row">
                <div class="col-lg-12"  >
                    <div class="card-container"style=" width: 345px; height: 480px; position: relative;left: 48%; top: 50%; transform: translate(-50%, -50%);">
                        <div class="upper-container" > 
                            <div  class="image-container">
                                <img src="pic/avatar.jpg" />
                            </div>
                        </div>
                        <div class="lower-container">
                            <div>
                                <h4>মোঃ সাজেদুর রহমান</h4>
                                <h3>অধ্যক্ষ</h3>
                            </div>
                            <div>
                                <p>চাপড়া কাশিরাম আলিম মাদ্রাসা</p>
                                <p>মোবা: <a style="text-decoration: none; color: teal;" href="tel:০১৭৩১৮-৫০৫৮৮">০১৭৩১৮-৫০৫৮৮</a></p>
                                <p>ই-মেইল : <a style="text-decoration: none; color: teal;" href="mailto:ckams.edu@gmail.com">ckams.edu@gmail.com</a></p>
                                <p>ই-মেইল : <a style="text-decoration: none; color: teal;" href="mailto:principal@ckams.com">principal@ckams.com</a></p>
                            </div>
                            <hr class="bg-light">
                            <div>
                                <a href="#" class="btn"> View Principal profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <hr>
            <h1 style="text-align: center;">Lecturar</h1>
            <hr> -->
    
    
    

           <div class="row">
                <div class="col-lg-12"  >
<?php if($query->rowCount() > 0)
{
foreach($results as $result)
{?>   
    
                    <div class="card-container">
                        <div class="upper-container">
                            <div class="image-container">
                            <img src="admin/pic/<?php echo htmlentities($result->photo);?>" />
                            </div>
                        </div>
                        <div class="lower-container">
                            <div>
                                <h4><?php echo htmlentities($result->FullName);?></h4>
                                <h3><?php echo htmlentities($result->Designation);?></h3>
                            </div>
                            <div>
                                <p>চাপড়া কাশিরাম আলিম মাদ্রাসা</p>
                                <p>মোবা: <a style="text-decoration: none; color: teal;" href="tel:<?php echo htmlentities($result->MobileNumber);?>"><?php echo htmlentities($result->MobileNumber);?></a></p>
                                <p>ই-মেইল : <a style="text-decoration: none; color: teal;" href="mailto:<?php echo htmlentities($result->EmailId);?>"><?php echo htmlentities($result->EmailId);?></a></p>
                            </div>
                            <hr class="bg-light">
                            <div>
                                <a href="#" class="btn"> View profile</a>
                            </div>
                        </div>
                    </div>

                    <?php $cnt=$cnt+1; }} ?> 





            </div>
    
           </div >
          <br>
           <div class="d-flex justify-content-center">
            <a style="text-align: center;"  target="_top" href="" class="btn"> Goto top</a>
           </div>
           <br>
        <?php 
        include_once ('includes/footer.php');
        ?>
       </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>     

   </body>
</html>