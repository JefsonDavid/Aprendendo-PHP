<?php
    //Uma classe vem com a possibilidade de vc ter alguns métodos específicos pré definidos pra rodar automaticamente.
    //O método construtor é rodado toda vez que vc criar um objeto novo;
    //Esse método serve pra sempre que vc precisar executar alguma coisa no momento que o objeto é criado vc usa o construtor
    class Post{
        public int $id;
        public int $likes = 0;
        public array $comments = [];
        public string $author;

        //Método Construtor
        //Quando for passado alguns parâmetro na criação do objeto ele vem para o método construtor
        public function __construct($postId) {
            $this->id = $postId;
            //Deposi vc vai consultar o banco de dados para pegar informações do POST $id
            $this->likes = 12;
        }

        public function aumentarLike() {
            //O $this está referenciando a propriedade likes
            $this->likes++;
        }
    }

    //Vc pode passar parâmetros na criação do objeto
    $post1 = new Post(1);//A ordem que vc vai passar os parâmetros é a msm ordem dos métodos da sua classe.

    $post2 = new Post(2);

    echo "POST 1 ".$post1->likes."<br/>";
    echo "POST 2 ".$post2->likes."<br/>";