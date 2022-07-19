@extends('layout.site')

@section('title')
    Recuperar Senha
@endsection

@section('content')

    <main id="main">
        <section id="login">
            <div class="login">
                <form class="login-form-container" action="{{ route('login') }}" method="POST">
                    <img class="login-logo" src="{{ asset('/assets/img/LogoCompleta.png') }}" alt="logo">
                    @csrf
                    <!-- pag 1 -->
                    <div id="step_1" class="step">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu Email">
                        </div>
                    </div>

                    <!-- pag 2 -->
                    <div id="step_2" class="step">
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Redefinição de senha">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-2" name="password" placeholder="Repita a senha">
                        </div>
                    </div>

                    <!-- button -->
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: center; gap: 16px;">
                        <button type="submit" id="submit" class="btn btn-primary">ENVIAR EMAIL</button>
                    </div>
                </form>
                <div style="display: flex; justify-content: center; margin-top: 30px">
                    <button id="next" class="next btn btn-primary" onclick="nextPrev(1)" style="margin-bottom: 50px">PROSSEGUIR</button>
                </div>

            </div>
            <div class="cadastre-se">
                <div style="display: flex; justify-content: flex-end;">
                    <img class="orange-square" src="{{ asset('/assets/img/orange-square.svg') }}" alt="orange-square">
                </div>
                <div class="cadastro-container">
                    <div>
                        <h2 class="cadastre-se-title">Ainda não é cliente?</h2>
                        <p class="cadastre-se-text">Cadastre-se já clicando no botão abaixo!</p>
                    </div>
                    <div>
                        <a href="{{ route('cadastro') }}">
                            <button type="button" class="btn btn-primary">CADASTRE-SE</button>
                        </a>
                    </div>
                </div>
                <div>
                    <img class="blue-square" src="{{ asset('/assets/img/blue-square.svg') }}" alt="blue-square">
                </div>
            </div>
        </section>
    </main>

@endsection