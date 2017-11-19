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

    <link rel="shortcut icon" href="images/faveicon.ico" >
</head>
<header>
    <title>VPO - Registro</title>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                <center>
                    <div class="row">
                        <div class="input-field col s12 center">
                            <h4>Registro</h4>
                            <p class="center">Cadastre-se como aluno ou professor!</p>
                        </div>
                    </div>
                </center>

   
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_outline</i>
                        <input id="name" name="name" type="text" class="validate" value="{{ old('name') }}" required>
                        
                        <label>Username</label>
                       
                    </div>
                </div>

            

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email" data-error="Incorreto!" data-success="Certo!">Email</label>
                    </div>
                </div>
               
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" name="password" type="password" required>
                        <label>Senha</label>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password-confirm" type="password" name="password_confirmation" required> 
                        <label for="password-confirm">Confirme sua Senha</label>
                    </div>
                </div>
                
                  <div class="input-field col s12 {{ $errors->has('role') ? ' has-error' : '' }}">
                      <i class="material-icons prefix">supervisor_account</i>
                        <select  id="role" name="role" required>
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}">{{ $role }}</option>
                        @endforeach
                        </select>
                        <label for="role">Você é Aluno ou Professor?</label>
                    </div>    
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light col s12 indigo darken-4">Registrar!</button>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">Já possui uma conta? <a class="red-text" href="/login">Login</a></p>
                    </div>
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


                     

                   

       
