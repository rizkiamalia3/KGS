@include('admin.app.header')
<div class="content-wrapper">
<section class="content">
    <div class="content-header">
    </div>
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Data Admin</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahAdmin">Tambah Admin</button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="table-responsive text-nowrap">
                <table id="myTable" class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Admin</th>
                    <th>Email</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data_admin as $admin)
                  <tr>
                    <td>{{ $admin->admin_id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{ url('admin/data_admin/'.$admin->admin_id.'/delete') }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tr></tbody>
              </table>
            </div>
              </form>
            </div>
            </div>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
</div>

//Modal Tambah Data
<div class="modal fade" id="tambahAdmin" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="tambahAdminLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahAdminLabel">Tambah Data Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.tambah_data_admin') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Admin</label>
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

@include('admin.app.footer')
