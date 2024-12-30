@extends('website\master')

@section('content')
 

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('website/img/web-banner-1.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('website/img/web-banner-2.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('website/img/web-banner-3.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" role="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next"  role="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
   
 <!-- Abvout Start -->
 <div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h1 class="display-5 text-center mb-4"> महा- ई सेवा साठी आमचीच निवड का करावी ?</h1>
                    <hr>
                    <div class="row fw-bold p-3 g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">सोप्या पद्धतीद्वारे काम</h4>
                            <p>प्रियांशु इंटरप्रायजेस महा-ई सेवा केंद्र मध्ये, तुमची सोय ही आमची प्राथमिकता आहे. आम्ही
                                तुम्हाला सुलभ व सोप्या पद्धतीद्वारे ई सेवा पुर्ण करून देतो. कोणत्याही अडचणी शिवाय काम कसे
                                पुर्ण होईल याची काळजी आम्ही घेतो.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">वन-स्टॉप सोल्यूशन</h4>
                            <p>वन-स्टॉप सोल्यूशनचा अनुभव घ्या. विविध प्रकारच्या ई सेवांसाठी प्रियांशु इंटरप्रायजेस महा - ई
                                 सेवा केंद्र हे तुमचे खात्रीचे आणि हक्काचे ठिकाण आहे. तुम्‍ही सरकारी, व्‍यवसाय किंवा
                                  वैयक्तिक कोणत्याही प्रकारच्या ई सेवा शोधत असा, आमच्या येथे तुम्हाला हवी असलेली ई सेवा
                                   खात्रीपुर्वक मिळेल. सर्व ई सेवा सुविधा एका छताखाली मिळवून आपला वेळ आणि मेहनत वाचवा.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">सुरक्षित व्यव्हार</h4>
                            <p>तुमची माहिती, कागदपत्रे सुरक्षित आणि गोपनिय ठेवण्यासाठी प्रियांशु इंटरप्रायजेस महा ई सेवा
                                केंद्र योग्य ती सर्व काळजी घेतो. आम्ही हे सुनिश्चित करतो की तुमचे व्यवहार सुरक्षित आणि
                                खात्रीशिर असेल. ज्यामुळे तुम्हाला आमच्या सेवांचा निसंकोच लाभ घेता येईल.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">प्रत्येक टप्प्यावर माहितीची खात्री</h4>
                            <p>वन-स्टॉप सोल्यूशनचा अनुभव घ्या. विविध प्रकारच्या ई सेवांसाठी प्रियांशु इंटरप्रायजेस महा ई सेवा
                                केंद्र हे तुमचे खात्रीचे आणि हक्काचे ठिकाण आहे. तुम्‍ही सरकारी, व्‍यवसाय किंवा वैयक्तिक कोणत्याही 
                                प्रकारच्या ई सेवा शोधत असा, आमच्या येथे तुम्हाला हवी असलेली ई सेवा खात्रीपुर्वक मिळेल. 
                                सर्व ई सेवा सुविधा एका छताखाली मिळवून आपला वेळ आणि मेहनत वाचवा.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">आधुनिक टेक्नॉलॉजी</h4>
                            <p>प्रियांशु इंटरप्रायजेस महा ई सेवा केंद्र हे केवळ ई सर्व्हिस प्रोव्हायडर नाही तर तुमचे काम
                                सुलभ व जलद करण्यासाठी झटणारे इनोव्हेटर्स आहेत. आमच्या पेमेंट गेटवे, डॉक्युमेंट मॅनेजमेट
                                साठी आम्ही नव नवीन टेक्नॉलॉजीचा समावेश आणि त्यांचा नियमित पणे विकास करत असतो.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">सुरक्षित व्यव्हार</h4>
                            <p>तुमची माहिती, कागदपत्रे सुरक्षित आणि गोपनिय ठेवण्यासाठी प्रियांशु इंटरप्रायजेस महा ई सेवा
                                केंद्र योग्य ती सर्व काळजी घेतो. आम्ही हे सुनिश्चित करतो की तुमचे व्यवहार सुरक्षित आणि
                                खात्रीशिर असेल. ज्यामुळे तुम्हाला आमच्या सेवांचा निसंकोच लाभ घेता येईल.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">पारदर्शक सेवा आणि वेळेवर काम</h4>
                            <p>सर्व कामे पारदर्शक ठेवण्यावर आमचा विश्वास आहे. अलर्ट मॅसेज, अप्रुव्हल मॅसेज किंवा कामासंबंधित कोणत्याही बदलांसाठी त्वरित सूचना, ईमेल किंवा एसएमएस सूचना प्राप्त करा. पारदर्शक सेवा आणि वेळेवर काम हा प्रियांशु इंटरप्रायजेस महा ई सेवा केंद्र चा पाया आहे.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">डेडिकेटेड कस्टमर सपोर्ट</h4>
                            <p>गरज जिथे मदत तिथे याप्रमाणे आमची सपोर्ट टिम काम करते. आमची सपोर्ट टीम तुमच्यासाठी उपलब्ध
                                आहे. थेट चॅट, हेल्पलाइन किंवा आमच्या तिकीट प्रणालीद्वारे तुम्ही आमच्याशी संपर्क साधू शकता.
                                खात्रीशिर आणि विश्वासपुर्ण ई सेवा अनुभवासाठी प्रियांशु इंटरप्रायजेस महा ई सेवा केंद्र ची निवड करा. तुमची सोय, सुरक्षितता आणि समाधान हे आमचे सर्वोच्च प्राधान्य आहे. अधिक माहितीसाठी साइन अप करा किंवा आमच्याशी संपर्क साधा.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h4 class="fw-bold">वन-स्टॉप सोल्यूशन</h4>
                            <p>सर्व कामे पारदर्शक ठेवण्यावर आमचा विश्वास आहे. अलर्ट मॅसेज, अप्रुव्हल मॅसेज किंवा कामासंबंधित कोणत्याही बदलांसाठी त्वरित सूचना, ईमेल किंवा एसएमएस सूचना प्राप्त करा. पारदर्शक सेवा आणि वेळेवर काम हा प्रियांशु इंटरप्रायजेस महा ई सेवा केंद्र चा पाया आहे.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <img src="{{asset('website/img/Priyanshu-Enterprises-4.png')}}"  class="img-fluid  " alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h1 class="display-5 mb-4">We Services provided best offer</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                @foreach ($serviceData as $data)
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{asset('uploads/services/'.$data->Service_Image)}}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4"> {{ $data->Service_Name }}</a>
                            <br>
                            <a class="btn btn-primary rounded-pill py-2 px-4" target="_blank" href="https://app.mahaeseva.in">Apply Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection

