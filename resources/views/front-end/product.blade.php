@include('front-end._partial.header')
<div class="section-banner">
    <div class="overlay"></div>
    <h2>Latest Product</h2>
</div>

<!-- Start products -->
<section class="latest-blog section-padding clearfix">
        <div class="container">
            <div class="latest-blog">
                <div class="row flex-wrap">
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-15">
                        <div class="blog-item card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::TO('front-end/images/blog/01.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Your Product Title</h5>
                                <p class="card-text">Add some quick example text to build on the card title and make up the bulk.</p>
                                <a href="{{ URL::TO('product-details') }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-15">
                        <div class="blog-item card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::TO('front-end/images/blog/02.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Your Product Title</h5>
                                <p class="card-text">Add some quick example text to build on the card title and make up the bulk.</p>
                                <a href="{{ URL::TO('product-details') }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-15">
                        <div class="blog-item card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::TO('front-end/images/blog/03.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Your Product Title</h5>
                                <p class="card-text">Add some quick example text to build on the card title and make up the bulk.</p>
                                <a href="{{ URL::TO('product-details') }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-15">
                        <div class="blog-item card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::TO('front-end/images/blog/04.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Your Product Title</h5>
                                <p class="card-text">Add some quick example text to build on the card title and make up the bulk.</p>
                                <a href="{{ URL::TO('product-details') }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-15">
                        <div class="blog-item card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::TO('front-end/images/blog/05.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Your Product Title</h5>
                                <p class="card-text">Add some quick example text to build on the card title and make up the bulk.</p>
                                <a href="{{ URL::TO('product-details') }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-15">
                        <div class="blog-item card" style="width: 100%;">
                            <img class="card-img-top" src="{{ URL::TO('front-end/images/blog/05.jpeg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Your Product Title</h5>
                                <p class="card-text">Add some quick example text to build on the card title and make up the bulk.</p>
                                <a href="{{ URL::TO('product-details') }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End products -->
    

@include('front-end._partial.footer')