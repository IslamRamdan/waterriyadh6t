<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>مدونة وايت مياه شمال وشرق الرياض | نصائح ومقالات عن المياه</title>
    <meta name="description"
        content="مدونة وايت مياه شمال وشرق الرياض: نصائح لتنظيف الخزانات، اختيار المياه الصالحة للشرب، وتعبئة المسابح. اتصل 0573108209.">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Devora Web">
    <link rel="icon" href="{{ asset('css/p (1).jpeg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #0b1546;
            --ind: #2a3a9b;
            --blue: #1a73e8;
            --sky: #4cc9f0;
            --foam: #e9f3ff;
            --mist: #f6faff;
            --acc: #9be7ff
        }

        html {
            scroll-padding-top: 84px;
            scroll-behavior: smooth
        }

        body {
            font-family: Cairo, sans-serif;
            background: var(--mist);
            color: var(--ink);
            line-height: 1.9;
            overflow-x: hidden
        }

        h1,
        h2,
        h3,
        h4 {
            font-weight: 900;
            line-height: 1.4
        }

        .sec {
            padding: 80px 0
        }

        .sec-title {
            font-size: clamp(1.6rem, 3.2vw, 2.3rem);
            margin-bottom: 10px
        }

        .sec-sub {
            color: #52659a;
            max-width: 620px;
            margin: 0 auto 42px
        }

        .eyebrow {
            display: inline-block;
            color: var(--blue);
            background: #dcebff;
            font-weight: 700;
            font-size: .9rem;
            border-radius: 30px;
            padding: 0 16px;
            margin-bottom: 10px
        }

        /* navbar */
        .navbar {
            background: var(--ink);
            border-bottom: 3px solid var(--sky);
            z-index: 1040
        }

        .navbar-brand {
            color: #fff;
            font-weight: 900;
            font-size: 1.25rem
        }

        .navbar-brand:hover {
            color: #fff
        }

        .navbar-brand i {
            color: var(--sky);
            margin-left: 8px
        }

        .nav-link {
            color: #e6efff !important;
            font-weight: 600;
            font-size: .95rem;
            position: relative
        }

        .nav-link::after {
            content: '';
            position: absolute;
            right: .5rem;
            left: .5rem;
            bottom: 2px;
            height: 3px;
            border-radius: 3px;
            background: var(--sky);
            transform: scaleX(0);
            transition: .35s
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1)
        }

        .nav-link.active {
            color: var(--acc) !important
        }

        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, .5)
        }

        .navbar .btn-w {
            border-radius: 10px;
            box-shadow: 0 3px 0 #5bb8dd;
            font-size: .92rem;
            line-height: 1.4
        }

        .navbar .btn-w:hover {
            transform: translateY(2px);
            box-shadow: 0 1px 0 #5bb8dd
        }

        @@media(max-width:991.98px) {
            .offcanvas-lg {
                background: var(--ink) !important;
                width: 280px !important
            }

            .nav-link {
                padding: 14px 20px !important;
                border-bottom: 1px solid rgba(255, 255, 255, .08)
            }

            .nav-link::after {
                display: none
            }

            .sec {
                padding: 56px 0
            }

            .top {
                background-attachment: scroll !important
            }
        }

        @@media(min-width:992px) {
            .offcanvas-lg {
                background: transparent !important
            }
        }

        /* buttons */
        .btn-w {
            background: linear-gradient(135deg, var(--acc), #fff);
            color: var(--ink);
            font-weight: 900;
            border: 0;
            border-radius: 14px;
            padding: 12px 28px;
            box-shadow: 0 6px 0 #5bb8dd;
            transition: .3s
        }

        .btn-w:hover {
            color: var(--ink);
            transform: translateY(3px);
            box-shadow: 0 3px 0 #5bb8dd
        }

        .btn-b {
            background: linear-gradient(135deg, var(--blue), var(--ind));
            color: #fff;
            font-weight: 900;
            border: 0;
            border-radius: 14px;
            padding: 10px 24px;
            box-shadow: 0 5px 0 #16206b;
            transition: .3s
        }

        .btn-b:hover {
            color: #fff;
            transform: translateY(3px);
            box-shadow: 0 2px 0 #16206b
        }

        /* banner */
        .top {
            position: relative;
            color: #fff;
            text-align: center;
            padding: 90px 0 120px;
            background: linear-gradient(rgba(11, 21, 70, .7), rgba(26, 115, 232, .5)), url('{{ asset('css/water.jpg') }}') center/cover fixed
        }

        .top h1 {
            font-size: clamp(1.9rem, 4.6vw, 3rem);
            max-width: 900px;
            margin: 0 auto 14px
        }

        .top p {
            color: #dbe8ff;
            font-size: 1.1rem;
            max-width: 640px;
            margin: 0 auto
        }

        .wave {
            position: absolute;
            bottom: -1px;
            right: 0;
            left: 0;
            line-height: 0;
            direction: ltr;
            overflow: hidden
        }

        .wave svg {
            width: 200%;
            display: block;
            animation: wv 16s linear infinite
        }

        @@keyframes wv {
            to {
                transform: translateX(-50%)
            }
        }

        /* blog cards */
        .blog-card {
            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid #d3e4fb;
            transition: .45s
        }

        .blog-card .pic {
            position: relative;
            aspect-ratio: 16/10;
            overflow: hidden;
            background: #12206b
        }

        .blog-card .pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .6s
        }

        .blog-card .pic::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(11, 21, 70, .55), transparent 55%)
        }

        .blog-card .date {
            position: absolute;
            z-index: 2;
            bottom: 12px;
            right: 14px;
            color: #fff;
            font-size: .85rem;
            font-weight: 700
        }

        .blog-card .date i {
            color: var(--sky);
            margin-left: 6px
        }

        .blog-card .body {
            padding: 22px 20px 24px;
            display: flex;
            flex-direction: column;
            flex: 1
        }

        .blog-card h3 {
            font-size: 1.15rem;
            margin-bottom: 8px
        }

        .blog-card p {
            color: #52659a;
            font-size: .95rem;
            flex: 1
        }

        .blog-card:hover {
            transform: translateY(-10px);
            border-radius: 40px 10px 40px 10px;
            box-shadow: 0 24px 44px rgba(26, 115, 232, .28);
            border-color: transparent
        }

        .blog-card:hover .pic img {
            transform: scale(1.12)
        }

        .empty {
            background: #fff;
            border-radius: 22px;
            padding: 50px 20px;
            border: 2px dashed #b9d4fa;
            color: #52659a
        }

        .empty i {
            font-size: 3rem;
            color: var(--sky)
        }

        /* modal */
        .modal-content {
            border-radius: 22px;
            border: 0;
            overflow: hidden
        }

        .modal-header {
            background: var(--ink);
            color: #fff;
            border: 0
        }

        .modal-title {
            font-weight: 900
        }

        .modal-img {
            width: 100%;
            max-height: 340px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 18px
        }

        .modal-body p {
            color: #3f5185
        }

        /* floating + indicators */
        .float-wrap {
            position: fixed;
            bottom: 22px;
            left: 22px;
            z-index: 1030;
            display: flex;
            flex-direction: column;
            gap: 12px
        }

        .fb {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: #fff;
            font-size: 1.5rem;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .3);
            transition: .35s
        }

        .fb:hover {
            color: #fff;
            transform: translateY(-6px) scale(1.12)
        }

        .fb.call {
            background: var(--blue);
            animation: ring 2.6s infinite
        }

        .fb.wa {
            background: #25d366
        }

        @@keyframes ring {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(26, 115, 232, .55)
            }

            60% {
                box-shadow: 0 0 0 16px rgba(26, 115, 232, 0)
            }
        }

        #lvl {
            position: fixed;
            top: 0;
            right: 0;
            width: 6px;
            height: 100vh;
            background: rgba(11, 21, 70, .1);
            z-index: 1035;
            pointer-events: none
        }

        #lvl i {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            height: 0;
            background: linear-gradient(to top, var(--blue), var(--sky));
            border-radius: 6px 6px 0 0
        }

        .rip {
            position: fixed;
            width: 12px;
            height: 12px;
            margin: -6px 0 0 -6px;
            border: 2px solid var(--sky);
            border-radius: 50%;
            pointer-events: none;
            z-index: 4000;
            animation: rip .8s ease-out forwards
        }

        @@keyframes rip {
            to {
                transform: scale(8);
                opacity: 0
            }
        }

        footer {
            background: #060d30;
            color: #b6c6f0
        }

        footer a {
            color: var(--sky);
            text-decoration: none;
            font-weight: 700
        }

        @@media(max-width:767.98px) {
            .sec {
                padding: 48px 0
            }

            .top {
                padding: 60px 0 100px
            }

            .float-wrap {
                bottom: 14px;
                left: 12px;
                gap: 9px
            }

            .fb {
                width: 46px;
                height: 46px;
                font-size: 1.3rem
            }

            #lvl {
                width: 4px
            }

            .navbar-brand {
                font-size: 1rem;
                max-width: calc(100% - 70px);
                white-space: normal;
                line-height: 1.3
            }
        }

        @@media(hover:none) {

            .blog-card:hover {
                transform: none
            }
        }

        @@media(prefers-reduced-motion:reduce) {
            * {
                animation: none !important;
                transition: none !important
            }
        }
    </style>
