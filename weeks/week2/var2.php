<?php

       $first_name = 'Brian ';
       $last_name = "St Louis";
       echo '<br>';
       $name = 'Brian ';
       $name .= 'St Louis';
       echo $name;
       echo '<br>';

       $color = 'blue';
       echo $color;
         echo '<br>';
       
    echo 'Brian s favorite color is '.$color.'';
    echo '<br>';
    $x = 20;
    $y = 5;
    $z = $x + $y;
    echo $z;
    echo '<br>';

    $x = 20;
    $x += 5;
    echo $x;
    echo '<br>';
    $x = 100;
    $x /= 10;
    echo $x;
    echo '<br>';
    echo '<h3>Our product, quanity and tax exercise</h3>';
    $product = 120;
    $quantity = 5;
    $total = $product * $quantity;
    $total *= 1.097;
    echo $total;
    echo '<h3>We would like our amount to reflect 3 decimal places -- we are thinking about number_format()</h3>';

    $product = 120;
    $quantity = 5;
    $total = $product * $quantity;
    $total *= 1.105;
    $total_friendly = number_format($total, 2);
    echo 'We have a total of <b> $'.$total_friendly.'</b> dollrs';
    echo '<br>';


    $product = 120;
    $quantity = 5;
    $total = $product * $quantity;
    $total *= 1.098;
    echo 'We have a total of <b> $'.number_format($total, 2).'</b> dollrs';
    echo '<h3>Our second preset function is our date function!</h3>';
    echo date('Y');
    echo '<br>';
    echo date('l');
    echo '<br>';
    echo date("l jS \of F Y h:i:s A");
    echo '<br>';    
    echo date("l jS \of F Y h:i A");
    echo '<br>'; 
    date_default_timezone_set('America/Los_Angeles');
    echo date("l jS \of F Y h:i A");
    echo '<h3>Time for an array!</h3>';
    echo '<h4>Below is an indexed array</h4>';

    $fruit[] = 'orange';
    $fruit[] = 'banana';
    $fruit[] = 'apple';
    $fruit[] = 'pear';
    $fruit[] = 'grape';
    $fruit[] = 'cherry';
    $fruit[] = 'kiwi';
    $fruit[] = 'mango';
    echo '<br>'; 
    echo $fruit[3];
    echo '<br>'; 
    $fruit = array(
        'orange',
        'banana',
        'apple',
        'pear',
        'grape',
        'cherry',
        'kiwi',
        'mango'
    );
    
    echo '<br>';
    print_r($fruit);
    echo '<br>'; 
    echo '<br>'; 
    var_dump($fruit);

    echo '<h3>Now we have associative array</h3>';
    $nav = array(
        'index.php' => 'Home',
        'about.php' => 'About',
        'daily.php' => 'Daily',
        'project.php' => 'Project',
        'contact.php' => 'Contact',
        'gallery.php' => 'Gallery'
    );
    echo '<pre>';
    var_dump ($nav);
    echo '</pre>';
    echo '<br>';
    

















































       
      
       



