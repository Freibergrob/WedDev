<?php
    require_once "config.php";

    function insertUser($u, $ph, $link) {
        $sql = "INSERT INTO users (username, password) VALUES (?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            $result = array();
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            $param_username = $u;
            $param_password = $ph;

            if(mysqli_stmt_execute($stmt)){
                $result["success"] = "true";
            } else{
                $result["error"] = "SQL ERROR";
                $result["success"] = "false";
            }
        }
    }

    function getUser($u, $link) {
        $sql = "SELECT id, username, password, role FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            $result = array();
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $u;

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $role);
                    mysqli_stmt_fetch($stmt);
                    $result["id"] = $id;
                    $result["user"] = $username;
                    $result["password"] = $hashed_password;
                    $result["role"] = $role;
                } else {

                }
            } else {
                $result["error"] = "SQL ERROR";
            }
        }
        return $result;
    }
 ?>
