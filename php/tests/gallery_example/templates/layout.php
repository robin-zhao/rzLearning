<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
        <script language="javascript" src='/assets/js/node_modules/jquery/dist/jquery.min.js'></script>
        <script language="javascript" src='/assets/js/main.js'></script>
        <title>ShareImg - The Image Sharing Service</title>
    </head>
    <body>
        <div id="page-Wrapper">
            <div id="page">
                <?php
                /**
                 * Split header and footer to make template file cleaner.
                 */
                require __DIR__ . '/header.php';

                /**
                 * $body is injected from the specific pages.
                 */
                echo $data->body;
                ?>
            </div>
        </div>

        <?php
        require __DIR__ . '/footer.php';
        ?>
    </body>
</html>
