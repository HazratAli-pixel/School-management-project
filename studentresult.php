<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title >student result</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- bangla fonts link -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    

</head>
<body>

    <!-- Navigation -->
<?php include_once('includes/header.php');?>

    <div class="container">

   

        <!-- breaking board starts here -->
    <br>
    <br>
    <br>
<?php $sql = "SELECT * from  tblbloodgroup where status=1";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
?>

        <div class="breaking-news">
        <marquee behavior="scroll" direction="left" scrollamount="4"
            onmouseover="this.stop();"
            onmouseout="this.start();" style="background-color: rgb(107, 207, 207);">
<?php if($query->rowCount() > 0)
{
foreach($results as $result)
{?>
            <a target="_blank" style=" text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;" href="<?php echo htmlentities($result->Link);?>"> <?php echo htmlentities($result->BloodGroup);?> *** </a>
            
            
            <?php $cnt=$cnt+1; }} ?>           
        </marquee>
        </div>
        <!-- breaking board ends here -->
        
        


        <!-- Page Content -->
        <div class="row">
            <!-- left side bar starts here -->
            <div class="col-lg-8 col-sm-12 mb-2">
                <div class="col-lg-12" style="background-color: teal; margin-left: 3px;">
                    <fieldset>
                        <legend>Personalia:</legend>
                        <label for="fname">First name:</label>
                        <input type="text" id="fname" name="fname"><br><br>
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname"><br><br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email"><br><br>
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday"><br><br>
                        <input type="submit" value="Submit">
                    </fieldset>
                </div>
            </div>
            <!-- left side bar ends here -->

            <!-- right side bar starts here -->
            <div class="col-lg-4 col-sm-12 mb-2">
                
                
                <div class="">
                    
                    <a href="page.php?type=addmission" style="text-decoration: none; color:black; "><h4 style="background-color:rgb(107, 207, 207); font-family: SolaimanLipi, Arial, sans-serif;" class="card-header">ভর্তি তথ্য</h4></a>    
                    <a href="images.php" style="text-decoration: none; color:black; "><h4 style="background-color:rgb(107, 207, 207);font-family: SolaimanLipi, Arial, sans-serif;" class="card-header">ফটো গ্যালারী</h4></a>        
                    <a href="" style="text-decoration: none; color:black; "><h4 style="background-color:rgb(107, 207, 207);font-family: SolaimanLipi, Arial, sans-serif;" class="card-header">ভিডিও গ্যালারী</h4></a>
                    <a href="studentresult.php" style="text-decoration: none; color:black; "><h4 style="background-color:rgb(107, 207, 207);font-family: SolaimanLipi, Arial, sans-serif;" class="card-header">ভিডিও গ্যালারী</h4></a>
                    <br>
                    
                    
                </div> 

                <!-- notice board starts here -->
                <a href="" style="text-decoration: none; color:black; "><h4 style="background-color:teal; color:white; font-family: SolaimanLipi, Arial, sans-serif; text-align: center;" class="card-header">নোটিস বোর্ড</h4></a> 
               
<?php $sql = "SELECT * from  notice ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
?>
               
               
                <div class="notice-box">
                <marquee  width="100%" direction="up" height="500px" scrollamount="3"
                        onmouseover="this.stop();"
                        onmouseout="this.start();" style="background-color: rgb(107, 207, 207);">
                        <ul>
<?php if($query->rowCount() > 0)
{
foreach($results as $result)
{?>
                            <li ><a class= "notice-link" style=" margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif; font-size: 1.3rem;" href="<?php echo htmlentities($result->noticelink);?>"> <?php echo htmlentities($result->noticetitle);?> </a></li>
<?php $cnt=$cnt+1; }} ?>
                        </ul>
                        
                        
                        
                        <!-- <a style="text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif" href=""> All student can----- *** </a> -->
                    </marquee>
                </div>
                <!-- notice board ends here -->
                <br>
                <!-- search are starts here -->
                        
                    <!-- <form class="d-flex" action="" target="_blank">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button style="margin-left: 3px;" class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                <!-- search are ends here -->
                <!-- important link starts herer  -->
                    <h4 style="background-color:teal; color:white; font-family: SolaimanLipi, Arial, sans-serif; text-align: center;" class="card-header">গুরুত্বপূর্ণ লিংক</h4>
                    <div class="notice-box" style="background-color: rgb(107, 207, 207);">
                        <ul>
                            <li ><a class= "notice-link" style=" margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif; font-size: 1.3rem;" target="_blank" href="http://www.bmeb.gov.bd/"> বাংলাদেশ মাদ্রাসা শিক্ষা বোর্ড </a></li>
                            <li ><a class= "notice-link" style="  margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;font-size: 1.3rem;" target="_blank" href="http://ckams.com"> দাখিল/আলিম ফলাফল</a></li>
                            <li ><a class= "notice-link" style="  margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;font-size: 1.3rem;" target="_blank" href="http://www.moedu.gov.bd/"> শিক্ষা মন্ত্রণালয় </a></li>
                            <li ><a class= "notice-link" style="  margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;font-size: 1.3rem;" target="_blank" href="http://banbeis.gov.bd/new/"> ব্যানবেইজ</a></li>
                            <li ><a class= "notice-link" style="  margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;font-size: 1.3rem;" target="_blank" href="http://www.seqaep.gov.bd/"> সেকায়েপ</a></li>
                            <li ><a class= "notice-link" style="  margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;font-size: 1.3rem;" target="_blank" href="http://www.ebook.gov.bd/"> ই-বুক</a></li>
                            <li ><a class= "notice-link" style="  margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;font-size: 1.3rem;" target="_blank" href="https://www.teachers.gov.bd/"> শিক্ষক বাতায়ন</a></li>
                            <li ><a class= "notice-link" style="  margin: 10px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;font-size: 1.3rem;" target="_blank" href="http://mmc.e-service.gov.bd/"> মাল্টিমিডিয়া ক্লাসরুম ম্যানেজমেন্ট</a></li>
                            
                        </ul>
                    </div>           
                
                <!-- important link ends herer  -->


                <!-- facebook page starts here  -->
                
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2F%25E0%25A6%259A%25E0%25A6%25BE%25E0%25A6%25AA%25E0%25A7%259C%25E0%25A6%25BE-%25E0%25A6%2595%25E0%25A6%25BE%25E0%25A6%25B6%25E0%25A6%25BF%25E0%25A6%25B0%25E0%25A6%25BE%25E0%25A6%25AE-%25E0%25A6%2586%25E0%25A6%25B2%25E0%25A6%25BF%25E0%25A6%25AE-%25E0%25A6%2585%25E0%25A6%25A8%25E0%25A6%25B2%25E0%25A6%25BE%25E0%25A6%2587%25E0%25A6%25A8-%25E0%25A6%25AE%25E0%25A6%25BE%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25B0%25E0%25A6%25BE%25E0%25A6%25B8%25E0%25A6%25BE-108171614399165%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=195561688456313" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                
                <!-- facebook page ends here  -->


                



                
            </div>
            <!-- right side bar ends here -->
        </div>


    </div>

    
    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
