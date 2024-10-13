<?php
    //================= CRIANDO CLASSE =================
    class Post {
        public $likes = 0;
        public $comments = [];
        public $author;
    }

    //================= CRIANDO OBJETOS =================   
    //Nesse exemplo vamos passar direto a quantidade de likes
    $post1 = new Post();
    $post1->likes = 10;

    //================================================================================================================
    //Nesse exemplo vamos passar a quantidade de likes por meio de uma variável
    $quant = 22;

    $post2 = new Post();
    $post2->likes = $quant;

    //================================================================================================================
    // VC TBM PODE PASSAR OS DADOS POR MEIO DE ARRAY
    $usuario1 = [
        'nome' => 'Jefson',
        'coment' => 'Gostei',
        'qnt_like' => 55
    ];

    $usuario2 = [
        'nome' => 'Gesiel',
        'coment' => 'Adorei',
        'qnt_like' => 115
    ];

    //Nesse exemplo vamos passar os dados por meio de um array
    $post3 = new Post();
    $post3->likes = $usuario1['qnt_like'];
    $post3->comments = $usuario1['coment'];
    $post3->author = $usuario1['nome']; 
    //================================================================================================================

    //Dados passado diretamente
    echo '============ Direto ============<br/>';
    echo 'Post 1 => '.$post1->likes.'<br/><br/>';
    //Dados passado por variável
    echo '=========== Variável ============<br/>';
    echo 'Post 2 => '.$post2->likes.'<br/><br/>';
    
    //Dado passado por array
    echo '============ Array ============<br/>';
    echo 'Post 3 => '.$post3->likes.'<br/>';
    echo 'Post 3 => '.$post3->comments.'<br/>';
    echo 'Post 3 => '.$post3->author.'<br/>';