<!DOCTYPE HTML>
<html lang="en-us">

      <head>
<meta charset = "utf-8">
          <title>Prison to Prison - Resources</title>
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
?>
       <?php include $_SERVER['DOCUMENT_ROOT'] . '/web_sites/p2p/module/head.php'; ?>

      </header>

      
      
   
        
   
      <main role="main" id="page-main">
      <div class="container">
       
          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Resources</h2></div>
<div class="panel-body">
     <div class="panel">
         <ul>
         <li>Route Map - <a href="https://www.google.com/maps" target="_blank">Google Maps</a></li>
         <li>Special Font - <a href="http://www.dafont.com/gang-of-three.font" target="_blank">Gang of Three</a></li>
         <li>Images of San Francisco - <a href="http://www.pachd.com/" target="_blank">www.pachd.com</a></li>
        <li>Boot Strap - <a href="http://www.http://getbootstrap.com/" target="_blank">www.http://getbootstrap.com</a></li>
         </ul>
    <br />
    <br />
    </div>
          </div>
    </div>
          </div>
          
          
          
          

            
         
          </div>
           <br><br><br><br> <br><br>
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