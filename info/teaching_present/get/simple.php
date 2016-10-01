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
          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Simple $_GET</h2></div>
<div class="panel-body">
     <div class="panel">






       <form action="display.php" method="get">
         Name: <input type="text" name="name"><br>
         Age: <input type="text" name="age"><br>
         <input type="submit">
       </form>






    <br />
    <br />
    </div>
          </div><br><br><br><br><br>
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
