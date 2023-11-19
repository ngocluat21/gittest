<?php
    function insert_taikhoan($user, $email, $pass) {
        $sql = "INSERT INTO taikhoan (user, email, pass) VALUES ('$user', '$email', '$pass') ";
        pdo_execute($sql);
    }

    function checkuser($user, $pass) {
        $sql = "SELECT * FROM taikhoan where user='".$user."' AND pass='".$pass."'; ";
        $us = pdo_query_one($sql);
        return $us;
    }

    function checkemail($email) {
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."'";
        $em = pdo_query_one($sql);
        return $em;
    }

    function update_taikhoan($id, $user, $pass, $email, $address, $tel) {
        $sql = "UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadall_taikhoan() {
        $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
        $listtk = pdo_query($sql);
        return $listtk; 
    }
?>