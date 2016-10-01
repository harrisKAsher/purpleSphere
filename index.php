<?php
session_start();


// Not sure if this is needed anymore, but I did need it in 230...
/*if ( ! isset($_SERVER['DOCUMENT_ROOT'] ) )
  $_SERVER['DOCUMENT_ROOT'] = str_replace( '\\', '/', substr(
  $_SERVER['SCRIPT_FILENAME'], 0, 0-strlen($_SERVER['PHP_SELF']) ) );
*/

require('model/database.php');
require('model/model.php');
require('model/post.php');
require('model/functions.php');

if (!isset($_SESSION['loggedin'])) {
  $_SESSION['loggedin'] = FALSE;
}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
$action = filter_input(INPUT_GET, 'action');
$error = filter_input(INPUT_GET, 'error');
}
switch ($action) {

  case 'dev':
    $header = "Development";
    $pageID = 1;
    $posts = displayPosts($pageID);
    $comments = displayComments($pageID);
    $postNum = 0;
    foreach ($posts as $post) {
      $i = 0;
      foreach ($comments as $comment) {
        if ($comment['postID'] == $post['postID']) {
          $i++;
        }
      }
      $posts[$postNum]['comment_count'] = $i;
      $postNum++;
    }
    include 'view/page1.php';
    break;

  case 'design':
  $header = "Design";
  $pageID = 2;
  $posts = displayPosts($pageID);
  $comments = displayComments($pageID);
  $postNum = 0;
  foreach ($posts as $post) {
    $i = 0;
    foreach ($comments as $comment) {
      if ($comment['postID'] == $post['postID']) {
        $i++;
      }
    }
    $posts[$postNum]['comment_count'] = $i;
    $postNum++;
  }
  include 'view/page1.php';
  break;

  case 'contact':
    if ($_SESSION['loggedin'] == TRUE) {
      $user = userInfo($_SESSION['userName']);
      if (!isset($name)) {
          $name = $user['userName'];
      }
      if (!isset($email)) {
          $email = $user['email'];
      }
    }
    include 'contact/contact.php';
    break;

    case 'exercises':
      include 'info/exercises.php';
      break;

    case 'teaching_pres':
      include 'info/teaching.php';
      break;

    case 'project_video':
      include 'info/project.php';
      break;

    case 'Register':
      $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $password = filter_input(INPUT_POST, 'password');
      $rePassword = filter_input(INPUT_POST, 'rePassword');
      $userCheck = userInfo($userName);
      $emailCheck = emailCheck($email);
      $passwordLength = strlen($password);

      if (empty($userName) || empty($email) || empty($password) || empty($rePassword)) {
          $error = "Invalid input, please make sure all information is input properly.";
          include 'view/register.php';
          break;
      }
      elseif ($userName == $userCheck['userName']) {
        $error = "That user name has already been taken.";
        include 'view/register.php';
        break;
      }
      elseif (preg_match('/ /', $userName)) {
        $error = "You cannot have a space in your user name.";
        include 'view/register.php';
        break;
      }
      elseif ($email == $emailCheck['email']) {
        $error ="That email address is already associated with an account.";
        include 'view/register.php';
        break;
      }
      elseif (preg_match('/ /', $password)) {
        $error = "You cannot have a space in your password.";
        include 'view/register.php';
        break;
      }
      elseif ($password != $rePassword) {
        $error = "Your passwords do not match.";
        include 'view/register.php';
        break;
      }
      elseif ($passwordLength <= 6) {
        $error = "Your passwords must be at least 7 characters long.";
        include 'view/register.php';
        break;
      }
      else {
          $badpasswords = ["123456","12345678", "password"];
          if(in_array ($password, $badpasswords)) {
            $error = "That password is not a secure password, please enter a stronger one.";
            include 'view/register.php';
            break;
          }
          else {
            $check = "success";
            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = userReg($userName, $email, $password);
            if ($result) {
              $message = "$userName, you are registered!";
              include 'view/login.php';
            }
            else {
              $message = "Sorry $userName, but there was a problem and you could not be registered.";
              include 'view/register.php';
            }

      }}
      break;

  case 'reg':
      if (!isset($userName)) { $userName = ''; }
      if (!isset($email)) { $email = ''; }
        include 'view/register.php';
        break;


  case 'Login':
    if (isset($check) && $check == "success") {
    } else {
      $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
      $user = userInfo($userName);

      if(password_verify($password, $user['password'])) {
          $_SESSION['loggedin'] = TRUE;
          $_SESSION['userName'] = $user['userName'];
          $_SESSION['userID'] = $user['userID'];
          $_SESSION['usertype'] = $user['type'];
          $message = 'Welcome home, '. $userName;
          include 'view/home.php';
          break;
      } else {
          $error = "Sorry, the login failed. Please check your User Name and password and try again.";
          include 'view/login.php';
          break;
      }}

    case 'logout':
      /*
        $_SESSION['userName'] = '';
        $_SESSION['usertype'] = '';
        $_SESSION['userID'] = '';*/
        $_SESSION['loggedin'] = FALSE;
        session_destroy();
        include 'view/home.php';
        break;

      break;

    case 'newPost':
      $userID = $_SESSION['userID'];
      $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
      $img_src = filter_input(INPUT_POST, 'img_src', FILTER_SANITIZE_SPECIAL_CHARS);
      $img_alt = filter_input(INPUT_POST, 'img_alt', FILTER_SANITIZE_SPECIAL_CHARS);
      $link_path = filter_input(INPUT_POST, 'link_path', FILTER_SANITIZE_SPECIAL_CHARS);
      $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
      $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
      $result = postNew($userID, $pageID, $img_src, $img_alt, $link_path, $title, $content);
      $page = pageCheck($pageID);
      header("Location: .?action=".$page);
      break;

      case 'editedPost':
        $postID = filter_input(INPUT_POST, 'postID', FILTER_VALIDATE_INT);
        $userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);
        $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
        $img_src = filter_input(INPUT_POST, 'img_src', FILTER_SANITIZE_SPECIAL_CHARS);
        $img_alt = filter_input(INPUT_POST, 'img_alt', FILTER_SANITIZE_SPECIAL_CHARS);
        $link_path = filter_input(INPUT_POST, 'link_path', FILTER_SANITIZE_SPECIAL_CHARS);
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        $result = edit($postID, $userID, $img_src, $img_alt, $link_path, $title, $content);
        $page = pageCheck($pageID);
        if ($result) {
            header("Location: .?action=".$page);
        }else {
          header("Location: .?action=".$page."&error=Edit Failed");
        }

        break;

    case 'deletePost':
      $postID = filter_input(INPUT_POST, 'postID', FILTER_VALIDATE_INT);
      $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
      $result = deletePost($postID);
      $page = pageCheck($pageID);
      if ($result) {
        header("Location: .?action=".$page);
      }else {
        header("Location: .?action=".$page."&error=Edit Failed");
      }
      break;

    case 'editPost':
      $postID = filter_input(INPUT_POST, 'postID', FILTER_VALIDATE_INT);
      $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
      $postToEdit = editPost($postID);
      $header = "Edit Post";
      $edit = TRUE;
      include 'view/page1.php';
      break;

    case 'commentNew':
      $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
      $postID = filter_input(INPUT_POST, 'postID', FILTER_VALIDATE_INT);
      $userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);
      $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
      if ($content == '' || $content == '' || $content == NULL || $content == FALSE) {
        $error = "Please enter a comment before submiting.";
        $page = pageCheck($pageID);
        header("Location: .?action=".$page."&error=Please enter a comment before submiting.");
      }
      else {
        $result = commentNew($userID, $pageID, $postID, $content);
        $page = pageCheck($pageID);
        header("Location: .?action=".$page);
      }
      break;

    case 'editComment':
      $commentID = filter_input(INPUT_POST, 'commentID', FILTER_VALIDATE_INT);
      $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
      $commentToEdit = editComment($commentID);
      $header = "Edit Post";
      include 'view/edit.php';
      break;

    case 'commentEdited':
      $commentID = filter_input(INPUT_POST, 'commentID', FILTER_VALIDATE_INT);
      $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
      $comment = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
      $result = commentEdit($commentID, $comment);
      $page = pageCheck($pageID);
      if ($result) {
        header("Location: .?action=".$page);
      }else {
        header("Location: .?action=".$page."&error=Edit Failed");
      }
      break;

    case 'deleteComment':
      $commentID = filter_input(INPUT_POST, 'commentID', FILTER_VALIDATE_INT);
      $pageID = filter_input(INPUT_POST, 'pageID', FILTER_VALIDATE_INT);
      $result = deleteComment($commentID);
      $page = pageCheck($pageID);
      if ($result) {
        header("Location: .?action=".$page);
      }else {
        header("Location: .?action=".$page."&error=Delete Failed");
      }
      break;

    case 'signin':
      include 'view/login.php';
      break;

    default:
      include 'view/home.php';
      break;
}
 ?>
