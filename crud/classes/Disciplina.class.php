<?php

class Disciplina {

    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function listar()
    {
        $sql = 'SELECT id, nome, professor, dia, descricao FROM disciplinas ORDER BY nome';

        foreach ($this->db->query($sql) as $registro) {
           
            $lista[$registro['id']] = $registro; 
        }

        return $lista;
    }
    function apagar($id){
        $id = preg_replace('/\D','',$id);

        if($this->db->query("DELETE FROM disciplinas WHERE id = $id")){
            return true;
        }else{
            return false;
        }
    }
    function criar($dados){
        $nome = $dados['nome'];
        $professor = $dados['professor'];
        $dia = $dados['dia'];
        $descricao = $dados['descricao'];
    }
}