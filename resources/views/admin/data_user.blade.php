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
                <h3 class="card-title">Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="table-responsive ">
                <table id="myTable" class="table table-striped table-bordered text-center text-nowrap" style="width:100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                @foreach($users as $user)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <a href="{{ route('admin.user_profile',$user) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ url('admin/data_user/'.$user->user_id.'/delete') }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
@include('admin.app.footer')
