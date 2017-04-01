<?php 

class Post{
	public $title;
	public $published;
	public $author;
	public function __construct($title, $author,$published){
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', 'AW', true),
	new Post('My Second Post', 'BW', true),
	new Post('My Third Post', 'CW', true),
	new Post('My Fourth Post', 'DW', false)
];

/*
$unpublishedPosts = array_filter($posts, function ($post){
	return ! $post->published;
});

var_dump($unpublishedPosts);
*/

/*
$titles = array_map(function ($post){
	return $post->title;
}, $posts);
*/

// $titles = array_column($posts, 'title');


/*
foreach ($posts as $index => $post) {
	$posts[$index] = (array) $post;
}
*/

var_dump($posts);

