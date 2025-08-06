@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => "Manager's Desk",
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
                                <img src="{{ asset('assets/images/faculty/manager.jpg') }}" alt="member image">
                            </div>
                            <div class="faculty-member__info">
                                <div class="faculty-member__info--social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>----------</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+xxxxxxxxxx</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-10">
                    <div class="member-info ">
                        <div class="member-info__details">
                            <div class="short-info">
                                <h4 class="rts-section-title mb--15">Neelam Gera</h4>
                                <span class="designation">Manager – Pioneer Convent School</span>
                                <p class="description">
                                    Neelam Gera is a passionate educationist deeply committed to shaping and nurturing
                                    future leaders who possess not only academic brilliance but also strong moral values and
                                    essential life skills. With a visionary approach to holistic education, she believes in
                                    empowering students to grow into responsible, confident, and empathetic individuals
                                    capable of leading with wisdom, integrity, and distinction in every sphere of life. Her
                                    dedication lies in creating a learning environment where academic excellence is balanced
                                    with ethical grounding and personal growth, ensuring students are well-prepared to face
                                    the challenges of the modern world while remaining rooted in timeless principles.
                                </p>
                            </div>
                            <div class="short-info">
                                <h5 class="rts-section-title">Biography</h5>
                                <p class="description">
                                    Neelam Gera firmly believes that “You are the nation-builders, the movers of technology,
                                    and the agents of change.” Her vision for Pioneer Convent School is to equip students
                                    with leadership and managerial skills, instill moral ethics, and cultivate technical and
                                    creative abilities that contribute to their families, society, and the nation.

                                    Since 1995, under her guidance, Pioneer Convent School has been committed to excellence
                                    in education, providing opportunities that help students excel academically while
                                    upholding traditional Indian values like honesty, non-violence, empathy, and
                                    truthfulness.

                                    She emphasizes holistic growth by offering a vibrant mix of academic and co-curricular
                                    activities such as debates, theater, environment clubs, sports (badminton, table tennis,
                                    basketball, cricket, etc.), music, dance, art, and more.

                                    Her leadership focuses on creating a safe, healthy, intellectually stimulating, and
                                    enjoyable learning environment, encouraging active collaboration and technology-based
                                    methodologies to prepare students to lead their country with distinction.
                                </p>
                                <h5 class="rts-section-title">Core Philosophy:</h5>
                                <p>
                                    <li>Crafting students for the future</li>
                                    <li>Instilling values & life skills alongside academics</li>
                                    <li>Encouraging leadership, confidence & discipline</li>
                                    <li>Blending traditional values with modern learning</li>
                                </p> <br>
                            </div>
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
