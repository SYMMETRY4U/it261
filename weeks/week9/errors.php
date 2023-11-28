<?php
// our errors file we will be using a foreach loop
// array_push - different message for different errors

// if errors need to display them

if(count($errors) > 0) : ?>

<div class="errors">
    <?php foreach($errors as $error) : ?>
        <p>
            <?php echo $error; ?>
        </p>
    <?php endforeach; ?>


</div>
<!-- end div -->
<?php endif ;?>
















