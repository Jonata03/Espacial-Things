<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/brasao ATOMO.png" type="image/x-icon">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/noticia.css">
    <title>Espacial Thing</title>
</head>

<body>
    <hearder>
        <div class="header">
            <button id="toggleBtn">&#9776</button>

            <div id="sidebar">
                <span id="closeBtn">&times;</span>
                <div class="options-box">
                    <label for="opcoes">Escolha uma opção:</label><br><br>
                    <select id="opcoes">
                        <a href="https://revistagalileu.globo.com/Cultura/noticia/2020/04/11-series-e-documentarios-da-netflix-para-aprender-mais-sobre-o-planeta-terra.html">
                            <option value="opcao1" class="option">Documentarios</option>
                        </a>
                        <a href="">
                            <option value="opcao2" class="option">Explorções Espaciais</option>
                        </a>
                        <a href="">
                            <option value="opcao3" class="option">Filmes</option>
                        </a>
                        <!-- Adicione mais opções conforme necessário -->
                    </select>
                    <a href="../contato/contatos.html">Contatos</a>
                </div>
            </div>
            <img src="img/navbar letreiro.png" alt="" class="brasao">
            </nav>
            <h1 class="title-noticias">Notícias</h1>           
            <div class="info">
                <h4><a href="#category"></a></h4>
            </div>
        </div>

    </hearder>
    <div class="body">
        <h1 class="title">Principais Noticías</h1>
        <div class="principal-news">
            <div class="">
                <a
                    href="https://www.nasa.gov/missions/webb/webb-follows-neon-signs-toward-new-thinking-on-planet-formation/">
                    <img src="img/webb sinais neon.webp" alt="" class="img-principal-news">
                    <p class="text-principal-news">Webb segue sinais de néon em direção a um novo pensamento sobre a
                        formação do planeta.</p>
                </a>
            </div>
            <div>
                <a href="https://science.nasa.gov/earth/satellite-data-can-help-limit-the-dangers-of-windblown-dust/">
                    <img src="img/dados satelite.webp" alt="" class="img-principal-news">
                    <p class="text-principal-news">Dados de satélite podem ajudar a limitar os perigos da poeira levada
                        pelo vento.</p>
                </a>
            </div>
            <div>
                <a
                    href="https://www.nasa.gov/missions/kepler/nasa-data-reveals-possible-reason-some-exoplanets-are-shrinking/">
                    <img src="img/1-neptune-artists.webp" alt="" class="img-principal-news">
                    <p class="text-principal-news">Dados da NASA revelam possível razão pela qual alguns exoplanetas
                        estão encolhendo.</p>
                </a>
            </div>
        </div>
        <div class="news-list">
            <h1 class="title">Outras Noticías</h1>

            <p class="text">Aqui voce encontra todo tipo de noticias sobre as ultimas façanhas da humanidade em relação
                ao
                universo.Fique por dentro de tudas as noticias de inscrevendo no site.</p>
            <div class="news">
                <img src="img/simulation-psi-aoollo12.webp" alt="image introduction" class="img-notice">
                <a
                    href="https://www.nasa.gov/general/rocket-exhaust-on-the-moon-nasa-supercomputers-reveal-surface-effects/">
                    <h3 class="title-news">Escape de foguete na Lua: supercomputadores da NASA revelam efeitos de
                        superfície
                    </h3>
                    <p class="introduction">A NASA, por meio do projeto Artemis, planeja explorar a Lua com módulos de
                        pouso
                        maiores e mais
                        potentes. O objetivo é estabelecer uma presença humana sustentada, exigindo compreensão
                        aprofundada
                        da
                        interação desses módulos com a superfície lunar, especialmente em áreas inexploradas.</p>
                </a>
            </div>
            <div class="news">
                <img src="img/35-lopez-chyatte-sc23-04-eic-multiple-data-points.webp" alt="image introduction"
                    class="img-notice">
                <a
                    href="https://www.nasa.gov/general/five-ways-nasa-supercomputing-takes-missions-from-concept-to-reality/">
                    <h3 class="title-news"> Cinco maneiras pelas quais a supercomputação da NASA leva as missões do
                        conceito
                        à realidade
                    </h3>
                    <p class="introduction"> A computação de ponta da NASA impulsiona missões cruciais, aprimorando
                        previsões meteorológicas globais e facilitando inovações, desde táxis aéreos urbanos até testes
                        de
                        paraquedas para pousos espaciais em outros corpos celestes, beneficiando a humanidade com
                        avanços
                        científicos e tecnológicos. </p>
                </a>
            </div>
            <div class="news">
                <img src="img/1-pia26202-perseverances-parking-spot-during-conjunction.webp"
                    alt="image introduction" class="img-notice">
                <a
                    href="https://www.nasa.gov/solar-system/planets/mars/nasas-mars-fleet-will-still-conduct-science-while-lying-low/">
                    <h3 class="title-news">A frota de Marte da NASA ainda conduzirá ciência enquanto estiver escondida.
                    </h3>
                    <p class="introduction">A NASA, por meio do projeto Artemis, planeja explorar a Lua com módulos de
                        pouso
                        maiores e mais
                        potentes. O objetivo é estabelecer uma presença humana sustentada, exigindo compreensão
                        aprofundada
                        da
                        interação desses módulos com a superfície lunar, especialmente em áreas inexploradas.</p>
                </a>
            </div>

            <h1 class="title">LIVE da extratosfera</h1>
            <p class="text">Aqui se encontra a LIVE em tempo real da estratosfera da terra 24 horas por dia</p>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/QviXe8xvA50?si=a7Ty4QG8iB5peizg"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

        </div>
    </div>



    <footer class="flex-rw">
        <ul class="footer-list-top">
            <li>
                <h4 class="footer-list-header">FRASE MOTIVACIONAL</h4>
            </li>
            <li><a href=' ' class="generic-anchor footer-list-anchor" itemprop="significantLink">"Leve o tempo que
                    for
                    pra encontrar </a></li>
            <li><a href=' ' class="generic-anchor footer-list-anchor" itemprop="significantLink">qual é a sua praia,
                    mas
                    quando encontrar, </a>
            </li>
            <li><a href=' ' class="generic-anchor footer-list-anchor" itemprop="significantLink">recue ante nenhum
                    pretesto"</a></li>

            <li><a href=' ' itemprop="significantLink" class="generic-anchor footer-list-anchor">-Zaratrusta</a>
            </li>


        </ul>
        <ul class="footer-list-top">
            <li>
                <h4 class="footer-list-header">SELEÇÕES</h4>
            </li>
            <li><a href='/Angels/cat/id/70' class="generic-anchor footer-list-anchor">Imagens</a></li>
            <li><a href='/Home-Decor/cat/id/64' class="generic-anchor footer-list-anchor">HOME</a></li>
            <li><a href="https://www.youtube.com/watch?v=QviXe8xvA50" class="generic-anchor footer-list-anchor">LIVE</a>
            </li>
            <li><a href='/Pet-Lover/cat/id/108' class="generic-anchor footer-list-anchor">Missões</a></li>
            <li><a href='/Ladies-Accessories/cat/id/117' class="generic-anchor footer-list-anchor"
                    target="_blank">Documentarios</a></li>
        </ul>
        <ul class="footer-list-top">
            <li id='help'>
                <h4 class="footer-list-header">HELP ME</h4>
            </li>
            <li><a href='/shop/about-contact' target="_blank" class="generic-anchor footer-list-anchor"
                    itemprop="significantLink">Contato</a></li>
            <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a>
            </li>
            <li id='find-a-store'><a href='/shop/store-locator' class="generic-anchor footer-list-anchor"
                    itemprop="significantLink">Cadastro</a></li>
            <li id='user-registration'><a href='/shop/user-registration?URL=' class="generic-anchor footer-list-anchor"
                    itemprop="significantLink">Sobre nós</a></li>
            <li id='order-tracking'><a href='/shop/order-status' itemprop="significantLink"
                    class="generic-anchor footer-list-anchor">Início</a></li>
        </ul>

        <section class="footer-bottom-section flex-rw">
            <div class="footer-bottom-wrapper">
                <i class="fa fa-copyright" role="copyright">

                </i> Desde 2023 <address class="footer-address" role="company address">Coxim, MS</address>
            </div>
            <div class="footer-bottom-wrapper">
                <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">Terms</a> | <a
                    href="/privacy-policy.html" class="generic-anchor" rel="nofollow">Privacy</a>
            </div>
        </section>
    </footer>
</body>
<script src="js/main.js"></script>

</html>