
<section class="about-section padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-img">
                    <img class="about-img1 wow fade-in-left" data-wow-delay="200ms" src="{{asset('img/about-1.png')}}" alt="img">
                    <img class="about-img2 wow fade-in-bottom" data-wow-delay="400ms" src="{{asset('img/about-2.png')}}" alt="img">
                    <figure class="round-text"><img src="{{asset('img/experience-text-round.png')}}" alt="img"></figure>
                </div>
            </div>
            @foreach ($about as $item)
                <div class="col-md-6">
                    <div class="section-heading mb-40 wow fade-in-right" data-wow-delay="200ms">
                        <h4><span></span>About Our Company</h4>
                        <h2>{{ $item->heading }}</h2>
                        <p>{{ $item->description }}</p>
                    </div>
                    <!--/.section-heading-->
                    <ul class="about-info wow fade-in-right" data-wow-delay="400ms">
                        <li>
                            <img class="owner-thumb" src="{{ asset('img/comment-1.png') }}" alt="thumb">
                            <div class="owner">
                                <h4>Founder - CEO</h4>
                                {{-- <img class="signature" src="{{ asset('img/signature.png') }}" alt="signature"> --}}
                            </div>
                        </li>
                        <li>
                            <h2><span>Call For Taxi</span> <a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></h2>
                        </li>
                    </ul>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!--/.about-section-->