@extends('layout.site')

@section('title')
    Login
@endsection

@section('content')

    <main id="main">
        <section id="login">
            <div class="login">
                <form class="login-form-container" action="{{ route('login') }}" method="POST">
                    <img class="login-logo" src="{{ asset('/assets/img/LogoCompleta.png') }}" alt="logo">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                    </div>
                    <div class="form-group" style="display: flex; flex-direction: column; align-items: center; gap: 16px;">
                        <button type="submit" class="btn btn-primary">FAZER LOGIN</button>
                        <a class="esqueci" href="{{ route('password.request') }}">Esqueci a senha</a>
                    </div>
                </form>
                <div  class="cadastre-se-2">
                    <h2>Ainda não é cliente?</h2>
                    <a href="{{ route('cadastro') }}">CADASTRE-SE</a>
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