<?php
include 'connect.php'
?>
<!doctype html>
<html>
<title> PHP MYSQL - Search</title>
<head>
</head>

<body>
<form action="result.php" method="POST">
<h3>Search Database</h3>
	<p>Search</p>
	<input type="text" name="name" size="100"></td>
	<input type="submit" name="submit">
</form>
</body>
<?php
$sql="SELECT * FROM general";
$result= mysqli_query($conn,$sql);
$queryResults= mysqli_num_rows($result);
			
	if($queryResults){
		while($row=mysqli_fetch_assoc($result))
			{
				?>
					
					
				<div>
					<img src="<?php echo $row['urlToImage']; ?>" width="500" height="500">
					<h2>Title:<?php echo $row['title']?></h2>
					<h2>author: <?php echo $row['author']?></h2>
					<h2> url:<?php echo"<a href='$row[url]'>{$row['url']}</a><br/>"?>
					<h2>description: <?php echo $row['description']?></h2>
					<h2>published: <?php echo $row['publishedAt']?></h2>
					</div>
			<?php		

			}
			}
		?>
