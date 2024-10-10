<?php
    include('./ProdutoDAO.php');
    class Produto{
        private $nome;
        private $descricao;
        private $preco;
        private $img;
        
        public function getNome(){
            return $this->nome;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function getImg(){
            return $this->img;
        }
    }
?>