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
      <th scope="col">Nr telefonu</th>
      <th scope="col">Adres e-mail</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <button class="btn btn-sm btn-danger userdeletebtn" data-id="{{ $user->id }}">X</button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
      {{ $users->links() }}
  </ul>
</nav>
@endsection

@section('javascript')
$(function() {
    $('.userdeletebtn').click(function() {
        $.ajax({
          method: "DELETE",
          url: "/users/" + $(this).data("id"),
          // data: { id: $(this).data("id") }
        })
        .done(function(response){
          window.location.reload();
        })
        .fail(function(response){
          alert("Error: ");
        })
    });
});
@endsection