@extends('layouts.index')

{{-- nama head --}}
@section('title', 'Users')

{{-- nama judul di halaman --}}
@section('title-page', 'Users')

{{-- Breadcrumb --}}
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">User</li>
@endsection

@section('content')

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Users</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="data-user" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Role</th>
                <th>Role</th>
              </tr>
              </thead>
              <tbody>
                <!-- Your table data goes here -->
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>Role</td>
                    <td>Role</td>
                    <td>Role</td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Role</th>
                <th>Role</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

<script>
  $(function () {
    $('#data-user').DataTable({
      info: true,
      ordering: true,
      paging: true,
      initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.footer().textContent;
 
                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);
 
                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
    }
    });
  });
</script>   

@endsection

{{-- @extends('layouts.footer') --}}
