@include('front-end._partial.header')

<div class="section-banner">
    <div class="overlay"></div>
    <h2>About Us</h2>
</div>

<!-- start about us -->
<section class="section-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-content">
                    <p data-aos="fade-down"><strong>S-21 Apperals Limited</strong> ipsum dolor sit amet consectetur adipisicing elit. Commodi totam alias ut eveniet ullam, eligendi est culpa sit cumque nobis a laborum pariatur odio nesciunt sequi distinctio non expedita numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi totam alias ut eveniet ullam, eligendi est culpa sit cumque nobis a laborum pariatur odio nesciunt sequi distinctio non expedita numquam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi totam alias ut eveniet ullam, eligendi est culpa sit cumque nobis a laborum pariatur odio nesciunt sequi distinctio non expedita numquam?</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item-icon" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="1000">
                                <img src="{{ URL::TO('front-end/images/about/01.svg') }}" />
                                <h4>Fashion</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item-icon" data-aos="fade-up"  data-aos-delay="1500" data-aos-duration="1500">
                                <img src="{{ URL::TO('front-end/images/about/02.svg') }}" />
                                <h4>Cloth</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item-icon" data-aos="fade-left"  data-aos-delay="2000" data-aos-duration="2000">
                                <img src="{{ URL::TO('front-end/images/about/03.svg') }}" />
                                <h4>Casual</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-video"  style="background:url(front-end/images/about/bg.jpg);background-size: contain;">
                    <div class="video" id="company_video">
                        <div class="overlay"></div>
                        <div class="video-content">
                            <a class="wow" href="https://www.youtube.com/embed/t2PnNhrTy94" data-rel="lightcase"><i class="fa fa-play"></i></a>
                            <h2 class="wow">Click on Play icon to know more details about our company</h2>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about us -->

@include('front-end._partial.footer')