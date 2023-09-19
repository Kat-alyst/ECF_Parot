<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Titillium+Web:ital,wght@0,200;0,300;1,200&display=swap" 
    rel="stylesheet">
    <link rel = "reset stylesheet" href="css/reset.css">
    <link rel = "stylesheet" href= "css/main.css">
    <link rel = "stylesheet" href= "css/contact.css">
    <link rel = "stylesheet" href= "css/reviews.css">
    <title>Garage V. Parot</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
    rel='stylesheet'>
    

</head>

<body>

    <header class="header">
        <a href="index.php" class="logo">
        <img src="img\logo_black.png" alt="" style="width: 150px">
        </a>

        <nav class="navbar">
            <a href="index.php" style="" class="active">Home</a>
            <a href="repair.php" style="">Repair</a>
            <a href="buy.php" style="">Buy</a>
            <a href="reviews.php" style="">Reviews</a>
            <a href="about.php" style="">About</a>
            <a href="contact.php" style="">Contact</a>
            <a href="signup.php" class="btnSignup">Sign Up</a>
        </nav>

        <div class="social-media">
            <a href="#" style="--i:1"><i class='bx bxl-twitter'></i></a>
            <a href="#" style="--i:2"><i class='bx bxl-facebook'></i></a>
            <a href="" style="--i:3"><i class='bx bxl-instagram-alt'></i></a>
</header>
            

    <div class="container">  
        <form id="contact" action="" method="post">
            <h3>YOUR REVIEW</h3>
    <fieldset>
        <input placeholder="Your name" type="text" tabindex="1" required autofocus>
            </fieldset>
    <fieldset>
        <input placeholder="Your Email Address" type="email" tabindex="2" required>
            </fieldset>
    <fieldset>
        <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
            </fieldset>
    <fieldset>
    <fieldset>
        <textarea placeholder="Type your review here...." tabindex="5" required></textarea>
    </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
    
  </form>

            
    
</body>
