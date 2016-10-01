<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/head.php'; ?>
      <main id="page-main">
      <div class="container">

          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2><?php echo $header; ?></h2></div>
<div class="panel-body">
     <div class="panel">

   <?php if (isset($error)) { echo $error; } ?>
   <?php if (isset($message)) { echo $message; } ?>


   <!-- If Admin displays new post option. -->
   <?php if (isset($_SESSION['usertype'])) {
           if ($_SESSION['usertype'] == 'admin') { ?>
               <div class="panel-body">
               <a onclick="post_display()" class="clickme" id="hide"><?php if(isset($edit)){ echo "Edit Post"; }else {
                  echo "New Post";} ?></a>
   <div id="admin_post">
       <form action="." method="post">
           <input type="hidden" name="action" value="<?php if(isset($edit)){ echo "editedPost"; }else {
             echo "newPost";} ?>" />
           <input type="hidden" name="userID" value='<?php echo $_SESSION['userID'] ?>' />
           <input type="hidden" name="pageID" value='<?php echo $pageID ?>' />
           <input type="hidden" name="postID" value='<?php if(isset($edit)){ echo "$postID"; }?>' />
           <label>Image Source:</label><br />
           <input type="text" name="img_src" value="<?php if(isset($edit)){ echo $postToEdit['imgSRC'];} ?>" /><br />
           <label>Image Alt:</label><br />
           <input type="text" name="img_alt" value="<?php if(isset($edit)){ echo $postToEdit['imgAlt'];} ?>" /><br />
           <label>Link Path:</label><br />
           <input type="text" name="link_path" value="<?php if(isset($edit)){ echo $postToEdit['linkPath'];} ?>" /><br />
           <label>Title:</label><br />
           <input type="text" name="title" value="<?php if(isset($edit)){ echo $postToEdit['title'];} ?>" /><br />
           <label>Content:</label><br />
           <textarea name="content" rows="4" cols="50"><?php if(isset($edit)){ echo $postToEdit['content'];} ?></textarea><br />
           <input type="submit" value="Submit" />
       </form>
   </div></div>
   <?php }} ?>

   <!-- Creates content -->
      <?php if (!isset($edit)) { ?>
      <?php foreach ($posts as $post) { ?>
   <div class="panel-body">
        <div class="panel"><br>
           <div class="col-xs-12 col-lg-6"><img src="<?php echo $post['imgSRC'] ?>" class="img_center webImg" alt="<?php echo $post['imgAlt'] ?>" /></div>
           <div class="col-xs-0 col-lg-1"></div>

               <div class="col-xs-12 col-lg-5 textCenter"><h1><?php echo $post['title'] ?></h1>
                  <p><?php echo $post['content'] ?></p>

            <p>Check it out here: <a href="<?php echo $post['linkPath'] ?>"><?php echo $post['title'] ?></a></p><br />
                   </div>
                   <br />
                        <div class="move_right">
                   <?php if (isset($_SESSION['usertype'])) {
                           if ($_SESSION['usertype'] == 'admin' || $_SESSION['usertype'] == 'user') { ?>

                              <?php if($_SESSION['usertype'] == 'admin') { ?>
                              <form action="." method="post" class="nospace">
                                 <input type="hidden" name="action" value="deletePost" />
                                 <input type="hidden" name="postID" value="<?php echo $post['postID'] ?>" >
                                 <input type="hidden" name="pageID" value="<?php echo $pageID ?>" >
                                 <input type="submit" value="Delete Post" class="linkType" /> |
                              </form>
                              <form action="." method="post" class="nospace">
                                 <input type="hidden" name="action" value="editPost" />
                                 <input type="hidden" name="postID" value="<?php echo $post['postID'] ?>" >
                                 <input type="hidden" name="pageID" value="<?php echo $pageID ?>" >
                                 <input type="submit" value="Edit Post" class="linkType" /> |
                              </form>
                              <?php } ?>

                                   <a onclick="toggleClass('<?php echo 'post'.$post['postID'] ?>') " class="clickme">
                                       New Comment</a> |
                                 <?php }} ?>
                                   <a href="javascript:toggleClass('<?php echo 'comments'.$post['postID'] ?>');
                                      <?php if (isset($_SESSION['usertype'])) {
                                         if ($_SESSION['usertype'] == 'admin' || $_SESSION['usertype'] == 'user') { ?>
                                      toggleClass('<?php echo 'post'.$post['postID'] ?>');
                                      <?php }} ?>" >
                                       Posts(<?php if(isset($post['comment_count'])){echo $post['comment_count']; } else {echo '0';} ?>)</a>
                               </div><br />
                               <hr class="postHR" />

                      <div class="comment_display comments<?php echo $post['postID'] ?>">
                         <?php foreach ($comments as $comment) { ?>
                            <?php if ($comment['postID'] == $post['postID']) :?>

                         <p class="nospace"><?php echo $comment['ima_date'] .' | ' . $comment['userName']; ?>
                              <?php if($_SESSION['usertype'] == 'admin' || $_SESSION['userID'] == $comment['userID']) { ?> |
                              <form action="." method="post" class="nospace">
                                 <input type="hidden" name="action" value="deleteComment" />
                                 <input type="hidden" name="commentID" value="<?php echo $comment['commentID'] ?>" >
                                 <input type="hidden" name="pageID" value="<?php echo $pageID ?>" >
                                 <input type="submit" value="Delete" class="linkType" /> |
                              </form>
                              <form action="." method="post" class="nospace">
                                 <input type="hidden" name="action" value="editComment" />
                                 <input type="hidden" name="commentID" value="<?php echo $comment['commentID'] ?>" >
                                 <input type="hidden" name="pageID" value="<?php echo $pageID ?>" >
                                 <input type="submit" value="Edit" class="linkType" />
                              </form>
                              <?php } ?>

                         <p><?php echo $comment['comment'] ?></p>

                         <br />
                         <hr class="postHR" />
                         <?php endif; ?>
                         <?php } ?>
                      </div>

                   <div class="comment_display post<?php echo $post['postID'] ?>">
                       <form action="." method="post">
                           <input type="hidden" name="action" value="commentNew" />
                           <input type="hidden" name="pageID" value='<?php echo $pageID ?>' />
                           <input type="hidden" name="postID" value="<?php echo $post['postID'] ?>" >
                           <input type="hidden" name="userID" value='<?php echo $_SESSION['userID'] ?>' />
                           <label>Comment:</label><br />
                           <textarea name="content" rows="4" cols="50"></textarea><br />
                           <input type="submit" value="Submit" />
                       </form>
                       <hr class="postHR" />
                   </div>


             </div>
       </div>
 <?php }} ?>




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
