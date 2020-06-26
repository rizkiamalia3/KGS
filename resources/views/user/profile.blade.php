@include('layouts.app_dash')
<div class="container ">
    <br/>
    <div class="row">
        <div class="col-md-12 mt-3 mb-3">
            <a href="{{ url('/') }}" class="btn btn-dark"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-user"></i> My Profile</h4>
                    <table class="table">
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
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-pencil"></i> Edit Profile</h4>
                    <h5>Harap Lengkapi Informasi Dibawah Ini.</h5>
                    <form method="POST" action="{{ url('user/profile') }}">
                        @csrf

                        <div class="form-group row mt-3">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_hp" class="col-md-2 col-form-label text-md-right">No. HP</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="text" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" name="no_hp" value="{{ $user->no_hp }}" required autocomplete="no_hp" autofocus>

                                @if ($errors->has('no_hp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('no_hp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-md-2 col-form-label text-md-right">Tanggal Lahir</label>


                            <div class="col-md-6">
                                <input id="tgl_lahir" type="date" name="tgl_lahir" class="form-control{{ $errors->has('tgl_lahir') ? ' is-invalid' : '' }}"
                                @if($user->tgl_lahir == null)
                                value=""
                                @else
                                value="{{ \Carbon\Carbon::parse($user->tgl_lahir)->format('Y-m-d') }}"
                                @endif
                                required autocomplete="tgl_lahir" autofocus>
                                @if ($errors->has('tgl_lahir'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-md-2 col-form-label text-md-right">Jenis Kelamin</label>
                            <div class="col-md-6">
                                <select name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="0" selected="selected">Select Here...</option>
                                    <option value="1" <?php if($user->jenis_kelamin=="1") echo 'selected="selected"'; ?>>Laki-Laki</option>
                                    <option value="2" <?php if($user->jenis_kelamin=="2") echo 'selected="selected"'; ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-pink" id="cf-submit" name="submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@include('layouts.footer')
