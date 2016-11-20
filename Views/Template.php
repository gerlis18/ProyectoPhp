<?php namespace Views;

    $template = new Template();

    /**
     *
     */
    class Template {

        function __construct() {
?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Dashboard</title>
                <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/bootstrap.min.css" media="screen" title="no title">
                <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/estile.css" media="screen" title="no title">
            </head>
            <body>

<?php
        }


        function __destruct(){
?>
            </body>
        </html>
<?php
        }

    }


?>
