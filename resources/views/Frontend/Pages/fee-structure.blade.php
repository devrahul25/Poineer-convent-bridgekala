@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Fee Structure for the Academic Year 2025–2026',
        'page' => 'Admission',
    ])

    <!-- tution fee -->
    <div class="page-content-top pt--120 pt__md--80">
        <div class="container">
            <div class="row">
                <h3 class="rts-section-title">About Tuition & Fees</h3>
                <p class="desc">The fee structure for the academic year 2025–2026 is designed to offer quality education at
                    a fair cost. Monthly fees, annual charges, and admission fees vary by class level, ensuring that
                    students across grades have access to structured learning at reasonable rates.
                    All tuition details are reviewed and proposed in advance to allow parents and guardians sufficient time
                    for planning.

                    Additional development charges at 15% of the total fee may apply, and these are utilized strictly under
                    designated educational development heads.
                </p>
                </li>
            </div>
        </div>
    </div>
    <!-- semister fee chart -->
    <div class="semister-fee pb--120 pb__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h5 class="rts-section-title">Pre-Primary</h5>

                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel"
                                aria-labelledby="undergrade-1-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Class</th>
                                            <th>Monthly Fee (₹)</th>
                                            <th> Annual Charges (₹)</th>
                                            <th> Admission Fee (₹)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pre-Primary – I</td>
                                            <td>5,570</td>
                                            <td>11,190
                                            </td>
                                            <td>200
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pre-Primary – II</td>
                                            <td>5,570</td>
                                            <td>11,190
                                            </td>
                                            <td>200 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second part -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">Primary (Class I – V)</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>Class</td>
                                            <td>Monthly Fee (₹)</td>
                                            <td>Annual Charges (₹)</td>
                                            <td>Admission Fee (₹)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>I</td>
                                            <td>4,380</td>
                                            <td>13,525</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>II</td>
                                            <td>4,380</td>
                                            <td>13,525</td>
                                            <td>200</td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>III</td>
                                            <td>4,770</td>
                                            <td>13,525</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <td>IV</td>
                                            <td>4,770</td>
                                            <td>13,525</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <td>V</td>
                                            <td>5,240</td>
                                            <td>13,525</td>
                                            <td>200</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Third part --}}
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">Middle (Class VI – VIII)</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>Class</td>
                                            <td>Monthly Fee (₹)</td>
                                            <td>Annual Charges (₹)</td>
                                            <td>Admission Fee (₹)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>VI</td>
                                            <td>5,240</td>
                                            <td>15,890</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>VII</td>
                                            <td>5,240</td>
                                            <td>15,890</td>
                                            <td>200</td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>VIII</td>
                                            <td>5,240</td>
                                            <td>15,890</td>
                                            <td>200</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fourth part --}}
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">Secondary (Class IX – X)</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>Class</td>
                                            <td>Monthly Fee (₹)</td>
                                            <td>Annual Charges (₹)</td>
                                            <td>Admission Fee (₹)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>IX</td>
                                            <td>6,030</td>
                                            <td>15,890</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>X</td>
                                            <td>6,630</td>
                                            <td>15,890</td>
                                            <td>200</td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fifth part --}}
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">Senior Secondary (Class XI – XII)</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>Class</td>
                                            <td>Monthly Fee (₹)</td>
                                            <td>Annual Charges (₹)</td>
                                            <td>Admission Fee (₹)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>XI</td>
                                            <td>7,370</td>
                                            <td>18,860</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>XII</td>
                                            <td>7,370</td>
                                            <td>18,860</td>
                                            <td>200</td>
                                        </tr>
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

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
