<?php

class Post{
    public int $likes = 0;
    public array $coments = [];
    public string $autor;

    public function __construct($qtLikes = 0){
        $this->likes = $qtLikes;
    }
    
    public function aumentarLikes(){
        $this->likes++;
    }

    public static function somar($x, $y){
        return $x + $y;
    }
}

$post1 = new Post(25);

$post2 = new Post();
$post2->likes = 10;
$post2->aumentarLikes();
$post2->aumentarLikes();


echo "Post 1: ".$post1->likes." likes.<br />";
echo "Post 2: ".$post2->likes." likes.<br />"; 

echo Post::somar(20, 39);

?>