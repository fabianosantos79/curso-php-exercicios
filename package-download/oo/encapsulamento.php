<?php
    class Post{
        public int $id;
        public int $likes = 0;
        public array $comments = [];
        private string $author;

        public function setAuthor($n){
            if(strlen($n) > 3){
                $this->author = ucfirst($n);
        }
    }

        public function getAuthor(){
            return $this->author ?? 'Visitante';
        }
    }

$post1 = new Post();
$post1-> setAuthor ('pi');

$post2 = new Post();
$post2-> setAuthor ('fulano');

echo "Post 1: ".$post1->likes." likes - ".$post1->getAuthor()."<br />";
echo "Post 2: ".$post2->likes." likes - ".$post2->getAuthor();

?>