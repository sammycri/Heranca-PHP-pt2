<?php
require_once 'Aluno.php';
class Tecnico extends Aluno
{
    private $registroProfissional;
    
    //Métodos
    
    public function praticar()
    {
        echo "<p> Praticando.. </p>";
    }
    
    //Métodos Especiais
    
    public function getRegistroProfissional() 
    {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registro): void 
    {
        $this->registroProfissional = $registro;
    }


}
