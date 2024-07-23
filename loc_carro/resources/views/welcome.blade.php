@extends('layouts.main')
@section('title', 'Página Inicial')

@section('content')
    <div class="container my-5" id="welcome">
        <div class="row">
            <div class="col text-center">
                <h1>Bem-vindo à <span>AlugaCar</span>!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1" id="text-welcome">
                <p class="lead">
                    Na <strong><span>AlugaCar</span></strong>, estamos comprometidos em proporcionar a você a melhor experiência de viagem. Nossa frota diversificada e moderna de veículos está pronta para atender todas as suas necessidades de locomoção, seja para negócios ou lazer.
                </p>
                <p class="lead">
                    Oferecemos uma ampla gama de carros, desde compactos econômicos até SUV's espaçosos e luxuosos, garantindo que você encontre o veículo perfeito para sua jornada. Com nossa plataforma fácil de usar, reservar um carro é rápido e conveniente.
                </p>
                <p class="lead">
                    Experimente a liberdade e a flexibilidade de explorar novos destinos com conforto e segurança. Na <strong><span>AlugaCar</span></strong>, sua satisfação é nossa prioridade. Nossa equipe de suporte está sempre disponível para ajudar, garantindo que você tenha uma experiência sem complicações do início ao fim.
                </p>
                <p class="lead" id="list">
                    <ion-icon name="return-down-forward-outline"></ion-icon> <strong class="h3">Por que escolher a <span>AlugaCar?</span></strong>
                    <ul class="list-unstyled" id="list-welcome">
                        <li class="lead"><strong>Variedade:</strong> Uma ampla seleção de veículos para todas as necessidades.</li>
                        <li class="lead"><strong>Facilidade:</strong> Processo de reserva rápido e intuitivo.</li>
                        <li class="lead"><strong>Suporte:</strong> Atendimento ao cliente disponível 24/7.</li>
                        <li class="lead"><strong>Segurança:</strong> Veículos mantidos em perfeitas condições.</li>
                        <li class="lead"><strong>Preços Competitivos:</strong> As melhores tarifas do mercado.</li>
                    </ul>
                </p>
                <p class="lead">
                    Seja qual for o seu destino, a <strong><span>AlugaCar</span></strong> está aqui para tornar sua viagem mais agradável e sem preocupações. Junte-se a nós e descubra por que somos a escolha número um em aluguel de carros.
                </p>
                <p class="text-center">
                    <a href="/cars/sample" id="btn-welcome" class="btn btn-primary btn-lg">Alugue seu carro hoje e comece sua aventura com o pé direito!</a>
                </p>
            </div>
        </div>
    </div>

@endsection
