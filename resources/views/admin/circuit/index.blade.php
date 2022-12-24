@extends('admin.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    @include('admin.circuit.includes.add-circuit')
    @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('photoUrl')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
        @if (count($circuits) != 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cicuit</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($circuits as $circuit)
                        <tr>
                            <td>{{ $circuit->name }}</td>
                            <td>

                                <a href="{{ route('admin.circuit.element.index', $circuit->id) }}">
                                    <button class="btn btn-warning mb-2">
                                        Gérer
                                    </button></a>
                                <a href="{{ route('admin.circuit.destroy', $circuit->id) }}"><button
                                        class="btn btn-danger mb-2"><i class="fa fa-trash"></i> </button></a>
                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal"
                                    data-target="#editModal{{ $circuit->id }}"><i class="fa fa-edit"></i> </button>
                                @include('admin.circuit.includes.update')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-secondary">
                Aucuns circuits
            </div>
        @endif
    </div>
@endsection
