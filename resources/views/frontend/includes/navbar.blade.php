<section id="topNav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="topBox">
                    <div class="left">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Str::upper(app()->getLocale()) }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                @foreach(active_langs() as $lang)
                                    <li><a class="dropdown-item"
                                           href="{{ route('frontend.frontLanguage',$lang->code) }}">{{ Str::upper($lang->code) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ settings('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ settings('instagram') }}"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Logo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logoBox">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{asset('frontend/img/Logo-2 gefen 1.svg')}}" alt="">
                    </a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
<section id="Navbar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageLink">
                    <a href="{{ route('frontend.about') }}">@lang('backend.about')</a>
                    <a href="{{ route('frontend.services') }}">@lang('backend.services')</a>
                    <a href="{{ route('frontend.products') }}">@lang('backend.products')</a>
                    <a href="{{ route('frontend.createOrder') }}">@lang('backend.create-order')</a>
                    <a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="whats-float">
    <a href="https://wa.me/{{ settings('whatsapp') }}"
       target="_blank">
        <i class="fab fa-whatsapp"></i><span>@lang('backend.whatsapp')<br><small>{{ settings('whatsapp') }}</small></span>
    </a>
</div>
<div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="headerBody">
                    <div class="line"></div>
                    <span>@lang('backend.age-checker')</span>
                    <div class="line"></div>
                </div>
                <div class="bodyContent">
                    <h2>@lang('backend.are-u-18')</h2>
                    <span>@lang('backend.you-agree-terms')?</span>
                    <p>@lang('backend.you-24')</p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('frontend.18') }}">
                    <button type="button" class="trueBtn" data-bs-dismiss="modal">@lang('backend.yes')</button>
                </a>
                <a href="{{ url('https://google.com') }}"></a><button type="button" class="falseBtn">@lang('backend.no')</button>
                </div>
            </div>
        </div>
    </div>
