@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'SARAS-Mandatory Disclosure',
        'page' => 'Disclosure',
    ])
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
