<?php

    class Post{
        //Pripriedades
        public $likes = 0;
        public $comments = [];
        public $author;

        //Métodos
        public function aumentarLike(){
            $this->likes++;
        }
    }

    $post1 = new Post();
    $post1->aumentarLike();

    $post2 = new Post();
    $post2->aumentarLike();
    $post2->aumentarLike();
   

    echo "POST 1: ".$post1->likes."<br/>";
    echo "POST 2: ".$post2->likes."<br/>";