@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Academic Calendar (2025-26)',
        'page' => 'Academics',
    ])

    <!-- tution fee -->
    <div class="page-content-top pt--120 pt__md--80">
        <div class="container">
            <div class="row">   
                <div class="semister-fee pb--60">
                    <div class="container">
                        <div class="row">
                            <div class="semister-fee__content">
                                <h5 class="rts-section-title">School Timings</h5>
                                <div class="rts-fee-chart">
                                    <div class="rts-fee-chart__content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="vacation-schedule" role="tabpanel"
                                            aria-labelledby="vacation-schedule-tab">
                                            <table class="table">
                                                <thead class="table-theme">
                                                    <tr>
                                                        <th colspan="3">School Timings (Summer & Winter)</th>
                                                    </tr>
                                                </thead>
                                                <thead class="table-theme">
                                                    <tr>
                                                        <th>Section</th>
                                                        <th>Timings</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="2">Pre-School & Pre-Primary</td>
                                                        <td>8:00 a.m. to 12:00 Noon</td>
                                                        <td>Summer (April to October)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8:30 a.m. to 12:30 p.m.</td>
                                                        <td>Winter (November to March)</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Every Saturday will be a holiday for Pre-School &
                                                            Pre-Primary
                                                            students.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Classes I & II</td>
                                                        <td>7:40 a.m. to 1:15 p.m.</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Classes III to X</td>
                                                        <td>7:40 a.m. to 1:30 p.m.</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>School Office</td>
                                                        <td>7:30 a.m. to 12:00 Noon</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Every Second Saturday will be a holiday for all
                                                            the students.
                                                        </td>
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
                <h3 class="rts-section-title">Visiting Time for Parents</h3>
                <p class="desc">Principal will be available to parents on all working days from 9.00 a.m. to 10.00 a.m.
                    except, when she is busy in some other important official work. Prior appointment for meeting will
                    always be desirable.
                </p>

                <p class="desc">Parents are requested to maintain effective communication through the diary pages. However
                    parents of all the students can meet the respective teachers on every Second Saturday from 8.00 a.m. to
                    11.00 a.m. Students should not be brought for the P.T.M. For other working days parents can write in the
                    Almanac to the class teacher for an appointment with the concerned teacher. The class teacher will do
                    the needful.</p>
                <p>Parents are not permitted to go to the class-room to meet teachers during regular teaching periods.</p>
            </div>
        </div>
    </div>


    <!-- semister fee chart -->
    <div class="semister-fee pb--120 pb__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h5 class="rts-section-title">School Calendar 2025-26</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel"
                                aria-labelledby="undergrade-1-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th colspan="4">List of Holidays (2025–2026)</th>
                                        </tr>
                                    </thead>
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Occasion</th>
                                            <th>Date</th>
                                            <th>Day</th>
                                            <th>Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mahavir Jayanti</td>
                                            <td>10.04.2025</td>
                                            <td>Thursday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Good Friday</td>
                                            <td>18.04.2025</td>
                                            <td>Friday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Buddha Purnima</td>
                                            <td>12.05.2025</td>
                                            <td>Monday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Raksha Bandhan</td>
                                            <td>09.08.2025</td>
                                            <td>Saturday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Independence Day</td>
                                            <td>15.08.2025</td>
                                            <td>Friday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Janmashtami</td>
                                            <td>16.08.2025</td>
                                            <td>Saturday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Milad-Un-Nabi</td>
                                            <td>05.09.2025</td>
                                            <td>Friday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Autumn Break</td>
                                            <td>29.09.2025 & 02.10.2025</td>
                                            <td>Monday & Thursday</td>
                                            <td>Includes Gandhi Jayanti</td>
                                        </tr>
                                        <tr>
                                            <td>Gandhi Jayanti</td>
                                            <td>02.10.2025</td>
                                            <td>Thursday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Karvachauth</td>
                                            <td>10.10.2025</td>
                                            <td>Friday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Maharishi Valmiki Jayanti</td>
                                            <td>15.10.2025</td>
                                            <td>Wednesday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Diwali Holidays</td>
                                            <td>20.10.2025 – 23.10.2025</td>
                                            <td>Monday – Thursday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Guru Nanak's Jayanti</td>
                                            <td>05.11.2025</td>
                                            <td>Wednesday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Christmas</td>
                                            <td>25.12.2025</td>
                                            <td>Thursday</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Republic Day</td>
                                            <td>26.01.2026</td>
                                            <td>Monday</td>
                                            <td></td>
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

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
