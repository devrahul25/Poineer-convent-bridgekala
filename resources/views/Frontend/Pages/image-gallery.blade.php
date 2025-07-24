@extends($layout)

@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Gallery',
        'page' => 'Gallery'
    ])

    @php
        // ✅ List your gallery images here
        $galleryImages = [
            'assets/images/about/about__5.jpg',
            'assets/images/gallery/02.jpg',
            'assets/images/gallery/03.jpg',
            'assets/images/gallery/04.jpg',
            'assets/images/gallery/05.jpg',
            'assets/images/gallery/06.jpg',
        ];
    @endphp

    <!-- Gallery Grid -->
    <div class="rts-gallery v_3 rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-start justify-content-sm-center g-4">
                
                @foreach($galleryImages as $image)
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
