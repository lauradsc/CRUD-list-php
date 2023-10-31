<?php 

    class Body {
        public function header($style = "/../css/style.css", $title = "Todo list project", $favicon = "cat-health-list.png") {
            echo '<!doctype html>
            <html lang="en">
              <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>'.$title.'</title>
                <link rel="icon" href="'.$favicon.'" type="image/x-con">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
                <link rel="stylesheet" href="'.$style.'">   
                <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
           
                </head>
              <body class="text-dark bg-light bg-gradient">
                

              <h1 class="text-center mt-5">To do List</h1>
            ';
        }

        public function footer() {
            echo '
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
            <script src="src/assets/js/script.js"></script>
          </body>
        </html>';
        }
    }

?>