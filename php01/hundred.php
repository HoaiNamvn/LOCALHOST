<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>実習１</title>
</head>

<body>
    <h2>実習1</h2>
    <table border='1'>
        <?php 
        for( $i = 1;$i <=100;$i++){
            echo"<tr>";
            echo"<td>";
            if( $i % 2 ==0){
                echo "<b>".$i."</b>";
            }else{
                echo $i;
            }
            echo"</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>