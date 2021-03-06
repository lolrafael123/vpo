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
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="images/faveicon.ico" >
</head>
<header>
    <title>VPO - Validação de provas online</title>
</header>
                    
<body id="home">
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
            <div class="spinner-layer spinner-red">
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

            <div class="spinner-layer spinner-yellow">
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

            <div class="spinner-layer spinner-green">
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
    <div class="navbar-fixed">
        <nav class="transparent z-depth-0 nav" id="navbar">
            <div class="nav-wrapper">
                <a href="#login" class="brand-logo">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                 <img src="images/logo.png">
            </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#Projeto">Projeto</a></li>
                    <li><a href="#Sobre">Sobre nós</a></li>
                    <li><a href="#Contato">Contato</a></li>
                    <li><a href="register" class="waves-effect waves-light btn red hoverable">Registrar-se</a></li>
                </ul>
            </div>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="#Projeto">Projeto</a></li>
                <li><a href="#Sobre">Sobre nós</a></li>
                <li><a href="#Contato">Contato</a></li>
                <li><a href="register" class="waves-effect waves-light btn red hoverable">Registrar-se</a></li>
            </ul>
        </nav>
    </div>

    <br /><br /><br />
    <!-- Parallax e login -->
    <main>
        <div class="parallax-container scrollspy" id="login">
            <!-- Parte de login -->
            <div class="container">
                <section class=section-hero>
                    <div class="row top-lg">
                        <div class="col l6 m12">

                        </div>
                        <div class="col l5 offset-l1 m12">
                            <div class="card hoverable top-md animated_delay_1">
                                <div class="card-content card-spaced">
                                    <h3 class="center">Login</h3>
                                    <div class="row top-md">
                                         <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}

                                            <div class=row>
                                                <div class="input-field col m4 l8"> <input class="validate" name="email" type="text" required>
                                                    <label for="first_name">E-mail <i class="material-icons right">account_circle</i></label>

                                                </div>
                                                <div class=row>
                                                    <div class="input-field col m4 l8"> <input class="validate" name="password" type="password" required>
                                                        <label for="email">Senha <i class="material-icons right">lock</i></label>
                                                    </div>
                                                </div> <button class="btn btn-large btn-block blue waves-effect waves-light indigo darken-4"
                                                    name="action" type="submit" >Entrar <i class="material-icons right">send</i></button>                                                &nbsp
                                                <a class="red-text text-red" href="#">Esqueceu a senha?</a>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                </div>
                <!-- fim da parte de login -->
                <div class="parallax"><img src="../../public/images/logo2.jpg"></div>
            </div>

    </main>
    <!-- Fim Parallax e login -->



    <!-- vídeo -->
    <div class="section  red darken-4 section scrollspy" id="Projeto">
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <div class="container">
                        <center>
                            <i class="white-text medium material-icons">watch_later</i>
                        </center>
                    </div>
                    <p align="justify" class="white-text">Aqui em nosso website seu tempo também é valorizado!</p>
                        
                </div>
                <div class="col s4">
                   
                </div>
                <div class="col s4">
                    <div class="container">
                        <center>
                            <i class="white-text medium material-icons  ">monetization_on</i>
                        </center>
                    </div>
                    <p align="justify" class="white-text">Poupamos o gasto das impressões de provas, economizando para investir em outros setores da instituição!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <div class="container">
                        <center>
                            <i class="white-text medium material-icons">laptop_mac</i>
                        </center>
                    </div>
                    <p align="justify" class="white-text">Você pode acessar em qualquer computador mesmo se não estiver na escola!</p>
                </div>
                <div class="col s4">
                    <video class="materialboxed container" width="650" controls>
                        <source src="vídeos/temer.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col s4">
                    <div class="container">
                        <center>
                            <i class="white-text medium material-icons ">help</i>
                        </center>
                    </div>
                    <p align="justify" class="white-text">Nele você valida suas avaliações online e vê suas menções.</p>
                </div>
                <div class="row">
                    <div class="col s4">
                        <div class="container">
                            <center>
                                <i class="white-text medium material-icons ">flight_takeoff</i>
                            </center>
                        </div>
                        <p align="justify" class="white-text">Além de tudo, disponibilizamos a nota da sua avaliação a qualquer momento!</p>
                    </div>
                    <div class="col s4">
                    
                    </div>
                    <div class="col s4">
                        <div class="container">
                        <center>
                            <i class="white-text medium material-icons ">public</i>
                        </center>
                        </div>
                        <p align="justify" class="white-text">Um website que visa diminuir o gasto de papel e assim proporcionando a preservação do nosso planeta!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- fim vídeo -->



    <!-- parallax 2 -->
    <div class="parallax-container">
        <div class="parallax"><img src="images/pexe4.jpg"></div>
    </div>
    <!-- fim do parallax 2 -->

    <!-- sobre nós -->
    <div class="section white section scrollspy" id="Sobre">
        <div class="row">
            <div class="col s4">
            </div>
            <div class="col s4">
                <center>
                    <h2>Sobre Nós</h2>
                </center>
            </div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <div class="col s4">
            </div>
        </div>
        <div id="card">
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/sol.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Gabriel Bazani</span>
                            </div>
                            <div class="card-content">
                                <p>17 anos, Escritor</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/duda.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Eduarda Bueno</span>
                            </div>
                            <div class="card-content">
                                <p>17 anos, Escritora</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/nicolas.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Nicolas Marques</span>
                            </div>
                            <div class="card-content">
                                <p>17 anos, Database Engineer/Escritor</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/pedro.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Pedro Souza</span>
                            </div>
                            <div class="card-content">
                                <p>18 anos, Programador/Escritor</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/brunna.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Brunna Fais</span>
                            </div>
                            <div class="card-content">
                                <p>17 anos, Escritora</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/rafa.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Rafael Antunes</span>
                            </div>
                            <div class="card-content">
                                <p>17 anos, Designer/Programador</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s2"></div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/anna.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Julia Fagundes</span>
                            </div>
                            <div class="card-content">
                                <p>17 anos, Escritora</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card hoverable">
                            <div class="card-image">
                                <img src="images/fotos/luiz.jpg">
                                <span <a class="btn-floating btn-large halfway-fab red activator"><i class="material-icons">add</i></a></span>
                            </div>
                            <div class="card-content">
                                <span class="card-title">Luiz Gabriel</span>
                            </div>
                            <div class="card-content">
                                <p>18 anos, Programador/Escritor</p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Redes Sociais<i class="material-icons right">close</i></span><br
                                />
                                <ul>
                                    <li>
                                        <a class="blue waves-effect waves-light btn-floating btn-large social twitter">
                                            <i class="fa fa-twitter"></i></a>&nbsp<i>Twitter</i>
                                    </li><br />
                                    <li>
                                        <a class="blue darken-4 waves-effect waves-light btn-floating btn-large social facebook">
                                            <i class="fa fa-facebook"></i></a>&nbsp<i>Facebook</i>
                                    </li><br />
                                    <li>
                                        <a class="red waves-effect waves-light btn-floating btn-large social google">
                                            <i class="fa fa-google"></i></a>&nbsp<i>Gmail</i>
                                    </li><br />
                                    <li>
                                        <a class="pink waves-effect waves-light btn-floating btn-large social instagram">
                                            <i class="fa fa-instagram"></i></a>&nbsp<i>Instagram</i>
                                    </li><br />

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- fim sobre nós-->

    <!-- parallax 3 -->
    <div class="parallax-container">
        <div class="parallax"><img src="images/pexe5.jpg"></div>
    </div>

    <!-- fim parallax 3-->

    <!-- contato -->
    <div class="section indigo darken-4 section scrollspy" id="Contato">
    <form action="/enviar" method="post">
        {{ csrf_field() }}
       
            <div class="container">
                <div class="row">
                    <center>
                        <h2 class="white-text">Contato</h2><br />
                    </center>
                    <div class="col s6">
                        <div class="row">
                            <div class="input-field col s6 white-text">
                                <input id="" type="text" class="validate" name="nome" required>
                                <label for="">Nome</label>
                            </div>
                            <div class="input-field col s6 white-text">
                                <input id="" type="text" class="validate" name="sobrenome" required>
                                <label for="">Sobrenome</label>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <div class="input-field col s12 grey-text">
                                        <select name="assunto" required>
                                        <option value="" disabled selected>Assunto</option>
                                        <option value="Reclamação">Reclamação</option>
                                        <option value="Crítica">Crítica</option>
                                        <option value="Dúvida">Dúvida</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6 white-text">
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email" data-error="Incorreto!" data-success="Certo!">Email</label>
                    </div>
                </div>



                <div class="row">
                    <div class="input-field col s6">
                        <textarea id="textarea1" class="materialize-textarea white-text validate" name="mensagem" required></textarea>
                        <label for="textarea1">Mensagem</label><br>
                        <button class="red darken-4 btn-large waves-effect waves-light btn"  onclick="Materialize.toast('E-mail enviado com sucesso', 4000,'',function(){alert('Seu e-mail foi enviado!')})" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
            <br /><br />
            <div class="container">
                <div class="row">
                    <div class="col s6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.0259519134239!2d-46.95103828801451!3d-22.425118347243867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8f85011dea2dd%3A0x22b471946d92ea48!2sEscola+T%C3%A9cnica+Estadual+Pedro+Ferreira+Alves!5e0!3m2!1spt-BR!2sbr!4v1502994094819"
                            width="1000" height="450" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    </div>
    <!-- fim do contato -->

    <!-- rodapé -->
    <footer class="page-footer  red darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Sobre VPO</h5>
                    <p class="grey-text text-lighten-4">Um website funcional que valida provas online.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Conecte-se</h5>
                    <ul>
                        <li><a class="waves-effect waves-light btn social facebook indigo" target="_blank"  href="https://www.facebook.com/VPO-Valida%C3%A7%C3%A3o-de-provas-online-377288179380033/">
                                <i class="fa fa-facebook"></i>&nbsp Siga-nos no Facebook
                            </a>
                        </li><br>
                        <li><a class="waves-effect waves-light btn social twitter blue">
                                <i class="fa fa-twitter"></i>&nbsp Siga-nos no twitter &nbsp 
                            </a>
                        </li><br>
                        <li><a class="red waves-effect waves-light btn social google">
                                <i class="fa fa-google"></i>&nbsp Siga-nos no google + 
                            </a>
                        </li><br>
                        <li><a class="grey darken-4 waves-effect waves-light btn social github">
                                <i class="fa fa-github"></i>&nbsp Siga-nos no github &nbsp  &ensp;
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Copyright VPO - Validação de provas online
                
            </div>
        </div>
    </footer>
    <!-- fim do rodapé-->

    <!--Import jQuery before materialize.js-->
    


    <!-- script do parallax -->
    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });

        function callParallax() {
            $('.parallax').parallax();
        }

        window.load = callParallax();
    </script>
    <!-- fim do script do parallax -->

    <!-- efeito do botão -->
    <script>
        $('.fixed-action-btn').openFAB();
        $('.fixed-action-btn').closeFAB();
        $('.fixed-action-btn.toolbar').openToolbar();
        $('.fixed-action-btn.toolbar').closeToolbar();
    </script>
    <!-- fim efeito botão -->

    <!-- select -->
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
    <!-- fim do select -->

    <!-- scrollfire -->
    <script>
        var options = [{
            selector: '#card',
            offset: 0,
            callback: function (el) {
                Materialize.fadeInImage($(el));
            }
        }];
        Materialize.scrollFire(options);
    </script>
    <!-- fim scrollfire-->

    <!-- scroll-->
    <script>
        $(document).ready(function () {
            $('.scrollspy').scrollSpy();
        });
    </script>

    <!-- fim scroll-->

    <!-- navbar efeito -->
    <script>
        window.onscroll = () => {
            const nav = document.querySelector('#navbar');
            if (this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
        };
    </script>
    <!-- fim navbar efeito -->

    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('.preloader-background').delay(1700).fadeOut('slow');

            $('.preloader-wrapper')
                .delay(1700)
                .fadeOut();
        });
    </script>

    

</body>

</html>

              