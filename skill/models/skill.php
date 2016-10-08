<?php

function login($user) {
    global $db;
    $query = 'SELECT pass FROM account
              WHERE user=:user';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':user', $user);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        if (empty($result[0])) {
            return '';
        } else {
            return $result[0];
        }
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function register($name, $user, $pass) {
    global $db;
    $query = 'INSERT INTO account(user,pass,name) VALUE (:user,:pass,:name)';
    try {

        $statement = $db->prepare($query);
        $statement->bindValue(':user', $user);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':pass', $pass);
        $statement->execute();
        $statement->closeCursor();
        return 'thanh cong';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function POST($title, $content, $img, $description) {
    global $db;
    $query = 'INSERT INTO blog_skill(title,content,img,description) VALUE (:title,:content,:img,:description)';
    try {

        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':content', $content);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':description', $description);
        $statement->execute();
        $statement->closeCursor();
        return 'thanh cong';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function book($name, $img, $link) {
    global $db;
    $query = 'INSERT INTO book(name,link,img) VALUE (:name,:link,:img)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':link', $link);
        $statement->execute();
        $statement->closeCursor();
        return 'thanh cong';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function select_all_blog() {
    global $db;
    $query = 'SELECT title,content,img,date_up,description FROM blog_skill ORDER BY date_up DESC';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function select_all_book() {
    global $db;
    $query = 'SElECT name,link,img,book_id FROM book';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function select_blog_admin() {
    global $db;
    $query = 'SElECT blog_id,title,img,date_up,description,content FROM blog_skill';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function select_content_admin() {
    global $db;
    $query = 'SElECT title,content FROM blog_skill';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function xoa_blog($id) {
    global $db;
    $query = 'DELETE FROM blog_skill Where blog_id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
        return 'xong';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function xoa_book($id) {
    global $db;
    $query = 'DELETE FROM book Where book_id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
        return 'xong';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function edit_book($name, $img, $link,$id){
    global $db;
    $query = 'UPDATE book
              SET name = :name,
                  img = :img,
                  link = :link
              WHERE book_id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':link', $link);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
        return 'xong';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
function edit_blog($name, $img, $description,$content,$id){
    global $db;
    $query = 'UPDATE blog_skill
              SET title = :name,
                  img = :img,
                  description = :description,
                  content = :content
              WHERE blog_id = :id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':content', $content);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
        return 'xong';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}