<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <mata name="viewport" content="width=device-width,initial-scale=1.0">
        <title>hello world</title>
        </head>
        <body>
            <?php
            $cricket=array("virat","dhoni","rohoit","sachin");
            echo"<br>Displaying name in table format<br/>";
            echo"<br>...................................<br/>";
            echo"<br>Names of cricket players are stored in table:<br/>";
            print_r($cricket);
            echo"<br><table border=2><tr><th>players names</th></tr><br/>";
            echo"<tr><td>$cricket[0]</td></tr>";
             echo"<tr><td>$cricket[1]</td></tr>";
              echo"<tr><td>$cricket[2]</td></tr>";
               echo"<tr><td>$cricket[3]</td></tr>";
            echo"</table>";
            ?>
    </body>
</html>
