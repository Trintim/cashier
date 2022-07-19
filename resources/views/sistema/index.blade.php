@extends('layout.site')

@section('title')
    Home
@endsection

@section('content')

    <!-- Whatsapp Button -->
    @include('layout.whatsapp')

    <main id="main">
        <section id="landing">
            <div>
                <div class="text">
                    <h1 class="main-title">Mostrar o caminho é o que nos move.</h1>
                    <p class="main-text">A Plataforma Domani oferece soluções para todos que querem ingressar no mercado internacional. Ajudamos exportadores e importadores a implementar suas ideias para o comércio exterior.</p>
                    <div class="btns" style="display: flex;">
                        <a href="{{ route('cadastro') }}">
                            <button type="button" class="main-btn btn btn-primary">CADASTRE-SE</button>
                        </a>
                        <a href="#solucoes">
                            <button type="button" class="main-btn btn btn-primary">NOSSAS SOLUÇÕES</button>
                        </a>
                    </div>
                </div>
                <div>
                    <img class="bg-img-m" src="{{ asset('/assets/img/background_mobile.svg') }}" alt="background">
                    <img class="bg-img" src="{{ asset('/assets/img/background.png') }}" alt="background">
                </div>
            </div>
        </section>
        <section id="solucoes">
            <img class="solucoes-dkt" src="{{ asset('/assets/img/solucoes-bg.svg') }}"  alt="solucoes-background">
            <img class="solucoes-mb" src="{{ asset('/assets/img/solucoes-mobile.svg') }}"  alt="solucoes-background-mobile">
            {{-- <div class="container">
                <div class="solucoes-container">

                </div>
            </div> --}}
        </section>
    </main>

@endsection