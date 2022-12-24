@extends('admin.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    @if (\Session::has('error'))
        <div class="alert alert-success">
            {!! \Session::get('error') !!}
        </div>
    @endif
    @error('password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('old_password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('confirm_password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="dashboard">
        <div class="row mb-2">
            <div class="col-md-4">
                <div style="color: #8826eb;"
                    class="card p-4 py-3 d-flex justify-content-center align-items-center shadow-sm bg-white rounded">
                    <p class="text-center">VISITEURS DU MOIS: {{ $visiteur_mois->count() }}</p>
                    <i class="fa fa-users"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div style="color: #26deeb;"
                    class="card p-4 py-3 d-flex justify-content-center align-items-center shadow-sm mb-5 bg-white rounded">
                    <p class="text-center">CONSULTATIONS DU MOIS: {{ $sessions->count() }}</p>
                    <i class="fa fa-users"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div style="color: #26eb33;"
                    class="card p-4 py-3 d-flex justify-content-center align-items-center shadow-sm mb-5 bg-white rounded">
                    <p class="text-center">TOTAL VISITEURS: {{ $visiteurs->count() }}</p>
                    <i class="fa fa-users"></i>
                </div>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <form action="{{ route('reset') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success"><i class="fa fa-power-off"></i> Remettre les compteurs à
                        0 </button>
                </form>
            </div>
            <div class="col-md-2">
                @include('admin.dashboard.includes.update-profil')
            </div>
            <div class="col-md-3">
                @include('admin.dashboard.includes.update-password')
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm mb-5 bg-white rounded">
                    <div class="card-header bg-secondary text-white">
                        Message
                    </div>
                    <div class="card-body p-3">
                        @if (count($messages) != 0)
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr>
                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ substr($message->content, 0, 50) . ' ... ' }}</td>
                                                <td>
                                                    @include('admin.dashboard.includes.show-message')
                                                    <a href="{{ route('admin.message.destroy', $message->id) }}"><button
                                                            class="btn btn-danger mb-2">Supprimer</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-secondary">
                                Vous n'avez aucun message
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm mb-5 bg-white rounded">
                    <div class="card-header bg-secondary text-white">
                        Pays du 10 derniers visiteurs
                    </div>
                    <div class="card-body p-3">
                        @if (count($last_visiteurs) != 0)
                            <ul>
                                @foreach ($last_visiteurs as $visiteur)
                                    @if ($visiteur->country == null)
                                        <li class="text-center">inconnu</li>
                                    @else
                                        <li class="text-center">{{ $visiteur->country }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        @else
                            <div class="alert alert-secondary">
                                Vous n'avez aucun visiteurs
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
