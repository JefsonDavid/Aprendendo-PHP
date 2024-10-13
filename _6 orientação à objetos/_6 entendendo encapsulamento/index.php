<?php
    //Encapsulamento nada mais é que protejer as propriedades de acessos externos ou então de modificações desnecessárias ou até a modificações que vão prejudicar o funcionamento daquele objeto.

    class Post {
        public int $id;
        private int $likes = 0;
        public array $comments = [];
        private string $author;//Estando privado ninguém pode acessar esse método fora da classe

        public function aumentarLike(){
            $this->likes++;
        }

        public function setLikes($qtLikes){
            $this->likes=$qtLikes;
        }

        public function getLikes(){
            if($this->likes > 50){
                return "Vc tem: ".$this->likes." e isso é imprecionante.";
            }
            return "Vc tem: ".$this->likes." não é mto mais vamos conseguir chegar lá.";
        }

        //O setAuthor vai ser por onde ele vai receber a informação do nome do autor
        //Uma das vatagens de vc usar o set e get é a questão de vc poder tratar os dados aqui msm
        public function setAuthor($nome){
            //Aqui ele vai verificar se a string tem mais de 3 caractere
            if(strlen($nome) >= 3) {
                //Aqui ele vai colocar a primeira letra do nome sempre maiúscula
                $this->author = ucfirst($nome);
            }
        }

        public function getAuthor(){
            //Aqui ele vai retornar o nome do autor e caso não tenha o nome ele vai retornar como visitante
            return $this->author ?? 'Visitante';
        }

    }

    $post1 = new Post();
    $post1->setLikes(52);
    $post1->setAuthor('Jefson');

    $post2 = new Post();
    $post2->setLikes(23);
    $post2->setAuthor('Gesiel');

    echo "POST 1 tem: ".$post1->getLikes()." - Autor: ".$post1->getAuthor()."<br/>";
    echo "POST 2 tem: ".$post2->getLikes()." - Autor: ".$post2->getAuthor()."<br/>";

?>