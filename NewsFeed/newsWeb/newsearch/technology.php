<?php
$conn = mysqli_connect("localhost", "root", "","test");
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<center><h3 class="logo" >Search Technology</h3></center>
<center><table>
<tr>
	<td><input class = "input" type="text" name="name"></td>
	<td><input class = "click" type="submit" name="submit"></td>
</tr>
</table></center>
</form>
</body>
<?php
$sql="SELECT * FROM technology";
$result= mysqli_query($conn,$sql);
$queryResults= mysqli_num_rows($result);
			
	if($queryResults){
		while($row=mysqli_fetch_assoc($result))
			{
				?>
					
					
					<div class= "content">
					<img class = "image-page" src="<?php echo $row['urlToImage']; ?>" width="500" height="500">
					<h2 class = "logo">Title:<?php echo $row['title']?></h2>
					<h4 class = "logo">author: <?php echo $row['author']?></h4>
					<h4 class = "logo"> url:<?php echo"<a href='$row[url]'>{$row['url']}</a><br/>"?>
					<h4 class = "logo">description: <?php echo $row['description']?></h4>
					<h4 class = "logo">published: <?php echo $row['publishedAt']?></h4>
					</div>
			<?php		

			}
			}
		?>	


</html>


</html>