<?php 

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// This one echoes each title and and book detail
foreach ($books as $book => $info) {
	echo "$book" . PHP_EOL;		
	foreach ($info as $key => $value) {
		echo "$key: $value" . PHP_EOL;
	}
echo "......................" . PHP_EOL;	
}


// This one echoes the sentence below for books published after 1950
foreach ($books as $book => $info) {
	if ($info['published'] > 1950) {
		foreach ($info as $key => $value) {
		}
	echo "{$book}, written by author {$info['author']} in {$info['published']}, is pages {$info['pages']} long." . PHP_EOL;
	echo "......................" . PHP_EOL;
 
	}
}



?>