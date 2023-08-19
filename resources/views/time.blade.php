<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Timezone test</title>

    </head>
    <body>
        <?php $current_date_time=Carbon\Carbon:now();?>
        <?php echo $current_date_time; ?>
    </body>
</html>
