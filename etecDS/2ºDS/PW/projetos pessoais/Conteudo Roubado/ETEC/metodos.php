<?php

function desceTela()
{
  echo '
  <script>
    function desceTela(){
      document.querySelector("#carrosel2").scrollIntoView({
      behavior: "smooth"
    });
  }

  desceTela();
  
  </script>';
}

function card($imagem,$titulo,$descricao,$preco,$link){

  echo'
  <div class="card" style="width: 18rem;">
    <img src="'.$imagem.'" class="card-img-top">
    <div class="card-body">
      <h5>'.$titulo.'</h5>
      <p>'.$descricao.'</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
          <div class="preco">'.$preco.'</div>
          <div class="comprar"><a href="'.$link.'" target="_blank"><button>Comprar</button></a></div>
        </li>
    </ul>
    </div>
  ';

}

function acao(){
  card('./imagens/Acao1.jpg','Metal Gear Rising
  ','A história é um "spin-off" da série Metal Gear, com um enredo único que se passa quatro anos depois dos eventos de Metal Gear Solid 4: Guns of the Patriots e foca-se no cyborg ninja de nome Raiden, numa luta contra a autoproclamada empresa militar privada envolvida em atividades terroristas, a Desperado Enterprises.

  ','R$49,99','https://store.steampowered.com/app/235460/METAL_GEAR_RISING_REVENGEANCE/');
  card('./imagens/Acao2.jpg','Doom
  ','A história acompanha um fuzileiro espacial enquanto luta contra forças demoníacas em uma colônia de Marte. A jogabilidade tem um ritmo rápido e envolve navegação de ambientes, combate com diferentes tipos de armas e a capacidade de realizar execuções especiais.

  ','R$61,50','https://store.steampowered.com/app/379720/DOOM/');
  card('./imagens/Acao3.jpg','Boorderlands 2
  ','Borderlands 2 conta a história de quatro novos Vault Hunters (caçadores Vaults) que lutam para libertar Pandora das garras de Handsome Jack, CEO da Hyperion Corporation. Os jogadores vão lutar por toda Pandora para impedir que Jack ressuscite um antigo mal alienígena conhecido como "the Warrior".

  ','R$44,99','https://store.steampowered.com/app/49520/Borderlands_2/');
  card('./imagens/Acao4.jpg','Metro 2033
  ','O ser humano já não tem mais o comando sobre a Terra. Novas formas de vida a dominam. Um desastre nuclear varreu a superfície terrestre obrigando os poucos sobreviventes a uma existência sem sentido e sem esperança nos túneis do metrô de Moscou.

  ','R$36,99','https://store.steampowered.com/app/286690/Metro_2033_Redux/');
  card('./imagens/Acao5.jpg','Heavy Metal Machine
  ','Heavy Metal Machines é um jogo de Combate Veicular Multiplayer gratuito onde os jogadores se envolvem em intensas batalhas 4v4, controlando veículos letais em arenas pós-apocalípticas.

  ','Grátis','https://store.steampowered.com/app/331360/Heavy_Metal_Machines/');
  card('./imagens/Acao6.jpg','Devil May Cry
  ','Os populares jogos estilosos de ação Devil May Cry, Devil May Cry 2 e Devil May Cry 3 Special Edition retornam em uma coleção!

  ','R$59,99','https://store.playstation.com/pt-br/product/UP0102-PPSA01442_00-DMC5SE0000000001');

}

function terror(){
  card('./imagens/Terror1.jpg','Amnesia: The Dark Descent
  ','Amnesia: The Dark Descent é um survival horror em primeira pessoa, que te coloca em um ambiente de terror, levado pela bagunça que foi criada na sua mente. Você não sabe onde está e não lembra de nada antes de chegar onde está. Sinta a sensação de estar sendo caçado neste pesadelo que se tornou sua vida.

  ','R$19,99','https://store.steampowered.com/app/57300/Amnesia_The_Dark_Descent/?l=portuguese');
  card('./imagens/Terror2.jpg','Five Nights at Freddy’s
  ','Em Five Nights at Freedy’s, o objetivo é permanecer cinco noites vivo escapando dos animatrônicos. O game consiste em observar câmeras de segurança, fechar portas e acender luzes para espantar os bonecos que te seguem até a sala de vigilância.

  ','R$10,89','https://store.steampowered.com/app/319510/Five_Nights_at_Freddys/');
  card('./imagens/Terror3.jpg','IMSCARED
  ','É necessario um coração para ser aberto.

  ','R$8,39','https://store.steampowered.com/app/429720/IMSCARED/?l=portuguese');
  card('./imagens/Terror4.jpg','The Evil Within
  ','A trama gira em torno do detetive Sebastian e seu parceiro. Depois de testemunhar o assassinato de colegas policiais, um após outro, o detetive é atacado e perde a consciência. Ao acordar, Sebastian se encontra em uma terra tomada por criaturas monstruosas e precisa descobrir como fugir dali.

  ','49,99','https://store.steampowered.com/app/268050/The_Evil_Within/');
  card('./imagens/Terror5.jpg','Among the Sleep
  ','Among the Sleep: Enhanced Edition é uma nova versão melhorada do premiado jogo de aventura de horror em primeira pessoa. Você é uma criança aprisionada em um estranho pesadelo e que está em busca da sua mãe.

  ','R$32.99','https://store.steampowered.com/app/250620/Among_the_Sleep__Enhanced_Edition/');
  card('./imagens/Terror6.jpg','Dark Deception
  ','Dark Deception é um jogo de aventura e hurror (humor e terror) em labirinto. Lute através de labirintos enquanto tenta mudar o seu destino. Corra ou morra. A escolha é sua.29 de out. de 2021

  ','Grátis','https://store.steampowered.com/app/332950/Dark_Deception/');
}


function sobrevivencia(){
  card('./imagens/Sobrevivencia1.jpg','Terraria
  ','Terraria é um jogo eletrônico RPG de ação-aventura independente produzido pela desenvolvedora de jogos Re-Logic. Possui como características a exploração, artesanato, construção de estruturas e combate a monstros perigosos em um mundo 2D gerado proceduralmente.

  ','R$19,99','https://store.steampowered.com/app/105600/Terraria/');
  card('./imagens/Sobrevivencia2.jpg','Dont Starve Together
  ','Dont Starve Together é um divertido jogo onde você e seus amigos irão se aventurar pelas planícies, savanas, rochedos e pântanos, enquanto foge e luta contra as criaturas que o espreitam. Com baixo custo em clientes como Steam, o título é a certeza de muitas horas de jogatina.

  ','R$9,51','https://store.steampowered.com/app/322330/Dont_Starve_Together/');
  card('./imagens/Sobrevivencia3.jpg','DAYZ
  ','O jogo gira em torno da sobrevivência em meio a uma infecção global, no qual os infectados pelo vírus desconhecido se tornam extremamente agressivos. Diferente dos zumbis convencionais, os infectados pelo vírus em DayZ estão vivos, e podem ser mortos por tiros em qualquer parte do corpo.

  ','119,99','https://store.steampowered.com/app/221100/DayZ/');
  card('./imagens/Sobrevivencia4.jpg','ARK: Survival Evolved
  ','Survival Evolved é um game de mundo aberto no qual os jogadores precisam sobreviver em uma ilha. Entretanto, nada como o que foi visto em “Náufrago” ou algo do gênero: aqui, os seus algozes serão dinossauros (e até mesmo um dragão, como é possível ver no final do vídeo que abre esta notícia).

  ','R$57,99','https://store.steampowered.com/app/346110/ARK_Survival_Evolved/');
  card('./imagens/Sobrevivencia5.jpg','The Forest
  ','Em The Forest, o jogador deve sobreviver ao ambiente e não ser morto por canibais de uma ilha florestal após sobreviver a um desastre de avião. Tem, então, que construir abrigos, armas, e outras ferramentas de sobrevivência, além de caçar e encontrar comida.

  ','R$37,99','https://store.steampowered.com/app/242760/The_Forest/');
  card('./imagens/Sobrevivencia6.jpg','Subnautica
  ','Subnautica traz um mundo alienígena cheio de ameaças para exploração extrema com momentos de terror e suspense. Subnautica é um jogo de exploração em um oceano alienígena regado de terror e suspense. Ele pode ser descrito como uma experiência única e curiosa, inicialmente sem muitos recursos mas com sustos e medo.13 de fev. de 2018

  ','R$57.99','https://store.steampowered.com/app/264710/Subnautica');

}

function RPG(){
  card('./imagens/RPG1.jpg','Dark Souls
  ','Mas então, fez-se o fogo. Experimente novamente o jogo aclamado pela crítica e definidor de gênero que foi o início tudo. Belamente remasterizado, volte a Lordran com detalhes em alta definição a 60fps.

  ','R$159,90','https://store.steampowered.com/app/374320/DARK_SOULS_III/');
  card('./imagens/RPG2.jpg','Lost Ark
  ','Embarque numa odisseia pela Arca Perdida num mundo vasto e vibrante: explore novas terras, procure tesouros perdidos e teste-se num combate de ação emocionante neste RPG grátis para jogar.

  ','Grátis','https://store.steampowered.com/app/1599340/Lost_Ark/');
  card('./imagens/RPG3.jpg','Grand Chase
  ','Grand Chase é um jogo online de RPG de ação em plataforma gratuito com gráficos inspirados em anime. Divirta-se com aventuras empolgantes em missões e PvP com personagens únicos.

  ','Grátis','https://store.steampowered.com/app/985810/GrandChase/');
  card('./imagens/RPG4.jpg','Skyrim
  ','Como estava escrito nos Pergaminhos Antigos (Elder Scrolls), a guerra em Skyrim é o último passo para o retorno de Alduin, o deus dragão da destruição. Agora, você deve encarar seu destino como o último Dovahkiin (draconato), um caçador de dragões ungido pelos deuses para combater a ameaça de Alduin.

  ','R$149,90','https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/');
  card('./imagens/RPG5.jpg','Monster Hunter: World
  ','Conheça o Novo Mundo! Em Monster Hunter: World, o jogo mais recente da série, você pode curtir a experiência máxima de caçada, usando tudo à sua disposição para caçar monstros em um novo mundo repleto de surpresas e emoções.

  ','R$179,99','https://store.steampowered.com/app/1446780/MONSTER_HUNTER_RISE/');
  card('./imagens/RPG6.jpg','Elden Ring
  ','O NOVO RPG DE AÇÃO E FANTASIA. Levante-se, Maculado, e seja guiado pela graça para portar o poder do Anel Prístino e se tornar um Lorde Prístino nas Terras Intermédias.

  ','R$249,90','https://store.steampowered.com/app/1245620/ELDEN_RING/');
}

function luta(){
  card('./imagens/Luta1.jpg','Mortal Combat 11
  ','Mortal Kombat está de volta, melhor do que nunca, em uma evolução da icônica franquia.

  ','Grátis','https://store.steampowered.com/app/976310/Mortal_Kombat11/');
  card('./imagens/Luta2.jpg','Street Fighter
  ','Nesta coleção de 12 jogos de Street Fighter, quatro títulos revolucionários permitem que você reviva a experiência do arcade jogando online no modo Arcade, ou jogue com amigos em: SFII Hyper Fighting, Super SFII Turbo, SF Alpha 3 e SFIII: Third Strike!

  ','R$39,99','https://store.steampowered.com/app/310950/Street_Fighter_V');
  card('./imagens/Luta3.jpg','Brawlhalla','Brawlhalla é um Jogo de Luta de Plataforma Gratuito, no qual os maiores guerreiros da história lutam para provar quem foi, é ou será o melhor guerreiro de todos os tempos. Já Disponível para Steam, PS4, Xbox One e Nintendo Switch.

  ','Grátis','https://store.steampowered.com/app/291550/Brawlhalla/');
  card('./imagens/Luta4.jpg','SkullGirls
  ','A experiência definitiva de Skullgirls! Com 14 personagens animados à mão, modo história com vozes, inúmeras paletas e netcode multijogador baseado em GGPO sem igual.

  ','R$47,49','https://store.steampowered.com/app/245170/Skullgirls_2nd_Encore/');
  card('./imagens/Luta5.jpg','Speed Brawl
  ','Speed Brawl é uma mistura de corrida e combate em 2D onde é preciso ser rápido e bater forte! Mantenha o ritmo, faça sequências e solte poderes especiais devastadores. Descubra seu estilo de luta e reúna a melhor equipe de lutadores já vista. Depois faça tudo de novo mais rápido... e mais rápido... E MAIS RÁPIDO!!!

  ','R$37,99','https://store.steampowered.com/app/468670/Speed_Brawl/');

  card('./imagens/Luta6.jpg','KOF XV
  ','The King of Fighters XV, também chamado de KOF XV, é o mais novo capítulo na Saga Shunei e ocorre logo após os eventos de The King of Fighters XIV; a narrativa gira principalmente em torno de dois lutadores com poderes sobrenaturais, Shunei e Isla, entre outros personagens que retornam enfrentando ameaças revividas.11 de fev. de 2022
  ','R$60,39
  ','https://store.steampowered.com/app/1498570/THE_KING_OF_FIGHTERS_XV/');
}

function tudo(){
  card('./imagens/Acao1.jpg','Metal Gear Rising
  ','A história é um "spin-off" da série Metal Gear, com um enredo único que se passa quatro anos depois dos eventos de Metal Gear Solid 4: Guns of the Patriots e foca-se no cyborg ninja de nome Raiden, numa luta contra a autoproclamada empresa militar privada envolvida em atividades terroristas, a Desperado Enterprises.

  ','R$49,99','https://store.steampowered.com/app/235460/METAL_GEAR_RISING_REVENGEANCE/');
  card('./imagens/Acao2.jpg','Doom
  ','A história acompanha um fuzileiro espacial enquanto luta contra forças demoníacas em uma colônia de Marte. A jogabilidade tem um ritmo rápido e envolve navegação de ambientes, combate com diferentes tipos de armas e a capacidade de realizar execuções especiais.

  ','R$61,50','https://store.steampowered.com/app/379720/DOOM/');
  card('./imagens/Acao3.jpg','Boorderlands 2
  ','Borderlands 2 conta a história de quatro novos Vault Hunters (caçadores Vaults) que lutam para libertar Pandora das garras de Handsome Jack, CEO da Hyperion Corporation. Os jogadores vão lutar por toda Pandora para impedir que Jack ressuscite um antigo mal alienígena conhecido como "the Warrior".

  ','R$44,99','https://store.steampowered.com/app/49520/Borderlands_2/');
  card('./imagens/Acao4.jpg','Metro 2033
  ','O ser humano já não tem mais o comando sobre a Terra. Novas formas de vida a dominam. Um desastre nuclear varreu a superfície terrestre obrigando os poucos sobreviventes a uma existência sem sentido e sem esperança nos túneis do metrô de Moscou.

  ','R$36,99','https://store.steampowered.com/app/286690/Metro_2033_Redux/');
  card('./imagens/Acao5.jpg','Heavy Metal Machine
  ','Heavy Metal Machines é um jogo de Combate Veicular Multiplayer gratuito onde os jogadores se envolvem em intensas batalhas 4v4, controlando veículos letais em arenas pós-apocalípticas.

  ','Grátis','https://store.steampowered.com/app/331360/Heavy_Metal_Machines/');
  card('./imagens/Acao6.jpg','Devil May Cry
  ','Os populares jogos estilosos de ação Devil May Cry, Devil May Cry 2 e Devil May Cry 3 Special Edition retornam em uma coleção!

  ','R$59,99','https://store.playstation.com/pt-br/product/UP0102-PPSA01442_00-DMC5SE0000000001');
  card('./imagens/Terror1.jpg','Amnesia: The Dark Descent
  ','Amnesia: The Dark Descent é um survival horror em primeira pessoa, que te coloca em um ambiente de terror, levado pela bagunça que foi criada na sua mente. Você não sabe onde está e não lembra de nada antes de chegar onde está. Sinta a sensação de estar sendo caçado neste pesadelo que se tornou sua vida.

  ','R$19,99','https://store.steampowered.com/app/57300/Amnesia_The_Dark_Descent/?l=portuguese');
  card('./imagens/Terror2.jpg','Five Nights at Freddy’s
  ','Em Five Nights at Freedy’s, o objetivo é permanecer cinco noites vivo escapando dos animatrônicos. O game consiste em observar câmeras de segurança, fechar portas e acender luzes para espantar os bonecos que te seguem até a sala de vigilância.

  ','R$10,89','https://store.steampowered.com/app/319510/Five_Nights_at_Freddys/');
  card('./imagens/Terror3.jpg','IMSCARED
  ','É necessario um coração para ser aberto.

  ','R$8,39','https://store.steampowered.com/app/429720/IMSCARED/?l=portuguese');
  card('./imagens/Terror4.jpg','The Evil Within
  ','A trama gira em torno do detetive Sebastian e seu parceiro. Depois de testemunhar o assassinato de colegas policiais, um após outro, o detetive é atacado e perde a consciência. Ao acordar, Sebastian se encontra em uma terra tomada por criaturas monstruosas e precisa descobrir como fugir dali.

  ','49,99','https://store.steampowered.com/app/268050/The_Evil_Within/');
  card('./imagens/Terror5.jpg','Among the Sleep
  ','Among the Sleep: Enhanced Edition é uma nova versão melhorada do premiado jogo de aventura de horror em primeira pessoa. Você é uma criança aprisionada em um estranho pesadelo e que está em busca da sua mãe.

  ','R$32.99','https://store.steampowered.com/app/250620/Among_the_Sleep__Enhanced_Edition/');
  card('./imagens/Terror6.jpg','Dark Deception
  ','Dark Deception é um jogo de aventura e hurror (humor e terror) em labirinto. Lute através de labirintos enquanto tenta mudar o seu destino. Corra ou morra. A escolha é sua.29 de out. de 2021

  ','Grátis','https://store.steampowered.com/app/332950/Dark_Deception/');
  card('./imagens/Sobrevivencia1.jpg','Terraria
  ','Terraria é um jogo eletrônico RPG de ação-aventura independente produzido pela desenvolvedora de jogos Re-Logic. Possui como características a exploração, artesanato, construção de estruturas e combate a monstros perigosos em um mundo 2D gerado proceduralmente.

  ','R$19,99','https://store.steampowered.com/app/105600/Terraria/');
  card('./imagens/Sobrevivencia2.jpg','Dont Starve Together
  ','Dont Starve Together é um divertido jogo onde você e seus amigos irão se aventurar pelas planícies, savanas, rochedos e pântanos, enquanto foge e luta contra as criaturas que o espreitam. Com baixo custo em clientes como Steam, o título é a certeza de muitas horas de jogatina.

  ','R$9,51','https://store.steampowered.com/app/322330/Dont_Starve_Together/');
  card('./imagens/Sobrevivencia3.jpg','DAYZ
  ','O jogo gira em torno da sobrevivência em meio a uma infecção global, no qual os infectados pelo vírus desconhecido se tornam extremamente agressivos. Diferente dos zumbis convencionais, os infectados pelo vírus em DayZ estão vivos, e podem ser mortos por tiros em qualquer parte do corpo.

  ','119,99','https://store.steampowered.com/app/221100/DayZ/');
  card('./imagens/Sobrevivencia4.jpg','ARK: Survival Evolved
  ','Survival Evolved é um game de mundo aberto no qual os jogadores precisam sobreviver em uma ilha. Entretanto, nada como o que foi visto em “Náufrago” ou algo do gênero: aqui, os seus algozes serão dinossauros (e até mesmo um dragão, como é possível ver no final do vídeo que abre esta notícia).

  ','R$57,99','https://store.steampowered.com/app/346110/ARK_Survival_Evolved/');
  card('./imagens/Sobrevivencia5.jpg','The Forest
  ','Em The Forest, o jogador deve sobreviver ao ambiente e não ser morto por canibais de uma ilha florestal após sobreviver a um desastre de avião. Tem, então, que construir abrigos, armas, e outras ferramentas de sobrevivência, além de caçar e encontrar comida.

  ','R$37,99','https://store.steampowered.com/app/242760/The_Forest/');
  card('./imagens/Sobrevivencia6.jpg','Subnautica
  ','Subnautica traz um mundo alienígena cheio de ameaças para exploração extrema com momentos de terror e suspense. Subnautica é um jogo de exploração em um oceano alienígena regado de terror e suspense. Ele pode ser descrito como uma experiência única e curiosa, inicialmente sem muitos recursos mas com sustos e medo.13 de fev. de 2018

  ','R$57.99','https://store.steampowered.com/app/264710/Subnautica');
  card('./imagens/RPG1.jpg','Dark Souls
  ','Mas então, fez-se o fogo. Experimente novamente o jogo aclamado pela crítica e definidor de gênero que foi o início tudo. Belamente remasterizado, volte a Lordran com detalhes em alta definição a 60fps.

  ','R$159,90','https://store.steampowered.com/app/374320/DARK_SOULS_III/');
  card('./imagens/RPG2.jpg','Lost Ark
  ','Embarque numa odisseia pela Arca Perdida num mundo vasto e vibrante: explore novas terras, procure tesouros perdidos e teste-se num combate de ação emocionante neste RPG grátis para jogar.

  ','Grátis','https://store.steampowered.com/app/1599340/Lost_Ark/');
  card('./imagens/RPG3.jpg','Grand Chase
  ','Grand Chase é um jogo online de RPG de ação em plataforma gratuito com gráficos inspirados em anime. Divirta-se com aventuras empolgantes em missões e PvP com personagens únicos.

  ','Grátis','https://store.steampowered.com/app/985810/GrandChase/');
  card('./imagens/RPG4.jpg','Skyrim
  ','Como estava escrito nos Pergaminhos Antigos (Elder Scrolls), a guerra em Skyrim é o último passo para o retorno de Alduin, o deus dragão da destruição. Agora, você deve encarar seu destino como o último Dovahkiin (draconato), um caçador de dragões ungido pelos deuses para combater a ameaça de Alduin.

  ','R$149,90','https://store.steampowered.com/app/489830/The_Elder_Scrolls_V_Skyrim_Special_Edition/');
  card('./imagens/RPG5.jpg','Monster Hunter: World
  ','Conheça o Novo Mundo! Em Monster Hunter: World, o jogo mais recente da série, você pode curtir a experiência máxima de caçada, usando tudo à sua disposição para caçar monstros em um novo mundo repleto de surpresas e emoções.

  ','R$179,99','https://store.steampowered.com/app/1446780/MONSTER_HUNTER_RISE/');
  card('./imagens/RPG6.jpg','Elden Ring
  ','O NOVO RPG DE AÇÃO E FANTASIA. Levante-se, Maculado, e seja guiado pela graça para portar o poder do Anel Prístino e se tornar um Lorde Prístino nas Terras Intermédias.

  ','R$249,90','https://store.steampowered.com/app/1245620/ELDEN_RING/');
  card('./imagens/Luta1.jpg','Mortal Combat 11
  ','Mortal Kombat está de volta, melhor do que nunca, em uma evolução da icônica franquia.

  ','Grátis','https://store.steampowered.com/app/976310/Mortal_Kombat11/');
  card('./imagens/Luta2.jpg','Street Fighter
  ','Nesta coleção de 12 jogos de Street Fighter, quatro títulos revolucionários permitem que você reviva a experiência do arcade jogando online no modo Arcade, ou jogue com amigos em: SFII Hyper Fighting, Super SFII Turbo, SF Alpha 3 e SFIII: Third Strike!

  ','R$39,99','https://store.steampowered.com/app/310950/Street_Fighter_V');
  card('./imagens/Luta3.jpg','Brawlhalla','Brawlhalla é um Jogo de Luta de Plataforma Gratuito, no qual os maiores guerreiros da história lutam para provar quem foi, é ou será o melhor guerreiro de todos os tempos. Já Disponível para Steam, PS4, Xbox One e Nintendo Switch.

  ','Grátis','https://store.steampowered.com/app/291550/Brawlhalla/');
  card('./imagens/Luta4.jpg','SkullGirls
  ','A experiência definitiva de Skullgirls! Com 14 personagens animados à mão, modo história com vozes, inúmeras paletas e netcode multijogador baseado em GGPO sem igual.

  ','R$47,49','https://store.steampowered.com/app/245170/Skullgirls_2nd_Encore/');
  card('./imagens/Luta5.jpg','Speed Brawl
  ','Speed Brawl é uma mistura de corrida e combate em 2D onde é preciso ser rápido e bater forte! Mantenha o ritmo, faça sequências e solte poderes especiais devastadores. Descubra seu estilo de luta e reúna a melhor equipe de lutadores já vista. Depois faça tudo de novo mais rápido... e mais rápido... E MAIS RÁPIDO!!!

  ','R$37,99','https://store.steampowered.com/app/468670/Speed_Brawl/');

  card('./imagens/Luta6.jpg','KOF XV
  ','The King of Fighters XV, também chamado de KOF XV, é o mais novo capítulo na Saga Shunei e ocorre logo após os eventos de The King of Fighters XIV; a narrativa gira principalmente em torno de dois lutadores com poderes sobrenaturais, Shunei e Isla, entre outros personagens que retornam enfrentando ameaças revividas.11 de fev. de 2022
  ','R$60,39
  ','https://store.steampowered.com/app/1498570/THE_KING_OF_FIGHTERS_XV/');
}

?>