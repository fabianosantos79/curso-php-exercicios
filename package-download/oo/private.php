<?php
    class Post{
        protected int $id;
        private int $likes = 0;
        
        public function setId($i){
            $this->id = $i;
        }

        public function getId(){
            return $this->id;
        }

        public function setLikes($n){
            $this->likes = $n;
        }

        public function getLikes(){
            return $this->likes;
        }
    }

    class Foto extends Post{

        private $url;
         

        public function __construct($id){
            $this->id = 900;
        }
        
        public function setUrl($u){
            $this->url = $u;
        }

        public function getUrl(){
        return $this->url;
    }

}

    $foto = new Foto(20);
    $foto->setLikes(12);
    $foto->setUrl('www.url.com.br');

    echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." likes - URL ".$foto->getUrl();


?>