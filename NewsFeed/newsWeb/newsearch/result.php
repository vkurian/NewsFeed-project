<?php
$conn = mysqli_connect("localhost", "root", "","test");
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.0">
<title> PHP MYSQL - Search</title>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
<section>
      <header>
        <h2><a href="#" class="logo">Voyage News Outlet</a></h2>
        <div class="navigation">
        </div>
      </header>
<form action="result.php" method="POST">
<center><h3 class="logo" >Search General</h3></center>
<center><table>
<tr>
	<td><input class = "input" type="text" name="name"></td>
	<td><input class = "click" type="submit" name="submit"></td>
</tr>
</table></center>
</form>
</body>
<?php
$conn = mysqli_connect("localhost", "root", "","test");
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "(SELECT * FROM business WHERE description LIKE '%$name%'OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%'
			  UNION
			  SELECT * FROM entertainment WHERE description LIKE '%$name%'  OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%'
			  UNION
			  SELECT * FROM sports WHERE description LIKE '%$name%'  OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%'
			  UNION
			  SELECT * FROM science WHERE description LIKE '%$name%'  OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%'
			  UNION
			  SELECT * FROM search WHERE description LIKE '%$name%'  OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%'
			  UNION
			  SELECT * FROM newsearch WHERE description LIKE '%$name%'  OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%'
			  UNION
			  SELECT * FROM health WHERE description LIKE '%$name%'  OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%'
			  UNION
			  SELECT * FROM general WHERE description LIKE '%$name%'  OR author LIKE '%$name%' OR title LIKE '%$name%' OR url LIKE '%$name%' OR source LIKE '%$name%')";															
																		
															

			 

	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			?>
					<div class= "content">
					<img class = "image-page" src="<?php echo $row['urlToImage']; ?>" width="500" height="500">
					<h2 class = "logo">Title:<?php echo $row['title']?></h2>
					<h4 class = "logo">author: <?php echo $row['author']?></h4>
					<h4 class = "logo_link"> url:<?php echo"<a href='$row[url]'>{$row['url']}</a><br/>"?>
					<h4 class = "logo">description: <?php echo $row['description']?></h4>
					<h4 class = "logo">published: <?php echo $row['publishedAt']?></h4>
					</div>
					<?php
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>
