<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
</head>
<body>
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <h2>Dashboard di tutti i percorsi</h2>
        <div class="card shadow">
          <div class="card-header d-flex justify-content-between align-items-center">
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Aggiungi percorso</button>
                <a class="btn btn-primary" href="/login" role="button">Accedi</a>
          </div>
          <div class="card-body" id="show_all_employees">
            <h1 class="text-center text-secondary my-5">Attendi...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- new employee modal --}}
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aggiungi percorso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
            <div class="col-lg">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
            <div class="col-lg">
                <label for="tipologia">Tipologia</label>
                <input type="text" name="tipologia" class="form-control" placeholder="Tipologia" required>
            </div>
            <div class="my-2">
              <label for="durata">Durata</label>
              <input type="number" name="durata" class="form-control" placeholder="Durata" required>
            </div>
            <div class="my-2">
              <label for="distanza">Distanza</label>
              <input type="number" name="distanza" class="form-control" placeholder="Distanza" required>
            </div>
            <div class="my-2">
              <label for="altitudine">Altitudine</label>
              <input type="number" name="altitudine" class="form-control" placeholder="Altitudine" required>
            </div>
            <div class="my-2">
              <label for="immagine">Scegli immagine</label>
              <input type="file" name="immagine" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Aggiungi percorso</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- edit employee modal --}}
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifica percorso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        <div class="modal-body p-4 bg-light">
            <div class="col-lg">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
            <div class="col-lg">
                <label for="tipologia">Tipologia</label>
                <input type="text" name="tipologia" class="form-control" placeholder="Tipologia" required>
            </div>
            <div class="my-2">
              <label for="durata">Durata</label>
              <input type="number" name="durata" class="form-control" placeholder="Durata" required>
            </div>
            <div class="my-2">
              <label for="distanza">Distanza</label>
              <input type="number" name="distanza" class="form-control" placeholder="Distanza" required>
            </div>
            <div class="my-2">
              <label for="altitudine">Altitudine</label>
              <input type="number" name="altitudine" class="form-control" placeholder="Altitudine" required>
            </div>
          <div class="my-2">
            <label for="immagine">Scegli immagine</label>
            <input type="file" name="immagine" class="form-control">
          </div>
          <div class="mt-2" id="immagine"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Aggiorna percorso</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <script src='https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(function() {

      // add new employee ajax request
      $("#add_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_employee_btn").text('Adding...');
        $.ajax({
          url: '{{ route('store') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Aggiunto!',
                'Percorso aggiunto con successo!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#add_employee_btn").text('Aggiungi percorso');
            $("#add_employee_form")[0].reset();
            $("#addEmployeeModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('edit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#nome").val(response.nome);
            $("#tipologia").val(response.tipologia);
            $("#durata").val(response.durata);
            $("#distanza").val(response.distanza);
            $("#altitudine").val(response.altitudine);
            $("#immagine").html(
              `<img src="storage/images/${response.immagine}" width="100" class="img-fluid img-thumbnail">`);
            $("#emp_id").val(response.id);
            $("#emp_avatar").val(response.immagine);
          }
        });
      });

      // update employee ajax request
      $("#edit_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_employee_btn").text('Aggiornamento...');
        $.ajax({
          url: '{{ route('update') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Aggiornato!',
                'Percorso aggiornato con successo!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Aggiorna percorso');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Sei sicuro?',
          text: "Non puoi tornare indietro se confermi!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sì, elimina il percorso!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Eliminato!',
                  'Il percorso è stato eliminato.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });

      // fetch all employees ajax request
      fetchAllEmployees();

      function fetchAllEmployees() {
        $.ajax({
          url: '{{ route('fetchAll') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_employees").html(response);
            $("table").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
  </script>
</body>
</html>
