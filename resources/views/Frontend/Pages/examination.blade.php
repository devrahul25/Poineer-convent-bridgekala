@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Examinations',
        'page' => 'Academics',
    ])

    <!-- tution fee -->
    <div class="page-content-top pt--120 pt__md--80">
        <div class="container">
            <div class="row d-flex align-item-center justify-content-center">
                <div class="col-lg-6">
                    <p class="desc">At Pioneer, academic excellence is consistently emphasized. Students are encouraged to
                        cultivate clear thinking, logical reasoning, and strong analytical and interpretative skills,
                        equipping
                        them to confidently face challenges beyond the school environment.
                        In the Pre-school and Pre-primary levels, learning is conducted entirely through 'Play-Way methods,'
                        ensuring a joyful and engaging experience. At the Primary level, as students’ cognitive and social
                        skills develop, a balanced approach involving both group activities and individual tasks is adopted.
                        From Class VI onward, the teaching-learning process incorporates lectures, active student
                        participation,
                        projects, and hands-on practical work.
                        The academic session for Classes I to XII is divided into two terms: the First Term (April to
                        September)
                        and the Second Term (October to March). For Pre-school and Pre-primary students, the academic year
                        is
                        divided into three terms.
                        Promotion to the next class is based on achieving the required academic standards in all subjects.
                        Overall student progress is communicated through progress cards, which must be reviewed and signed
                        by
                        parents or guardians before being returned to the school. For Classes Pre-school to II, students are
                        evaluated using a grading system. Any student receiving an 'E' Grade at the end of the term may be
                        advised to repeat the class for better foundational learning.
                    </p>
                    <h4>Honouring Academic Excellence</h4>
                    <ol style="margin-bottom: 100px">
                        <li>Scholar badges are awarded to the meritorious students.</li>
                        <li>Awards are presented to the toppers of classes VI to IX.</li>
                        <li>For class X toppers subject-wise highest marks scorers are awarded.</li>

                    </ol>
                </div>
                <div class="col-lg-6 ">
                    <img style="height: 400px; width:600px" src="/assets/images/exam.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- tution fee end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
