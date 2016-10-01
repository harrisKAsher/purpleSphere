<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/head.php'; ?>
      <main id="page-main">
      <div class="container">

          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Contact Me</h2></div>
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
        <p class="center">If you have any questions to ask me or would like to contact me please
          fill out the forum below and I will get back to you as soon as possible.</p>
        <form method="post" action="/contact/" id="contactform">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" value="<?php if(isset($name)){ echo $name; } ?>" required><br>
        <br>
        <label for="email">Email:</label><br>
        <input type="email"  name="email" id="email" value="<?php if(isset($email)){ echo $email; } ?>" required><br>
        <br>
        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" id="subject" value="<?php if(isset($subject)){ echo $subject; } ?>" required><br>
        <br>
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" class="email" required><?php if(isset($message)){ echo $message; } ?></textarea>
        <br>
<br>
<label>&nbsp;</label>
<?php if (isset($action)) { ?>
    <img id="captcha" src="contact/captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image">
<?php } else { ?>
    <img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image">
<?php } ?>

<!-- This allows the user to type in what they see --><br><br>
<label for="cap_code">Security Code:</label><br>
        <input id="cap_code" name="cap_code" type="text" size="6" required><br>
<label for="action">&nbsp;</label>

        <br>
       <input type="submit" name="action" id="action" value="Send"><br>
     </form></div>
            <br>
    </div>
          </div>
    </div>
          </div>







          </div>
           <br><br><br><br><br>
        </main>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/foot.php'; ?>
