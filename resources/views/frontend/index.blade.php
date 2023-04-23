@extends('master.frontend')
@section('front')
    <section id="BackImg">
        <div class="backImgIn">
            <div class="backImgOut"></div>
        </div>
    </section>
    <!-- BackGround Img Section End -->


    <!-- About Main Start -->

    <section id="AboutMain">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="topImage">
                        <div class="imgBox">
                            <img class="img1" src="{{asset("frontend/img/gefen.png")}}" alt="">
                            <img class="img2" src="{{asset("frontend/img/home.png")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="centerImage" data-aos="fade-right"
                         data-aos-offset="300"
                         data-aos-easing="ease-in-sine">
                        <div class="imgBox">
                            <img src="{{asset('frontend/img/bacok.png')}}" alt="Gefen">
                            <p style="color: black;">{{ settings('homepage_'.app()->getLocale()) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bottomImage" data-aos="fade-zoom-in"
                         data-aos-easing="ease-in-back"
                         data-aos-delay="300"
                         data-aos-offset="0">
                        <div class="imgBox">
                            <img src="{{asset('frontend/img/wine.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Main End -->


    <!-- Products Main Start -->

    <section id="ProductsMain">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="title">
                        <h1>Məhsullar</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="all">
                        <a href="{{ route('frontend.products') }}">@lang('backend.see-all')</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="productBox">
                        @foreach($products as $product)
                            <div class="productCard">
                                <img src="{{ asset($product->photo) }}" alt="{{ $product->translate(app()->getLocale())->name ?? '-' }}">
                                <div class="titleCardImg">
                                    <p>{{ $product->translate(app()->getLocale())->name ?? '-' }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="MapLocation" style="margin: 40px 0; -webkit-filter: grayscale(100%);filter: grayscale(100%);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.289205209104!2d49.86416357594375!3d40.38028247144548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d0355af9707%3A0x4d5d7e4271aaa462!2zw4fEsXJhcSBQbGF6YQ!5e0!3m2!1sru!2saz!4v1681392671385!5m2!1sru!2saz" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection

