<!DOCTYPE html>
<html>
<head>
    <?php
        require_once "../config.php"
    ?>
    <script src="<?=$_PATHS['tinymce']?>"></script>
    <script src="<?=$_PATHS['adminHome.js']?>"></script>
    <link rel="stylesheet" href="<?=$_PATHS['adminHome.css']?>">
</head>
<body>
    <?php
        require_once $_PATHS['initialize.php'];
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            UpdatePageContent($_POST['page'],$_POST['section'], $_POST['sectionData']);
        }

        //GET EACH SECTION OF THE PAGE AND BUILD A FORM FOR IT
        $sections = getPageContent('homePage');
        foreach($sections as $section) {
        ?>
            <form action="adminHome.php" method="post" class="sectionForm">
                <textarea name="sectionData" class="save"><?= $section['data']?></textarea>
                <input type="hidden" name="page" value="<?=$section['pageid']?>">
                <input type="hidden" name="section" value="<?=$section['sectionid']?>">
            </form>
        <?php
        }
    ?>

</body>
</html>
