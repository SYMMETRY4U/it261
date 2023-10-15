<?php
// this file will demonstrate for loops and in addition to placingyour php inside your HTML!!!
//The for loop - Loops through a block of code a specified number of\times .
//for (init counter; test counter; increment counter) { code to be executed for each iteration; }

// celcius and fah renheit

//far = ($celcius * 9/5) + 32;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Celcius Table</title>
<!--<link href="css/styles.css" rel="stylesheet" type="text/css">-->
<style>
* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

table  {
    width:500px;
    margin:20px auto;
    border-collapse:collapse;
    border:2px solid lightblue;
}
td, th  {
    border:2px solid lightblue;
    border-collapse:collapse;
    padding:5px;
}

h1, h2 {
    text-align:center;
    margin: 10px 0;
    color:green;
}

        </style>

</head>

<body>
    <div class="wrapper">
        <header>
            <h1>My Celcius / Fahrenheit Table!</h1>
        </header>
        <main>
            <table>
                <tr>
                    <th>Celcius</th>
                    <th>Fahrenheit</th>
                </tr>
                <?php
                for($celcius = 0; $celcius <= 100; $celcius += 3) {
                    $fahrenheit = ($celcius * 9/5) + 32;
                    echo '<tr>';
                    echo '<td>' . $celcius . ' degrees </td>';
                    echo '<td>' . $fahrenheit . ' degrees </td>';
                    echo '</tr>';
                }
                ?>
            </table>
            <h2>You will now complete a kilometer/mileage table on your own!</h2>

            <table>
                <tr>
                    <th>Kilometers</th>
                    <th>Miles</th>
                </tr>
                <?php
                for($kilometers = 0; $kilometers <= 100; $kilometers += 5) {
                    $miles = ($kilometers * 0.621371);
                    echo '<tr>';
                    echo '<td>' . $kilometers . ' km </td>';
                    echo '<td>' . $miles . ' miles </td>';
                    echo '</tr>';
                }
                ?>
            </table>

        </main>

        <footer>
            <div align="center">
            <p>&copy; 2023, by Brian</p>
            </div><br>
<br>

        </footer>
    </div>

</body>
</html>