</head>

<body>
    <div id="lvl" aria-hidden="true"><i></i></div>
    <div class="float-wrap">
        <a href="tel:0573108209" class="fb call" aria-label="اتصال"><i class="fa-solid fa-phone"></i></a>
        <a href="https://wa.me/966573108209" class="fb wa" aria-label="واتساب 1"><i
                class="fa-brands fa-whatsapp"></i></a>
        <a href="https://wa.me/966561467048" class="fb wa" style="background:#128c7e" aria-label="واتساب 2"><i
                class="fa-brands fa-whatsapp"></i></a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-solid fa-droplet"></i>وايت مياه شمال وشرق
                الرياض</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu"
                aria-controls="menu" aria-label="فتح القائمة"><span class="navbar-toggler-icon"></span></button>
            <div class="offcanvas-lg offcanvas-end text-bg-dark" tabindex="-1" id="menu">
                <div class="offcanvas-header border-bottom border-secondary">
                    <h5 class="offcanvas-title text-info">القائمة</h5><button type="button"
                        class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#menu"
                        aria-label="إغلاق"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto fw-bold">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#hero">الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#services">خدماتنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#how">كيف نعمل</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#districts">الأحياء</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#works">أعمالنا</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#blogs">المدونة</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#faq">أسئلة شائعة</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">اطلب الآن</a></li>
                    </ul>
                    <a href="tel:0573108209" class="btn btn-w btn-sm mt-3 mt-lg-0 me-lg-3 px-4"><i
                            class="fa-solid fa-phone ms-2"></i>اتصل الآن</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="top">
        <div class="container position-relative">
            <span class="eyebrow">المدونة</span>
            <h1>مقالات ونصائح عن المياه وتعبئة الخزانات</h1>
            <p>كل ما تحتاج معرفته عن نظافة الخزانات، المياه الصالحة للشرب، وتعبئة المسابح في الرياض.</p>
        </div>
        <div class="wave"><svg viewBox="0 0 2880 60" preserveAspectRatio="none" height="60">
                <path fill="#f6faff"
                    d="M0,30 C180,65 360,-5 720,30 C1080,65 1260,-5 1440,30 C1620,65 1800,-5 2160,30 C2520,65 2700,-5 2880,30 L2880,60 L0,60Z" />
            </svg></div>
    </header>

    <section id="blogs" class="sec">
        <div class="container">
            <div class="text-center">
                <span class="eyebrow">آخر المقالات</span>
                <h2 class="sec-title">كل مقالات المدونة</h2>
                <p class="sec-sub">اضغط على «اقرأ المزيد» لقراءة المقال كاملاً.</p>
            </div>

            @if ($blogs->count())
                <div class="row g-4">
                    @foreach ($blogs as $blog)
                        @php
                            $img = $blog->image ? asset('storage/' . $blog->image) : asset('css/p (1).jpeg');
                        @endphp
                        <div class="col-md-6 col-lg-4">
                            <article class="blog-card">
                                <div class="pic">
                                    <img src="{{ $img }}" alt="{{ $blog->title }}" loading="lazy"
                                        onerror="this.src='{{ asset('css/p (1).jpeg') }}'">
                                    <span class="date"><i
                                            class="fa-regular fa-calendar"></i>{{ $blog->created_at?->format('Y/m/d') }}</span>
                                </div>
                                <div class="body">
                                    <h3>{{ $blog->title }}</h3>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}</p>
                                    <div>
                                        <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-b">
                                            اقرأ المزيد<i class="fa-solid fa-arrow-left me-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="modal fade" id="post{{ $blog->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $blog->title }}</h5>
                                        <button type="button" class="btn-close btn-close-white"
                                            data-bs-dismiss="modal" aria-label="إغلاق"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="modal-img" src="{{ $img }}" alt="{{ $blog->title }}"
                                            loading="lazy" onerror="this.src='{{ asset('css/p (1).jpeg') }}'">
                                        <p>{!! nl2br(e($blog->content)) !!}</p>
                                    </div>
                                    <div class="modal-footer justify-content-center gap-2">
                                        <a href="tel:0573108209" class="btn btn-w btn-sm px-4"><i
                                                class="fa-solid fa-phone ms-2"></i>اتصل الآن</a>
                                        <a href="https://wa.me/966573108209" class="btn btn-b btn-sm"><i
                                                class="fa-brands fa-whatsapp ms-2"></i>واتساب</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty text-center">
                    <i class="fa-regular fa-newspaper"></i>
                    <h3 class="mt-3">لا توجد مقالات حتى الآن</h3>
                    <p class="mb-0">سنضيف مقالات جديدة قريباً، تابعنا.</p>
                </div>
            @endif
        </div>
    </section>

    <footer class="py-5 text-center">
        <div class="container">
            <h3 class="text-white mb-2"><i class="fa-solid fa-droplet ms-2" style="color:var(--sky)"></i>وايت مياه
                شمال وشرق الرياض</h3>
            <p class="mb-3">توصيل مياه صالحة للشرب بوايت 6 طن لأحياء شمال وشرق الرياض.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-3"><a href="tel:0573108209">0573108209</a><a
                    href="tel:0561467048">0561467048</a></div>
            <hr class="border-secondary">
            <p class="m-0">جميع الحقوق محفوظة &copy; 2026</p>
            <p class="mt-1 mb-0">تم التصميم بواسطة <a href="https://www.facebook.com/share/18WCirXz8U/"
                    target="_blank" rel="noopener">Devora Web</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // close mobile menu after a click
        document.querySelectorAll('#menu .nav-link').forEach(l => l.addEventListener('click', () => {
            const o = bootstrap.Offcanvas.getInstance(document.getElementById('menu'));
            if (o) o.hide()
        }));
        // water-level scroll bar + click ripple
        const lv = document.querySelector('#lvl i');
        const upd = () => {
            const h = document.documentElement;
            lv.style.height = (h.scrollTop / (h.scrollHeight - h.clientHeight) * 100) + '%'
        };
        addEventListener('scroll', upd, {
            passive: true
        });
        upd();
        document.addEventListener('click', e => {
            const r = document.createElement('span');
            r.className = 'rip';
            r.style.left = e.clientX + 'px';
            r.style.top = e.clientY + 'px';
            document.body.appendChild(r);
            setTimeout(() => r.remove(), 800)
        });
    </script>
</body>

</html>
</param>
