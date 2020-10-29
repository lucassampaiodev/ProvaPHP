<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02</title>
</head>
<body>
    <pre>
    <?php

        require_once "Cadastro.php";
        require_once "Vitima.php";

        // $objeto1 = new Cadastro();
        // $objeto1->cadastroVitima("Lucas Eduardo");
        // $objeto1->cadastroArma("Glock 40mm");
        // $objeto1->cadastroCriminoso("Bandido Safado da Silva");
        // $objeto1->crime("Latrocinio");
        // $objeto1->inserirBD();

        // $objeto2 = new Cadastro();
        // $objeto2->cadastroVitima("Paulo da Silva");
        // $objeto2->cadastroArma("Escopeta Calibre 12mm");
        // $objeto2->cadastroCriminoso("Bandido Safado da Silva");
        // $objeto2->crime("Furto");
        // $objeto2->inserirBD();

        // $objeto3 = new Cadastro();
        // $objeto3->cadastroVitima("Rogerio");
        // $objeto3->cadastroArma("Faca");
        // $objeto3->cadastroCriminoso("Safado");
        // $objeto3->crime("Roubo");
        // $objeto3->inserirBD();

        // $objeto4 = new Cadastro();
        // $objeto4->cadastroVitima("Rodrigo");
        // $objeto4->cadastroArma("Punhal");
        // $objeto4->cadastroCriminoso("Vagabundo");
        // $objeto4->crime("Tentativa de Homicídio");
        // $objeto4->inserirBD();

        $cadastro = new Vitima();
        //Insira o ID (número inteiro) da arma, o nome da arma, o crime que foi cometido com a arma,
        //o nome da vítima da arma e o nome do criminoso que portava a arma.
        $cadastro->cadastroArma("Glock 9mm", "Homicídio", "Lohanny", "Bandido Safado da Silva");
        $cadastro->cadastroArma("Glock 9m", "Homicídi", "Lohanny", "Bandido Safado da Silv");
        $cadastro->cadastroArma("Glock 9", "Homicíd", "Lohanny", "Bandido Safado da Sil");
        $cadastro->cadastroArma("Glock ", "Homicí", "Lohanny", "Bandido Safado da Si");
        $cadastro->cadastroArma("Glock", "Homic", "Lohanny", "Bandido Safado da S");
        /*Insira o Nome da vítima, a idade, o endereço, o crime sofrido, o autor do crime, o local do crime,
        e a arma utilizada.*/
        $cadastro->cadastroVitima("Lucas", "25", "Rua G, 25. Vila Aliança", "Roubo", "Fulano Bandido",
        "Praça do Galo", "Faca caseira");
        





    ?>
    </pre>
</body>
</html>