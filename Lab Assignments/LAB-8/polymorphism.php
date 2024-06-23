<?php
abstract class User {
    private $scores = 0;
    private $numberOfArticles = 0;

    public function setNumberOfArticles($int) {
        $numberOfArticles = (int)$int;
        $this->numberOfArticles = $numberOfArticles;
    }

    public function getNumberOfArticles() {
        return $this->numberOfArticles;
    }

    abstract public function calcScores();
}

class Author extends User {
    public function calcScores() {
        return $this->scores = $this->getNumberOfArticles() * 10 + 20;
    }
}

class Editor extends User {
    public function calcScores() {
        return $this->scores = $this->getNumberOfArticles() * 6 + 15;
    }
}

$author1 = new Author();
$author1->setNumberOfArticles(8);
echo $author1->calcScores();
?>
