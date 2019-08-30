<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>DN Fairytale</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"> 

<!-- <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/easy-responsive-tabs.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/responsive.css"> -->

<style type="text/css">
.bg-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.bg-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background: url('<?=get_template_directory_uri();?>/img/ani-icon.png'); background-size: 100%; 
 bottom: -200px;
  -webkit-animation: square 25s infinite;
  animation: square 25s infinite;
  -webkit-transition-timing-function: linear;
  transition-timing-function: linear;
}
.bg-bubbles li:nth-child(1) {
  left: 10%;
}
.bg-bubbles li:nth-child(2) {
  left: 20%; opacity: .2;
  width: 80px;
  height: 80px;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
  -webkit-animation-duration: 17s;
          animation-duration: 17s;
}
.bg-bubbles li:nth-child(3) {
  left: 25%;
  -webkit-animation-delay: 4s;
          animation-delay: 4s;
}
.bg-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  -webkit-animation-duration: 22s;
          animation-duration: 22s;
}
.bg-bubbles li:nth-child(5) {
  left: 70%;
}
.bg-bubbles li:nth-child(6) {
  left: 80%; opacity: .2;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 3s;
          animation-delay: 3s;
}
.bg-bubbles li:nth-child(7) {
  left: 32%; opacity: .2;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 7s;
          animation-delay: 7s;
}
.bg-bubbles li:nth-child(8) {
  left: 55%; 
  width: 20px;
  height: 20px;
  -webkit-animation-delay: 15s;
          animation-delay: 15s;
  -webkit-animation-duration: 40s;
          animation-duration: 40s;
}
.bg-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  -webkit-animation-delay: 20s;
          animation-delay: 20s;
  -webkit-animation-duration: 40s;
          animation-duration: 40s;
}
.bg-bubbles li:nth-child(10) {
  left: 90%; opacity: .2;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 11s;
          animation-delay: 11s;
}
@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-100vh);
            transform: translateY(-100vh);
  }
}
@keyframes square {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(-100vh) rotate(60deg);
            transform: translateY(-100vh) rotate(60deg);
  }
}
</style>

<?php wp_head();?>
</head>
<body>
<!-- ================Offcanvus Menu Area =================-->
<div class="side_menu">
  <ul class="list menu_right">
    <li> <a href="#specification">Amenities & Facilities</a> </li>
    <li> <a href="#tab">Gallery</a> </li>
    <li> <a href="#floor_plan">Plans</a> </li>
    <li> <a href="#walkthrough">Walkthrough</a> </li>
    <li> <a href="#">Apartment Finder</a> </li>
    <li> <a href="#location_map">Location Map</a> </li>
    <li> <a href="#contact">Contact</a> </li>
  </ul>
</div>
<!--================End Offcanvus Menu Area =================--> 

<!--================Canvus Menu Area =================-->
<div class="canvus_menu">
  <div class="container">
    <div class="float-right">
      <div class="toggle_icon" title="Menu Bar"> <span></span> </div>
    </div>
  </div>
</div>
<!--================End Canvus Menu Area =================-->
<header>