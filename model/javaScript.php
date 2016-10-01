<script>
var display = 0;
//Displayers
function post_display(){
        document.getElementById('admin_post').style.display = 'block';
        document.getElementById('hide').style.display = 'none';
}

//function comment_display(){
        //document.getElementsByClassName("comment_display")[<?php if(isset($i)){echo $i; } else {echo '0';} ?>].style.display = 'block';
        //document.getElementById('comment_display').style.display = 'block';
//}
function comment_display(){
    if (display === 0) {
        display++;
        document.getElementsByClassName("comment_display")[<?php if(isset($i)){echo $i; } else {echo '0';} ?>].style.display = 'block';

    }
    else {
        display--;
        document.getElementsByClassName("comment_display")[<?php if(isset($i)){echo $i; } else {echo '0';} ?>].style.display = 'none';
    }
}


</script>
