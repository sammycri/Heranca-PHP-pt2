<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa 
{
    protected $matricula;
    protected $curso;
    
    //metodos
    
    public function pagarMensalidade()
    {
        echo "</br> <p>A mensalidade do(a) aluno(a)". $this->nome ." foi paga com sucesso..</p>";
    }
    
    //metodos especiais (get/set)
    
    public function getMatricula() 
    {
        return $this->matricula;
    }

    public function getCurso() 
    {
        return $this->curso;
    }

    public function setMatricula($matricula): void 
    {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void 
    {
        $this->curso = $curso;
    }


}
