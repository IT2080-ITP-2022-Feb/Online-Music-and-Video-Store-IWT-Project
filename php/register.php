<!DOCTYPE html>
<html lang="en">
<head> <!--start head tag-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head> <!--End head tag-->
    <link rel = "stylesheet" href = "../css/register.css">
    <script src = "../js/register.js"></script> <!--Link External JavaScript file-->
<body> <!--Start body tag-->
    <body background="../image\backgr.jpg" class = "background">
       
     <div class = "logo"><a href="../html/index.html"><img src ="../image/logo.jpg" onclick="myNewFunction()"></a></li></div> <!--Logo connect to home to page-->
 
     <div class= "nav1">    <!--Navigation bar starting point-->
         <nav>
             <ul> 
                 <li class = "home"><a href="../php/main.php" onclick="myNewFunction()">Home</a></li> <!--Home page in Navigation bar-->
                 <li class = "music"><a href="../php/music page.php"onclick="myNewFunction()" >Music</a></li> <!--music page in Navigation bar-->
                 <li class = "video"><a href = "../php/video page.php"onclick="myNewFunction()">Video</a></li> <!--Video page in Navigation bar-->
                 <li class = "about"><a href = "../php/About.php">About </a></li> <!--About page in Navigation bar-->
             <div class = "buttons">    
                
             </div>                
          </ul>
         </nav>
     </div>  <!--Navigation bar ending  point-->

     

    
    <div class = "registerbox">
      
        <h1><b>REGISTER</b></h1>
        <br>
            <a href = "#" ></a> <img src = "../image\fb.png"  class = "fblogo" onclick="myfacebookFunction()"> </a>
            <a href = "#"> <img src = "../image\google.png" class = "googlelogo" onclick="myGoogleFunction()"> </a>
        
        
            <form action = "Sconnect.php" method = "post" >
                <h3 class ="firstname"><b>FIRST NAME</b><b class= "lastname">LAST NAME</b></h3> <!--Connect with form with php-->
                <input type = "text" name = ""  placeholder="ENTER FIRST NAME" class = "first" name ="firstName" > <!--Fill first name in register page-->
                <input type = "text" name = ""  placeholder="ENTER LAST NAME"  class = "last" name ="lastName"><br> <!--Fill last name in register page-->
                <input type ="email" name = "email"placeholder = "ENTER EMAIL ADDRESS" class = "email" name = "email"> <!--Fill email in register page-->

                <h3 class ="password1"><b>PASSWORD</b><b class= "password2">CONFIRM PASSWORD</b></h3>

                <input type = "password" name = "" placeholder="PASSWORD" class = "first" name = "password" > <!--Fill password to register page-->
                <input type = "password" name = "" placeholder="CONFIRM PASSWORD"  class = "last" name = "cpassword" ><br> <!--Fill  confirm password to register page-->
                <input type = "checkbox" class = "checkbox1"><b>I agree to the terms & conditions</b><br>
                <input type ="submit" name = "stmt" value = "Register" class = "reg">  <!--Submit to register page-->
            </form>
        </div>
        
    

    
        <footer class="footer"> <!--Footer starting point-->
                        

            <div class = "nav2">   
               <div class= "cards" >
                
                    <img src= "../image/visa.jpg" class = "visa">
                    <img src = "../image/mastercard.jpg" class = "mastercard">
                    <img src = "../image/amercian.jpg" class = "amercian">
                    <img src = "../image/googlestore.jpg" class = "googlestore">
                    <img src = "../image/appstore.png" class = "applestore">
                    <img src = "../image/facebook.png" class = "facebook">
                    <img src = "../image/twitter.png" class = "twitter">
                    <img src = "../image/instagram.png" class = "instagram">
                    <h3 class = "copy">Copyright@2021 by Zikmusic.com</h3>
                </div>
                                
        </div>
    
                       
        </footer> <!--Footer ending point-->





</body> <!--End body tag-->
</html> <!--End html-->