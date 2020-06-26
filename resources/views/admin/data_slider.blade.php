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
                    <h3 class="card-title">Data Slider</h3><br/>
                    <p>
                    Note : Ukuran Gambar Diharapkan 1920 x 650 pixel Untuk Menghindari Kerusakan Tampilan Gambar Pada Web<br>
                    </p>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahSlider">Tambah Slider</button>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <table id="myTable" class="table table-striped table-bordered text-center text-nowrap" style="width:100%;">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Images</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    @foreach($sliders as $slider)
                      <tr>
                        <td>{{ $no++}}</td>
                        <td><img src="/images/sliders/{{ $slider->image }} "style=" width:100px; height:50px"</td>
                        <td>
                          <div class="btn-group btn-group-sm">
                            <a href="{{ url('admin/data_slider/delete/'.$slider->image_id) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tr></tbody>
                  </table>
                </div>
              </div>
                </div>
                </div>
                <!-- /.card -->
          </div><!-- /.container-fluid -->
    </div>

    {{-- //Modal Tambah Data --}}
    <div class="modal fade" id="tambahSlider" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="tambahSliderLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahSliderLabel">Tambah Data Slider</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.data_slider') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file mb-3">
                        <label for="image">image</label>
                        <input type="file" class="text-center center-block file-upload "name="image">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
@include('admin.app.footer')
