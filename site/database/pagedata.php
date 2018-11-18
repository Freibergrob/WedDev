<?php
    function getPageContent($pageId) {
        $db = db_connect(); //I could not get this to work in the global scope.
        $pageIdC = $db->quote($pageId);
        try {
            $rows = $db->query("SELECT * FROM pagedata WHERE pageid = $pageIdC order by sectionorder");
            return $rows;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function UpdatePageContent($pageId, $sectionId, $data) {
        $db = db_connect(); //I could not get this to work in the global scope.
        $pageIdC = $db->quote($pageId);
        $sectionIdC = $db->quote($sectionId);
        $dataC = $db->quote($data);
        try {
            $sql = "UPDATE pagedata SET data = $dataC WHERE pageid = $pageIdC and sectionid = $sectionIdC";
            $db->exec($sql);
        } catch (PDOException $e) {

        }
    }
?>
