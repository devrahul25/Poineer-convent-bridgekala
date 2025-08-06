@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'School Overview',
        'page' => 'About Us',
    ])

    <!-- tution fee -->
    <div class="page-content-top pt--120 pt__md--80">
        <div class="container">
            <div class="row d-flex align-item-center justify-content-center">
                <div class="col-lg-6 ">
                    <img style="height: 400px; width:600px" src="/assets/images/school.jpg" alt="">
                </div>
                <div  class="col-lg-6">
                    <h4>About Our School</h4>
                    <p class="desc">Pioneer Convent Sr. Sec. School, located in Lok Nayak Puram, Bakkarwala, New Delhi, is
                        a distinguished institution committed to academic excellence and holistic development. Nestled
                        within a lush green 2-acre campus, the school provides a nurturing environment enriched with
                        state-of-the-art infrastructure, comprehensive sports facilities, and a wide array of co-curricular
                        activities.

                        Affiliated with CBSE up to Class XII and offering all academic streams, Pioneer Convent believes in
                        developing strong mind-body-soul coordination in students through a thoughtfully designed
                        curriculum. From robotics and language labs to music, arts, and sports, every element of school life
                        fosters creativity, critical thinking, and personal growth. With a dedicated faculty and a
                        child-centric approach rooted in Multiple Intelligence Theory, we aim to nurture responsible,
                        confident, and globally competent learners.
                    </p>
                </div>
                <h4>Recognition and Affiliation</h4>
                <p>Pioneer Convent School is affiliated to the Central Board of Secondary Education (CBSE), Delhi, with
                    Affiliation Number 2730606 and School Code 85345. The school is recognized under the RTE Act, 2009, and
                    adheres to all mandatory norms, including possession of valid Fire Safety and Building Safety
                    Certificates, DEO Certification for Affiliation, and Water, Health, and Sanitation Certificates. Our
                    unwavering commitment to educational excellence is reflected in our consistently outstanding academic
                    performance, achieving a 100% pass rate in Class X and over 90% success in Class XII examinations in
                    recent academic sessions.</p>
                <h4>Aims and Objectives</h4>
                <p style="margin-bottom: 100px">At Pioneer Convent, our mission is to educate young leaders equipped for global citizenship. We strive to
                    deliver holistic education that seamlessly integrates academics, co-curricular activities, and essential
                    life skills. By connecting students with nature and real-world challenges, we aim to inspire creativity,
                    innovation, and resilience. Deeply rooted in Indian cultural values such as honesty, discipline,
                    empathy, and truthfulness, our approach nurtures leadership, adaptability, and compassion. We are
                    committed to empowering every child to realize their full potential through personalized learning
                    strategies, supported by our dedicated educators. We firmly believe that true education cultivates both
                    intellect and character, laying the foundation for a brighter and more compassionate world.</p>
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
