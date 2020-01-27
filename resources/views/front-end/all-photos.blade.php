@include('front-end._partial.header')

<div class="section-banner">
    
    <h2>All Photos</h2>
</div>

<section class="gallery section-padding">
        <div class="container">
            <div class="row">
                <div class="w-100" id="gallery">
                    <div class="row">                    
                        <div class="col-md-3 gallery-item pb-10 post-transition metal" data-category="metalloid">
                            <div class="item-thumb">
                                <img src="{{ URL::TO('front-end/images/services/02.jpg') }}">
                                <div class="item-content">
                                     <a href="{{ URL::TO('front-end/images/services/02.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                    <p>Conference 2019</p>
                                </div>
                                <div class="overlay"></div>
                             </div>
                            
                        </div>
                            <div class="col-md-3 gallery-item pb-10 post-transition" data-category="metalloid">
                                <div class="item-thumb">
                                    <img src="{{ URL::TO('front-end/images/services/01.jpg') }}">
                                    <div class="item-content">
                                         <a href="{{ URL::TO('front-end/images/services/01.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                        <p>Conference 2019</p>
                                    </div>
                                    <div class="overlay"></div>
                                 </div>
                                
                            </div>
                            <div class="col-md-3 gallery-item pb-10 transition metal numberGreaterThan50" data-category="metalloid">
                                <div class="item-thumb">
                                    <img src="{{ URL::TO('front-end/images/services/03.jpg') }}">
                                    <div class="item-content">
                                         <a href="{{ URL::TO('front-end/images/services/03.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                        <p>Conference 2019</p>
                                    </div>
                                    <div class="overlay"></div>
                                 </div>
                                
                            </div>
                            <div class="col-md-3 gallery-item pb-10 post-transition metal" data-category="metalloid">
                                <div class="item-thumb">
                                    <img src="{{ URL::TO('front-end/images/services/04.jpg') }}">
                                    <div class="item-content">
                                         <a href="{{ URL::TO('front-end/images/services/04.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                        <p>Conference 2019</p>
                                    </div>
                                    <div class="overlay"></div>
                                 </div>
                                
                            </div>
                                <div class="col-md-3 gallery-item pb-10 post-transition" data-category="metalloid">
                                    <div class="item-thumb">
                                        <img src="{{ URL::TO('front-end/images/services/05.jpg') }}">
                                        <div class="item-content">
                                             <a href="{{ URL::TO('front-end/images/services/05.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                            <p>Conference 2019</p>
                                        </div>
                                        <div class="overlay"></div>
                                     </div>
                                    
                                </div>
                                <div class="col-md-3 gallery-item pb-10 transition metal numberGreaterThan50" data-category="metalloid">
                                    <div class="item-thumb">
                                        <img src="{{ URL::TO('front-end/images/services/06.jpg') }}">
                                        <div class="item-content">
                                             <a href="{{ URL::TO('front-end/images/services/06.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                            <p>Conference 2019</p>
                                        </div>
                                        <div class="overlay"></div>
                                     </div>
                                    
                                </div><div class="col-md-3 gallery-item pb-10 post-transition metal" data-category="metalloid">
                                    <div class="item-thumb">
                                        <img src="{{ URL::TO('front-end/images/services/07.jpg') }}">
                                        <div class="item-content">
                                             <a href="{{ URL::TO('front-end/images/services/07.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                            <p>Conference 2019</p>
                                        </div>
                                        <div class="overlay"></div>
                                     </div>
                                    
                                </div>
                                    <div class="col-md-3 gallery-item pb-10 post-transition" data-category="metalloid">
                                        <div class="item-thumb">
                                            <img src="{{ URL::TO('front-end/images/services/08.jpg') }}">
                                            <div class="item-content">
                                                 <a href="{{ URL::TO('front-end/images/services/08.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                                <p>Conference 2019</p>
                                            </div>
                                            <div class="overlay"></div>
                                         </div>
                                        
                                    </div>
                                    <div class="col-md-3 gallery-item pb-10 transition metal numberGreaterThan50" data-category="metalloid">
                                        <div class="item-thumb">
                                            <img src="{{ URL::TO('front-end/images/services/09.jpg') }}">
                                            <div class="item-content">
                                                 <a href="{{ URL::TO('front-end/images/services/09.jpg') }}" data-rel="lightcase"><span>+</span></a>
                                                <p>Conference 2019</p>
                                            </div>
                                            <div class="overlay"></div>
                                         </div>
                                        
                                    </div>
                        </div>
            </div>
        </div>
</section>

@include('front-end._partial.footer')