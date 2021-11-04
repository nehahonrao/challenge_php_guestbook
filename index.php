<html>
<head>
<title>Guestbook</title>
</head>
<link rel="stylesheet" href="style.css">
<?php

require 'emoji.php';
require 'post.php';
require 'Postloader.php';
$loader = new PostLoader();

if (isset ($_POST['title']))
{
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $guestMessage = htmlspecialchars($_POST['guestMessage']);

    if (empty($author) || empty($guestMessage)|| empty($title))
    {
        throw new Exception("fill in your details");
        // echo "Fill your details";
    }

    $post = new Post($title, $author, $guestMessage);
    $loader->addPost($post);
    $loader->savePosts();
    $posts = $loader->getPosts();

    //The messages are sorted from new (top) to old (bottom).
    $posts = array_reverse($posts); //store reversed array in variable

    //Only show the latest 20 posts.
    $posts = array_slice($posts, 0, 12);
    
?>
 
    <h2 class="head"><?php echo "message is saved successfully";?><h2>
<?php  }?>

<body>
    <div >
       <h3 class="mainstyle">GuestBook<h3>
       
</div>
		<div id="msg">
        <form action="index.php" method="post">
		Title: <input type="text" id="title" name="title"/><br /><br>
		Write your message: <br /> <textarea name="guestMessage" rows="10" cols="30" ></textarea><br /> <br />
		Name:<input type="text" id="username" name="author" /><br/><br>
        <input type="submit" value="Submit">
		<input type="reset" value="Cancel">
        
        </form>
		</div>
        
</body>


<?php 
if (!empty($posts)) {
foreach($posts as $post){
    ?>
<div class="review">
        <?php
echo "Feedback from Customers:";
echo "<br>";
echo "Greeting:".' '.$post->getTitle();
echo "<br>";
echo "Message Written By:".' ' .$post->getAuthor();
echo "<br>";
$arr = [];
$str = '';
$arr = explode(' ', $post->getContent()); 
    foreach($arr as $word) {
        $str .= Emoji::stringToEmoji($word) . ' ';
    }
echo "Message is:".' ' .$str;
echo "<br>";
echo "Message is written on:".' ' .$post->getDate();
echo "<br>";
}
}

?> 
</div>



</html>
 
 