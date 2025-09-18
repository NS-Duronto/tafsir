<header>
    <div class="header-area homepage5 header header-sticky d-none d-lg-block " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ route('home') }}">
                                <img id="logo-scroll" class="logo" src="{{ asset('images/logo/logo for website.png') }}"
                                    alt="" style="display: none;">
                                <img id="logo-default" class="logo"
                                    src="{{ asset('images/logo/logo-white_for_website.png') }}" alt="">
                            </a>
                        </div>

                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home <i class="fa-solid"></i></a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#faq">FAQ<i class="fa-solid "></i></a></li>
                                <li><a href="{{ route('frontend.contact') }}">Contact Us <i class="fa-solid "></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex gap-2">
                            <div class="cta-btn">
                                <a href="{{ route('frontend.bio') }}" class="header-btn8 login">
                                    জাকারিয়া কামালকে জানুন
                                </a>
                            </div>
                            <div class="cta-btn">
                                <a href="#" class="header-btn8 login" data-bs-toggle="modal"
                                    data-bs-target="#purchaseModal">
                                    বইগুলো কিনুন <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">এ্যাড টু কার্ট করুন</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="বন্ধ করুন"></button>
                </div>
                <div class="modal-body text-center">
                    <p><strong>সূরা আল ফাতিহা</strong></p>
                    <a href="https://rkmri.co/E0Re0o5REM3M/" target="_blank" class="btn btn-success mb-3">
                        কিনুন <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <hr>
                    <p><strong>সূরা আল বাক্বারা</strong></p>
                    <a href="https://rkmri.co/eyANMAImpe5y/" target="_blank" class="btn btn-success mb-3">
                        কিনুন <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <hr>
                    <p><strong>সূরা আলে ইমরান</strong></p>
                    <a href="https://rkmri.co/SyMe0TeMNeMy/" target="_blank" class="btn btn-success">
                        কিনুন <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header mobile-header5 d-block d-lg-none header-area header-sticky">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo/fav-logo.png') }}" alt=""></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar5">
    <div class="logosicon-area">
        <div class="logos">
            <img src="{{ asset('images/logo/logo for website.png') }}" alt="">
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav">
        <ul class="mobile-nav-list">
            <li><a href="{{ route('home') }}">Home </a></li>
        </ul>
        <ul class="mobile-nav-list">
            <li><a href="{{ route('frontend.bio') }}">
                    জাকারিয়া কামালকে জানুন
                </a></li>
        </ul>
        <ul class="mobile-nav-list">
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                    বইগুলো কিনুন <i class="fa-solid fa-arrow-right"></i>
                </a></li>
        </ul>

        <div class="allmobilesection">
            <div class="single-footer">
                <h3>Contact Info</h3>
                <div class="footer4-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-text">
                            <a href="tel:+8801716477600">+8801716477600</a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-text">
                            <a href="mailto:sps@saralrekha.com.bd">sps@saralrekha.com.bd</a>
                        </div>
                    </div>

                    <div class="single-footer">
                        <h3>Our Location</h3>

                        <div class="contact-info-single">
                            <div class="contact-info-text">
                                <a href="mailto:sps@saralrekha.com.bd">120, selina parvin sarak, century arched, room
                                    31, Moghbazar, Dhaka, Dhaka 1217</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logoDefault = document.getElementById('logo-default');
        const logoScroll = document.getElementById('logo-scroll');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                logoDefault.style.display = 'none';
                logoScroll.style.display = 'inline';
            } else {
                logoDefault.style.display = 'inline';
                logoScroll.style.display = 'none';
            }
        });
    });
</script>
