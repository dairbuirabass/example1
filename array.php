<h1>Array Example</h1>

<?php
$students=array(
    array('fname'=>'Ann', 'lname'=>'Smith'),
    array('fname'=>'Dereck', 'lname'=>'Whibley'),
    array('fname'=>'Billie', 'lname'=>'Joe'),
    array('fname'=>'Elvis', 'lname'=>'Presley'),
    array('fname'=>'Boris', 'lname'=>'Ryzhyi') ) ;

?>

<h3>Print One Name From the Array</h3>

<?php
    echo "The first firstname is ".$students[0]['fname'];
?>

<h3>Print the Whole Array</h3>
<?php
    foreach ($students as $row)
    {
        echo $row['fname'].' '.$row['lname'].'<br/>';
    }
?>

<h3>Names in a Table</h3>
<table border=1>
    <tr><th>Firstname</th><th>Lastname</th></tr>
    <?php
        foreach ($students as $row)
        {
            echo '<tr><td>';
            echo $row['fname'];
            echo '</td><td>';
            echo $row['lname'].'</td></tr>';
        }
    ?>
</table>