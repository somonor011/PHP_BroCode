<!-- 
    Arithmetic operator
    + - * / ** %

    Increment , Decrement operator
    ++ , --

    Operator precendence
    ()
    **
    * / %
    + -
-->

<?php
    echo '<h1>Arithmetic operator</h1>';

    $x=10; 
    $y=3;
    
    $sum=$x+$y;
    $min=$x-$y;
    $multi=$x*$y;
    $dev=$x/$y;
    $pow=$x**$y; 
    $ss=$x%$y;

    echo '<h1>X = '.$x.'</h1>';
    echo '<h1>Y = '.$y.'</h1>';
    echo '<h1>X + Y = '.$sum.'</h1>';
    echo '<h1>X - Y = '.$min.'</h1>';
    echo '<h1>X * Y = '.$multi.'</h1>';
    echo '<h1>X / Y = '.$dev.'</h1>';
    echo '<h1>X ** Y = '.$pow.'</h1>';
    echo '<h1>X % Y = '.$ss.'</h1>'; // យកសំណល់ជា​ result

    echo '<h1>Increment and Decrement</h1>';

    $counter1 = 0;
    $counter1++; // it's like counter = counter + 1
    echo '<h1>Counter1 = 0</h1>';
    echo '<h1>Counter1++ = '.$counter1.'</h1>';

    $counter2 = 3;
    $counter2--; // it's like counter = counter - 1;
    echo '<h1>Counter2 = 3</h1>';
    echo '<h1>Counter2-- = '.$counter2.'</h1>'


?>