<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Read</title>
</head>
<body>
<?php
         $filename = "ruchita.txt";
         $file = fopen( $filename, "r" );

if( $file == false ) {
            echo ( "Error in opening file" );
exit();
         }

         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
fclose( $file );

         echo ( "\nFile size : $filesize bytes" );
         echo ( "\rFile Contents: $filetext" );
      ?>

</body>
</html>
