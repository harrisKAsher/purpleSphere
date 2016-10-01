<!DOCTYPE HTML>
<html lang="en-us">

      <head>
<meta charset = "utf-8">
          <title>Purple Sphere</title>
<meta name="author" content="Asher Harris">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link href="/css/bootstrap.min.css" rel="stylesheet">
          <link href="/css/style.css" rel="stylesheet" />
           
          
    </head>
    
<body id="home">
  
     <header role="banner" id="header">
         <?php
if ( ! isset($_SERVER['DOCUMENT_ROOT'] ) )
  $_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr(
    $_SERVER['SCRIPT_FILENAME'], 0, 0-strlen($_SERVER['PHP_SELF']) ) );
?>
       <?php include $_SERVER['DOCUMENT_ROOT'] . '/module/head.php'; ?>

      </header>

      
      
   
        
   
      <main role="main" id="page-main">
      <div class="container">
       
          <div class="col-xs-12 col-lg-8">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Section 1</h2></div>
<div class="panel-body">
     <div class="panel">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra efficitur consectetur. Nunc viverra massa quis luctus scelerisque. Nam vestibulum ante quis auctor posuere. Integer a urna eu orci tincidunt pretium id euismod dolor. Vivamus luctus velit nec magna varius, vitae tempor arcu auctor. Nam egestas pretium suscipit. Duis ante magna, eleifend sit amet pretium id, eleifend non nisi. Duis vel odio in arcu fringilla lacinia ac ut est. Nullam luctus elementum lacinia.</p>
         <p>Nulla pretium ipsum vitae consectetur viverra. Vestibulum et mauris nec est convallis vestibulum. Aenean vestibulum sagittis fermentum. Cras dapibus, nunc nec fermentum pretium, mauris risus pellentesque nisi, eget dictum tellus massa eget urna. Praesent est leo, accumsan sed faucibus at, sagittis in dui. Nam mauris arcu, suscipit a accumsan in, scelerisque non nibh. Duis viverra faucibus tortor, eu ultrices tortor hendrerit eget. Nunc fermentum vitae metus id aliquet. Ut posuere tempor diam, sit amet malesuada sem. Duis semper cursus dui. Sed ut commodo turpis. Vestibulum pellentesque nisi finibus, molestie est non, condimentum ante. Maecenas nec libero eget libero rutrum tincidunt.</p>
         <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eu maximus arcu. Pellentesque tincidunt gravida tortor, eu porta velit euismod vel. Mauris non lobortis sem. Morbi tincidunt velit massa, a efficitur tortor sagittis ac. Pellentesque eleifend suscipit nulla eget tincidunt. In sollicitudin fringilla porttitor. Phasellus sed dolor cursus, pellentesque est et, consequat orci. Quisque leo justo, venenatis a placerat id, vulputate a arcu. Vestibulum vitae convallis nibh, nec pellentesque sapien. Vivamus aliquam ante ac nisl tristique elementum.</p>
    <br />
    <br />
    </div>
          </div>
    </div>
          </div>
          
          
          
            <div class="col-xs-12 col-lg-4">
                    <div class="panel panel-primary " >
    <div class="panel-heading title"><h2>Section 2</h2></div>
<div class="panel-body">
      <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque viverra efficitur consectetur. Nunc viverra massa quis luctus scelerisque. Nam vestibulum ante quis auctor posuere. Integer a urna eu orci tincidunt pretium id euismod dolor. Vivamus luctus velit nec magna varius, vitae tempor arcu auctor. Nam egestas pretium suscipit. Duis ante magna, eleifend sit amet pretium id, eleifend non nisi. Duis vel odio in arcu fringilla lacinia ac ut est. Nullam luctus elementum lacinia.</p>
    <br />
    <br />
    </div>
          </div>

          

      </div>
         </div>
          

            
          <br><br><br><br>
          </div>
        </main>
        
    
    


        
        <footer role="contentinfo" class="navbar-inverse" id="foot">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/module/foot.php'; ?>  
            <p>Last Update: <?php date_default_timezone_set('America/Los_Angeles');
                                echo date('j F, Y', getlastmod()) ?></p>
          </footer>
            
        <script src="/js/jquery.js"></script> 
    <script src="/js/bootstrap.min.js"></script>  
    <script src="/js/analystic.js"></script>      

</body>
</html>