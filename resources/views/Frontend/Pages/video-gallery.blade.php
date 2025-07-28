@extends($layout)

@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Video Gallery',
        'page' => 'Gallery',
    ])

    @php
        // ✅ List of video thumbnails & video URLs
        $videoGallery = [
            [
                'thumbnail' => 'assets/images/gallery/video-thumb1.jpg',
                'video' => 'https://www.youtube.com/watch?v=abcd1234',
            ],
            [
                'thumbnail' => 'assets/images/gallery/video-thumb2.jpg',
                'video' => 'https://www.youtube.com/watch?v=wxyz5678',
            ],
            [
                'thumbnail' => 'assets/images/gallery/video-thumb3.jpg',
                'video' => 'https://www.youtube.com/watch?v=lmno9012',
            ],
            [
                'thumbnail' => 'assets/images/gallery/video-thumb4.jpg',
                'video' => 'https://www.youtube.com/watch?v=qrst3456',
            ],
        ];
    @endphp

    <!-- Video Gallery Grid -->
    {{-- <div class="rts-gallery v_3 rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-start justify-content-sm-center g-4">

                @foreach ($videoGallery as $video)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="single-blog video-card">
                            <div class="blog__thumb position-relative">
                                <!-- Thumbnail -->
                                <img src="{{ asset($video['thumbnail']) }}" alt="Video Thumbnail" class="img-fluid">

                                <!-- Play Button Overlay -->
                                <a href="{{ $video['video'] }}" class="popup-video play-btn">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div> --}}
    <!-- Video Gallery Grid End -->

    <section class="rts-application-area moving rts-section-padding v_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="rts__section--wrapper v__9">
                        <h3 class="rts__section--title">Content coming soon! This section is being updated to serve you
                            better.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection

@push('styles')
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <style>
        .video-card {
            position: relative;
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 15px;
            border-radius: 50%;
            font-size: 24px;
        }
    </style>
@endpush

@push('scripts')
    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-video').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>
@endpush
