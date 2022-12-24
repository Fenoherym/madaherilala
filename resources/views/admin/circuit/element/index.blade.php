@extends('admin.app')
@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif

    <a href="{{ route('admin.circuit.element.create', $circuit->id) }}" class="mb-3"><button class="btn btn-success mb-3"><i
                class="fa fa-plus"></i>
            Ajouter un element pour ce circuit</button></a>

    @include('admin.circuit.element.includes.create')
    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
        @if (count($circuit->point_forts) != 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Point Fort</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($circuit->point_forts as $point_fort)
                        <tr>
                            <td>{{ $point_fort->name }}</td>
                            <td>
                                <a href="{{ route('admin.circuit.points.destroy', $point_fort->id) }}"><button
                                        class="btn btn-danger mb-3"><i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-secondary">
                Aucuns points fotrts
            </div>
        @endif
    </div>

    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
        @if (count($circuit->circuit_elements) != 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Rang</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($circuit_elements as $circuit_element)
                        <tr>
                            <td>{{ $circuit_element->title }}</td>
                            <td>{!! $circuit_element->description !!}</td>
                            <td>{{ $circuit_element->rang }}</td>
                            <td>
                                <a href="{{ route('admin.circuit.element.destroy', $circuit_element->id) }}"><button
                                        class="btn btn-danger mb-3"><i class="fa fa-trash"></i></button></a>
                                <a href="{{ route('admin.circuit.element.edit', $circuit_element->id) }}"><button
                                        class="btn btn-primary mb-3"><i class="fa fa-edit"></i></button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-secondary">
                Aucuns éléments
            </div>
        @endif
    </div>
@endsection
