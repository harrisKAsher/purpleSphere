<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/head.php'; ?>
      <main id="page-main">
      <div class="container">

          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Register</h2></div>
<div class="panel-body">
     <div class="panel">

   <?php if (isset($error)) { echo $error; } ?>
   <?php if (isset($message)) { echo $message; } ?>
   <form action="." method="post">
               <label for="userName">User Name:</label>
               <input type="text" name="userName" id="userName" required  value="<?php echo $userName ?>" >
               <br /><br />
               <label for="email">Email:</label>
               <input type="email" name="email" id="email" required value="<?php echo $email ?>">
               <br /><br />
               <label for="password">Password:</label>
               <input type="password" name="password" id="password"><br /><br />
               <label for="password">Re-enter Your Password:</label>
               <input type="password" name="rePassword" id="rePassword"><br /><br />
               <label>&nbsp;</label>
               <input type="submit" name="action" value="Register">
             
   </form>
    <br>
    <br>
    </div>
          </div>
    </div><br><br><br><br><br>
          </div>
          <br><br><br><br>
          </div>
        </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/foot.php'; ?>
