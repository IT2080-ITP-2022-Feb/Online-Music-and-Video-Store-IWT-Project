
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>ZikMusic</title>

<link rel="stylesheet" href="css/buy.css"/>

<link rel="shortcut icon" href="image/logogz.jpg"/>
</head>
<body style="background-image : url(image/bg.jpg)">
<?php include('php/navigation.php');?>
<br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="rating">
    
    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
    <p class="Rate-para"> prodact Rating | About This Product</p>
    <img src="../image/cart.jpg" width="60px" height="60px" class="cartpic" >

  </div>
<hr width="95%" color="white"><br>
<center><div class="title"><?php echo $_GET['title'];?></div></center>
<br><br><br>
<center><table border="0" width="90%"> 
  <tr>
    <td><div class="td1">
        <center><img src="image/logogz.jpg" width="350px" height="400px" ></center>
    </div></td>
    <td><div class="td">
        <table border= "0" width= "100%">
            <tr><td>
        <table border= "0" width= "100%">
            <tr><td>
                <div class="price"><center>Price<br><?php echo $_GET['price'];?></center></div>
            </td><td>
                <div class="Dis"><center>Discount<br><?php echo $_GET['discount'];?></center></div>
            </td></tr>
        </td></tr>
        </table>
        <tr><td>
         <div class="Discription"><center><br><br><br><h2><?php echo $_GET['discription'];?></h2><br></center></div>
    </div></td></tr>
</table>
    <td><div class="td">
      <br><br><br><br><br>
      <div class="btnl">
        <ul>
          <a href="php/payment.php"><li class="libtn">BUY IT NOW</li></a>
          <a href="php/watch.php"><li class="libtn">WATCH NOW</li></a>
          <a href="php/addcart.php?id=<?php echo $_GET['id'];?>&name=<?php echo $_GET['t_name'];?>"><li class="libtn">ADD TO CART</li></a>
          
        </ul>
</div>
    </div></td>

  </tr>

</table></center>
<br><br><br>
<div class="customer"><i>Most Relevant Reviews.......</i></div>
<hr width="95%" color="white"><br>
<section id="testimonials">

       
<div class="testimonial-box-container">

            
            <div class="testimonial-box">

              
                <div class="box-top">

                
                    <div class="profile">
                       
                        <div class="profile-img">
                            <img src="image/c-1.jpg" />
                        </div>
                       
                        <div class="name-user">
                            <strong>Touseeq Ijaz</strong>
                            <span>@touseeqijazweb</span>
                        </div>
                    </div>

                   
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>

                </div>

                
                <div class="client-comment">
                <p>Always have had great quality and service from Music store professional, a longer than normal wait for an out of stock item, but thats no problem, especially given the current virus situation, I will continue to use this company for my music needs and look forward to placing another order soon

</p>             </div>

            </div>

            
            <div class="testimonial-box">

                
                <div class="box-top">

                   
                    <div class="profile">
                        
                        <div class="profile-img">
                            <img src="image/c-2.jpg" />
                        </div>
                       
                        <div class="name-user">
                            <strong>J.K Rowling</strong>
                            <span>@jkrowling</span>
                        </div>
                    </div>

                 
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                </div>

                
                <div class="client-comment">
                <p>Always have had great quality and service from Music store professional, a longer than normal wait for an out of stock item, but thats no problem, especially given the current virus situation, I will continue to use this company for my music needs and look forward to placing another order soon

</p>    </div>

            </div>

            <div class="testimonial-box">

                
                <div class="box-top">

                   
                    <div class="profile">
                       
                        <div class="profile-img">
                            <img src="image/c-3.jpg" />
                        </div>
                       
                        <div class="name-user">
                            <strong>Harry Potter</strong>
                            <span>@DanielRedclief</span>
                        </div>
                    </div>

                   
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>

                </div>

                
                <div class="client-comment">
                <p>Always have had great quality and service from Music store professional, a longer than normal wait for an out of stock item, but thats no problem, especially given the current virus situation, I will continue to use this company for my music needs and look forward to placing another order soon

</p> </div>

            </div>


           
            
            <div class="testimonial-box">

                
            
                <div class="box-top">

                   
                
                    <div class="profile">
                       
                    
                        <div class="profile-img">
                            <img src="image/c-4.jpg" />
                        </div>
                        
                        <div class="name-user">
                            <strong>Oliva</strong>
                            <span>@Olivaadward</span>
                        </div>
                    </div>

                   
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>

                </div>

                <div class="client-comment">
                    <p>Always have had great quality and service from Music store professional, a longer than normal wait for an out of stock item, but thats no problem, especially given the current virus situation, I will continue to use this company for my music needs and look forward to placing another order soon

</p>
                </div>

            </div>

        </div>

    </section>
</body>
</html>
<?php include('php/footer.php');?>