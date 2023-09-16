<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Addmission</title>
  <link rel="icon" href="images/title.jpg" type="image">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="addmission.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include('javascript.php');
    ?>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="images/title.png" alt="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addmission.html" >Addmission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice.html" >Notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html" >About</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <form action="" method="POST">
  <div class="form">
    <form action="action_page.php">
      <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form for your Addmission.</p>
        <hr>

        <label for="name"><b>Student Name</b></label>
        <input type="text" placeholder="Enter your name" name="name" id="name" onchange="myFunction('name');"  required>
        
        <label for="name"><b>Father's Name</b></label>
        <input type="text" placeholder="Enter your father's name" name="name" id="fname" onchange="myFunction('fname');" required>

        <label for="contact"><b>Father's phone no.</b></label>
        <input type="text" placeholder="Enter your father phone no." name="contact" id="fcontact"  required>

        <label for="contact"><b>Student phone no.</b></label>
        <input type="text" placeholder="Enter your phone no." name="contact" id="contact"  required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
    
        <label for="name"><b>Village/Town</b></label>
        <input type="text" placeholder="Enter your Village/town" name="name" id="add" onblur="myFunction('add')" required>

        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="others"> Others
        
        <div class="custom-select">
          <select onchange="selectClass()" id='sss' >
            <option value="0">Select your class</option>
            <option value="8">8<sup>th</sup></option>
            <option value="9">9<sup>th</sup></option>
            <option value="10">10<sup>th</sup></option>
            <option onclick="selectClass()" value="11">11<sup>th</sup></option>
            <option onclick="selectClass()"  value="12">12<sup>th</sup></option>
          </select>
        </div>

        <div class="stream-select" style="display:none;" id="stream-select">
          <select>
            <option value="0">Select your stream</option>
            <option value="s">Science</option>
            <option value="a">Arts</option>
          </select>
        </div>

    
        <p>By Taking Addmission you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn" onclick="popup('crepass-popup')" >Register</button>
      </div>
    </form>
  </div>
  
  <?php
  include('stu_createpass.php');
  ?>

  </form>

  <div class="welcome">
    <marquee direction="left" >welcome to point of study students ☺👍</marquee>
  </div>




</body>

</html>

<?php

?>