@extends($layout)

@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Photo Gallery',
        'page' => 'Gallery',
    ])

    @php
        // ✅ List your gallery images here
        $galleryImages = [
            'assets/images/photoGallery/1.jpg',
            'assets/images/photoGallery/2.png',
            'assets/images/photoGallery/3.jpg',
            'assets/images/photoGallery/5.jpg',
            'assets/images/photoGallery/6.jpg',
            'assets/images/photoGallery/7.jpg',
            'assets/images/photoGallery/8.jpg',
            'assets/images/photoGallery/9.jpg',
            'assets/images/photoGallery/10.jpg',
            'assets/images/photoGallery/11.jpg',
            'assets/images/photoGallery/12.jpg',
            'assets/images/photoGallery/13.jpg',
            'assets/images/photoGallery/14.jpg',
            'assets/images/photoGallery/15.jpg',
            'assets/images/photoGallery/16.jpg',
            'assets/images/photoGallery/17.jpg',
            'assets/images/photoGallery/18.jpg',
            'assets/images/photoGallery/19.jpg',
            'assets/images/photoGallery/20.jpg',
            'assets/images/photoGallery/21.png',
            'assets/images/photoGallery/22.png',
            'assets/images/photoGallery/23.jpg',
            'assets/images/photoGallery/24.png',
            'assets/images/photoGallery/25.png',
            'assets/images/photoGallery/26.jpg',
            'assets/images/photoGallery/27.jpg',
            'assets/images/photoGallery/28.jpg',
            'assets/images/photoGallery/29.jpg',
            'assets/images/photoGallery/30.jpg',
            'assets/images/photoGallery/31.jpg',
            'assets/images/photoGallery/32.jpg',
            'assets/images/photoGallery/33.jpg',
            'assets/images/photoGallery/34.jpg',
            'assets/images/photoGallery/35.jpg',
            'assets/images/photoGallery/36.jpg',
            'assets/images/photoGallery/37.jpg',
            'assets/images/photoGallery/38.jpg',
            'assets/images/photoGallery/39.jpg',
            'assets/images/photoGallery/40.jpg',
            'assets/images/photoGallery/41.jpg',
            'assets/images/photoGallery/42.jpg',
            'assets/images/photoGallery/43.jpg',
            'assets/images/photoGallery/44.jpg',
            'assets/images/photoGallery/45.jpg',
            'assets/images/photoGallery/46.jpg',
            'assets/images/photoGallery/47.jpg',
            'assets/images/photoGallery/48.jpg',
            'assets/images/photoGallery/49.png',
            'assets/images/photoGallery/50.jpg',
            'assets/images/photoGallery/51.jpg',
            'assets/images/photoGallery/52.jpg',
            'assets/images/photoGallery/53.jpg',
            'assets/images/photoGallery/54.jpg',
        ];

    @endphp

    <!-- Gallery Grid -->
    <div class="rts-gallery v_3 rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-start justify-content-sm-center g-4">

                @foreach ($galleryImages as $image)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="single-blog">
                            <div class="blog__thumb">
                                <a href="{{ asset($image) }}" target="_blank">
                                    <img src="{{ asset($image) }}" alt="Gallery Image">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Gallery Grid End -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
