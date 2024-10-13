<?php
    //Diferença enrte uma PROPRIEDADE PRIVADA e uma PROPRIEDADE PROTEGIDA
    class Post {
        private int $id = 0;
        private int $likes = 0;
        
        protected function setId($i){
            $this->id = $i;
        }

        public function getId(){
            return $this->id;
        }

        protected function setLikes($n){
            $this->likes = $n;
        }

        public function getLikes(){
            return $this->likes;
        }
    }

    class Foto extends Post {
        private string $url;

        public function __construct($id, $lik) {
            $this->setId($id);
            $this->setLikes($lik);
        }

        public function setUrl($u){
            $this->url = $u;
        }

        public function getUrl(){
            return $this->url;
        }
    }
    $fot = new Foto(12, 37);
    //$postagem->setId(15);

    //$foto = new Foto();
   // $foto->setId(3);
    //$foto->setId(10);

    echo "A foto de ID: ".$fot->getId()." tem ".$fot->getLikes()." likes <br/>.";
   // echo $foto->getId()."<br>";
    //echo $fot->getId();


?>