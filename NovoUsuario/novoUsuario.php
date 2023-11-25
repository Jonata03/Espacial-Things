<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/brasao ATOMO.png" type="image/x-icon">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="newUser.css">
    <title>Novo Usuario</title>
</head>

<body>
    <hearder>
        <div class="header">
            <img src="../assets/img/navbar letreiro.png" alt="" class="brasao">
            <h1 id="newUser">Novo Usuario</h1>
            <div id="none2">
                <div class="none"></div>
                
                <div class="window"> 
                    <form action="../sistema/cad.php" method="POST">
                        <input type="hidden" name="acao" value="cadastrar">
                        <div class="campos">
                            <label for="">Nome-Usuario</label><br>
                            <input type="text" placeholder="Nome" name="nome" required><br>
                        </div>

                        <div class="campos">
                            <label for="">E-Mail</label><br>
                            <input type="email" placeholder="E-Mail" name="email" required><br>
                        </div>

                        <div class="campos">
                            <label for="">Senha</label><br>
                            <input type="password" placeholder="Senha" name="senha" required>
                        </div>
                        <div class="buttons">
                            
                            <button id="btn-cadastrar">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <a href="../index.php" class="btn-login"><button>Login</button></a>
                <div class="none"></div>
            </div>
        </div>
    </hearder>

    <footer class="flex-rw">
        <ul class="footer-list-top">
            <li>
                <h4 class="footer-list-header">FRASE MOTIVACIONAL</h4>
            </li>
            <li><a href=' ' class="generic-anchor footer-list-anchor" itemprop="significantLink">"Leve o tempo que for
                    pra encontrar </a></li>
            <li><a href=' ' class="generic-anchor footer-list-anchor" itemprop="significantLink">qual é a sua praia,mas
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
            <li><a href='/index.html' class="generic-anchor footer-list-anchor">HOME</a></li>
            <li><a href='/Mugs/cat/id/32' class="generic-anchor footer-list-anchor">LIVE</a></li>
            <li><a href='/Pet-Lover/cat/id/108' class="generic-anchor footer-list-anchor">Missões</a></li>
            <li><a href='/Ladies-Accessories/cat/id/117' class="generic-anchor footer-list-anchor"
                    target="_blank">Documentarios</a></li>
        </ul>
        <ul class="footer-list-top">
            <li id='help'>
                <h4 class="footer-list-header">HELP ME</h4>
            </li>
            <li><a href='/shop/about-contact' class="generic-anchor footer-list-anchor"
                    itemprop="significantLink">Contato</a></li>
            <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a>
            </li>
            <li id='find-a-store'><a href='/shop/store-locator' class="generic-anchor footer-list-anchor"
                    itemprop="significantLink">Cadastro</a></li>
            <li id='user-registration'><a href='/shop/user-registration?URL=' class="generic-anchor footer-list-anchor"
                    itemprop="significantLink">Sobre nós</a></li>
            <li id='order-tracking'><a href='../index.html' itemprop="significantLink"
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
<script src="newUserMain.js"></script>

</html>