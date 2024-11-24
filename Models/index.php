<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatwas</title>
    <script src="https://kit.fontawesome.com/fe73f000fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/fatwasList.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-mosque"></i>
                        </span>
                        <span class="title">Salaty</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i id ="iconn" class="fa-solid fa-house-chimney"></i>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-list-ul"></i>
                        </span>
                        <span class="title">Hadiths</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-comments"></i>
                        </span>
                        <span class="title">Fatwas</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="title">Articles</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-tower-broadcast"></i>
                        </span>
                        <span class="title">Broadcast</span>
                    </a>
                </li>

                <li>
                    <a href="fatwasList.html">
                        <span class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <span class="title">Guidance</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-question"></i>
                        </span>
                        <span class="title">Feedbacks</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-link"></i>
                        </span>
                        <span class="title">Directory</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </label>
                </div>
            </div>

            <div class="details">
                <div class="usersList">
                    <div class="cardHeader">
                        <h2>Articles List</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Category</th>
                                <th>ID</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            // Connect to your Muslim database
                            // Replace with your connection details
                            $conn = mysqli_connect("localhost", "username", "password", "database_name");

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

                            // Loop through article data and populate table rows
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["title"] . "</td>";
                                echo "<td>" . $row["content"] . "</td>";
                                echo "<td>" . $row["category"] . "</td>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "</tr>";
                            }

                            // Close the connection
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
