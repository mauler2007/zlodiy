<?php

 $step1 = "Registre-se";
 $step2 = "Confirme seu";
 $step2_1 = "e-mail e seu número de telefone";
 $step3 = "Vá para a seção";
 $step3_1 = "Bônus e presentes";
 $step4 = "Insira o";
 $step4_1 = "código promocional";
 $ip = $_SERVER['REMOTE_ADDR']; 
 $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));

 if($query && $query['countryCode'] == "PT") {
    $step1 = "Registar por número de telefone";
    $step1_1 = "sem seleccionar o país";
    $step2 = "Confirme o seu";
    $step2_1 = "correio e número de telefone no perfil";
    $step3 = "Ir para a secção";
    $step3_1 = "Bónus e Presentes";
    $step4 = "Insira o seu";
    $step4_1 = "código promocional";
    $reg_tag = "?no_fast_reg=1";
 }
 

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BETANDYOU | 20 giros grátis de bônus em jogos de topo</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="images/favicon/icon.ico">
    <link rel="mask-icon" href="images/favicon/icon.svg" color="#5bbad5">
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <div class="header__left">
            <div class="logo"> <a href="#">
                <svg class="logo__svg"> 
                  <use xlink:href="images/sprite.svg#icon-logo"></use>
                </svg></a>
              <div class="logo__slogan"> 
                <p class="logo__text min-font">partners</p>
              </div>
              <div class="logo__hand">
                 <svg class="logo__hand-icon">
