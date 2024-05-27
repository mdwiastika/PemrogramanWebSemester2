<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>MVC tanpa framework nihhh!</h1>
    <h2>List My Journals</h2>
    <ul>
        <?php foreach ($journals as $journal) : ?>
            <li><?= $journal->name ?> (<?= $journal->publisher_year ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>

</html>