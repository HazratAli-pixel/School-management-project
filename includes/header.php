<style>
.nav-link{
    text-align: center;
    border-radius: 10px;
}
.nav-link:hover{
    border-radius: 10px;
    background-color: #2980b9;
    color: white;
    height: 40px;
    transition: 0.4s;
    transform: scale(1.1);
}
.nav-item{
    font-size: 1.1rem;
}
.navbar{
    background: indianred;
}
@media (max-width: 568px) {
    .navbar-brand {
        font-size: 1rem;
    }
    
}
.navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
        .nav-link:hover{
        border-radius: 10px;
        background-color: #2980b9;
        color: white;
        font-size: 1.1rem;
        height: 40px;
        transition: 0.4s;
        transform: scale(1.02);
        }
    }

</style>
  
<nav class="navbar fixed-top navbar-toggleable-sm navbar-toggleable-md navbar-inverse bg-inverse">
        
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
		</button>
		
        <div class="container">
            <a class="logo" style="padding-left: 10px;" href="index.php">
                <img  style="border-radius: 50%; " src="images/logo.jpg" alt="" width="60px" height="auto">
            </a>
            <a style="padding-left: 10px; font-family:'SolaimanLipi', Arial, sans-serif" class="navbar-brand " href="index.php">চাপড়া কাশিরাম আলিম মাদ্রাসা</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif; " class="nav-link" href="index.php">প্রচ্ছদ</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif; " class="nav-link" href="page.php?type=aboutus">আমদের সম্পর্কে</a>  
                    </li>

                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif; " class="nav-link" href="teacher-info.php">শিক্ষকের তথ্য</a> 
                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif; " class="nav-link" href="images.php">ফটো গ্যালারী</a>   
                    </li>
                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif; " class="nav-link" href="page.php?type=aboutus">অনলাইন ক্লাস</a>   
                    </li>
                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif;" class="nav-link" href="page.php?type=aboutus">রুটিন</a>   
                    </li>
                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif; " class="nav-link" href="page.php?type=Hadis">হাদিস</a>   
                    </li>
                    <li class="nav-item">
                        <a style="font-family: SolaimanLipi, Arial, sans-serif; " class="nav-link" href="contact.php">যোগাযোগ</a>   
                    </li>
                </ul>
            </div>
        </div>
    </nav>