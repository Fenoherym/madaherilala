@extends('app')

@section('content')
    <div class="circuit-page" style="margin-top: 100px; margin-bottom:100px;">
        <h3 class="title">Nos Circuits</h3>
        <div class="row mx-auto mt-3">
            @foreach ($circuits as $circuit)
                <div class="col-lg-4">
                    <div class="card mb-2" style="width: 21rem;">
                        <a href="{{ route('circuit.show', $circuit->id) }}"><img src="{{ Storage::url($circuit->photoUrl) }}"
                                class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text title"><a
                                    href="{{ route('circuit.show', $circuit->id) }}">{{ $circuit->name }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
