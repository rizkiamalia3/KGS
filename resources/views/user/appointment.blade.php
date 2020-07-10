@include('layouts.app_dash')
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-confirm" role="form" method="post" action="{{ route('appointment-confirm') }}">
                    @csrf
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an appointment</h2>
                    </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">

                            <div class="col-xl-6">
                                <label for="tgl_antri">Select Date</label>
                                <input id="tgl_antri" type="date" name="tgl_antri" min="2020-07-09" class="form-control">
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                            </div>

                        </div>
                </form>
            </div>

        </div>
    </div>
</section>
@include('layouts.footer')
