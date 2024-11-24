<?php

class Article {
    private $title;
    private $content;
    private $category;
    private $id;

    public function __construct($title, $content, $category, $id) {
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getId() {
        return $this->id;
    }
}
