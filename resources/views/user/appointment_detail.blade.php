@include('layouts.app_dash')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{ url('user/history') }}" class="btn btn-pink"><i class="fa fa-arrow-left"></i> Back</a>
            <hr>
        </div>
        <form class="form" action="{{ url('user/history/$id') }}" method="POST">
            @csrf
        <div class="col-md-12">
            <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">
                    @foreach($apps as $app)
                    @if($app->status == 1)
                    <h5>
                        Diharapkan Untuk Mengkonfirmasi Reservasi Sebagai Informasi Kehadiran<br/>
                        Batas Waktu Konfirmasi <strong>H-1</strong> Dari Tanggal Reservasi<br/>
                        Jika Melewati Batas Waktu Reservasi Maka Reservasi Akan Terhapus<hr>
                    </h5>
                    @endif
                    @endforeach
                </div>
            </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No Antri</th>
                                <th>Tanggal Reservasi</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointment_details as $appointment_detail)
                            <tr>
                                <td>{{ $appointment_detail->no_antri }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment_detail->tgl_antri)->format('d F Y')}}</>
                                <td>
                                    @if($appointment_detail->status == 1)
                                    Sudah Reservasi Namun Belum Konfirmasi
                                    @elseif($appointment_detail->status == 2)
                                    Sudah Konfirmasi
                                    @else
                                    Reservasi Selesai
                                    @endif
                                </td>
                                <td>
                                    @if($appointment_detail->status == 1)
                                    <a href="{{ url('user/history/confirm') }}/{{ $appointment_detail->id }}" class="btn btn-blue"><i class="fa fa-info"></i> Confirm</a>
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
<div class ="container">
    <div class="row">
        <div class="col-md-12">
            <table>
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($appointment_details as $appointment_detail)
                        <td>
                        <div class="text-center" style="margin-left: 1.5cm;">
                            <img src="{{ url('/template/images/logo.png') }}" class="card-img" alt="..." style="width: 75%; height:auto;">
                            @if($appointment_detail->status == 1)
                            <h3>Anda Belum Melakukan Konfirmasi</h3>
                            @elseif($appointment_detail->status == 2)
                            <h3>Bukti Reservasi</h3>
                            <h4>No Antri</h4>
                            <h5><strong>{{ $appointment_detail->no_antri }}</strong></h5>
                            <p>Tanggal Periksa : {{ \Carbon\Carbon::parse($appointment_detail->tgl_antri)->format('d F Y')}}</p>
                            @else
                            <h3>Reservasi Sudah Selesai</h3>
                            <h5>Terima Kasih...</h5>
                            @endif
                        </div>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
