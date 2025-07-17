
<!-- BREADCRUMB AREA -->
<section class="rts-breadcrumb {{ $class ?? '' }}" data-background="{{ asset('assets/images/banner/' . ($image ?? '')) }}" style="background-image: url('{{ asset('assets/images/banner/' . ($image ?? '')) }}');">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $page ?? '' }}</li>
                    </ul>
                    <h2 class="section-title">{{ $title ?? '' }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BREADCRUMB AREA END -->
