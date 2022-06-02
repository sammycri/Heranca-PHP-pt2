<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
        
    private $especialidade;
    private $salario;
    
    //Métodos
    
    public function ReceberAum($valor)
    {
        $this->salario += $valor;
    }
    
    //Métodos especiais (get/set)
    
    public function getEspecialidade() 
    {
        return $this->especialidade;
    }

    public function getSalario() 
    {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void 
    {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void 
    {
        $this->salario = $salario;
    }
}
