@extends('layout.site')

@section('title')
    Cadastro
@endsection

@section('content')

    <main id="main">
        <section id="login">
            <div class="login">
                <form class="login-form-container" action="{{ route('publicStore') }}" method="POST">
                    <img class="login-logo" src="{{ asset('/assets/img/LogoCompleta.png') }}" alt="logo">
                    @csrf

                    <!-- pag 1 -->
                    <div id="step_1" class="step">
                        <div class="form-group">
                            <input type="name" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="c-password" name="c-password" placeholder="Confirme sua senha">
                        </div>
                    </div>

                    <!-- pag 2 -->
                    <div id="step_2" class="step">
                        <div class="form-group">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="profissao" name="profession" placeholder="Profissão">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="mstatus" id="estado-civil">
                                <option value="" disabled selected>Estado Civil</option>
                                <option value="Solteiro (a)">Solteiro (a)</option>
                                <option value="Casado (a)">Casado (a)</option>
                                <option value="Divorciado (a)">Divorciado (a)</option>
                                <option value="Viúvo (a)">Viúvo (a)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                        </div>
                    </div>

                    <!-- pag 3 -->
                    <div id="step_3" class="step">
                        <div class="form-group">
                            <input type="text" class="form-control" id="naturalidade" name="naturality" placeholder="Naturalidade">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="rg" name="rg" placeholder="RG">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="orgaoex" name="orgRG" placeholder="Orgão expedidor">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-zip_code" name="zip_code" placeholder="CEP">
                        </div>
                    </div>

                    <!-- pag 4 -->
                    <div id="step_4" class="step">
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-addrs" name="addrs" placeholder="Logradouro">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-ngbh" name="ngbh" placeholder="Bairro">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-state" name="state" placeholder="Estado">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-city" name="city" placeholder="Cidade">
                        </div>
                    </div>

                    <div id="step_4" class="step">
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-country" name="country" placeholder="Pais">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-nmbr" name="nmbr" placeholder="Número">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input-cmplt" name="cmplt" placeholder="Complemento">
                        </div>
                    </div>

                    <!-- button -->
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: center; gap: 16px;">
                        <button type="submit" id="submit" class="btn btn-primary">CONCLUIR CADASTRO</button>
                    </div>
                </form>
                <div style="display: flex; justify-content: center; margin-top: 30px">
                    <button id="back" class="next btn btn-primary" onclick="anteriorPrev()">
                        <span class="material-symbols-outlined">arrow_back</span>
                    </button>
                    <button id="next" class="next btn btn-primary" onclick="nextPrev()">
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>

                <div class="cadastre-se-2">
                    <h2>Já possui uma conta?</h2>
                    <a href="{{ route('cadastro') }}">IR AO LOGIN</a>
                </div>
            </div>
            <div class="cadastre-se">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <img class="orange-square triangle" src="{{ asset('/assets/img/triangle.svg') }}" alt="triangle">
                </div>
                <div class="cadastro-container">
                    <div>
                        <h2 class="cadastre-se-title">Já possui uma conta?</h2>
                        <p class="cadastre-se-text">Faça login clicando no botão abaixo!</p>
                    </div>
                    <div>
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-primary">IR AO LOGIN</button>
                        </a>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-end; justify-content: flex-end;">
                    <img class="blue-square square-2" src="{{ asset('/assets/img/square-2.svg') }}" alt="square-2">
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <script>
        $(document).on("keydown", "form", function(event){
            var nextB = document.getElementById("next");
            var submitB = document.getElementById("submit");

            if (event.key == "Enter"){
                if(nextB !== null && nextB.style.display === "block"){
                    nextPrev();
                    return false;
                }
            }
        });
    </script>

@endsection