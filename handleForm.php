<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Feed Your Soul</title>
	
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Cabin+Sketch:bold" rel="stylesheet" type="text/css" >
	<link rel="shortcut icon" type="image/ico" href="/img/favicon.ico" />
	
	
</head>
<body>
<div id="center">
<div id="inner-bg">


<div id="header">
<h1>FeeD YOUR SouL</h1>

<img id="logo"src="img/logo-orange.png" alt="Feed Your Soul Monster who is hungry for RSS feeds" width="600" height="358" />

<h2>Hungry for RSS?</h2>

</div><!-- header ends -->

<div id="main">		
		
		<fieldset>
		<legend>Hi <?php $name="Mathieu" ; echo $name; ?>, here is your feed</legend>
		
		<?php

		  $doc = new DOMDocument();
		  $doc->load('http://feeds2.feedburner.com/PitchforkLatestNews.xml');
		  $arrFeeds = array();
		  foreach ($doc->getElementsByTagName('item') as $node) {
			$itemRSS = array ( 
			  'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			  'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			  'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			  'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
			  );
			array_push($arrFeeds, $itemRSS);
		  }

		?>
		

		<?php for ($i=0;$i<=4;$i++){ ?>
		<ol>
			<li>Item <?php echo $i ?></li>
			<li><b>Title:</b> <?php echo $arrFeeds[$i]['title'];?></li>
			<li><b>Description:</b> </li>
			<li><?php echo $arrFeeds[$i]['desc'];?></li>
			<li><b>Link:</b> <?php echo $arrFeeds[$i]['link'];?></li>
			<li><b>Date:</b> <?php echo $arrFeeds[$i]['date'];?></li>
			<li>&nbsp;</li>
		</ol>
		<?php } ?>
		
</div><!-- main content ends -->


<div id="footer">
	<p>Proudly brought to you by Amy&#8217;s Section of Intro to PHP</p>
</div><!-- footer ends -->

</div><!-- inner bg ends -->
</div><!-- center ends -->
</body>
</html>
