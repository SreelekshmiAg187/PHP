<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <mata name="viewport" content="width=device-width,initial-scale=1.0">
        <title>STUDENT INFO</title>
        </head>
        <body>
            <?php
            $STUDENT=array("KRISHNA","SREELEKSHMI","ANAGHA","REHANA");
            $marks=array(85,90,78,88);
            echo"<h2>student name and mark<h2/>";
            echo"<br>Names  and mark are stored in table:<br/>";
            print_r($STUDENT);
            print_r($marks);
            echo"<br><table border=2>";
            echo"<tr><th>students names</th><th>marks</th></tr><br/>";
            echo"<tr><td>$STUDENT[0]</td><td>$marks[0]</td></tr>";
             echo"<tr><td>$STUDENT[1]</td><td>$marks[1]</td></tr>";
              echo"<tr><td>$STUDENT[2]</td><td>$marks[2]</td></tr>";
               echo"<tr><td>$STUDENT[3]</td><td>$marks[3]</td></tr>";
            echo"</table>";
            ?>
    </body>
</html>