 <!DOCTYPE html>
 <html lang="en">

 <body>
     <?php
        $data = $_POST;

        asort($data);

        foreach ($data as $key => $value) {
            echo "$key: $value<br>";
        }


        ?>
 </body>

 </html>