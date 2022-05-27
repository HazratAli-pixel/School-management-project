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

    <title >চাপড়া আলিম কাশিরাম মাদ্রাসা</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- bangla fonts link -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    

</head>
<body>


    <!-- facebook page script starts here -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=195561688456313&autoLogAppEvents=1" nonce="L5n9EBBN">
    </script>
    <!-- facebook page script ends here -->

    <!-- Navigation -->
<?php include_once('includes/header.php');?>
<?php include_once ('slider.php');?>



    <div class="container">
       
    
    <!-- breaking board starts here -->
<?php 
$sql = "SELECT * from  tblbloodgroup where status=1";
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
            <div class="col-lg-8 col-sm-12 mb-4 letf-side">

                <!-- institute person qoute starts herer -->
                <div style="margin-left: 3px;">
                    <div style="background-color:rgb(107, 207, 207);">
                        <h4  style="  padding-top: 3px; padding-bottom: 3px; margin-left: 3px; font-family: SolaimanLipi, Arial, sans-serif; ">প্রতিষ্ঠানের ইতিহাসঃ</h4>
                    </div>
                    <div class="history">
                        <img class="img-fluid rounded" src="pic/1.jpg" alt="" width="300px" >
                        <p class="history" style="padding-left:0%; font: size 20px; font-family: SolaimanLipi, Arial, sans-serif; text-align:justify; ">আসসালামুআলাইকুম ওয়ারাহমাতুলাহ, ঐতিহ্যবাহী ওয়াজউদ্দিন ফাউন্ডেশন ট্রাস্ট ইসলামিয়া দাখিল মাদ্রাসাটি কুমিল্লা-জেলার দাউদকান্দি উপজেলার গৌরীপুর বাজার থেকে প্রায় ১.৫০ (দেড়) কিলোমিটার পূর্বদিকে গলিয়ারচর গ্রামে মাদরাসাটি ১ একর ৫ শতক জায়গা নিয়ে অবস্থিত। এ মাদরাসাটি উপজেলার একটি স্বনামধন্য দ্বীনি শিক্ষা প্রতিাষ্ঠান। প্রখ্যাত ভাষাসৈনিক, ভাষা আন্দোলনে বিশেষ অবদানের জন্য ২০১৬ইং সানে একুশে পদকপ্রাপ্ত, আন্তর্জাতিক খ্যাতিসম্পনন্ন পরমানু বিজ্ঞানী, স্বনামধন্য কবি
                        <a style="text-decoration: none;" href="#">see more</a> </p>
                        
                    </div>
                </div>
                
                
                
                <div class="col-md-6 col-sm-12" style="margin-left: -10px;">
                    <div style="background-color:rgb(107, 207, 207);" style="border-radius: 10px;">
                        <h4  style="  padding-top: 3px; padding-bottom: 3px; margin-left: 3px; font-family: SolaimanLipi, Arial, sans-serif; ">সভাপতির বাণী</h4>
                    </div>
                    
                    <div class="history">
                        <img class="img-fluid rounded" src="pic/man.jpg" alt="" width="300px" >
                        <p class="history" style="padding-left:0%; font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;">পড়! তোমার রবের নামে যিনি সৃষ্টি করেছেন (সূরা-আল্লাক্ব ঃ১)। ডিজিটাল বাংলাদেশ গড়ার লক্ষ্যে মাদরাসা শিক্ষা শিক্ষাব্যবস্থাকে বেগবান ও আধুনিকায়ন করতে মাল্টিমিডিয়া ক্লাসসহ বিভিন্ন স্তরে তথ্য-প্রযুক্তি যে অবদান রাখছে তার জন্য বর্তমান গণপ্রজাতন্ত্রী বাংলাদেশ সরকার তথা মাননীয় প্রধানমন্ত্রী ও শিক্ষামন্ত্রীসহ সংশ্লিষ্ট সকলকে  জানাই আন্তরিক মোবারকবাদ। দেশের দ্বিমুখী শিক্ষা ব্যবস্থার প্রেক্ষাপটে ইসলামী ও আধুনিক 
                        <a  data-toggle="collapse" style="text-decoration: none;" href="#sovapoti">see more</a> </p>
                    </div>
                    <div id = "sovapoti" class="collapse">
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> শিক্ষার বাস্তব সমন্বয় সাধন কারে সঠিক ইসলামী আদর্শের বুনিয়াদে ১৯৬১ সালে মাদরাসাটির শুভ সূচনা করেন জিয়াউর হক (কারী)। তারপর কালের বিবর্তনে মহান আল্লাহ্র মেহেরবাণীতে আজ তা পত্র-পল্লবে সুশোভিত হয়ে বিরাট মহীরূহে পরিণত হয়েছে। যাদের প্রচেষ্টা, অনুপ্রেরণা ও সহযোগিতায় মঙ্গলকান্দি ইসলামিয়া ফাজিল মাদরাসা বর্তমান অবস্থানে পৌঁছেছে এবং এগিয়ে চলেছে, বিশেষ করে গভর্ণিং বডির সম্মানিত সদস্যবৃন্দ, শিক্ষকম-লী, ছাত্র-ছাত্রী, অভিভাবক, এলাকাবাসী ও সর্বস্তরের জনগণ, তাঁদের সকলকে কৃতজ্ঞতারসহিত আন্তরিক মুবারকবাদ জ্ঞাপন করছি । ইসলামী জীবনদর্শ, সংস্কৃতি, ঐতিহ্য, মূল্যবোধ, অর্থনীতি ও সমাজনীতি ইত্যাদি ক্ষেত্রে মসলিম সন্তানদেরকে আদর্শ নাগরিক রূপে গড়ে তোলা, বিশেষ করে নৈতিক অবক্ষয় থেকে তরুন সমাজকে রক্ষা ও নারীকে পরিপূর্ণ দ্বীনি শিক্ষায় শিক্ষিত করে চারিত্রি উৎকর্ষ ও মূল্যবোধ তৈরীর বাস্তব উদ্যোগই হোক এ প্রতিষ্ঠানের দায়বদ্ধতা -এ দোয়াই করছি আমিন।
                            </p>
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> <strong> সভাপতির বাণী </strong> <br><span>চাপড়া কাশিরাম আলিম মাদ্রাসা</span> <br><span>হাজারীহাট, সৈয়দপুর, নীলফামারী</span>
                            </p>
                        
                    </div>
                </div>

                <div class="col-md-6 col-sm-12" style="margin-right: -5px;">
                    <div style="background-color:rgb(107, 207, 207);">
                        <h4  style="  padding-top: 3px; padding-bottom: 3px; margin-left: 3px; font-family: SolaimanLipi, Arial, sans-serif; ">অধ্যক্ষের বাণী</h4>
                    </div>
                    
                    <div class="history">
                    <img class="img-fluid rounded" src="pic/man.jpg" alt="" width="300px" >
                    <p class="history" style="padding-left:0%; font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;">বাংলাদেশের শিক্ষা ব্যবস্থার একটি পূর্ণাঙ্গ ধারা মাদরাসা শিক্ষা। সাধারণ শিক্ষার পাশপাশি সমান্তরালভাবে এটি বয়ে চলেছে দীর্ঘদিন ধরে এবং এ দেশের জন-মানসে তার স্থান করে নিয়েছে সুরক্ষিত ও সুদৃঢ়ভাবে। ধর্মীয় শিক্ষা ও জাগতিক শিক্ষা দুটি পরস্পরের পরিপুরক। এ সমন্বিত ইসলামী শিক্ষা ব্যবস্থার প্রতিষ্ঠানিক রুপই হচ্ছে মাদরাসা শিক্ষা। বাংলাদেশের শিক্ষা ব্যবস্থার একটি পূর্ণাঙ্গ ধারা মাদরাসা শিক্ষা।
                    <a data-toggle="collapse" style="text-decoration: none;" href="#principal">see more</a> </p>
                    
                   
                    </div>
                    <div id = "principal" class="collapse">
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> সাধারণ শিক্ষার পাশপাশি সমান্তরালভাবে এটি বয়ে চলেছে দীর্ঘদিন ধরে এবং এ দেশের জন-মানসে তার স্থান করে নিয়েছে সুরক্ষিত ও সুদৃঢ়ভাবে। ধর্মীয় শিক্ষা ও জাগতিক শিক্ষা দুটি পরস্পরের পরিপুরক। এ সমন্বিত ইসলামী শিক্ষা ব্যবস্থার প্রতিষ্ঠানিক রুপই হচ্ছে মাদরাসা শিক্ষা।  সঠিক ধর্মীয়, নৈতিক শিক্ষা ও যুগোপযোগী আধুনিক শিক্ষার সমন্বয়ে বর্তমানে প্রতিষ্ঠানটি গুনগত ও মানসম্মত শিক্ষাদানে সক্ষম। বর্তমান সরকারের শিক্ষা বিষয়ক নির্দেশনা ও সার্বিক তত্ত্বাবধানে শিক্ষকবৃন্দের ঐকান্তিক প্রচেষ্টায়, শিক্ষার্থীদের নিরলস অধ্যয়ন ও অধ্যবসায় এবং অভিভাবক ও সংশ্লিষ্ট সকলের সম্মিলিত পরামর্শে প্রতিষ্ঠানটি ক্রমান্বয়ে কামিল (মাস্টার্স) পর্যন্ত উন্নীত হবে ইনশাআল্লাহ্। আল্লাহ তা’য়ালা এই প্রতিষ্ঠানটিকে সঠিক ইসলাম ও আধুনিক বিজ্ঞান সম্মত শিক্ষার মারকায হিসাবে কবুল করে নিন। আমিন!!!
                        </p>
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> <strong> অধ্যক্ষের বাণী </strong> <br><span>চাপড়া কাশিরাম আলিম মাদ্রাসা</span> <br><span>হাজারীহাট, সৈয়দপুর, নীলফামারী</span>
                        </p>
                    
                    </div>
                </div>
                <!-- institute person qoute ends herer -->



                <!-- student information part starts here -->
                <div class="col-lg-6 col-sm-12 mb-4">
                    <a href="" style="text-decoration: none; color:black; "><h4 style="background-color:teal; color:white; font-family: SolaimanLipi, Arial, sans-serif; text-align: center;" class="card-header">ভর্তি তথ্য</h4></a> 

                    <div class="notice-box" width="100%" height="500px" style="background-color: rgb(107, 207, 207);">
                    
                        <img class= ="sinfo-pic" src="" alt="">
        
                    </div>
                </div>
                <!-- student information part ends here -->
                





            </div>
            <!-- left side bar ends here -->

            <!-- right side bar starts here -->
            <div class="col-lg-4 mb-4">
                
                <!-- Wellcome massage starts here -->
                <h4 style="background-color:teal; color:white; font-family: SolaimanLipi, Arial, sans-serif; text-align: center;" class="card-header">শুভেচ্ছা বার্তা</h4>
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2F108171614399165%2Fvideos%2F994163531061100&width=500&show_text=false&appId=195561688456313&height=500" width="360" height="220" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                <!-- Wellcome massage ends here -->

                <div class="">
                    <br>
                    <a href="page.php?type=addmission" style="text-decoration: none; color:black; "><h4 style="background-color:rgb(107, 207, 207); font-family: SolaimanLipi, Arial, sans-serif;" class="card-header">ভর্তি তথ্য</h4></a>    
                    <a href="images.php" style="text-decoration: none; color:black; "><h4 style="background-color:rgb(107, 207, 207);font-family: SolaimanLipi, Arial, sans-serif;" class="card-header">ফটো গ্যালারী</h4></a>        
                    <a href="#" style="text-decoration: none; color:black; "><h4 style="background-color:rgb(107, 207, 207);font-family: SolaimanLipi, Arial, sans-serif;" class="card-header">ভিডিও গ্যালারী</h4></a>
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
