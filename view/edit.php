<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/head.php'; ?>
      <main role="main" id="page-main">
      <div class="container">

          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2><?php echo $header; ?></h2></div>
<div class="panel-body">
     <div class="panel">

   <?php if (isset($error)) { echo $error; } ?>
   <?php if (isset($message)) { echo $message; } ?>


                   <div>
                       <form action="." method="post">
                           <input type="hidden" name="action" value="commentEdited" />
                           <input type="hidden" name="pageID" value='<?php echo $pageID ?>' />
                           <input type="hidden" name="commentID" value="<?php echo $commentID ?>" >
                           <label>Comment:</label><br />
                           <textarea name="content" rows="4" cols="50"><?php echo $commentToEdit['comment'] ?></textarea><br />
                           <input type="submit" value="Submit" />
                       </form>
                       <hr class="postHR" />
                   </div>


             </div>
       </div>


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
