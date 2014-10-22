<?php

class Autor
{

    private $nome;

    private $data_nascimento;

    private $email;

    private $id;

    /**
     *
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @return the $data_nascimento
     */
    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    /**
     *
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param field_type $nome            
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     *
     * @param field_type $data_nascimento            
     */
    public function setData_nascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     *
     * @param field_type $email            
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     *
     * @param field_type $id            
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function toArray()
    {
        return array('nome' => $this->nome,
        		'data_nascimento' => $this->data_nascimento,
        		'email' => $this->email
        );
    }
}

