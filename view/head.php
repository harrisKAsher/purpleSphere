<!DOCTYPE HTML>
<html lang="en-us">
  <head>
      <title>Purple Sphere</title>

      <meta charset = "utf-8">
      <meta name="author" content="Asher Harris">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="/css/bootstrap.css" rel="stylesheet">
      <link href="/css/style.css" rel="stylesheet" />
  </head>

<body id="home">

     <header id="header">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigationbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand"><img src="/images/logo.png" alt="Purple Sphere Logo" /></a></div>
<div class="collapse navbar-collapse" id="navigationbar"><ul class="nav navbar-nav"><li></li>
        <li><a href="/?action=dev">Development</a></li>
        <li><a href="/?action=design">Design</a></li>
        <li><a href="/?action=contact">Contact Me</a></li>
      </ul><ul class="nav navbar-nav navbar-right">
        <?php if($_SESSION['loggedin'] == TRUE) { ?>
          <li><a href="/?action=logout">Logout</a></li><?php
        } else { ?>
          <li><a href="/?action=signin">Login</a></li>
          <li><a href="/?action=reg">Register</a></li> <?php } ?>

    <!--   <li class="menu_button"><button type="button" onclick="window.location='#';" class="btn btn-info navbar-btn">Page3</button></li>-->
    <li class="dropdown"></li></ul></div> </div></nav>

          </header>
