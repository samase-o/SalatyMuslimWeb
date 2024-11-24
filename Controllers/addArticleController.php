<?php

class AddArticleController {

    public function addArticle() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $category = $_POST['category'];

            try {
                $article = new Article($title, $content, $category);  // Validation happens here

                // Connect to database (replace with your connection details)
                $conn = new mysqli("localhost", "root", "", "islamic");

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Prepare and execute insert query
                $sql = "INSERT INTO addArticale (title, content, category) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $article->getTitle(), $article->getContent(), $article->getCategory());
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    $message = "Article added successfully!";
                } else {
                    $message = "Error adding article.";
                }

                $stmt->close();
                $conn->close();

                // ... (Optional: Redirect or display message)
            } catch (InvalidArgumentException $e) {
                $message = $e->getMessage(); // Display error message for invalid category
            }
        }
    }
}
