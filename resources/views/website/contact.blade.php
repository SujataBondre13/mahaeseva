@extends('website\master')

@section('content')
    


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">


            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active text-primary">Contact</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-5 mb-5">
                                <h4 class="text-primary mb-4">Get in Touch</h4>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">प्रियांशु इंटरप्रायजेस, महा ई-सेवा केंद्र, शॉप नं.४ रम्यनगरी,
                                                    तांदुळवाडी रोड, रेल्वे पुलाजवळ, आबासाहेब सातव चौक, बारामती, पुणे - 413102​
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">priyanshuenterprises@outlook.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">
                                                    +91 8625072647
                                                    <br>
                                                    +91 9823222043
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fab fa-whatsapp fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>WhatsApp</h4>
                                                <p class="mb-0">+91 8625072647</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                                <h4 class="text-primary">Send Your Message</h4>
                                @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                                <form action="/admin/contact/store" method="POST">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="phone" class="form-control border-0" id="phone" name="phone" placeholder="Phone">
                                                <label for="phone">Your Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="project" name="project" placeholder="Project">
                                                <label for="project">Your Project</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                                                <label for="message">Message</label>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded h-100">
                            <iframe class="rounded h-100 w-100" 
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d485167.4530731699!2d74.5869513!3d18.1928798!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc30ab15a35fc13%3A0x2f970d6061912e0e!2spriyanshu%20enterprises!5e0!3m2!1sen!2sin!4v1734370490686!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


@endsection