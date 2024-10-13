<?php
    //Apartir da versão 7.4 do PHP vc pode proteger as propriedades da sua classe para elas receberem apenas um tipo de informação.

    class Post {
        public int $likes = 0;
        public array $comments = [];
        public string $author;

        public function aumentarLike(){
            //O $this é usado para referenciar apropriedade like
            $this->likes++;
        }
    }

    $post1 = new Post();

    $post1->aumentarLike();
    $post1->author = 'Jefson';

    echo 'POST 1: '.$post1->likes.'<br/>';
    echo 'POST 1: '.$post1->author;

