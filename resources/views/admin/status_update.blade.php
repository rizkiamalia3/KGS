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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointment_details as $appointment_detail)
                            <tr>
                                <td>
                                    <form  action="{{ url('admin/data_reservasi/'.$appointment_detail->id) }}" method="POST">
                                        @csrf

                                    <select name="no_antri" id="no_antri">
                                        <option value="0" selected="selected">Select Here...</option>
                                        <option value="1" <?php if($appointment_detail->no_antri=="1") echo 'selected="selected"'; ?>>1</option>
                                        <option value="2" <?php if($appointment_detail->no_antri=="2") echo 'selected="selected"'; ?>>2</option>
                                        <option value="3" <?php if($appointment_detail->no_antri=="3") echo 'selected="selected"'; ?>>3</option>
                                        <option value="4" <?php if($appointment_detail->no_antri=="4") echo 'selected="selected"'; ?>>4</option>
                                        <option value="5" <?php if($appointment_detail->no_antri=="5") echo 'selected="selected"'; ?>>5</option>
                                        <option value="6" <?php if($appointment_detail->no_antri=="6") echo 'selected="selected"'; ?>>6</option>
                                        <option value="7" <?php if($appointment_detail->no_antri=="7") echo 'selected="selected"'; ?>>7</option>
                                        <option value="8" <?php if($appointment_detail->no_antri=="8") echo 'selected="selected"'; ?>>8</option>
                                        <option value="9" <?php if($appointment_detail->no_antri=="9") echo 'selected="selected"'; ?>>9</option>
                                        <option value="10" <?php if($appointment_detail->no_antri=="10") echo 'selected="selected"'; ?>>10</option>
                                        <option value="11" <?php if($appointment_detail->no_antri=="11") echo 'selected="selected"'; ?>>11</option>
                                        <option value="12" <?php if($appointment_detail->no_antri=="12") echo 'selected="selected"'; ?>>12</option>
                                        <option value="13" <?php if($appointment_detail->no_antri=="13") echo 'selected="selected"'; ?>>13</option>
                                        <option value="14" <?php if($appointment_detail->no_antri=="14") echo 'selected="selected"'; ?>>14</option>
                                        <option value="15" <?php if($appointment_detail->no_antri=="15") echo 'selected="selected"'; ?>>15</option>
                                    </select>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($appointment_detail->tgl_antri)->format('d F Y')}}</>
                                <td>
                                    <select name="status" id="status">
                                        <option value="0" selected="selected">Select Here...</option>
                                        <option value="1" <?php if($appointment_detail->status=="1") echo 'selected="selected"'; ?>>Sudah Reservasi Namun Belum Konfirmasi</option>
                                        <option value="2" <?php if($appointment_detail->status=="2") echo 'selected="selected"'; ?>>Sudah Konfirmasi</option>
                                        <option value="3" <?php if($appointment_detail->status=="3") echo 'selected="selected"'; ?>>Reservasi Selesai</option>
                                        </select>
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
                                <td>
                                    <button type="submit" id="cf-submit" name="submit" class="btn btn-primary"><i class="fa fa-info"></i> Confirm</>
                                </td>
                                </form>
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
