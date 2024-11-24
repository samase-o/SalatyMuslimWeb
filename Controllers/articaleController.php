<?php

require_once '../models/articale.php';

class ArticleController {
    public function getArticles() {
        // Connect to your Muslim database (replace with your connection details)
        $conn = mysqli_connect("localhost", "root", "", "islamic");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Define SQL query to fetch articles
        $sql = "SELECT title, content, category, id FROM addArticle";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Check for query errors
        if (!$result) {
            die("Error retrieving articles: " . mysqli_error($conn));
        }

        // Create an array of Article objects
        $articles = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $articles[] = new Article($row["title"], $row["content"], $row["category"], $row["id"]);
        }

        // Close the connection
        mysqli_close($conn);

        return $articles;
    }
}
