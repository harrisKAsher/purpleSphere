<?php
function userReg($userName, $email, $password) {
global $db;
$query = 'INSERT INTO users
                    (userName, email, password)
                VALUES
                    (:userName, :email, :password)';
 $statement = $db->prepare($query);
    $statement->bindValue(':userName', $userName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $result = $statement->execute();
    $insertResult = $statement->rowCount();
    $statement->closeCursor();
    return $insertResult;
}

function emailCheck($email){
global $db;
$query = 'SELECT * FROM users
            WHERE email = :email';
    $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $email = $statement->fetch();
        $statement->closeCursor();
        return $email;
}

function userInfo($userName){
global $db;
$query = 'SELECT * FROM users
            WHERE userName = :userName';
    $statement = $db->prepare($query);
        $statement->bindValue(':userName', $userName);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();
        return $user;
}
