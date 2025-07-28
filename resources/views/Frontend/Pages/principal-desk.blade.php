@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => "Principal's Desk",
        'page' => "About Us",
    ])

    <!-- faculty directory -->
    <section class="rts-faculty-details  rts-section-padding">
        <div class="container">
            <div class="row sticky-coloum-wrap justify-content-sm-center g-5">
                <div class="col-lg-4 col-md-10 col-sm-10 sticky-coloum-item">
                    <div class="faculty-member">
                        <div class="faculty-member__details rt-center ">
                            <div class="faculty-member__image">
                                <img src="{{ asset('assets/images/faculty/mem-1.jpg') }}" alt="member image">
                            </div>
                            <div class="faculty-member__info">
                                <div class="faculty-member__info--social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>------------</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+91-XXXXXXXXXX</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-10">
                    <div class="member-info ">
                        <div class="member-info__details">
                            <div class="short-info">
                                <h4 class="rts-section-title mb--15">Dr. Seema Bajaj</h4>
                                <span class="designation">Principal, Pioneer Convent Sr. Sec. School
                                </span>
                            </div>
                            <div class="short-info">
                                <h5 class="rts-section-title">About Me</h5>
                                <p class="description">
                                    With an unwavering passion for education and a profound belief in nurturing the mind,
                                    body, and soul, I serve as the Principal of Pioneer Convent Sr. Sec. School. Over the
                                    years, I have championed a dynamic educational model rooted in timeless Indian values,
                                    global best practices, and student-centric learning.

                                    Our school community is dedicated to fostering leadership, compassion, and discipline
                                    through academic excellence and co-curricular engagement. I believe in empowering
                                    students with integrity, adaptability, and resilience to lead in an ever-evolving world.
                                    Education is not merely the transfer of knowledge, but the shaping of a conscious and
                                    responsible generation.
                                </p>
                                <h5 class="rts-section-title">Educational Philosophy</h5>
                                <p class="description">At Pioneer Convent, we merge modern infrastructure with holistic
                                    pedagogy — integrating club activities such as robotics, performing arts, sports, and
                                    life skills with academic rigor. Inspired by the Multiple Intelligence Theory, our
                                    curriculum identifies and develops each student’s innate potential.

                                    My role as an educational leader is to work alongside educators, parents, and
                                    stakeholders to build an ecosystem where respect, discipline, and curiosity thrive.</p>
                                <h5 class="rts-section-title">Core Values</h5>
                                <p class="description">
                                    <li> Integrity & Leadership</li>
                                    <li>Holistic, Student-Centered Learning</li>
                                    <li>Mind-Body-Soul Coordination</li>
                                    <li>Discipline, Empathy, and Respect</li>
                                    <li>Global Citizenship with Indian Values</li>
                                </p>
                            </div>
                            <div class="short-info">
                                <h5 class="rts-section-title">Message to Students</h5>
                                <div class="course__single">
                                    {{-- <ul class="list-unstyled">
                                        <li><a href="#">LANG 1220/1221 Beginning Latin I & II</a></li>
                                        <li><a href="#">LANG 3760/3761Advanced Greek I and II (Lucian, Longus, and
                                                Homer)</a></li>
                                        <li><a href="#">GAH 1038 Reacting to the Past</a></li>
                                        <li><a href="#">GAH 1401 Classical Myth and Legend</a></li>
                                    </ul> --}}
                                    Respect your teachers, embrace discipline, and allow education to mold you into
                                    compassionate leaders. Let learning be a joyful, transformative experience. At Pioneer,
                                    we prepare you not just for exams, but for life.

                                    Let us instill love, unity, and purpose — and together, let's shape a better tomorrow.
                                </div>
                            </div>
                            {{-- <div class="short-info">
                                <h5 class="rts-section-title">PUBLICATIONS</h5>
                                <p>Review of Stefan Tilg’s Chariton of Aphrodisias and the invention of the Greek Love Novel
                                    (Oxford UP, 2010).Bryn Mawr Classical Review. Bryn Mawr, PA: BMCR, 2011.
                                </p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faculty directory end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
