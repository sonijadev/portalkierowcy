$(function() {
    $('.userdeletebtn').click(function() {
                  Swal.fire({
              title: "Potwierdź usunięcie",
              text: "Czy jesteś pewien, że chcesz usunąć wybranego użytkownika?",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#FF0000",
              cancelButtonColor: "#757575",
              confirmButtonText: "Tak, usuń!",
              cancelButtonText: "Nie, powrót"
            }).then((result) => {
              if (result.isConfirmed) {
                    $.ajax({
                      method: "DELETE",
                      url: deleteUrl + $(this).data("id"),
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      // data: { id: $(this).data("id") }
                    })
                    .done(function(response){
                      window.location.reload();
                    })
                    .fail(function(response){
                      Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Coś poszło nie tak!",
                        footer: 'Otrzymałeś błąd' + ' ' + response.status
                      });
                    })
              }
            });
    });
});