@include('admin.app.header')
<div class="content-wrapper">
<div class="content">
    <div class="content-header">
    </div>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin/data_user')}}">Data User</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
    </ol>
    </nav>
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="card">
                <div class="card-body">
                <h4><i class="fa fa-user"></i> My Profile</h4>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td width="10">:</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td>:</td>
                            <td>@if($user->no_hp == null)
                                -
                                @else
                                {{ $user->no_hp }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>
                                @if($user->tgl_lahir == null)
                                -
                                @else
                                {{ \Carbon\Carbon::parse($user->tgl_lahir)->format('d F Y')}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>@if($user->jenis_kelamin == 1)
                                Laki-Laki
                                @elseif($user->jenis_kelamin == 2)
                                Perempuan
                                @else
                                -
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
@include('admin.app.footer')
