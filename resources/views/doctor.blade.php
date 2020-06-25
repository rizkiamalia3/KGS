@include('layouts.app_dash')

<div class="container">
    <div class="row">

        <div class="col-md-6 col-sm-6">
            <div class="about-info">
                <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
            </div>
        </div>

        <div class="clearfix"></div>
        @foreach($doctor as $doctors)

        <div class="col-md-4 col-sm-6">
            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-info">
                    <h3>{{ $doctors->name }}</h3>
                    <p>{{ $doctors->hari_praktek }}</p>
                    <div class="team-contact-info">
                        <p><i class="fa fa-envelope-o"></i> <a href="#">{{ $doctors->email }}</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('layouts.footer')
