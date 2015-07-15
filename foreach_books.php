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


foreach ($books as $book => $info) {
	//var_dump($books) . PHP_EOL;
	echo "$book" . PHP_EOL;
		foreach ($info as $key => $value) {
			//var_dump($value) . PHP_EOL;
			echo "$value" . PHP_EOL;
		}
}
	

/*foreach ($books as $title => $bookDetails) {
	echo "$title" . PHP_EOL;
		foreach ($bookDetails as $detail => $value) {
		echo "$detail is $value" . PHP_EOL;
		}
	}*/



?>