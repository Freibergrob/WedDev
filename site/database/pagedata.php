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
?>
