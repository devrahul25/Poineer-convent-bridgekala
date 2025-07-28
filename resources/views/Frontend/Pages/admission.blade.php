@extends($layout)
@section('content')
    @include($header . 'header-three')

    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Admission Process & Guidelines',
        'page' => 'Admission',
    ])
    <!-- admission page content -->
    <div class="rts-page-content rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row sticky-coloum-wrap g-5 ">
                        <div class="col-lg-8">
                            <div class="rts-ap-section">
                                <h3 class="rts-section-title mb--30">Admission Form</h3>
                                <p style="font-size: 20px; margin-bottom:50px; color:#890C25;">Admission forms are available
                                    offline at the school reception for
                                    a fee of ₹25/-.
                                    Please bring the required documents for verification.</p>
                                {{-- <div class="rts-application-form">
                            <form action="#">
                                <div class="single-form-part">
                                    <h5 class="form-title">Personal Information</h5>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="fname" placeholder="First name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="email2">Enter your mail</label>
                                            <input type="email" id="email2" placeholder="Enter your mail">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="phone">Enter Phone Number</label>
                                            <input type="tel" id="phone" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="dob">Date of Birth</label>
                                            <input type="text" id="datepicker" placeholder="dd/mm/yy">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender">
                                                <option value="*">Gender</option>
                                                <option value="*">Male</option>
                                                <option value="*">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="country">Select your Country </label>
                                            <input id="country" type="text" placeholder="Country">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form-part">
                                    <h5 class="form-title">Academic Information</h5>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="cname">Collage Name</label>
                                            <input id="cname" type="text" placeholder="Collage Name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="gpa">Enter your GPA</label>
                                            <input id="gpa" type="text" placeholder="Enter your GPA">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="cname2">Collage Name</label>
                                            <input id="cname2" type="text" placeholder="current college">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="gpa2">Enter your GPA</label>
                                            <input type="text" id="gpa2" placeholder="Current GPA">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form-part">
                                    <h5 class="form-title">Financial Information</h5>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="income">Household Income</label>
                                            <select name="income" id="income">
                                                <option value="*">Less then $1k</option>
                                                <option value="*">Less then $2k</option>
                                                <option value="*">Less then $3k</option>
                                            </select>
                                        </div>
                                        <div class="single-input-item">
                                            <label for="yes">applying for need-based financial aid</label>
                                            <select name="yes" id="yes">
                                                <option value="*">yes</option>
                                                <option value="*">no</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="single-form-part">
                                    <h5 class="form-title">Agreement and Submission</h5>
                                    <p>By submitting this application, I confirm that all information provided is accurate
                                        and complete. I understand that any false
                                        information may result in the disqualification of my application.
                                    </p>
                                    <div class="single-input-item">
                                        <label for="sub">Application Submission:</label>
                                        <input type="file" id="sub">
                                    </div>

                                    <div class="d-flex align-items-center single-checkbox mt--20">
                                        <input type="checkbox" id="exampleCheck1">
                                        <label for="exampleCheck1">By submitting this form, you agree to the Unipix
                                            University Privacy Notice</label>
                                    </div>
                                </div>
                                <button type="submit" class="rts-theme-btn primary with-arrow">Submit Application<span><i
                                            class="fa-thin fa-arrow-right"></i></span></button>
                            </form>

                        </div> --}}
                            </div>
                        </div>

                    </div>
                    <div class="admission-content-top">
                        <h3 class="rts-section-title">
                            Session 2025–2026 | Registration Guidelines & Schedule
                        </h3>

                        <div class="admission-big-thumb">
                            <img src="{{ asset('assets/images/course/admission-bg.jpg') }}" alt="admission">
                        </div>

                        <div class="requirement-deadline">
                            <h3 class="rts-section-title">Eligibility & Required Documents</h3>
                            <div class="requirement-deadline__content">
                                <ul>
                                    <li class="single-requirement"> Pre-School applicants must be 3 years old as on March
                                        31, 2025
                                    </li>
                                    <li class="single-requirement"> Pre-Primary applicants must be 4 years old as on March
                                        31, 2025</li>
                                    <li class="single-requirement"> Birth certificate issued by Municipal Authority is
                                        mandatory
                                    </li>
                                    <li class="single-requirement">Provide any one valid residence proof</li>
                                    <li class="single-requirement">Accepted proofs: Aadhar Card / Voter ID / Passport /
                                        Driving License / Electricity Bill / Ration Card</li>
                                    <li class="single-requirement">Registration does not guarantee admission to the applied
                                        class</li>

                                </ul>
                            </div>
                        </div>

                        <div class="application-deadline">
                            <h3 class="rts-section-title">Seat Matrix – Pre-School (Entry Level)</h3>
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>Category</td>
                                                <td>Total Seats</td>
                                                <td> EWS Seats</td>
                                                <td> General Seats</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pre School</td>
                                                <td>60</td>
                                                <td>15</td>
                                                <td>45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <p> Unipix reserves the right to evaluate an application and render a final decision even if
                                    all pieces of the application have not been received.</p>
                                <p class="w-95 mx-0">Applicants are limited to a total of three applications for
                                    undergraduate admission, whether for first-year admission, transfer admission or a
                                    <br>combination of both. If you have submitted fewer than three applications to Unipix,
                                    you may reapply.
                                </p> --}}
                            </div>
                        </div>
                        {{-- New Table Starts --}}
                        <div class="application-deadline">
                            <h3 class="rts-section-title">Admission Timeline (2025–2026 – General Category)</h3>
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>Event</td>
                                                <td>Date</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Registration Opens</td>
                                                <td>28 November 2024</td>

                                            </tr>
                                            <tr>
                                                <td>Last Date to Submit Form</td>
                                                <td>20 December 2024</td>
                                            </tr>
                                            <tr>
                                                <td>Applicants List Displayed</td>
                                                <td>03 January 2025</td>

                                            </tr>
                                            <tr>
                                                <td>Marks (Point System) Displayed</td>
                                                <td>10 January 2025</td>

                                            </tr>
                                            <tr>
                                                <td>Draw of Lots (if required)</td>
                                                <td>11 January 2025</td>
                                            </tr>
                                            <tr>
                                                <td>First List of Selected Candidates</td>
                                                <td>17 January 2025</td>
                                            </tr>
                                            <tr>
                                                <td>First List Query Resolution</td>
                                                <td>18–27 January 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Fee Submission (First List)</td>
                                                <td>27 January 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Second List (if required)</td>
                                                <td>03 February 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Fee Submission (Second List)</td>
                                                <td>13 February 2025</td>
                                            </tr>
                                            <tr>
                                                <td>Admission Process Closes</td>
                                                <td>14 March 2025</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <p> Unipix reserves the right to evaluate an application and render a final decision even if
                                    all pieces of the application have not been received.</p>
                                <p class="w-95 mx-0">Applicants are limited to a total of three applications for
                                    undergraduate admission, whether for first-year admission, transfer admission or a
                                    <br>combination of both. If you have submitted fewer than three applications to Unipix,
                                    you may reapply.
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- admission page content end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
