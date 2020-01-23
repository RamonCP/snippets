<?php

include_once 'Proprietario.class.php';
include_once 'Operadora.class.php';
include_once 'Telefone.class.php';
include_once 'SMS.class.php';

//Cria uma instancia da classe Proprietario
$joao = new Proprietario();
$joao ->setNome("João");					//Atribui um nome ao atributo nome da classe proprietario
//Cria uma instancia da classe Operadora
$tim = new Operadora();	
$tim ->setNome("Tim");						//Atribui um nome ao atributo nome da classe tim
//Cria uma instancia da classe Telefone
$telefoneJoao = new Telefone();
//Pega o nome da Operadora da classe Telefone atraves do atributo nome da instancia da operadora
$telefoneJoao->setOperadora($tim);
/*Pega o nome do proprietario da classe Proprietario e atribui para 
classe Telefone pelo parametro do método setPropietario
*/
$telefoneJoao->setProprietario($joao);		
$telefoneJoao->setNumero("9999-1234");		//Atribui o numero da classe Telefone

$maria = new Proprietario();
$maria ->setNome("Maria");
$vivo = new Operadora();
$vivo ->setNome("Vivo");
$telefoneMaria = new Telefone();
$telefoneMaria ->setProprietario($maria);
$telefoneMaria ->setOperadora($vivo);
$telefoneMaria ->setNumero("9999-2222");

$antonio = new Proprietario();
$antonio->setNome("Antônio");
$telefoneAntonio = new Telefone();
$telefoneAntonio ->setProprietario($antonio);
$telefoneAntonio->setOperadora($vivo);
$telefoneAntonio->setNumero("8888-2013");

$mensagem1 = new SMS();
$mensagem1->setMensagem("Gata, quer sair comigo?");
$mensagem1->setDatahora("Domingo às 20h");
$mensagem1->setRemetente($joao);
$mensagem1->setDestinatario($maria);

$mensagem2 = new SMS();
$mensagem2 ->setMensagem("Não vai dar, já tenho compromisso");
$mensagem2 ->setDatahora("10min depois");
$mensagem2 ->setRemetente($joao);
$mensagem2->setDestinatario($joao);

$mensagem3 = new SMS();
$mensagem3 ->setMensagem("Hey gato, partiu #BALADA ???");
$mensagem3 ->setDatahora("agora");
$mensagem3 ->setRemetente($maria);
$mensagem3->setDestinatario($antonio);

print_r($mensagem1);
print_r($mensagem2);
print_r($mensagem2);


