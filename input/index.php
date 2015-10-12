<?php 
	$articles = [
		1 => [ 
			'title' => 'Article one',
			'subtitle' => 'Some sub',
			'author' => 'Petar',
			'text' => 'Text of article one....'
			],
		2 => [ 
			'title' => 'Article two',
			'subtitle' => 'Some sub two',
			'author' => 'Rudi',
			'text' => 'Text of article two.... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptatum animi quam voluptate hic, voluptates consequuntur perferendis nobis magnam molestiae ipsa officia sed dolores quas ipsam, similique! Necessitatibus, aspernatur eligendi.'
			],
		3 => [ 
			'title' => 'Threee',
			'subtitle' => 'Some sub two',
			'author' => 'Rudi',
			'text' => 'Text of article two.... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptatum animi quam voluptate hic, voluptates consequuntur perferendis nobis magnam molestiae ipsa officia sed dolores quas ipsam, similique! Necessitatibus, aspernatur eligendi.'
			],

	];
	$id = $_GET['id'];

	$article = $articles[$id];

?>

<h1><?php echo $article['title'] ?></h1>

<h2><?php echo $article['subtitle'] ?></h2>

<h3><?php echo $article['author'] ?></h3>

<p><?php echo $article['text'] ?></p>