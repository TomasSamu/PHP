<?php 

include("include/data.php");
include("include/functions.php");

$pageTitle = "Full catalog";
$section = null;

if (isset($_GET["cat"])){
	if ($_GET["cat"] == "movies"){
		$pageTitle = "Movies";
		$section = "movies";
	} elseif ($_GET["cat"] == "books") {
		$pageTitle = "Books";
		$section = "books";
	} elseif ($_GET["cat"] == "music") {
		$pageTitle = "Music";
		$section = "music";
	}
}
include("include/header.php"); ?>

<div class ="section catalog page">
	<div class = "wrapper" >
			<h1><?php echo $pageTitle; ?></h1>
	<ul class ="items">
		<?php

		$categories = array_category($catalog, $section);

		foreach($categories as $id){
			echo get_item_html($id, $catalog[$id]);
		}
		?>	 
	</ul>
	</div>

</div>

<?php include("include/footer.php"); ?>