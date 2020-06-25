@include('admin.app.header')
<div class="content-wrapper">
<hr/>
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
                <h3 class="card-title">Data Reservasi Baru</h3>
                <br/>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="table-responsive text-nowrap">
                    <table id="myTable" class="table table-striped text-nowrap">
                        <thead>
                            <tr>
                                <th>ID Reservasi</th>
                                <th>Tanggal Reservasi</th>
                                <th>No Antri</th>
                                <th>Status</th>
                                <th>Atas Nama</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointment_details as $appointment_detail)
                            <tr>
                                <td>
                                    <form  action="{{ url('admin/data_reservasi/update/'.$appointment_detail->id) }}" method="POST">
                                        @csrf
                                    {{ $appointment_detail->id }}
                                </td>
                                <td>{{ \Carbon\Carbon::parse($appointment_detail->tgl_antri)->format('d F Y')}}</>
                                <td>
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
                                <td>
                                    <select name="status" id="status">
                                        <option value="0" selected="selected">Select Here...</option>
                                        <option value="1" <?php if($appointment_detail->status=="1") echo 'selected="selected"'; ?>>Sudah Reservasi Namun Belum Konfirmasi</option>
                                        <option value="2" <?php if($appointment_detail->status=="2") echo 'selected="selected"'; ?>>Sudah Konfirmasi</option>
                                        <option value="3" <?php if($appointment_detail->status=="3") echo 'selected="selected"'; ?>>Reservasi Selesai</option>
                                    </select>
                                </td>
                                <td>{{ $appointment_detail->name }}</td>
                                <td>
                                    <a href="{{ url('admin/data_reservasi/.$appointment_detail->id') }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                    <button type="submit" id="cf-submit" name="submit" class="btn btn-primary"><i class="fa fa-info"></i> Update</>
                                </td>
                                <td>
                                    <a href="{{ url('admin/data_reservasi/delete/'.$appointment_detail->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                            </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="ml-3">
                        {{ $appointment_details->links() }}
                    </div>

                </div>
            </div>
        </div>
        </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
</div>
</div>
@include('admin.app.footer')
