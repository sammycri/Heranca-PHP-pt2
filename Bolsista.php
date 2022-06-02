<?php
require_once 'Aluno.php';
class Bolsista extends Aluno
{
    private $bolsa;
    
    //Métodos
    
    public function renovarBolsa()
    {
        echo "</br> <p>Bolsa da(o) " . $this->nome . " será renovada..</p>";
    }
    
    public function pagarMensalidade() 
    {
        parent::pagarMensalidade();
        echo $this->nome . " é bolsista, mensalidade paga com o desconto. ";
    }
    
    //Métodos especiais
    
    public function getBolsa() 
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void 
    {
        $this->bolsa = $bolsa;
    }


}
