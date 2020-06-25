@include('admin.app.header')
<div class="content-wrapper">
    <hr/>
    <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-14">
                <!-- general form elements -->
                <div class="card card-dark">
                  <div class="card-header">
                    <h3 class="card-title">Data Detail Reservasi</h3><br>
                    <div class="row">
                        <div class="col-md-12 mb-3 mt-3">
                            <a href="{{ url('admin/data_reservasi') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
                        </div>
                    </div>
                  </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No Antri</th>
                                <th>Tanggal Reservasi</th>
                                <th>Status</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>No Handphone</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointment_details as $appointment_detail)
                            <tr>
                                <td>
                                    {{ $appointment_detail->no_antri }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($appointment_detail->tgl_antri)->format('d F Y')}}</>
                                <td>
                                    @if($appointment_detail->status == 1 )
                                    Sudah Reservasi Namun Belum Konfirmasi
                                    @elseif($appointment_detail->status == 2 )
                                    Sudah Konfirmasi
                                    @elseif($appointment_detail->status == 3 )
                                    Reservasi Selesai
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>{{ $appointment_detail->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment_detail->tgl_lahir)->format('d F Y') }}</td>
                                <td>{{ $appointment_detail->email }}</td>
                                <td>{{ $appointment_detail->no_hp }}</td>
                                <td>
                                    @if($appointment_detail->jenis_kelamin == 1 )
                                    Laki-Laki
                                    @elseif($appointment_detail->jenis_kelamin == 2 )
                                    Perempuan
                                    @else
                                    -
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr/>
</section>



@include('admin.app.footer')
