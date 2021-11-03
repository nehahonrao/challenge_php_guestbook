<html>
<head>
<title>Guestbook</title>
</head>
<?php
	require "post.php";
    
    // $title=htmlspecialchars($_POST['title']);
    // $message=htmlspecialchars($_POST['message']);
    // $username=htmlspecialchars($_POST['username']);
    $data= date("d/m/Y H:i:s");
    // echo $post1->title;
?>

<?php

$post1= new post();



$file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$txt='<div id="msg"><font color="blue">Message written by: '.$post1->author_name.'<br /><br />';
echo "<br>";
$txt .='Message: '.$post1->content. '<br /><br />';
echo "<br>";
$txt .="Message written on: ".$data. ' <br /><br />'.' ' .'</font> </div>';
        
// Write the contents back to the file
file_put_contents($file, $txt);
echo '<a href="index.php">Read Review </a>';
?>

<body>
 

		<div id="msg">
		<form action="index.php" method="post">
		Title: <input type="text" id="title" name="title"/><br />
		Write your message: <br /> <textarea name="message" rows="10" cols="30" ></textarea><br /> <br />
		Name:<input type="text" id="username" name="username" /><br/><br>
        <input type="submit" value="send msg">
		<input type="reset" value="Cancel">
        
        </form>
		</div>
</body>
 
</html>
 <?php
  require "people.txt";
 ?>
 