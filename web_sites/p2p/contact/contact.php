<!DOCTYPE HTML>
<html lang="en-us">

      <head>
<meta charset = "utf-8">
          <title>Prison to Prison - Contact Us</title>
<meta name="author" content="Asher Harris">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link href="/web_sites/p2p/css/bootstrap.min.css" rel="stylesheet">
          <link href="/web_sites/p2p/css/style.css" rel="stylesheet" />
           
          
    </head>
    
<body id="home">
  
     <header role="banner" id="header">
         <?php
if ( ! isset($_SERVER['DOCUMENT_ROOT'] ) )
  $_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr(
    $_SERVER['SCRIPT_FILENAME'], 0, 0-strlen($_SERVER['PHP_SELF']) ) );
         error_reporting( error_reporting() & ~E_NOTICE );
?>
       <?php include $_SERVER['DOCUMENT_ROOT'] . '/web_sites/p2p/module/head.php'; ?>

         
      </header>

      
      
   
        
   
      <main role="main" id="page-main">
      <div class="container">
       
          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Contact Us</h2></div>
<div class="panel-body">
     <div class="panel">
        
  
   
    <?php
        if(!empty($errors)){
            echo '<ul class="notify">';
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo '</ul>';
            unset($errors);    
        }
        ?>
        
        
        <div id="contact_field">
        <p class="center">If you have any questions about the Prison to Prison Triathlon, please fill out the forum below and we will get back to you as soon as possible.</p>
        <form method="post" action="." id="contactform">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>" required><br>
        <br>
        <label for="email">Email:</label><br>
        <input type="email"  name="email" id="email" value="<?php echo $email; ?>" required><br>
        <br>
        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" id="subject" value="<?php echo $subject; ?>" required><br>
        <br>
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" class="email" required> <?php echo $message; ?></textarea>
        </div><br>
<br>
<label>&nbsp;</label>
<img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image">
<!-- This allows the user to type in what they see --><br><br>
<label for="cap_code">Security Code:</label><br>
        <input id="cap_code" name="cap_code" type="text" size="6" required><br>
<label for="action">&nbsp;</label>
     
        <br>
       <input type="submit" name="action" id="action" value="Send"><br>
     </form>
            <br>
    </div>
          </div>
    </div>
          </div>
          
          
          
          

            
         
          </div>
           <br><br><br><br><br>
        </main>
        
    
    


        
        <footer role="contentinfo" class="navbar-inverse" id="foot">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/web_sites/p2p/module/foot.php'; ?>  
            <p>Last Update: <?php date_default_timezone_set('America/Los_Angeles');
                                echo date('j F, Y', getlastmod()) ?></p>
          </footer>
            
        <script src="/web_sites/p2p/js/jquery.js"></script> 
    <script src="/web_sites/p2p/js/bootstrap.min.js"></script>  
    <script src="/js/analystic.js"></script>      

</body>
</html>