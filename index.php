<html>
    <head>
        <title>My app</title>
    </head>
    <script src='main.js'>
    </script>
    <body> 
        <?php
            require 'vendor/autoload.php';
            use Carbon\Carbon;
            echo '<h1>Tsarulkova Anastasia</h1>';
            $date = Carbon::now() -> format('j.m.Y h:i');
            echo '<h2>' . $date . '</h2>'; ?>
    </body>
    <input type='text'>
</html>    
