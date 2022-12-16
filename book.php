<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD Travel</title>


    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>BD</span>Travel</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="book.php">book</a>
        <a href="index.php#packages">packages</a>
        <a href="index.php#services">services</a>
        <a href="#gallary">Gallary</a>
      
    </nav>  
</header>
<section class="book" id="book">

    <h1 class="heading">
        <span>BOOK NOW</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>
       <div class="width 100 m-auto">
           <form action="content.php" method="post">
             <div class="form-group">
             <h3 >where to travel?</h3>
             <input type="text" name="place"  autocomplete="off" class="form-control">
             </div>


             <div class="form-group">
             <h3 >how many?</h3>
             <input type="number" name="guests"  autocomplete="off" class="form-control">
             </div>

             <div class="form-group">
             <h3 >Phone Number</h3>
             <input type="number" name="mobile"  autocomplete="off" class="form-control">
             </div>

             <div class="form-group">
             <h3 >Travel Date</h3>
             <input type="date" name="date"  autocomplete="off" class="form-control">
             </div>
             
             <button type="Confirm" Class="btn btn-primary">Confirm</button>
          </form>

    
        </div>

</section>
<section class="footer">
    <div class="box-container">
           <div class="box">
               <h3>Contact us</h3>
               <a href="https://www.facebook.com/steveharrami/">01.MD.Samiul Islam Sabbir</a> 
               <a href="https://www.facebook.com/fariahaque.tinni">02.Faria Haque</a> 
               <a href="https://www.facebook.com/najimul.civilion">03.Md.Nurul Islam Emon</a> 
           </div>
        
           <div class="box">
               <h3>quick links</h3>
               <a href="#">home</a>
               <a href="#">book</a>
               <a href="#">packages</a>
               <a href="#">services</a>
               <a href="#">gallery</a>
               <a href="#">About</a>
           </div>
           <div class="box">
               <h3>follow us</h3>
               <a href="https://www.facebook.com/">facebook</a>
               <a href="#">instagram</a>
               <a href="#">github</a>
               <a href="#">linkedin</a>
           </div>
     </div>
   
       <h1 class="credit">| 2022 @all rights reserved |</h1>
   
   </section>
   <script src="script.js"></script>
   
   </body>
   </html>