@include('front-end._partial.header')
<div class="section-banner">
    <div class="overlay"></div>
    <h2>Mission & Vision</h2>
</div>

<!-- start about us -->
<section class="mission-vission section-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="mission">
                <h3>Our Mission</h3>
                <span class="title-border"></span>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 col-sm-12">
                        <div class="mission-item w-100">
                            <img src="{{ URL::TO('front-end/images/mission/01.svg') }}" />
                            <p>On time Quality Services Based on best pratices</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="mission-item w-100">
                            <img src="{{ URL::TO('front-end/images/mission/02.svg') }}" />
                            <p>Friendly Working Environment through open Communication</p>
                        </div>
                    </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="mission-item w-100">
                                <img src="{{ URL::TO('front-end/images/mission/03.svg') }}" />
                                <p>Committed for Environment & Worker Welfear and driven by responsibilities to the society</p>
                            </div>
                        </div>
                </div>
            </div>
            <div class="bangladesh-map">
                <img src="{{ URL::TO('front-end/images/mission/bangladesh.png') }}" />
            </div>
            <div class="vission text-center">
                <p><strong>Our Vission is:</strong>To be Bangladesh's Leading Company through pioneering global best pratices and playing an integral role</p>
            </div>
        </div>
    </div>
</section>
<!-- end about us -->

@include('front-end._partial.footer')