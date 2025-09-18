@extends('frontend.app')

@section('title', 'Bio')

@section('content')
    <div class="about-welcome-section-area about2"
        style="background-image: url({{ asset('images/background/bio.png') }}); background-repeat: no-repeat; background-size: cover; padding-top: 150px; padding-bottom: 80px; min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Header -->
                    <div class="text-center mb-5">
                        <h1 class="fw-bold text-dark">লে. কর্নেল জাকারিয়া কামাল</h1>
                        <p class="text-muted fs-5">এক বিজ্ঞানমনস্ক কোরআন গবেষকের জীবনী</p>
                        <hr class="w-50 mx-auto">
                    </div>

                    <!-- Intro -->
                    <p class="fs-5">
                        বহুল আলোচিত <strong>Scientific Tafsir of the Quran</strong> গ্রন্থের রচয়িতা, কোরআনের
                        বিজ্ঞানভিত্তিক বিশ্লেষণধর্মী তাফসিরের পথিকৃৎ, অবসরপ্রাপ্ত লেফটেন্যান্ট কর্নেল জাকারিয়া কামাল।
                    </p>

                    <!-- Education -->
                    <h3 class="mt-5 mb-3">🎓 শিক্ষা ও পেশাগত জীবন</h3>
                    <p>
                        জাকারিয়া কামাল বাংলাদেশ সেনাবাহিনীর একজন সম্মানিত সদস্য ছিলেন। তিনি দীর্ঘ সময় সেনাবাহিনীতে
                        কর্মরত ছিলেন এবং লে. কর্নেল পদে অবসর গ্রহণ করেন। সেনাবাহিনীর শৃঙ্খলাবদ্ধ ও গবেষণামুখী জীবনের প্রভাব
                        তাঁর কোরআন গবেষণাতেও প্রতিফলিত হয়েছে।
                    </p>

                    <!-- Tafsir -->
                    <h3 class="mt-5 mb-3">📖 আল কোরআনের বৈজ্ঞানিক তাফসীর: একটি যুগান্তকারী প্রচেষ্টা</h3>
                    <p>
                        অবসর গ্রহণের পর তিনি নিজের জীবন উৎসর্গ করেন আল কোরআনের গভীর গবেষণায়। প্রায় ৩৭ বছর ধরে নিরলস অধ্যয়ন
                        ও চিন্তাচর্চার মাধ্যমে তিনি রচনা করেন এক অনন্য গ্রন্থ—
                        <em>Scientific Tafsir of the Quran</em>। এই তাফসিরে কোরআনের বিভিন্ন আয়াতকে আধুনিক বিজ্ঞান,
                        মহাবিশ্ব, পদার্থবিদ্যা, কসমোলজি, এবং কসমিক সিস্টেমের আলোকে ব্যাখ্যা করা হয়েছে।
                    </p>
                    <p>
                        তিনি বিশ্বাস করতেন, কোরআনের মূল বিষয়বস্তু সহজবোধ্য, তবে কিছু আয়াতে এমন গভীর ও সুক্ষ্ম
                        বিজ্ঞানভিত্তিক ইঙ্গিত রয়েছে, যা বিশেষ মনোযোগ ও বিশ্লেষণ দাবি করে। তাই তিনি তাফসিরে
                        <strong>“Remarks”</strong> শিরোনামে প্রতিটি বৈজ্ঞানিক ও জটিল দিক ব্যাখ্যা করেছেন।
                    </p>

                    <!-- Structure -->
                    <h3 class="mt-5 mb-3">📂 কোরআনের গঠনগত ব্যাখ্যা</h3>
                    <p>
                        তিনি কোরআনের একটি গোপন কাঠামো (Hidden Structure) আবিষ্কার করেন। প্রতিটি সূরাকে Segments, Sections
                        ও Paragraphs-এ ভাগ করেন, যাতে পাঠক নিরবচ্ছিন্নভাবে নির্দিষ্ট বিষয়ে মনোযোগ দিতে পারেন (আয়াতের অবস্থান
                        পরিবর্তন ছাড়াই)।
                    </p>
                    <ul>
                        <li>Part-1 (সূরা ২–৯): হুদান লিল মুততাকিন (Guidance for the Guards)</li>
                        <li>Part-2 (সূরা ১০–৩০): হুদান লিন্নাস (Guidance for Mankind)</li>
                        <li>Part-3 (সূরা ৩১–১১৪): হুদান লিল মুহসিনিন (Guidance for the Doers of Good)</li>
                    </ul>
                    <p>
                        প্রথম ও দ্বিতীয় অংশ উভয়ই ইসলাম প্রচার করে, তবে:
                        <br>• Part-1 এ <strong>জিহাদ</strong> কৌশলের অংশ।
                        <br>• Part-2 তে জিহাদ অনুপস্থিত।
                    </p>

                    <!-- Translation -->
                    <h3 class="mt-5 mb-3">📚 বাংলা অনুবাদ ও প্রকাশনা</h3>
                    <p>
                        মোহাম্মদ নসরত হোসেন তাঁর ইংরেজি মূল গ্রন্থ থেকে অনুপ্রাণিত হয়ে বাংলায় অনুবাদ করেন। এটি প্রাঞ্জল,
                        সাবলীল ও পাঠযোগ্য। <strong><a href="https://web.facebook.com/profile.php?id=100063985479502" target="_blank">সরলরেখা প্রকাশনা সংস্থা</a></strong> ও <strong>কিংডম ফাউন্ডেশন পাবলিশার্স</strong>
                        যৌথভাবে প্রকাশ করে।
                    </p>
                    <p>
                        বাংলা অনুবাদে: আরবি সবুজ রঙে, ইংরেজি আয়াত নীল রঙে এবং বাংলা ব্যাখ্যা কালো রঙে মুদ্রিত হয়েছে। বইটি
                        হার্ড কাভারে, রঙিন অফসেট কাগজে ছাপা, যা পাঠককে ভিজ্যুয়ালভাবে আকৃষ্ট করে।
                    </p>

                    <!-- Scientific topics -->
                    <h3 class="mt-5 mb-3">🔬 বৈজ্ঞানিক বিষয়সমূহ</h3>
                    <ul>
                        <li>মহাবিশ্ব ও তার সৃষ্টি চক্র</li>
                        <li>সাত আকাশ, সুপার স্পেস ও বারজাখ</li>
                        <li>জান্নাত, জাহান্নাম, সিদরাতুল মুনতাহা, আরাফ</li>
                        <li>আত্মা, রূহ, নফস</li>
                        <li>বলক্ষেত্র, মাধ্যাকর্ষণ, ডার্ক এনার্জি ও কোয়ান্টাম ফিজিক্স</li>
                        <li>সীরাতুল মুস্তাকিম ও আইন দিবস</li>
                    </ul>

                    <!-- Online links -->
                    <h3 class="mt-5 mb-3">🌐 অনলাইন ভার্সন ও বিতরণ</h3>
                    <p>
                        মূল ইংরেজি তাফসির ফ্রি পাওয়া যায়:
                        <a href="http://alqurantafsir.com" target="_blank">alqurantafsir.com</a>
                    </p>
                    <p>অনুপ্রাণিত বইসমূহ বাংলা ও ইংরেজি ভার্সন রকমারি থেকে:</p>
                    <ul>
                        <li><a href="https://rkmri.co/E0Re0o5REM3M/" target="_blank">সূরা আল ফাতিহা</a></li>
                        <li><a href="https://rkmri.co/eyANMAImpe5y/" target="_blank">সূরা আল বাক্বারা</a></li>
                        <li><a href="https://rkmri.co/SyMe0TeMNeMy/" target="_blank">সূরা আলে ইমরান</a></li>
                    </ul>

                    <!-- Personal Info -->
                    <h3 class="mt-5 mb-3">🏡 ব্যক্তিগত তথ্য</h3>
                    <p>
                        স্থায়ী ঠিকানা: হোগলাকান্দি গ্রাম, ঝিটকা ডাকঘর, মানিকগঞ্জ জেলা।
                    </p>
                    <p>
                        জন্ম: <strong>১৯৫৯</strong><br>
                        ইন্তেকাল: <strong>১৪ জুলাই, ২০২৫</strong>
                    </p>

                    <!-- Social links -->
                    <h3 class="mt-5 mb-3">🔗 অনলাইন প্ল্যাটফর্ম</h3>
                    <p>
                        ইউটিউব: <a href="https://youtube.com/@zakariakamal?si=-vHdyVBeP9_-1iRP" target="_blank">Zakaria Kamal</a><br>
                        ফেসবুক পেজ: <a href="https://web.facebook.com/ScientificTafsir" target="_blank">Scientific Tafsir</a>
                    </p>

                    <!-- Ending -->
                    <h3 class="mt-5 mb-3">🕊️ শেষ কথায়</h3>
                    <p>
                        জাকারিয়া কামাল স্যার ছিলেন একাধারে একজন কুরআনের গবেষক, চিন্তাবিদ ও আল্লাহ প্রেমিক বান্দা। তাঁর
                        রচিত তাফসির যুগ যুগ ধরে সত্য সন্ধানীদের পাথেয় হয়ে থাকবে। তিনি আধুনিক বিজ্ঞান ও আধ্যাত্মিকতাকে
                        একসূত্রে গেঁথে কোরআনের আলোকে মানবজাতির জন্য পথের দিশা দেখিয়েছেন।
                    </p>

                    <div class="alert alert-light border mt-4">
                        <p class="mb-1">আল্লাহর রহমতে তাঁর দাফন কাজ সম্পন্ন হয়েছে অল্প বৃষ্টির মধ্যে। বাংলাদেশ আর্মি তাঁকে গার্ড অফ অনার প্রদান করে।</p>
                        <a href="https://web.facebook.com/share/v/17Fjk75Rdx/" target="_blank">দেখুন ফেসবুক পোস্ট</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
