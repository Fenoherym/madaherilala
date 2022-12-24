@extends('admin.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="container col-md-8">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <form action="{{ route('admin.circuit.element.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="circuit" name="circuit_id" value="{{ $circuit->name }}"
                        disabled>
                    <input type="text" class="form-control" id="circuit" name="circuit_id" value="{{ $circuit->id }}"
                        hidden>
                </div>
                <div class="form-group">
                    <label for="name">Titre</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="name"
                        name="title">
                    @error('title')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="rang">Rang</label>
                    <input type="number" min="0" class="form-control @error('rang') is-invalid  @enderror"
                        id="rang" name="rang">
                    @error('rang')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea style="width: 500px important;" name="description"
                        class="form-control  @error('description') is-invalid  @enderror" id="desc" rows="5"></textarea>
                    @error('description')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>
        </div>
    </div>
@endsection
@section('extra-js')
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