<use xlink:href="images/sprite.svg#icon-hand">
              </div>
            </div>
          </div>
          <ul class="socials">
            <li class="socials__item"> <a class="socials__link" href="https://www.facebook.com/betandyouinfo" target="_blanc">
                <svg class="socials__icon"> 
                  <use xlink:href="images/sprite.svg#icon-fb"></use>
                </svg></a></li>
            <li class="socials__item"> <a class="socials__link" href="https://www.instagram.com/_betandyou_" target="_blanc">
                <svg class="socials__icon"> 
                  <use xlink:href="images/sprite.svg#icon-instagramm"></use>
                </svg></a></li>
            <li class="socials__item"> <a class="socials__link" href="https://t.me/betandyouofficial" target="_blanc">
                <svg class="socials__icon"> 
                  <use xlink:href="images/sprite.svg#icon-telegramm"></use>
                </svg></a></li>
          </ul>
        </div>
      </div>
    </header>
    <div class="wrapper">
      <main class="main">
        <section class="page">
          <div class="container"> 
            <div class="page__inner"> 
              <div class="page__img-box"><img class="page__img" src="images/items.png"></div>
              <div class="page__top"> 
                <div class="page__bonus">
                  <h1 class="page__call">Venha girar com a gente!<span></span></h1>
                  <p class="page__big-text">Parabéns!</p>
                  <p class="page__descr">Seus 20 giros grátis nos melhores jogos <br> de fornecedores globais te aguardam!</p>
                </div>
              </div>
              <div class="btn-boxtop"><a class="btn-boxtop__new btn-box__target-link" id="getTop" href="https://betandyou.com/registration/<?php echo $reg_tag?>" target="_blank">receber bonus</a>
                <p class="btn-boxtop__rules" id="rulesTop" data-modal="popup-modal">Termos e Condições</p>
              </div>
            </div>
          </div>
          <div class="container container--fluid">
            <div class="instruction" id="load"> 
              <ul class="instruction__items">
                            <li class="instruction__number" id="instructionNumberOne">
                              <div class="instruction__article">
                                <p class="instruction__action"><?php echo $step1?> <span><?php echo $step1_1?></span> </p>
                              </div>
                            </li>
                            <li class="instruction__number" id="instructionNumberTwo">
                              <div class="instruction__article">
                                <p class="instruction__action"><?php echo $step2?> <span><?php echo $step2_1?></span> </p>
                              </div>
                            </li>
                            <li class="instruction__number" id="instructionNumberThree">
                              <div class="instruction__article">
                                <p class="instruction__action"> <span><?php echo $step3?> </span><?php echo $step3_1?></p>
                              </div>
                            </li>
                            <li class="instruction__number" id="instructionNumberFour">
                              <div class="instruction__article">
                                <p class="instruction__action"><span><?php echo $step4?> </span><?php echo $step4_1?></span></p>
                              </div>
                            </li>
              </ul>
            </div>
          </div>
          <div class="container">
            <div class="btn-box"><a class="btn-box__new btn-box__target-link" id="get" href="https://betandyou.com/registration/<?php echo $reg_tag?>" target="_blank">reivindicar agora</a>
              <p class="btn-box__rules" id="rules" data-modal="popup-modal">Termos e Condições</p>
            </div>
            <ul class="socials socials--mobile">
              <li class="socials__item"> <a class="socials__link" href="https://www.facebook.com/betandyouinfo" target="_blanc">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-fb"></use>
                  </svg></a></li>
              <li class="socials__item"> <a class="socials__link" href="https://www.instagram.com/_betandyou_" target="_blanc">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-instagramm"></use>
                  </svg></a></li>
              <li class="socials__item"> <a class="socials__link" href="https://t.me/betandyouofficial" target="_blanc">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-telegramm"></use>
                  </svg></a></li>
            </ul>
          </div>
        </section>
      </main>
    </div>
    <div class="popup modal" id="popup-modal">
      <div class="popup__wrapper"> 
        <span class="popup__close" style="font-weight: bold; font-size: 20px;">X</span>
        <div class="popup__content"> 
          <h2 class="popup__name">Período da campanha</h2>
          <p class="popup__date"> 
            <time class="pupup__time" datetime="2021-10-01T00:01">1 de Outubro de 2021 a 1 de Outubro de 2022</time>
          </p>
          <div class="popup__frame"> 
            <ul class="popup__rules">
              <li class="popup__rule"> 
                <p>Para participar é necessário preencher um formulário de candidatura, confirmar o seu número de telefone, bem como o seu e-mail.</p>
              </li>
              <li class="popup__rule"> 
                <p>Apenas os primeiros 20 candidatos que preencham as condições participarão na promoção.</p>
              </li>
              <li class="popup__rule"> 
                <p>Depois de confirmarem a sua participação no jogo, entrem no activo código promocional.</p>
              </li>
              <li class="popup__rule"> 
                <p>O montante do incentivo é de 20 freespins para um dos jogos da sua escolha:</p>
              </li>
              <li class="popup__rule"> 
                <p>Booongo. Wolf Night Hold and Win</p>
              </li>
              <li class="popup__rule"> 
                <p>Wazdan. Black Horse™ Deluxe</p>
              </li>
              <li class="popup__rule"> 
                <p>Habanero. Calaveras Explosivas</p>
              </li>
              <li class="popup__rule"> 
                <p>PG Soft. Heist Stakes</p>
              </li>
              <li class="popup__rule"> 
                <p>Booongo. Sun of Egypt 2 Hold and Win</p>
              </li>
              <li class="popup__rule"> 
                <p>Tempo de activação do código de promoção 7 dias.</p>
              </li>
              <li class="popup__rule"> 
                <p>Um código promocional é emitido a um único membro, tentar recriar uma conta para receber freespins é equivalente a actividade fraudulenta.</p>
              </li>
              <li class="popup__rule"> 
                <p>As rotações livres podem ser activadas e utilizadas tanto a partir de um portátil como de um telemóvel.</p>
              </li>
              <li class="popup__rule"> 
                <p>1. Siga o link para o site oficial Betandyou e clique no botão criar conta.</p>
              </li>
              <li class="popup__rule"> 
                <p>2. Registe a sua conta escolhendo a forma mais apropriada: registo através do número de telefone ou e-mail. Preencha os campos obrigatórios: nome, moeda, local de residência, etc;</p>
              </li>
              <li class="popup__rule"> 
                <p>3. Confirmar o correio e o número de telefone;</p>
              </li>
              <li class="popup__rule"> 
                <p>4. Autorize no sítio web, vá ao seu gabinete pessoal e introduza as informações pessoais em falta;</p>
              </li>
              <li class="popup__rule"> 
                <p>5. Ir para a secção &quot;Bónus e presentes&quot;, no campo vazio &quot;Código promocional&quot;, inserir novamente o código promocional &quot;**&quot; (sem as aspas) e clicar em &quot;OK&quot;:</p>
              </li>
              <li class="popup__rule"> 
                <p>6. Uma caixa aparecerá imediatamente no meio do ecrã que diz que lhe foi creditado</p>
              </li>
              <li class="popup__rule"> 
                <p>20 freespins para um dos jogos:</p>
              </li>
              <li class="popup__rule"> 
                <p>Wolf Night Hold and Win</p>
              </li>
              <li class="popup__rule"> 
                <p>Black Horse™ Deluxe</p>
              </li>
              <li class="popup__rule"> 
                <p>Calaveras Explosivas</p>
              </li>
              <li class="popup__rule"> 
                <p>Heist Stakes</p>
              </li>
              <li class="popup__rule"> 
                <p>Sun of Egypt 2 Hold and Win</p>
              </li>
              <li class="popup__rule"> 
                <p>
  Se isto não acontecer e receber um erro, verifique se o código de bónus está correcto e contacte a equipa de apoio técnico em https://betandyou.com/information/contacts.</p>
              </li>
              <li class="popup__rule"> 
                <p>Como ganhar de volta e retirar os seus ganhos</p>
              </li>
              <li class="popup__rule"> 
                <p>Não é possível retirar imediatamente o dinheiro ganho durante os freespins. Para disponibilizar os fundos de bónus para o levantamento, é necessário satisfazer as condições:</p>
              </li>
              <li class="popup__rule"> 
                <p>- Activar os fundos de bónus no seu gabinete pessoal;</p>
              </li>
              <li class="popup__rule"> 
                <p>- Cumprir as condições do vejger: x20 Para isso deve colocar do seu dinheiro um montante igual a ganhos c rodadas livres, multiplicado por 20 vezes.</p>
              </li>
              <li class="popup__rule"> 
                <p>Aposta mínima de 0,5 EUR por rodada.</p>
              </li>
              <li class="popup__rule"> 
                <p>A aposta é dada 14 dias a partir do momento em que se enrolou o freespin.</p>
              </li>
              <li class="popup__rule"> 
                <p>Antes de os ganhos serem creditados na sua conta, iremos verificar se os termos e condições da promoção são cumpridos, mas não mais do que 24 horas.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="js/main.min.js"></script>
    <?php 
      
      $currentURL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      $parsedURL = parse_url( $currentURL );

      $current_query = $parsedURL['query'];

              

        if ( !empty( $current_query ) ) { ?>



      <script>

        $(document).ready(function () {

          var PARAM_NAME = '?<?php echo $current_query ?>';

          if (PARAM_NAME) {
            $("a.btn-box__target-link").each(function () {
              $(this).attr("href", $(this).attr("href") + PARAM_NAME);
            });
          }
        });

      </script>

  
  <?php } ?>
  </body>
</html>