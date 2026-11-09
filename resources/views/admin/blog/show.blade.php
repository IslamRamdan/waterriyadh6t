<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @php
        $img = $blog->image ? asset('storage/' . $blog->image) : asset('css/p (1).jpeg');
        $desc = \Illuminate\Support\Str::limit(strip_tags($blog->content), 155);
    @endphp
    <title>{{ $blog->title }} | وايت مياه شمال وشرق الرياض</title>
    <meta name="description" content="{{ $desc }}">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="Devora Web">
    <meta property="og:locale" content="ar_SA">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ $desc }}">
    <meta property="og:image" content="{{ $img }}">
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
            padding: 70px 0
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
                padding: 48px 0
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

        .btn-line {
            border: 2px solid rgba(255, 255, 255, .75);
            color: #fff;
            font-weight: 700;
            border-radius: 14px;
            padding: 10px 26px;
            transition: .3s
        }

        .btn-line:hover {
            background: #fff;
            color: var(--ink)
        }

        /* banner */
        .top {
            position: relative;
            color: #fff;
            text-align: center;
            padding: 80px 0 120px;
            background: linear-gradient(rgba(11, 21, 70, .7), rgba(26, 115, 232, .5)), url('{{ asset('css/water.jpg') }}') center/cover fixed
        }

        .top h1 {
            font-size: clamp(1.7rem, 4.2vw, 2.8rem);
            max-width: 900px;
            margin: 0 auto 14px
        }

        .top .meta {
            color: #dbe8ff;
            font-weight: 600
        }

        .top .meta i {
            color: var(--sky);
            margin-left: 6px
        }

        .crumbs {
            font-size: .9rem;
            margin-bottom: 14px
        }

        .crumbs a {
            color: var(--acc);
            text-decoration: none;
            font-weight: 700
        }

        .crumbs span {
            color: #b6c6f0
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

        /* article */
        .post {
            background: #fff;
            border-radius: 24px;
            padding: 20px;
            box-shadow: 0 14px 34px rgba(11, 21, 70, .1);
            border-bottom: 5px solid var(--sky);
            margin-top: -70px;
            position: relative;
            z-index: 2
        }

        .post .cover {
            width: 100%;
            max-height: 440px;
            object-fit: cover;
            border-radius: 18px;
            transition: .5s
        }

        .post .cover:hover {
            border-radius: 50px 12px 50px 12px
        }

        .post .txt {
            padding: 24px 12px 10px;
            color: #3f5185;
            font-size: 1.05rem;
            overflow-wrap: anywhere
        }

        .share {
            border-top: 1px dashed #b9d4fa;
            margin: 10px 12px 0;
            padding-top: 18px
        }

        .share b {
            margin-left: 10px
        }

        .sh {
            display: inline-grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            color: #fff;
            text-decoration: none;
            margin-left: 6px;
            transition: .3s
        }

        .sh:hover {
            color: #fff;
            transform: translateY(-5px) rotate(-8deg)
        }

        /* sidebar */
        .side {
            position: sticky;
            top: 96px
        }

        .box {
            background: #fff;
            border-radius: 22px;
            padding: 24px 20px;
            border-top: 6px solid var(--blue);
            box-shadow: 0 10px 26px rgba(11, 21, 70, .08);
            margin-bottom: 24px
        }

        .box h3 {
            font-size: 1.15rem;
            margin-bottom: 16px
        }

        .box h3 i {
            color: var(--blue);
            margin-left: 8px
        }

        .mini {
            display: flex;
            gap: 12px;
            align-items: center;
            padding: 10px;
            border-radius: 16px;
            text-decoration: none;
            color: var(--ink);
            transition: .35s
        }

        .mini img {
            width: 78px;
            height: 66px;
            object-fit: cover;
            border-radius: 12px;
            flex: none
        }

        .mini b {
            display: block;
            font-size: .95rem;
            line-height: 1.5
        }

        .mini small {
            color: #52659a
        }

        .mini:hover {
            background: var(--foam);
            color: var(--blue);
            transform: translateX(-6px)
        }

        .cta {
            background: linear-gradient(145deg, var(--blue), var(--ink));
            color: #fff;
            border-top: 0;
            text-align: center
        }

        .cta h3 i {
            color: var(--acc)
        }

        .cta p {
            color: #dbe8ff;
            font-size: .95rem
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

        @@media(max-width:991.98px) {
            .side {
                position: static
            }
        }

        @@media(max-width:767.98px) {
            .top {
                padding: 56px 0 100px
            }

            .post {
                padding: 12px;
                margin-top: -60px
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

            .mini:hover {
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
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/mdwna') }}">المدونة</a></li>
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
            <div class="crumbs"><a href="{{ url('/') }}">الرئيسية</a> <span>/</span> <a
                    href="{{ route('blog.index') }}">المدونة</a></div>
            <h1>{{ $blog->title }}</h1>
            <div class="meta"><i class="fa-regular fa-calendar"></i>{{ $blog->created_at?->format('Y/m/d') }}</div>
        </div>
        <div class="wave"><svg viewBox="0 0 2880 60" preserveAspectRatio="none" height="60">
                <path fill="#f6faff"
                    d="M0,30 C180,65 360,-5 720,30 C1080,65 1260,-5 1440,30 C1620,65 1800,-5 2160,30 C2520,65 2700,-5 2880,30 L2880,60 L0,60Z" />
            </svg></div>
    </header>

    <section class="pb-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <article class="post">
                        <img class="cover" src="{{ $img }}" alt="{{ $blog->title }}"
                            onerror="this.src='{{ asset('css/p (1).jpeg') }}'">
                        <div class="txt">{!! $blog->content !!}</div>
                        <div class="share">
                            <b>شارك المقال:</b>
                            <a class="sh" style="background:#25d366" target="_blank" rel="noopener"
                                aria-label="واتساب"
                                href="https://wa.me/?text={{ urlencode($blog->title . ' ' . url()->current()) }}"><i
                                    class="fa-brands fa-whatsapp"></i></a>
                            <a class="sh" style="background:#1877f2" target="_blank" rel="noopener"
                                aria-label="فيسبوك"
                                href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a class="sh" style="background:#111" target="_blank" rel="noopener"
                                aria-label="إكس"
                                href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(url()->current()) }}"><i
                                    class="fa-brands fa-x-twitter"></i></a>
                        </div>
                    </article>
                    <div class="mt-4">
                        <a href="{{ url('/mdwna') }}" class="btn btn-b"><i
                                class="fa-solid fa-arrow-right ms-2"></i>كل المقالات</a>
                    </div>
                </div>

                <aside class="col-lg-4">
                    <div class="side">
                        <div class="box cta">
                            <h3><i class="fa-solid fa-truck-droplet"></i>تحتاج وايت مياه؟</h3>
                            <p>وايت 6 طن صغير يدخل الشوارع الضيقة ويعبّي خزانك بمياه صالحة للشرب.</p>
                            <a href="tel:0573108209" class="btn btn-w w-100 mb-2"><i
                                    class="fa-solid fa-phone ms-2"></i>0573108209</a>
                            <a href="https://wa.me/966573108209" class="btn btn-line w-100"><i
                                    class="fa-brands fa-whatsapp ms-2"></i>واتساب</a>
                        </div>

                        @php $others = $blogs->where('id', '!=', $blog->id); @endphp
                        @if ($others->count())
                            <div class="box">
                                <h3><i class="fa-regular fa-newspaper"></i>أحدث المقالات</h3>
                                @foreach ($others as $b)
                                    <a class="mini" href="{{ url('/mdwna/' . $b->id) }}">
                                        <img src="{{ $b->image ? asset('storage/' . $b->image) : asset('css/p (1).jpeg') }}"
                                            alt="{{ $b->title }}" loading="lazy"
                                            onerror="this.src='{{ asset('css/p (1).jpeg') }}'">
                                        <span>
                                            <b>{{ \Illuminate\Support\Str::limit($b->title, 55) }}</b>
                                            <small><i
                                                    class="fa-regular fa-calendar ms-1"></i>{{ $b->created_at?->format('Y/m/d') }}</small>
                                        </span>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </aside>
            </div>
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
