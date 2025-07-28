@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Co-Curricular and Cultural Activities at Pioneer',
        'page' => 'Activities',
    ])

    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">

                <div
                    class="col-lg-12 col-md-12 text-center d-flex flex-column justify-content-center align-items-center mb-5">
                    <h5 style="font-size: 32px;"> "Education without co-curricular activities is like educating the mind
                        without educating the soul."
                    </h5>
                    <div class="col-lg-11">
                        <p>
                            At Pioneer, we firmly believe that education goes beyond textbooks. Co-curricular activities
                            such as
                            debates, declamations, singing, dancing, sports, recitation, short plays, quizzes, and many more
                            are
                            an integral part of our school curriculum. These activities offer every child a platform to
                            express
                            themselves, build confidence, and foster a spirit of independence.
                            Through this diverse range of experiences, Pioneerians learn the value of teamwork, leadership,
                            responsibility, and time management. Co-curricular involvement also nurtures moral and social
                            values, playing a pivotal role in honing innate talents and shaping our students into sensitive,
                            responsible global citizens.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history" style="margin-bottom: 100px">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('assets/images/Co-curricular/cult.jpg') }}" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Cultural Activities</h4>
                        <p>
                            Cultural programs are key to holistic development. At Pioneer, we believe that participation in
                            cultural activities encourages students to explore their creative sides while gaining life
                            skills and social awareness. These activities instill confidence, deepen understanding of one’s
                            cultural roots, and prepare students to meet the challenges of the 21st century with clarity and
                            resilience.

                        </p>
                        <p>We offer a rich array of cultural experiences through:
                            <li><b>Special Assemblies</b> to celebrate national and local festivals</li>
                            <li><b>Art & Craft Exhibitions</b></li>
                            <li><b>Dance and Drama Performances</b></li>
                            <li><b>Inter-House Cultural Competitions</b></li>
                        </p>
                        <p>These platforms give students the opportunity to perform, collaborate, and grow in a dynamic
                            learning environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->
    <!-- history -->
    <div class="rts-history" style="margin-bottom: 100px">
        <div class="container">
            <div class="row g-5  justify-content-center align-items-center" style="text-align: center">

                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Student Clubs at Pioneer</h4>
                        <p>
                            To further enrich student life, we offer a variety of vibrant clubs that help students explore
                            their passions and discover new interests:
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->
    <!-- history -->
    <div class="rts-history" style="margin-bottom: 100px">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">

                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Dramatic Club</h4>
                        <p>
                            The Dramatics Club encourages students to express ideas and emotions through performance. It
                            builds confidence, enhances oratory skills, and fosters empathy through role-play and
                            storytelling.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('assets/images/Co-curricular/drama.jpg') }}" alt="history">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->
    <!-- history -->
    <div class="rts-history" style="margin-bottom: 100px">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('assets/images/Co-curricular/art.png') }}" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Art Club</h4>
                        <p>
                            Art education at Pioneer is more than just drawing—it's a medium of exploration and
                            problem-solving. Students are encouraged to think creatively and express ideas visually.
                        </p>
                        <p>The Annual Art Exhibition showcases their talent through a wide range of works, including:
                        <ul>
                            <li>Paintings</li>
                            <li>Sculptures</li>
                            <li>Posters</li>
                            <li>Murals</li>
                            <li>Photographs</li>
                            <li>Pencil Sketches</li>
                            <li>Mixed Media Creations</li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- history end-->
    <!-- history -->
    <div class="rts-history" style="margin-bottom: 100px">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">

                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Eco Club</h4>
                        <p>
                            The Eco Club at Pioneer instills environmental awareness and responsibility in students. Through
                            activities like plantation drives, recycling campaigns, and awareness programs, students learn
                            to care for the planet and make sustainable choices.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('assets/images/Co-curricular/eco.png') }}" alt="history">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->

    {{-- @include($components . 'campus-tour', ['class' => 'rts-section-padding']) --}}
    {{-- @include($components . 'testimonial-v3', ['class' => 'rts-section-padding']) --}}
    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
