<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$books = [
    [
        'name' => 'History of Sun',
        'author' => 'athe rabbi',
        'releaseYear' => 1900
    ],
    [
        'name' => 'is there any philosophy',
        'author' => 'atoy',
        'releaseYear' => 1950
    ],
    [
        'name' => 'why survive is so hard?',
        'author' => 'atoye',
        'releaseYear' => 2002
    ]
];

$filerBook = array_filter($books, function ($book) {
    return $book['releaseYear'] > 1900 && $book['releaseYear'] < 2000;
})
?>

<ol>
    <?php foreach ($filerBook as $book) : ?>

        <?php
        print_r($book);
        ?>

    <?php endforeach; ?>
</ol>

</body>
</html>