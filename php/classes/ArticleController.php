<?php

class ArticleController
{
    public static function getArticles()
    {
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM articles");
        $articles = [];
        while (($row = $result->fetch_assoc()) != null) {
            $articles[] = $row;
        }
        return json_encode($articles);
    }

    public static function getArticleById()
    {
        global $mysqli;
        $articleId = $_POST['article_id'];
        $result = $mysqli->query("SELECT * FROM articles WHERE id='$articleId'");
        $row = $result->fetch_assoc();
        return json_encode($row);
    }
    public static function addArticle(){
        global $mysqli;
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $html = str_get_html($content);
        $img = $html->find('img', 0);
        $src =  $img->src; // data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wC
        $base64 = explode(',', $src)[1]; // /9j/4AAQSkZJRgABAQAAAQABAAD/2wC
        $extension = explode(';', explode('/', explode(',', $src)[0])[1])[0];
        $filename = microtime().".".$extension;
        $ifp =fopen('img/article_image/'.$filename, 'wb');
        fwrite($ifp, base64_decode($base64));
        fclose($ifp);
        $img->src = "/img/article_image/$filename";
        $mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title','$html','$author')");
        return (json_encode(['result'=>'success']));
    }

    public static function deleteArticle(){
        global $mysqli;
        $id = $_GET['id'];
        $mysqli->query("DELETE FROM `articles` WHERE id='$id'");
        header("Location: /articles");
    }
    public static function addComment(){
        global $mysqli;
        $userId = $_SESSION['id'];
        $articleId = $_POST['article_id'];
        $comment = $_POST['comment'];
        $mysqli->query("INSERT INTO `comments`(`user_id`, `article_id`, `comment`) VALUES ('$userId', '$articleId', '$comment')");
        exit(json_encode(['result'=>'success']));
    }
    public static function getCommentByArticleId($articleId){
        global $mysqli;
        $result = $mysqli->query("SELECT comments.comment, users.name, users.lastname FROM comments, users WHERE article_id='$articleId' AND users.id = comments.user_id");
        $comments = [];
        while (($row = $result->fetch_assoc()) != null){
            $comments[] = $row;
        }
        exit(json_encode($comments));
    }
}