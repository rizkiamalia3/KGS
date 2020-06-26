@include('layouts.app_dash')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3><i class="fa fa-history"></i> Riwayat Reservasi</h3><hr>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($appointment_details as $appointment_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    @if($appointment_detail->status == 1)
                                    Sudah Reservasi Namun Belum Konfirmasi
                                    @elseif($appointment_detail->status == 2)
                                    Sudah Konfirmasi
                                    @else
                                    Reservasi Selesai Belum Konfirmasi
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('user/history') }}/{{ $appointment_detail->id }}" class="btn btn-pink"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $appointment_details->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
