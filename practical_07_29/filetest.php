<head>
    <?php include("header.php") ?>
</head>


<body>
    <form method="post">
        <input type="file" name="filename">
        <button class="btn">Read</button>
    </form>


    <?php
    if (isset($_POST["filename"])) :
        if (is_array(getimagesize($_POST["filename"]))) :
            echo ("<img src='" . $_POST["filename"] . "' height=350>");
        else :
            $filename = $_POST["filename"];
            $file = fopen($filename, "r");
            if ($file == false) {
                echo ("<h2 class='err'>File cannot be opened </h1>");
                exit();
            }
            $text = fread($file, filesize($filename));
            fclose($file);
            echo ("<pre>$text<pre>");
        endif;
    endif;
    ?>
</body>