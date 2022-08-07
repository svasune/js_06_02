<?php
include("db_utils.php");

if (isset($_POST["filesave"]))
    saveFromFile($_POST["filesave"]);
?>

<head>
    <?php include("header.php") ?>
</head>


<body>
    <form method="post">
        <input type="file" name="filename">
        <button class="btn">Read</button>
    </form>
    <div class="container">
        <?php
        if (isset($_POST["filename"])) :

            $filename = $_POST["filename"];
            $file = fopen($filename, "r");
            if ($file == false) {
                echo ("<h2 class='err'>File cannot be opened </h1>");
                exit();
            }
            // Start with head
            $csvContenLineArr = fgetcsv($file, filesize($filename), ";");
            if (!$csvContenLineArr) //file is empty
                exit();
            echo "<b>";
            echo "<div class='row'>";
            foreach ($csvContenLineArr as $fieldname) :
                echo "<div class='col'>";
                echo $fieldname;
                echo "</div";

            endforeach;

            echo "</div";
            echo "</b>";

            //iterate through the content of the file
            while ($csvContentLineArr = fgetcsv($file, filesize($filename), ";")) :
                echo "<div class='row'>";
                foreach ($csvContentLineArr as $fieldvalue) :
                    echo "<div class='col'>";
                    echo $fieldvalue;
                    echo "</div>";
                endforeach;
                echo "</div>";
            endwhile;
            fclose($file);
        endif;
        ?>
        <?php if (isset($_POST["filename"])) : ?>
        <form method="post">
            <button class="btn btn-primary">Save</button>
            <input hidden name="filesave" value="<?= $_POST["filename"] ?>">
        </form>
        <?php endif ?>
    </div>

</body>