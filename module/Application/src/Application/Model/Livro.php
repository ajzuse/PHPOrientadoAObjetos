<?php

class Autor
{

    private $titulo;

    private $idAutor;

    private $ano_publicacao;

    private $data_cadastro;

    /**
     *
     * @return the $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     *
     * @return the $idAutor
     */
    public function getIdAutor()
    {
        return $this->idAutor;
    }

    /**
     *
     * @return the $ano_publicacao
     */
    public function getAno_publicacao()
    {
        return $this->ano_publicacao;
    }

    /**
     *
     * @return the $data_cadastro
     */
    public function getData_cadastro()
    {
        return $this->data_cadastro;
    }

    /**
     *
     * @param field_type $titulo            
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     *
     * @param field_type $idAutor            
     */
    public function setIdAutor($idAutor)
    {
        $this->idAutor = $idAutor;
    }

    /**
     *
     * @param field_type $ano_publicacao            
     */
    public function setAno_publicacao($ano_publicacao)
    {
        $this->ano_publicacao = $ano_publicacao;
    }

    /**
     *
     * @param field_type $data_cadastro            
     */
    public function setData_cadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }

    public function toArray()
    {
    	return array('titulo' => $this->titulo,
    	             'idAutor' => $this->idAutor,
    	             'ano_publicacao' => $this->ano_publicacao,
    	             'data_cadastro' => $this->data_cadastro
    	);
    }
}

