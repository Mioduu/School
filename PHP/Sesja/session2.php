<?php
echo 'Welcome to page #2';

echo 'Ulubiony kolor: '.$_SESSION['favcolor'];
echo 'Ulubione zwierze: '.$_SESSION['animal'] . '<br>';
echo date('Y m d H:i:s', $_SESSION['time']) . '<br>'; 

echo '<br/><a href="session1.php">Go back</a>';

?>