<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mirand's portfolio</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#skills">skills</a>
      <a href="#education">education</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/mirand.rrudhani/" class="fab fa-facebook-f"></a>
      <a href="https://www.instagram.com/mirand.rr/" class="fab fa-instagram"></a>
      <a href="https://github.com/mirandrrudhani" class="fab fa-github"></a>
   </div>

</header>

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Mirand Rrudhani</h3>
      <span data-aos="fade-up">web  developer</span>
      <p data-aos="fade-up">Student of Cacttus Education. Favorite subject web development. Looking for internship</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">I am in the last year at Cacttus Education. I’m curious, 
         and I enjoy work that challenges me to learn something new and stretch in a different direction. 
         I do my best to stay on top of changes in the state of the art so that I can meet challenges with tools well suited to the job at hand.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span>Mirand Rrudhani </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> mirand.rrudhani@student.cacttus.education</h3>
         <h3 data-aos="zoom-in"> <span>address : </span>Prishtina,Kosovo </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +383 45 439 785</h3>
         <h3 data-aos="zoom-in"> <span>age : </span>19 years</h3>
      </div>
   </div>
   
   <div class="skills" id="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp" id="education">

      <h1 class="heading" data-aos="fade-up"> <span>Education</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>OOP & Algorithms</h3>
               <p>Finished</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>Basics of Web and mobile media</h3>
               <p>Finished</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>JAVA Basics</h3>
               <p>Finished</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2022 - continuing )</span>
               <h3>UI/UX</h3>
               <p>Learning</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2022 - continuing )</span>
               <h3>PHP</h3>
               <p>Learning</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2022 - continuing )</span>
               <h3>Android</h3>
               <p>Learning</p>
            </div>

         </div>
      </div>
   </div>

</section>

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+383-45-439-785</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>mirand.rrudhani@</p>
         <p>student.cacttus.education</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Prishtina,Kosovo</p>
      </div>

   </div>

</section>

<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>