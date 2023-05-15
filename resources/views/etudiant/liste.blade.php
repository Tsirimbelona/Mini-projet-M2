    @extends('base')

    @section('title', 'Liste')

    @section('content')

        <div class="container text-center">

            <div class="row">

                <div class="col s12">
                    <h1>CRUD IN LARAVEL 10</h1>
                    <hr>
                    <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
                    <hr>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Classe</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $ide = 1;
                            @endphp
                            @foreach ($etudiants as $etudiant)
                                <tr>
                                    <td>{{ $ide }}</td>
                                    <td>{{ $etudiant->nom }}</td>
                                    <td>{{ $etudiant->prenom }}</td>
                                    <td>{{ $etudiant->classe }}</td>
                                    <td>
                                        <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-info">Update</a>
                                        <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @php
                                    $ide += 1;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    @endsection
