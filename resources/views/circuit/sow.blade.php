@extends('app')

@section('content')
    <div class="circuit-page" style="margin-top: 100px">
        <div class="container">
            <h2>CIRCUIT COTE OEUST DE MADAGASCAR</h2>
            <div class="row">
                <div class="col-md-8">
                    @if (count($circuit->point_forts) != 0)
                        <div class="point-fort">
                            <div class="p-2">
                                <h4 class="text-center">LES POINTS IMPORTANTE DE CE CIRCUIT :</h4>
                                <div class="d-flex justify-content-center">
                                    <ul>
                                        @foreach ($circuit->point_forts as $point)
                                            <li><i class="fa-solid fa-check"></i> {{ $point->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="circuit">
                        @foreach ($circuit_elements as $element)
                            <div class="py-3">
                                <h4>{{ $element->title }}</h4>
                                <p>
                                    {!! $element->description !!}
                                </p>
                            </div>
                        @endforeach

                    </div>
                    <h2>FIN de la PRESTATION </h2>
                    <p>
                        Monsieur, Madame, nous pouvons continuer l’option supplémentaire ou on part continuer au retour à
                        Antsirabe
                    </p>
                    <p>
                        <a href="/#contact">Contactez-nous </a> pour vous connaitre de devis.
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="aside card p-3 py-5">
                        @foreach ($circuits as $circuit)
                            <h6><a href="{{ route('circuit.show', $circuit->id) }}">{{ $circuit->name }}</a> </h6>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
