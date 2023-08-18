<?php

    class Usuario
    {
        private $cpf;
        private $nome;
        private $email;
        private $password;

        # declando métodos set.
        public function setCPF($cpf)
        {
            $this->cpf = $cpf;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        
        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setPassword($password)
        {
            $this->password = md5($password);
        }

        # declando métodos get.
        public function getCPF()
        {
            return $this->cpf;
        }

        public function getNome()
        {
            return $this->nome;
        }
        
        public function getEmail()
        {
            return $this->email;
        }

        public function getPassword()
        {
            return $this->password;
        }

        # declarando método toString()

        public function toString()
        {
            return "Dados do usuário: CPF: {$this->cpf}, Nome: {$this->nome} e E-mail: {$this->email}.";
        }
    }