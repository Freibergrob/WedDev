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
    <a class="logout-link" href="<?=$_PATHS['link']?>accountPage/_logout.php">Log out</a>
        <div class="outer">
        <div class="wrapper">
            <?php
            session_start();
            $resultMsg = "";
            if(!isset($_SESSION["loggedin"]) || !isset($_SESSION["role"])) {
                header("Location: " . "index.php");
            }

            if($_SESSION["loggedin"] != true || $_SESSION["role"] != 3) {
                header("Location: " . "index.php");
            }

            require_once $_PATHS['initialize.php'];
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST['action'] === "pageUpdate") {
                    UpdatePageContent($_POST['page'],$_POST['section'], $_POST['sectionData']);
                } else {
                    //This code section was provided by Hannah Hillberg
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                       $upload_dir = "uploads";
                       if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
                          $tmp_name = $_FILES["fileToUpload"]["tmp_name"];

                          // Ignore any path information in the filename
                          $name = basename($_FILES["fileToUpload"]["name"]);

                          // Move the temp file and give it a new name
                          move_uploaded_file($tmp_name, "$upload_dir/$name");
                          $resultMsg = "The file $name has been uploaded";
                       } else {
                          $resultMsg = "Error uploading the file";
                       }
                    }
                }
            }

            $pages = getPages();
            foreach($pages as $page) {
            ?>
            <button class="pagebtn" id="<?=$page['pageid']?>" name="<?=$page['pageid']?>"><?=$page['pagedisplayname']?></button>
            <?php
            }
            ?>
            <button class="pagebtn" id="admin" name="admin">Admin Functions</button>
            <br />
            <?php
            $sectionsDB = getAllSections();
            $sections = $sectionsDB->fetchAll();//Using this pattern allows me to loop the result set twice.
            foreach($sections as $section) {
            ?>
            <button class="hideItem hiddenButtons" data-page="<?=$section['pageid']?>" id="<?=$section['sectionid']?>" name="<?=$section['sectionid']?>"><?=$section['sectiondisplayname']?></button>
            <?php
            }
            ?>
            <button class="hideItem hiddenButtons" data-page='admin' id='fileUpload'  name='fileUpload'>File Upload </button>
            <br />
            <?php
            foreach($sections as $section) {
            ?>
            <div class='hideItem' data-section='<?=$section['sectionid']?>'>
                <form action="admin.php" method="post" class="sectionForm">
                    <textarea name="sectionData" class="save <?=$section['pageid']?>"><?= $section['data']?></textarea>
                    <input type="hidden" name="page" value="<?=$section['pageid']?>">
                    <input type="hidden" name="section" value="<?=$section['sectionid']?>">
                    <input type="hidden" name="action" value="pageUpdate">
                </form>
            </div>
            <?php
            }
            ?>
            <p id='resultMsg'><?=$resultMsg?></p>
            <div class="hideItem" data-section='fileUpload'>
                <form action="admin.php" method="post" class="sectionForm" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="hidden" name="action" value="fileUpload">
                    <input type="submit" name="submit" value="Upload">
                </form>
            </div>
        </div>
    </div>
        <?php include $_PATHS['_footer.php']; ?>
    </body>
</html>
