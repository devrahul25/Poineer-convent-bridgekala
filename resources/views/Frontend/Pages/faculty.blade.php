@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Our Faculty',
        'page' => 'Academics',
    ])

    <!-- faculty directory -->
    <section class="rts-faculty rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-md-11">
                    <div class="rts-section mb--50">
                        <p>A good education is a transformative process that fosters meaningful and visible growth in
                            students—growth that embraces change and can be evaluated. At Pioneer, our dedicated faculty
                            serves as a crucial pillar of this journey. With unwavering efficiency, selfless devotion, and a
                            deep sense of duty, our staff not only imparts knowledge but also nurtures the holistic
                            development of every child entrusted to us.
                            The faculty works tirelessly to unlock the potential of each student, driven by a steadfast
                            commitment to excellence. Their persistent efforts aim to guide our pupils toward qualitative
                            growth—illuminating new paths, instilling purpose, and inspiring progress. In doing so, they
                            help shape a brighter, more compassionate world for us all.
                        </p>
                    </div>
                </div>
            </div>
            <!-- semister fee chart -->
            <div class="semister-fee pb--120 pb__md--80">
                <div class="container">
                    <div class="row">
                        <div class="semister-fee__content">
                            <h5 class="rts-section-title">Faculty Details</h5>

                            <!-- tab item -->
                            <div class="rts-fee-chart">
                                <div class="rts-fee-chart__content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel"
                                        aria-labelledby="undergrade-1-tab">
                                        <table class="table">
                                            <thead class="table-theme">
                                                <tr>
                                                    <th>Designation</th>
                                                    <th>Qualifications</th>
                                                    <th>Total No.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Vice-Principal</td>
                                                    <td>M.Sc./ B.Ed/M.Ed</td>
                                                    <td>01</td>
                                                </tr>
                                                <tr>
                                                    <td>PGT</td>
                                                    <td>M.Com./MA./MCA/M.Sc./M.Tech/ B.Ed/M.Ed/M.PEd</td>
                                                    <td>15</td>
                                                </tr>
                                                <tr>
                                                    <td>TGT</td>
                                                    <td>BA./B.Com/B.Sc/M.Com./MA./MCA/M.Sc./ B.Ed/M.Ed/B.PEd</td>
                                                    <td>08</td>
                                                </tr>
                                                <tr>
                                                    <td>Primary Teachers</td>
                                                    <td>BA./B.Com//B.Sc./ B.Ed/B.PEd</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <td>Nursery Teachers</td>
                                                    <td>Intermediate/BA./B.Com//B.Sc./ B.Ed/NTT</td>
                                                    <td>03</td>
                                                </tr>
                                                <tr>
                                                    <td>Lab. Asst.</td>
                                                    <td>B.Sc./ B.Ed</td>
                                                    <td>01</td>
                                                </tr>
                                                <tr>
                                                    <td>Counsellor/Wellness Teacher</td>
                                                    <td>MA/PG Diploma in Guidance and Counselling</td>
                                                    <td>01</td>
                                                </tr>
                                                <tr>
                                                    <td>Special Educator</td>
                                                    <td>BA/Diploma in Special Education</td>
                                                    <td>01</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tution fee end -->

        </div>
    </section>
    <!-- faculty directory end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
