<html>
<head>
<title>Guestbook</title>
</head>
<link rel="stylesheet" href="style.css">
<?php
	
require 'post.php';
require 'Postloader.php';
$loader = new PostLoader();

if (isset ($_POST['author']))
{
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $guestMessage = htmlspecialchars($_POST['guestMessage']);

    if (empty($author) || empty($guestMessage)|| empty($title))
    {
        throw new Exception("fill in your details");
    }

    $post = new Post($title, $author, $guestMessage);
    $loader->addPost($post);
    $loader->savePosts();
    echo "messages are saved";
}
?>

<body>
 

		<div id="msg">
		<form action="index.php" method="post">
		Title: <input type="text" id="title" name="title"/><br />
		Write your message: <br /> <textarea name="guestMessage" rows="10" cols="30" ></textarea><br /> <br />
		Name:<input type="text" id="username" name="author" /><br/><br>
        <input type="submit" value="send msg">
		<input type="reset" value="Cancel">
        
        </form>
		</div>
        
</body>
 
</html>
 <?php
  require "people.txt";
 ?>
 