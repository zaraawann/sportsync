<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel and db connetion</title>
</head>
<body>
    <div>


    <?php
if(DB::connection()->getPdo()) {
    echo "Successfully connected to " . DB::connection()->getDatabaseName();
}
    ?>
</div>
</body>
</html><?php /**PATH C:\Users\awana\sport_sync\resources\views/dbconn.blade.php ENDPATH**/ ?>