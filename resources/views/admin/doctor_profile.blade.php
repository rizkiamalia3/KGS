@include('admin.app.header')
<div class="content-wrapper">
<div class="content">
    <div class="content-header">
    </div>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin/data_doctor')}}">Data Doctor</a></li>
        <li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
    </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <form  action="{{ url('admin/doctor_profile/'.$doctors->doctor_id) }}" method="POST">
                        @csrf
                        <h4><i class="fa fa-user"></i> Doctor Profile</h4>
                        <div class="form-group row mt-3">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $doctors->name }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $doctors->email }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hari_praktek" class="col-md-2 col-form-label text-md-right">Hari Praktek</label>

                            <div class="col-md-6">
                                <input id="hari_praktek" type="text" class="form-control{{ $errors->has('hari_praktek') ? ' is-invalid' : '' }}" name="hari_praktek" value="{{ $doctors->hari_praktek }}" required autocomplete="hari_praktek" autofocus>

                                @if ($errors->has('hari_praktek'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('hari_praktek') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary" id="cf-submit" name="submit">
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
</div>
@include('admin.app.footer')
