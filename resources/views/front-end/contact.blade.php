@include('front-end._partial.header')
<div class="section-banner">
    <div class="overlay"></div>
    <h2>Contact Us</h2>
</div>

<section class="contact-us clearfix section-padding">
    <div class="container">
        <div class="row">

            <div class="w-100">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Our Address</h3>
                        <hr>
                        <div>
                            <h4>S-21 Appreal Limted</h4>
                            <p>46 Avenue 3,Road No.2,<br> Baridhara DOHS, Dhaka - 1215, Bangladesh </p>
                        </div>
                        <div>
                            <br>
                            <h4>Contact</h4>
                            <!--<p><strong>Hotline:</strong> </p>-->
                            <p><strong>Tel:</strong> +880 XXXXXXXXX</p>
                            <p><strong>Cell:</strong>+88017XX XXXXXX</p>
                        </div>
                        <!-- tranning map -->
                        <div class="w-100 mt-4 clearfix">
                            <h3>Our Location</h3>
                            <hr>
                        <!-- start google map section -->
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.063944826554!2d90.41049472495796!3d23.81405091741883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e7c0a4e39%3A0xd026ea6a08433e26!2sDivine%20Group%20of%20Companies!5e0!3m2!1sen!2sbd!4v1570581949451!5m2!1sen!2sbd"  height="450" frameborder="0" style="border:0;width:100%" allowfullscreen=""></iframe>
                        </div>
                        <!-- end google map section -->
                        </div>
                        <!-- end map -->
                    </div>

                    <div class="col-md-6">
                        <div class="write">
                            <h3>Write Us</h3>
                            <hr>
                            <form method="POST" action="" id="formContactUs" name="formContactUs" enctype="multipart/form-data" novalidate="novalidate">
                                <div class="form-group" id="showResult"> 
                                </div>
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" placeholder="Enter your Name" class="form-control" name="name" id="name" value="">
                                </div>
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="text" placeholder="Enter your Email" class="form-control" name="email" id="email" value="">
                                </div>
                                <div class="form-group">
                                    <label>Your Phone</label>
                                    <input type="text" placeholder="Enter your Phone" class="form-control" name="phone" id="phone" value="">
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea class="form-control" rows="4" name="message" id="message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@include('front-end._partial.footer')