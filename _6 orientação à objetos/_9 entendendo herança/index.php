<?php
    //Entendendo herança
    //Herança é quando uma classe herda os métodos e atributos de outra classe.
    class Post {
        private int $id;
        private int $likes = 0;

        public function setId($i){
            $this->id = $i;
        } 

        public function getId(){
            return $this->id;
        }

        public function setLikes($l){
            $this->likes = $l;
        }

        public function getLikes(){
            return $this->likes;
        }
    }

    //O EXTENDS faz com que essa classe herde as caracteristicas da sua classe pai (POST)
    class Foto extends Post {
        private string $url;

        public function __construct($id) {
            $this->setId($id);
        }

        public function setUrl($u) {
            $this->url = $u;
        }

        public function getUrl() {
            return $this->url;
        }
    }

    $foto = new Foto(20);
    $foto->setLikes(12); //Aqui mostra a herança pois a classe Foto não tem setLikes(), porém como ela herda da classe Post passa a ter tbm o setLikes().
    $foto->setUrl('www.latam.com.br');

    echo "FOTO #".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();


?>