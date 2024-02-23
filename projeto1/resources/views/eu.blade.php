<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eu.css">

    <title>Sara Justino</title>
    <style>
        img {
            position: absolute;
            top: 0;
            right: 0;
            width: 500px;
            height: auto;
        }

        body {
            margin: 0;
            padding: 0;
        }
        .imgnav {
            width: 100%; 
            text-align: center;
            bottom: 20px;
            height: 130px;
        }

        .container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 800px;
            padding: 10px;
        }
     
    </style>
</head>
<body>
<nav>
    <img src="{{ asset('nav.webp') }}" alt="bolinhas" class="imgnav">
</nav>
  <!-- aiaiai -->  
<svg width="800px" height="800px">
<text x="270" y="270" font-family="Times New Roman" font-size="40" fill="black">Olá, meu nome é Sara</text>
<circle cx="270" cy="270" r="20" fill="black"  stroke-width="1" fill-opacity="0.4"></circle>
<circle cx="400" cy="250" r="15" fill="black"  stroke-width="1" fill-opacity="0.4"></circle>
<circle cx="500" cy="270" r="10" fill="black"  stroke-width="1" fill-opacity="0.4"></circle>
<circle cx="600" cy="255" r="25" fill="black"  stroke-width="1" fill-opacity="0.4"></circle>
<text x="290" y="285" font-family="Times New Roman" font-size="15" fill="black">Estudante de Tecnologia em Sistemas para Internet</text>
</svg>
<img src="{{ asset('eu.webp') }}" alt="uma foto minha">
<div class="container" style="position: absolute; top: 320px; left: 200px; width: 500px; padding: 10px; font-size:16px;">
<a href="https://www.linkedin.com/in/sara-justino-4458b0206/"><strong>LinkedIn</strong></a>
<p><strong>E-mail:</strong> sara.sjustino@gmail.com</p>
<p><strong>Telefone:</strong> 11 94354-3100</p>
<p>Meu nome é Sara Justino, tenho 20 anos. Moro com meus pais e minhas duas irmãs. Moro em um bairro chamado Vargem Grande que é conhecido por ser uma cratera. Sou uma pessoa simpática, sincera e muito chorona.</p>
<p>Sou uma estudante de Sistemas Para Internet que está sempre buscando novos conhecimentos e aprendizagens pois estou ingressando no mercado de trabalho. Me considero uma pessoa adaptável, criativa, responsável e com facilidade para trabalhar em equipe.</p>
</div>
</body>
</html>