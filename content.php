<?php
include('protect.php');
include('bdConect.php');
?>
<!DOCTYPE html>
<html lang="pt_bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/content.css">
    <title>Página de Conteudo</title>
</head>

<body>
    <nav class="navbar">
        <img src="img/logo-meta.png" alt="logo-meta" class="logo-nav">
        <p>
            <a href="logout.php">Sair</a>
        </p>
    </nav>
    <div class="banner">
        <div class="txtBanner">
            META CORPORATE SOLUTIONS
        </div>
    </div>
    <section class="container">
        <class class="header">
            <h1 class="title">
                CONHEÇA NOSSAS SOLUÇÕES
                <div class="traco-azul"></div>
            </h1>
            <h3 class="subtitle">
                Software ERP, responsável por todas as áreas operacionais da empresa. Módulos totalmente integrados que
                correspondem à Gestão de Produção, Gestão Comercial, Gestão de Ponto de Venda, Gestão de Custos, Gestão
                Financeira e Gestão Contábil.
            </h3>
        </class>
        <class class="content">
            <div class="cards">
                <div class="card" id="card1">
                    <img src="img/logo-meta.png" alt="logo-meta" class="img-card">
                    <h1 class="title-card">Todos</h1>
                    <h3 class="subtitle-card">Veja todas as nossas soluções que irão ajudar sua empresa.</h3>
                    <button type="submit" id="btnCard" onclick="location.href='https://www.webmeta.com.br/mcs'">Saiba
                        Mais</button>

                </div>

                <div class="card" id="card2">
                    <img src="img/engrenagem-azul.png" alt="engrenagem-azul" class="img-card">
                    <h1 class="title-card">Produção</h1>
                    <h3 class="subtitle-card">Veja nossas soluções de produção que irão ajudar sua empresa.</h3>
                    <button type="submit" id="btnCard" onclick="location.href='https://www.webmeta.com.br/mcs'">Saiba
                        Mais</button>
                </div>

                <div class="card" id="card3">
                    <img src="img/aumentar.png" alt="grafico-aumentar" class="img-card">
                    <h1 class="title-card">Comercial</h1>
                    <h3 class="subtitle-card">Veja nossas soluções comerciais que irão ajudar sua empresa.</h3>
                    <button type="submit" id="btnCard" onclick="location.href='https://www.webmeta.com.br/mcs'">Saiba
                        Mais</button>
                </div>
                <div class="card" id="card4">
                    <img src="img/carrinho-de-compras.png" alt="carrinho-compras" class="img-card">
                    <h1 class="title-card">Vendas</h1>
                    <h3 class="subtitle-card">Veja nossas soluções de ponto de venda que irão ajudar sua empresa.</h3>
                    <button type="submit" id="btnCard" onclick="location.href='https://www.webmeta.com.br/mcs'">Saiba
                        Mais</button>
                </div>
                <div class="card" id="card5">
                    <img src="img/dolar.png" alt="dolar" class="img-card">
                    <h1 class="title-card">Financeiro</h1>
                    <h3 class="subtitle-card">Veja nossas soluções financeiras que irão ajudar sua empresa.</h3>
                    <button type="submit" id="btnCard" onclick="location.href='https://www.webmeta.com.br/mcs'">Saiba
                        Mais</button>
                </div>
                <div class="card" id="card6">
                    <img src="img/calculadora.png" alt="calculadora" class="img-card">
                    <h1>Contábil</h1>
                    <h3 class="subtitle-card">Veja nossas soluções contábeis que irão ajudar sua empresa.</h3>
                    <button type="submit" id="btnCard" onclick="location.href='https://www.webmeta.com.br/mcs'">Saiba
                        Mais</button>
                </div>
            </div>

        </class>
    </section>
    <footer>

        <div class="footer" align="center" style="font-size:12px"> Todos os direitos reservados ©
            <script type="text/javascript">document.write(new Date().getFullYear());</script> "Meta Tecnologia"
        </div>
    </footer>
    <div class="tawk">
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/64501ae631ebfa0fe7fb6ace/1gvcei546';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </div>
</body>

</html>