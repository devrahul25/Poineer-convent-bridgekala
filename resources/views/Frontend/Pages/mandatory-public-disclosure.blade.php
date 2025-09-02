@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Mandatory Public Disclosure',
        'page' => 'Disclosure',
    ])


    <div class="semister-fee pb--120 pb__md--80">
        <div class="container">
            <div class="row">

                <!-- A. GENERAL INFORMATION -->
                <div class="semister-fee__content">
                    <h5 class="rts-section-title">A. GENERAL INFORMATION</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel"
                                aria-labelledby="undergrade-1-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>S. NO.</th>
                                            <th>INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>NAME OF THE SCHOOL</td>
                                            <td>PIONEER CONVENT SCHOOL</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>AFFILIATION NO (IF APPLICABLE)</td>
                                            <td>2730606</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>SCHOOL CODE (IF APPLICABLE)</td>
                                            <td>85345</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>COMPLETE ADDRESS WITH PIN CODE</td>
                                            <td>LOK NAYAK PURAM, BAKKARWALA NEW DELHI - 110041</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>PRINCIPAL'S NAME AND QUALIFICATION</td>
                                            <td>Dr. SEEMA BAJAJ, M.COM., M.ED.</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>SCHOOL EMAIL ID</td>
                                            <td>pioneerconvent@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>CONTACT DETAILS (LANDLINE/MOBILE)</td>
                                            <td>7838039084</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. DOCUMENTS AND INFORMATION -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">B. DOCUMENTS AND INFORMATION</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>DOCUMENTS/INFORMATION</td>
                                            <td>UPLOAD DOCUMENTS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF
                                                AFFILIATION, IF ANY</td>
                                            <td><a target="_blank"
                                                    href="{{ asset('assets/mpd/01.04.2024 to 31.03.2029.pdf') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/ RENEWAL CERTIFICATE AS
                                                APPLICABLE</td>
                                            <td><a target="_blank"
                                                    href="{{ asset('assets/mpd/Reg_Certificate.pdf') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED IF APPLICABLE BY THE STATE
                                                GOVT./UT</td>
                                            <td><a target="_blank"
                                                    href="{{ asset('assets/mpd/Ist Recog PC.pdf') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009 AND ITS RENEWAL IF
                                                APPLICABLE</td>
                                            <td><a target="_blank"
                                                    href="{{ asset('assets/mpd/Recognition_2021.pdf') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE
                                            </td>
                                            <td><a target="_blank"
                                                    href="{{ asset('assets/mpd/Building_Stability_Certificate_2023.pdf') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY</td>
                                            <td><a target="_blank"
                                                    href="{{ asset('assets/mpd/Fire_PC_2024.pdf') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR
                                                AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY
                                                SCHOOL</td>
                                            <td><a target="_blank"
                                                    href="{{ asset('assets/mpd/Recognition_2021.pdf') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATE</td>
                                            <td><a target="_blank" href="{{ asset('assets/mpd/Health.jpg') }}">ATTACHED</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- C. RESULTS AND ACADEMIC -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">C. RESULTS AND ACADEMIC</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>DOCUMENTS/INFORMATION</td>
                                            <td>UPLOAD DOCUMENTS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>FEE STRUCTURE OF THE SCHOOL</td>
                                            <td>ATTACHED</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>ANNUAL ACADEMIC CALENDAR</td>
                                            <td>ATTACHED</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                            <td>ATTACHED</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                                            <td>ATTACHED</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>LAST THREE YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABILITY</td>
                                            <td>ATTACHED</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class="rts-section-title mt--40">RESULT CLASS: X</h5>
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>SL No.</td>
                                            <td>YEAR</td>
                                            <td>NO. OF REGISTERED STUDENTS</td>
                                            <td>NO. OF STUDENTS PASSED</td>
                                            <td>PASS PERCENTAGE</td>
                                            <td>REMARKS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>2022-2023</td>
                                            <td>38</td>
                                            <td>38</td>
                                            <td>100%</td>
                                            <td>EXCELLENT</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>2023-2024</td>
                                            <td>53</td>
                                            <td>53</td>
                                            <td>100%</td>
                                            <td>EXCELLENT</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>2024-2025</td>
                                            <td>50</td>
                                            <td>50</td>
                                            <td>100%</td>
                                            <td>EXCELLENT</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class="rts-section-title mt--40">RESULT CLASS: XII</h5>
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>SL No.</td>
                                            <td>YEAR</td>
                                            <td>NO. OF REGISTERED STUDENTS</td>
                                            <td>NO. OF STUDENTS PASSED</td>
                                            <td>PASS PERCENTAGE</td>
                                            <td>REMARKS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>2022-2023</td>
                                            <td>61</td>
                                            <td>59</td>
                                            <td>96.72%</td>
                                            <td>VERY GOOD</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>2023-2024</td>
                                            <td>63</td>
                                            <td>58</td>
                                            <td>92%</td>
                                            <td>VERY GOOD</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>2024-2025</td>
                                            <td>223</td>
                                            <td>208</td>
                                            <td>93.27%</td>
                                            <td>VERY GOOD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- D. STAFF (TEACHING) -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">D. STAFF (TEACHING)</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>INFORMATION</td>
                                            <td>DETAILS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>PRINCIPAL</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>TOTAL NO. OF TEACHERS</td>
                                            <td>36<br>PGT – 15<br>TGT – 08<br>PRT – 13</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>TEACHERS SECTION RATIO</td>
                                            <td>1.5:1</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>DETAILS OF SPECIAL EDUCATOR</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- E. SCHOOL INFRASTRUCTURE -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">E. SCHOOL INFRASTRUCTURE</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>INFORMATION</td>
                                            <td>DETAILS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)</td>
                                            <td>4048</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>NO. AND SIZE OF THE CLASS ROOMS (IN SQUARE MTR)</td>
                                            <td>36 (47 Sqr. mtr)</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQUARE MTR)</td>
                                            <td>6 (69 Sqr. mtr)</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>INTERNET FACILITY (Y/N)</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>NO. OF GIRLS TOILET</td>
                                            <td>19</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>NO. OF BOYS TOILET</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>LINK TO YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE
                                                INFRASTRUCTURE OF THE SCHOOL</td>
                                            <td><a href="https://www.youtube.com/watch?v=3ItqSTGHtzc"
                                                    target="_blank">https://www.youtube.com/watch?v=3ItqSTGHtzc</a></td>
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
