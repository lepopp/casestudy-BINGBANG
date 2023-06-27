<?php

$result = array();

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $result[] = "BIGBANG";
    } elseif ($i % 3 == 0) {
        $result[] = "BIG";
    } elseif ($i % 5 == 0) {
        $result[] = "BANG";
    } else {
        $result[] = strval($i);
    }
}

$output = json_encode($result);

file_put_contents('output.json', $output);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIGBANG Study Case</title>

    <style>

        body {
            background: #fff;
            margin: 40px;
        }

        .panel {
            border: 2px solid rgb(0, 0, 0);
            padding: 20px;
            font-size: 15px;
            font-family: "Noto Sans";
            color: blue;
            text-align: center;
        }
    </style>

</head>

<body>

    <h2>Create a script to iterate through 1 to 100 and replace any number divisible by 3 with the word
        BIG number divisible by 5 with the word BANG. If the number is divisible by 3 and 5, replace it
        with BIG BANG.</h2>
    <h2>Result :</h2>
    <div class="panel">
        <?php
        $outputFile = 'output.json';
        $outputData = file_get_contents($outputFile);
        $outputArray = json_decode($outputData);

        if ($outputArray) {
            $count = 0;
            foreach ($outputArray as $item) {
                echo $item . ', ';
                $count++;
                if ($count % 25 == 0) {
                    echo '<br>';
                }
            }
        } else {
            echo 'Error: Failed to read the output file.';
        }
        ?>
    </div>
</body>

</html>