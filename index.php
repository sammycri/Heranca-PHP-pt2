<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
           require_once 'Aluno.php';  
           require_once 'Bolsista.php';
           require_once 'Tecnico.php';
           require_once 'Professor.php';  
           require_once 'Visitante.php';  
             
           $p1 = new Visitante();
           $a1 = new Aluno();
           $pro1= new Professor();
           $t1= new Tecnico();
           $b1 = new Bolsista;
                      
           $p1->setNome("Maria");
           $p1->setSexo("Feminino");                    
           $p1->setIdade(25);
           
           $a1->setNome("Claudin");
           $a1->setIdade(22);
           $a1->setSexo("Masculino");
           $a1->setCurso("Informática");
           $a1->setMatricula("8495-2");          
           $a1->pagarMensalidade();
           
           $b1->setNome("Fernanda");
           $b1->setIdade(21);
           $b1->setSexo("Feminino");
           $b1->setCurso("Enfermagem");
           $b1->setMatricula("4588-5");          
           $b1->pagarMensalidade();
           $b1->renovarBolsa();
           $b1->setBolsa("50%");           
           
           $t1->setNome("Jurandir");
           $t1->setIdade(29);
           $t1->setSexo("Ferminino");
           $t1->setCurso("Nutrição");
           $t1->setMatricula("5465-7");          
           $t1->pagarMensalidade();
           $t1->setRegistroProfissional("Auxiliar - Hospital Universitário");
            
           $pro1->setNome("Valdinei");
           $pro1->setIdade(63);
           $pro1->setSexo("Masculino");
           $pro1->setEspecialidade("Matematica");                  
           $pro1->setSalario(5600);
           
           print_r($p1);
           print_r($a1);
           print_r($b1);
           print_r($t1);
           print_r($pro1);
           
           
           
           
               
       
        ?>
        </pre>
    </body>
</html>
