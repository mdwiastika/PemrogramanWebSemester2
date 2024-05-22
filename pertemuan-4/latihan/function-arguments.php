<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Arguments</title>
</head>

<body>
    <?php
    function familyName($fname, $year)
    {
        echo "<h2>$fname Refsnes. Born in $year</h2></br>";
    }
    familyName("Jani", 2001);
    familyName("Hege", 1975);
    familyName("Stale", 1978);
    familyName("Kai Jim", 1983);
    familyName("Borge", 1999);
    ?>
</body>

</html>