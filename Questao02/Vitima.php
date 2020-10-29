<?php

class Vitima{

    var $idVitima;
    var $idCriminoso;
    var $idCrime;
    var $idArma = 0;
    var $nomeVitima;
    var $nomeCriminoso;
    var $nomeArma;
    var $nomeCrime;

    public function cadastroArma($nomeArma, $crimeArma, $vitimaArma, $criminosoArma){
            //$idArma = 0;
        $cadastroarma = array("ID"=>$this->idArma, "Nome da Arma"=>$nomeArma, "Crime cometido"=>$crimeArma,
        "Vítima"=>$vitimaArma, "Criminoso"=>$criminosoArma);
            print_r($cadastroarma);
            $this->idArma++;
    }
    public function cadastroVitima($nomedavitima, $idade, $endereco, $crimesofrido,
    $autordocrime, $localdocrime, $armautilizada){
        $cadastrovitima = array("Nome da Vítima"=>$nomedavitima, "Idade"=>$idade,
        "Endereço"=>$endereco, "Crime sofrido"=>$crimesofrido, "Autor do crime"=>$autordocrime, "Local do crime"=>$localdocrime,
        "Arma utilizada"=>$armautilizada);
        print_r($cadastrovitima);
    }







}