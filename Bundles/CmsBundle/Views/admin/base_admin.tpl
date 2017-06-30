<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CMS - Administration - {{ $title }}</title>
        <link rel="stylesheet" media="screen" type="text/css" href="{{ bundle css/admin.css }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        {{ part body }}{{ end_part body }}
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
    </body>
</html>