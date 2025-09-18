<section id="hero">
    <div class="welcome5-section-area"
        style="background-image: url({{ asset('images/background/bg2.png') }}); background-repeat: no-repeat; background-size: cover; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="welcome5-header-area text-center heading3">
                        <h1 data-aos="zoom-out" data-aos-duration="800">
                            সায়েন্টিফিক তাফসির <br> আধুনিক বিজ্ঞানের আলোকে <br> আল কুরআনের গভীর বিশ্লেষণ
                        </h1>

                        <div class="space32"></div>

                        <div class="btn-area d-flex justify-content-center gap-3 flex-wrap" data-aos="zoom-out" data-aos-duration="1200">
                            <a href="https://www.facebook.com/share/v/16uYtWu1Up/" class="header-btn9" target="_blank">
                                সূরা ফাতেহার ভিডিও <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="https://www.facebook.com/share/v/178mLPopk7/" target="_blank" class="header-btn9">
                                সূরা বাকারার ভিডিও <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="" class="header-btn9" target="_blank">
                                সূরা আলে ইমরানের ভিডিও <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="space32"></div>

                        <div class="welcome5-images-area">
                            <div class="row">
                                <div class="col-lg-4 m-auto">
                                    <div class="img1">
                                        <img src="{{ asset('images/all-images/fatiha.png') }}" alt="সূরা ফাতেহা"
                                            data-aos="zoom-in" data-aos-duration="1000">
                                    </div>
                                </div>
                                <div class="col-lg-4 m-auto">
                                    <div class="img1">
                                        <img src="{{ asset('images/all-images/bakara.png') }}" alt="সূরা বাকারা"
                                            data-aos="zoom-in" data-aos-duration="1000">
                                    </div>
                                </div>
                                <div class="col-lg-4 m-auto">
                                    <div class="img1">
                                        <img src="{{ asset('images/all-images/imran.png') }}" alt="সূরা imran"
                                            data-aos="zoom-in" data-aos-duration="1000">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="tributeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
    <div class="modal-content border-0 bg-transparent shadow-none position-relative">

      <!-- Custom Close Button -->
      <button type="button" 
              class="position-absolute d-flex align-items-center justify-content-center" 
              data-bs-dismiss="modal" aria-label="Close"
              style="
                top: -15px; 
                right: -15px; 
                width: 35px; 
                height: 35px; 
                border-radius: 50%; 
                background: rgba(0,0,0,0.7); 
                color: #fff; 
                font-size: 22px; 
                border: none;
                line-height: 1;
              ">
        &times;
      </button>

      <!-- Tribute Image -->
      <img src="{{ asset('images/all-images/mourn.jpg') }}" 
           alt="Tribute Image"
           class="img-fluid rounded-3 d-block mx-auto"
           style="width: 370px; height: 540px; object-fit: cover;">

      <!-- Bio Link -->
      <div class="text-center mt-3">
        <a href="{{ route('frontend.bio') }}" 
           class="btn btn-light fw-bold px-4 py-2 rounded-pill shadow-sm">
          জাকারিয়া কামালকে জানুন
        </a>
      </div>

    </div>
  </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var tributeModal = new bootstrap.Modal(document.getElementById('tributeModal'));
    tributeModal.show();
});
</script>
