<html>
    <head>
        <title>My app</title>
    </head>
    <h2>Конвертер валют</h2>
    <input type='text'>
    <h5></h5>
    <script>
        {
            document.querySelector('input')
                .addEventListener('input', e => {
                fetch('/rates.php?dollars='+e.target.value)
                    .then(x => x.text())
                    .then(x => document.querySelector('h5').textContent = x)
                    .catch(() => document.querySelector('h5').textContent = 'ERR');
            });
        }
    </script>
    <br/>
    <body> 
        <?php
            require 'vendor/autoload.php';
            use Carbon\Carbon;
            echo '<h1>Tsarulkova Anastasia</h1>';
            $date = Carbon::now() -> format('j.m.Y h:i');
            echo '<h2>' . $date . '</h2>'; ?>
    </body>
</html>    
