@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Our Infrastructure',
        'page' => 'Infrastructure',
    ])

    @include($components . 'campus-tour', ['class' => 'rts-section-padding'])

    <!-- multi row item -->
    <div class="rts-multi-row-section pt--100">
        <div class="container">
            <!-- first -->
            <div id="library" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/library.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content">
                        <h4 class="row-title">Library</h4>
                        <p>The school library is a sanctuary of learning, housing approximately 28,800 books, including
                            reference materials like encyclopedias, yearbooks, dictionaries, almanacs, and atlases. It also
                            offers a vibrant collection of biographies, magazines (educational, entertainment, religious,
                            and sports), aiming to match every reader with the right book.</p>
                    </div>
                </div>
            </div>
            <!-- second -->
            <div id="computer-lab" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content left-side">
                        <h3 class="row-title">Computer Lab</h3>
                        <p>Equipped with three modern labs, the school provides hands-on learning with the latest hardware
                            (i3 10th Gen, 1TB SSD, 8GB RAM, LED monitors) and software (word processors, spreadsheets, image
                            editing, animation, etc.).
                            Computer education is mandatory from Class I-XII as per NEP, and internet access is allowed
                            under teacher supervision. Additional facilities include audio-visual labs and a collection of
                            inspirational movies.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/computer-lab.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
            </div>
            <!-- third -->
            <div id="physics-lab" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/physics-lab.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content">
                        <div class="program-list">
                            <div class="single-list">
                                <h4 class="row-title">Physics Lab</h4>
                                <p>A spacious, CBSE-compliant lab supporting theory through practical learning with
                                    equipment ranging from magnets and pulleys to potentiometers and galvanometers.
                                    Students from Classes IX–XII regularly attend lab sessions to gain a deeper
                                    understanding of physics concepts. All equipment is well-maintained, and teachers ensure
                                    engaging, hands-on learning experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fourth -->
            <div id="chemistry-lab" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content left-side">
                        <h3 class="row-title">Chemistry Lab</h3>
                        <p>A well-equipped lab providing individual workstations with burners, plug points, and modern
                            apparatus like distillation units and electronic weighing machines.
                            It emphasizes safety, with fire extinguishers and separate chemical storage. The lab focuses on
                            developing scientific skills, teamwork, and inspiring future scientists.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/chemistry-lab.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
            </div>
            <!-- fifth -->
            <div id="biology-lab" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/bio-lab.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content">
                        <div class="program-list">
                            <div class="single-list">
                                <h4 class="row-title">Biology Lab</h4>
                                <p>A well-equipped lab providing individual workstations with burners, plug points, and
                                    modern apparatus like distillation units and electronic weighing machines.
                                    It emphasizes safety, with fire extinguishers and separate chemical storage. The lab
                                    focuses on developing scientific skills, teamwork, and inspiring future scientists.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sixth -->
            <div id="music-room" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content left-side">
                        <h3 class="row-title">Music Room</h3>
                        <p>Music education is offered through instruments like harmonium, casio, tabla, and dholak.
                            The school features choir and instrumental groups that regularly win awards at various levels,
                            nurturing both artistic expression and discipline.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/music-room.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
            </div>
            <!-- seventh -->
            <div id="sports-room" style="margin-bottom: 100px; "  class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/sports-room.png') }}" alt="undergraduate education">
                    </div>
                </div>
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content">
                        <div class="program-list">
                            <div class="single-list">
                                <h4 class="row-title">Sports Room</h4>
                                <p>Promoting the philosophy of ‘Sport for All’, the school encourages student participation
                                    across skill levels.Facilities include:
                                <ul>
                                    <li>Basketball court</li>
                                    <li>Football field</li>
                                    <li>Cricket ground</li>
                                    <li>Volleyball court</li>
                                    <li>Badminton court</li>
                                    <li>Athletics field</li>
                                    <li>Kho-Kho ground</li>
                                    <li>Chess arena</li>
                                </ul>
                                Students achieve excellence at zonal, state, and national levels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- multi row item end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
