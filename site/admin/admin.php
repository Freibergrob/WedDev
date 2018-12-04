<!DOCTYPE html>
<html>
<head>
    <?php require_once "../config.php";
          require_once $_PATHS['_meta.php']; ?>
    <script src="<?=$_PATHS['tinymce']?>"></script>
    <script src="<?=$_PATHS['adminPanel.js']?>"></script>
    <link rel="stylesheet" href="<?=$_PATHS['adminPanel.css']?>">
</head>
    <body>
        <?php
        require_once $_PATHS['initialize.php'];
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            UpdatePageContent($_POST['page'],$_POST['section'], $_POST['sectionData']);
        }

        $pages = getPages();
        foreach($pages as $page) {
        ?>
        <button class="pagebtn" id="<?=$page['pageid']?>" name="<?=$page['pageid']?>"><?=$page['pagedisplayname']?></button>
        <?php
        }
        ?>
        <br />
        <?php
        $sectionsDB = getAllSections();
        $sections = $sectionsDB->fetchAll();//Using this pattern allows me to loop the result set twice.
        foreach($sections as $section) {
        ?>
        <button class="hideItem" data-page="<?=$section['pageid']?>" id="<?=$section['sectionid']?>" name="<?=$section['sectionid']?>"><?=$section['sectiondisplayname']?></button>
        <?php
        }
        ?>
        <br />
        <?php
        foreach($sections as $section) {
        ?>
        <div class='hideItem' data-section='<?=$section['sectionid']?>'>
            <form action="adminPanel.php" method="post" class="sectionForm">
                <textarea name="sectionData" class="save <?=$section['pageid']?>"><?= $section['data']?></textarea>
                <input type="hidden" name="page" value="<?=$section['pageid']?>">
                <input type="hidden" name="section" value="<?=$section['sectionid']?>">
            </form>
        </div>
        <?php
        }
        ?>
    </body>
</html>