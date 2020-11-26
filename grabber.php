<?php

  if(isset($_POST['submitmp3'])){
    $ID = $_POST['id'];
    $video_id = explode(".be/", $ID);
    $video_id = $video_id[1];
    if (empty($video_id[1]))
        {
             $video_id = explode("?v=", $ID);
             $video_id = $video_id[1];
             
        }
  header("Location:https://loader.to/api/button/?f=mp3&url=https://www.youtube.com/watch?v=$video_id");
}
if(isset($_POST['720mp4'])){
  $ID = $_POST['id'];
   $video_id = explode(".be/", $ID);
    $video_id = $video_id[1];
     if (empty($video_id[1]))
        {
             $video_id = explode("?v=", $ID);
             $video_id = $video_id[1];
             
        }
 header("Location:https://bijitit.glitch.me/download/?url=https://youtube.com/watch?v=$video_id");
}
if(isset($_POST['360mp4'])){
  $ID = $_POST['id'];
   $video_id = explode(".be/", $ID);
    $video_id = $video_id[1];
        if (empty($video_id[1]))
        {
             $video_id = explode("?v=", $ID);
             $video_id = $video_id[1];
             
        }
header("Location:https://api.youtube-mp3.org.in/widget/button/video/-$video_id");
}
if(isset($_POST['360mp4'])){
  $ID = $_POST['id'];
   $video_id = explode(".be/", $ID);
    $video_id = $video_id[1];
        if (empty($video_id[1]))
        {
             $video_id = explode("?v=", $ID);
             $video_id = $video_id[1];
             
        }
header("Location:https://api.vevioz.com/@api/button/mp4/$video_id");
}
  //header("Location:file:///C:/Users/DELL/Desktop/My%20HTML%205/css.htm/");
?>