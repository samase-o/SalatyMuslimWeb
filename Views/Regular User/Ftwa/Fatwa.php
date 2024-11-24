<?php
class Fatwa {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getFatwas() {
        $conn = $this->db->getConnection();
        $sql = "SELECT id, question, reply FROM fatwa0";
        $result = $conn->query($sql);
        $fatwas = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $fatwas[] = [
                    'id' => $row["id"],
                    'question' => $row["question"],
                    'reply' => !empty($row["reply"]) ? $row["reply"] : "Not answered yet"
                ];
            }
        }

        return $fatwas;
    }

    public function askFatwa($username, $question) {
        $conn = $this->db->getConnection();
        $username = $conn->real_escape_string($username);
        $question = $conn->real_escape_string($question);

        $sql = "INSERT INTO fatwa0 (username, question) VALUES ('$username', '$question')";

        if ($conn->query($sql) === TRUE) {
            return "Question submitted successfully";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
