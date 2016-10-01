<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/head.php'; ?>
      <main id="page-main">
      <div class="container">

          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Home</h2></div>
<div class="panel-body">
     <div class="panel">
         <?php if (isset($error)) { echo $error; } ?>
        <?php if (isset($message)) { echo $message; } ?>
        <img src="/images/me.jpg" alt="A picture of me" class="img_right" />
         <p> Welcome to my website. This website was made from me by hand (not by using another person’s code, WordPress, etc.) However, the CSS of the website was made using Bootstrap which I modified to make this website.</p>
         <p>This website is design to feature some of the things I have made. The development section has links to some past and current websites I have made other than this one. The design section shows different designs I have made for different things as of recent. Not included in there, but another design I made is my logo in the top left corner of the screen.</p>
         <p>You are also free to contact me using my contact form, however, be for warned that it is not always the most reliable system. Also below you can see some of the PHP coding I have done by looking at my exercises page. You can also see a short presentation on PHP $_GET and $_POST and the difference between the two by looking at my teaching presentation.</p>
         <p>For those who care this website was made using HTML 5, CSS 3 with Bootstrap, JavaScript, jQuery, and PHP. </p>

    <br>
    <br>
    </div>
          </div>
    </div><br><br><br><br><br>
          </div>
          <br><br><br><br>
          </div>
        </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/foot.php';?>
