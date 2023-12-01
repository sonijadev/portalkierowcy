@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Lista zarejestrowanych użytkowników:</h3>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Adres e-mail</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td></td>
            <td>{{ $user->email }}</td>
            <td></td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
