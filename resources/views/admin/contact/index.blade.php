@extends('admin.app')

@section('content')
    <div class="container col-md-6">
        @error('telephone')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
        <div class="card p-3">
            <div class="d-flex justify-content-center">
                <div class="content">
                    @foreach ($contacts as $contact)
                        @if ($contact->adresse != null)
                            <p><i class="fa-solid fa-location-dot"></i> {{ $contact->adresse }}</p>
                        @endif
                        <p><i class="fa fa-phone"></i> {{ $contact->telephone }}</p>
                        @if ($contact->email != null)
                            <p><i class="fa-solid fa-envelope"></i> {{ $contact->email }}</p>
                        @endif
                        @include('admin.contact.icludes.update')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
