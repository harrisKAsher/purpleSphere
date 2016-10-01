<!DOCTYPE HTML>
<html lang="en-us">

      <head>
<meta charset = "utf-8">
          <title>Prison to Prison - Site Plan</title>
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
    <div class="panel-heading title"><h2>Site Plan</h2></div>
<div class="panel-body">
     <div class="panel">
   
         <h2>Site Purpose</h2>
         
         <p>The purpose of Prison to Prison Triathlon is to inform users on upcoming information on the triathlon that consist of running, swimming, and biking from the California state prison to Alcatraz Island and back. The site is to show off information to people who are curious about the event and allow those who wish to participate to register. It is also for those who want to watch the race, to know the route they will take and approximately when people will be there so they can observe with ease.</p>
         
         
         
         <h2>Audience</h2>
         
         <ul>
            <li>Participates in the Triathlon
                <ul>
                    <li>Age: 30 – 40 years old is probably focus, though may be a variety ranging from High School students to people in their 70's.</li>
                    <li>Gender: Both males and females.</li>
                    <li>Geography: Most likely in the San Francisco area, though others may be interested.</li>
                    <li>Technology Use: varies, more than likely mobile phone.</li>
                </ul>
            </li>

          <li>Those who want to watch the triathlon 
                <ul>
                    <li>Age: a variety of Ages.</li>
                    <li>Gender: Both males and females.</li>
                    <li>Geography: Most likely in the San Francisco area, though others may be interested.</li>
                    <li>Technology Use: varies, more than likely mobile phone.</li>
                </ul>
            </li>
         
         </ul>
         
         
         <h2>Assets List</h2>
            <ul>
                <li>Google Maps</li>
                <li>Dafonts</li>
                <li>Pachd.com</li>
                <li>Boot Strap</li>
            </ul>
         
         
         <h2>Style Guide</h2>
         
          <ul>
                <li>Background will be an image of Golden Gate Bridge.</li>
                <li>Footer and Header will be the Bootstrap inverted defaults.</li>
                <li>Headers (all) will be in the Gang of Three font from Dafonts.</li>
            </ul>
         
         
         
    <br />
    <br />
    </div>
          </div>
    </div>
          </div>
          
          
          
          

            
         
          </div>
           <br><br><br><br>     <br><br>
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