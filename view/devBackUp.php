<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/head.php'; ?>


      <main role="main" id="page-main">
      <div class="container">

          <div class="col-xs-12 col-lg-12">
          <div class="panel panel-primary" >
    <div class="panel-heading title"><h2>Development</h2></div>


<?php if (isset($_SESSION['usertype'])) {
        if ($_SESSION['usertype'] == 'admin') { ?>
            <div class="panel-body">
            <a onclick="post_display()" class="clickme" id="hide">New Post</a>
<div id="admin_post">
    <form action="." method="post">
        <input type="hidden" name="action" value="submitPost" />
        <input type="hidden" name="userID" value="$_SESSION['userID']" />
        <label>Image Source:</label><br />
        <input type="text" name="img_src" /><br />
        <label>Image Alt:</label><br />
        <input type="text" name="img_alt" /><br />
        <label>Content:</label><br />
        <textarea name="post" rows="4" cols="50"></textarea><br />
        <input type="submit" value="Submit" />
    </form>
</div></div>
<?php }} ?>

<div class="panel-body">
     <div class="panel"><br>
        <div class="col-xs-12 col-lg-6"><img src="images/dev/p2p.png" alt="Prison to Prison Triathlon Website" class="webImg" /></div>
        <div class="col-xs-0 col-lg-1"></div>

            <div class="col-xs-12 col-lg-5 textCenter"><h1>Prison to Prison</h1><p>A website I deigned for my web design class in the fall of 2013. The website was made using HTML, CSS, Bootstrap, JavaScript, jQuery and PHP. I was required to make it in 8 days and was not allowed to work with others on the project. I used Illustrator to make the design of the prisons that is used as the logo and Brackets to make the website.</p>

         <p>Check it out here: <a href="web_sites/p2p/">Prison to Prison Triathlon</a></p><br />
                </div>
                <hr /> <br />

                <?php if (isset($_SESSION['usertype'])) {
                        if ($_SESSION['usertype'] == 'admin' || $_SESSION['usertype'] == 'user') { ?>
                            <a onclick="comment_display()" class="clickme">
                                Posts(<?php if(isset($post_count)){echo $post_count; } else {echo '0';} ?>)</a>
                <div class="comment_display">
                    <form action="." method="post">
                        <input type="hidden" name="action" value="submitPost" />
                        <input type="hidden" name="userID" value="$_SESSION['userID']" />
                        <label>Image Source:</label><br />
                        <input type="text" name="img_src" /><br />
                        <label>Image Alt:</label><br />
                        <input type="text" name="img_alt" /><br />
                        <label>Content:</label><br />
                        <textarea name="post" rows="4" cols="50"></textarea><br />
                        <input type="submit" value="Submit" />
                    </form>
                </div>
                <?php }} ?>
          </div>
    </div>

         <div class="panel-body">
     <div class="panel"><br>
        <div class="col-xs-12 col-lg-6"><img src="images/dev/HSPortfolio.png" alt="High School Portfolio Website" class="webImg" /></div>
        <div class="col-xs-0 col-lg-1"></div>

            <div class="col-xs-12 col-lg-5 textCenter">
                <h1>High School Portfolio</h1>
                <p>This is an online portfolio website I made in a digital media class in high school. Its main purpose was to show off the different designs I had made throughout the class. The designs were made using Photoshop, Illustrator, Premier, Audition, and Dreamweaver. All of the designs, audio files, and video were made with those tools.</p>

         <p>Check it out here: <a href="web_sites/HSPortfolio/">High School Portfolio</a></p>
     </div>
     <hr /> <br />

     <?php if (isset($_SESSION['usertype'])) {
             if ($_SESSION['usertype'] == 'admin' || $_SESSION['usertype'] == 'user') { ?>
                 <a onclick="comment_display()" class="clickme">
                     Posts(<?php if(isset($post_count)){echo $post_count; } else {echo '0';} ?>)</a>
     <div class="comment_display">
         <form action="." method="post">
             <input type="hidden" name="action" value="submitPost" />
             <input type="hidden" name="userID" value="$_SESSION['userID']" />
             <label>Image Source:</label><br />
             <input type="text" name="img_src" /><br />
             <label>Image Alt:</label><br />
             <input type="text" name="img_alt" /><br />
             <label>Content:</label><br />
             <textarea name="post" rows="4" cols="50"></textarea><br />
             <input type="submit" value="Submit" />
         </form>
     </div>
     <?php }} ?>
</div>
</div>

            <div class="panel-body">
     <div class="panel"><br>
        <div class="col-xs-12 col-lg-6"><img src="images/dev/Tech.png" alt="TSA Competition Site" class="webImg" /></div>
        <div class="col-xs-0 col-lg-1"></div>

            <div class="col-xs-12 col-lg-5 textCenter">
                <h1>TSA Competition Site</h1>
                <p>This website was made for the TSA competition for 2013. The design of the website was made using Photoshop. The content of the website was made in Dreamweaver. The images used on the website are royalty free ones. It was made using HTML, CSS, and JavaScript.</p>

         <p>Check it out here: <a href="web_sites/TechSite/">TSA Competition Site</a></p>
                </div>
          </div>
    </div>

              <div class="panel-body">
     <div class="panel"><br>
        <div class="col-xs-12 col-lg-6"><img src="images/dev/metaNaito.png" alt="Meta Naito" class="webImg" /></div>
        <div class="col-xs-0 col-lg-1"></div>

            <div class="col-xs-12 col-lg-5 textCenter">
                <h1>Meta Naito</h1>
                <p>A website I make as a hobby for a video game franchise called Kirby of the Stars. The website was made by a friend and me. All of the content on the site was obtained by us. The website was made using Brackets and contains HTML 5, CSS 3, JavaScript, and ASP.</p>

         <p>Check it out here: <a href="http://www.metanaito.net">Meta Naito</a></p>
                </div>
          </div>
    </div>


             <br>
          </div>






          <br><br><br><br>
          </div>
        </main>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/view/foot.php'; ?>
