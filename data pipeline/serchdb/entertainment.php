<?php
include 'connect.php';
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM entertainment WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'
			 UNION									
			 SELECT * FROM sports WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'
			 UNION 
			 SELECT * FROM business WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'
			 UNION
			 SELECT * FROM technology WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'
			 UNION
			 SELECT * FROM health WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'
			 UNION
			 SELECT * FROM search WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'
			 UNION
			 SELECT * FROM searching WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'
			 UNION
			 SELECT * FROM general WHERE description LIKE '%$name%' OR content LIKE '%$name%' OR author LIKE '%$name%' OR publishedAt LIKE '%$name%'";
	

	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			?>
					<div>
						<img src="<?php echo $row['urlToImage']; ?>" width="500" height="500">
						<h2>Title:<?php echo $row['title']?></h2>
						<h2>author: <?php echo $row['author']?></h2>
						<h2> url:<?php echo"<a href='$row[url]'>{$row['url']}</a><br/>"?>
						<h2>description: <?php echo $row['description']?></h2>
						<h2>publishedAt: <?php echo $row['publishedAt']?></h2>
					
					</div>";
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
