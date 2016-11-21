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
<?php
        }


        function __destruct(){
?>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="<?php echo URL; ?>Views/Template/js/bootstrap.min.js"></script>
                <script src="<?php echo URL; ?>Views/Template/js/init.js"></script>
            </body>
        </html>
<?php
        }

    }


?>
