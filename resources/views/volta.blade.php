<!DOCTYPE html>
<html>

<head>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.css')}}" />
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
</head>
<header>
    <title>VPO - Validação de provas online</title>
</header>
<body id="register">
    <!-- preloader -->
    <div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- fim preloader -->
    <div class="row">
        <br />
        <div class="col s4 offset-s4">
        
                <center>
                    <a href="/login">
                        <img src="/images/logos.png">
                    </a>
                </center>
        </div>
        <div class="col s4 offset-s4 card-panel">
            <form>
                <center>
                    <div class="row">
                        <div class="input-field col s12 center">
                            <h3 class="center">E-mail enviado com sucesso!</h3>
                        </div>
                    </div>
                </center>
                <div class="input-field col s12">
                    <p class="margin center medium-small sign-up">Deseja voltar?<a class="red-text" href="/login">Voltar</a></p>
                </div>



            
            </form>
        </div>
    </div>
    </center>
    <br /><br>
    <!-- rodapé -->
  <footer class="page-footer  red darken-4">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5 class="white-text">Conecte-se</h5>
                    <br />
                    
                    <a class="waves-effect waves-light btn social facebook indigo" target="_blank"  href="https://www.facebook.com/VPO-Valida%C3%A7%C3%A3o-de-provas-online-377288179380033/">
                            <i class="fa fa-facebook"></i>&nbsp Siga-nos no Facebook
                    </a>
                    <a class="waves-effect waves-light btn social twitter blue">
                            <i class="fa fa-twitter"></i>&nbsp Siga-nos no twitter &nbsp 
                    </a>
                    <a class="red waves-effect waves-light btn social google">
                            <i class="fa fa-google"></i>&nbsp Siga-nos no google + &ensp;
                    </a>
                    <a class="grey darken-4 waves-effect waves-light btn social github">
                            <i class="fa fa-github"></i>&nbsp Siga-nos no github &ensp;
                    </a>
                </div>
               
            </div>
        </div> <br />
        <div class="footer-copyright">
            <div class="container">
                © 2017 Copyright VPO - Validação de provas online
            </div>
        </div>
    </footer>
    <!-- fim do rodapé-->
    <!--Import jQuery before materialize.js-->


    <!-- select -->
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
    <!-- fim do select -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('.preloader-background').delay(800).fadeOut('slow');

            $('.preloader-wrapper')
                .delay(800)
                .fadeOut();
        });
    </script>

</body>

</html>