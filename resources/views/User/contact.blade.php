@extends('Layout_user')
@section('content')
<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <!-- <h2>contact us</h2> -->
                        <p>Home <span>-</span> contact us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section padding_top">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1506.1036739926396!2d108.10957749016491!3d16.00471031597215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1716297542805!5m2!1sen!2s"
                width="1140" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="" method="post" id="contactForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">

                                <textarea class="form-control w-100" required name="message" id="message" cols="30"
                                    rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                    placeholder='Enter Message'></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" required name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                    placeholder='Enter your name'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" required name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    placeholder='Enter email address'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn_3 button-contactForm">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Hoa Vang, Da Nang</h3>
                        <p>Ninh An</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>(+84) 774 508 191</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>Quelltexcosmetics@gmail.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
<style>
.error {
    color: #ff3368;
}
</style>
@endsection