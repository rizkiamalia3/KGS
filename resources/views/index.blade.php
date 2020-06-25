@include('layouts.app_dash')
<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    @foreach($sliders as $slider)
                    @if($slider == null)
                    <div class="item {{ $loop->first ? 'active' : '' }}">
                        <img src="" alt="">
                    </div>
                    @else
                    <div class="item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ URL::asset('/images/sliders/'.$slider->image)" alt="{{ $slider->image_id }}">
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@include('layouts.footer')
