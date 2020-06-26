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
                <h3 class="card-title">Data Dokter</h3>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                data-target="#tambahDoctor">Tambah Dokter</button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered text-center text-nowrap" style="width:100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Email</th>
                    <th>Schedule</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($doctors as $doctor)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->hari_praktek }}</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{ route('admin.doctor_profile',$doctor) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ url('admin/data_doctor/'.$doctor->doctor_id.'/delete') }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
{{--  //Modal Untuk Menambah Data Doctor  --}}
<div class="modal fade" id="tambahDoctor" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="tambahDoctorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahDoctorLabel">Tambah Data Doctor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.tambah_data_doctor') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Dokter</label>
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                </div>
                <div class="form-group">
                    <label for="hari_praktek">Schedule</label>
                    <input type="hari_praktek" class="form-control{{ $errors->has('hari_praktek') ? ' is-invalid' : '' }}" name="hari_praktek" required>
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
