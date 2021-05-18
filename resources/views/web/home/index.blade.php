@extends('web.layouts.front')
@section('title')
    Home
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('web/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lightgallery/dist/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lightgallery/dist/css/lg-transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}"/>
@endsection
@section('content')
    {{-- header container starts --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="landing-header">
                    <div class="row">
                        <div class="col-lg-6 order-lg-2 col-12">
                           {{-- <div class="header_image">
                                <img src="{{ asset('web/img/header-img.jpg') }}">
                            </div>--}}
                        </div>
                        <div class="col-lg-6 header-text order-lg-1 col-12">
                            <p class="welcome-text mb-5 wow fadeInUp" data-wow-duration="0.4s">Welcome to <br> <span
                                        class="heading-name">Radiance</span> <span class="heading-text">Manage your Hospital's day to day operations digitally with ease and effortlessly.</span>
                            </p>
                           {{-- <a href="{{url('login')}}" class="header-contact-button wow bounceIn"
                               data-wow-delay="0.4s">Buy Now</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- header container ends --}}

    <div class="container features">
        <h4 class="m-0 p-0 text-center section-heading">Features</h4>
        <div class="row">
            <div class="col-lg-3 col-md-6 my-5 text-center features-block wow fadeInUp" data-wow-delay=".2s">
                <i class="fas fa-ambulance d-flex justify-content-center mx-auto hover-transitions ambulance"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">Emergency Services</h5>
                <p class="text-muted">We are providing advanced emergency services. We have well-equipped emergency and
                    trauma center with facilities.</p>
            </div>
            <div class="col-lg-3 col-md-6 my-5 text-center features-block wow fadeInUp" data-wow-delay=".3s">
                <i class="fas fa-user-md d-flex justify-content-center mx-auto hover-transitions qualified-doctor"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">Qualified Doctors</h5>
                <p class="text-muted">Our team of pathologists, microbiologists and clinical laboratory scientists are
                    always ready to help you with your laboratory needs.</p>
            </div>
            <div class="col-lg-3 col-md-6 my-5 text-center features-block wow fadeInUp" data-wow-delay=".4s">
                <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions  outdoor-checkup"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">Outdoors Checkup</h5>
                <p class="text-muted">Our doctors are always ready for outdoor checkup in an emergency. we have
                    different types of charges as per checkup.</p>
            </div>
            <div class="col-lg-3 col-md-6  my-5 text-center features-block wow fadeInUp" data-wow-delay=".5s">
                <i class="fas fa-history d-flex justify-content-center mx-auto hover-transitions service-clock"></i>
                <h5 class="pt-3 text-uppercase font-weight-bold">24 Hours Service</h5>
                <p class="text-muted">Our clinic provides extensive medical support and healthcare services 24/7.</p>
            </div>
        </div>
    </div>

    {{-- Departments container starts --}}
    <div class="container pt-5" id="departments">
        <h4 class="m-0 p-0 text-center section-heading">Departments</h4>
        <div class="row mt-3 content-icons">
            <div class="col-12">
                <div class="row">
                    @foreach($doctorsDepartments as $doctorsDepartment)
                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                            <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                            <h5 class="pt-3 text-muted">{{ $doctorsDepartment->title }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Departments container ends --}}

   {{-- <div class="container-fluid" id="hmsFeatures">
        <div class="container mt-5">
            <h4 class="m-0 p-0 text-center section-heading">Backend Features</h4>
            <div class="row">
                <div class="col-12 mt-3 hms__features">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/administrative-feature.png') }}">
                                    <img src="{{ asset('web/img/administrative-feature.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Dashboard</h4>
                                                          <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/02. Change Password.png') }}">
                                    <img src="{{ asset('web/img/02. Change Password.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Change Password</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/change_language.jpg') }}">
                                    <img src="{{ asset('web/img/change_language.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Change Language</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/invoice_listing.jpg') }}">
                                    <img src="{{ asset('web/img/invoice_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Invoice Listing</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_invoice.jpg') }}">
                                    <img src="{{ asset('web/img/create_invoice.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Create Invoice</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/13. New BIll.png') }}">
                                    <img src="{{ asset('web/img/13. New BIll.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Create Bill</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/appointments_calander_view.jpg') }}">
                                    <img src="{{ asset('web/img/appointments_calander_view.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Appointments</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06. Beds List.png') }}">
                                    <img src="{{ asset('web/img/06. Beds List.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Bed Listing</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06.1. Bed Details.png') }}">
                                    <img src="{{ asset('web/img/06.1. Bed Details.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Bed Details</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/06.2. Bed Assign.png') }}">
                                    <img src="{{ asset('web/img/06.2. Bed Assign.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Bed Allotment</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/document_listing.jpg') }}">
                                    <img src="{{ asset('web/img/document_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Documents</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/14. New Ambulance.png') }}">
                                    <img src="{{ asset('web/img/14. New Ambulance.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Add Ambulance</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_insurance.jpg') }}">
                                    <img src="{{ asset('web/img/create_insurance.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Create Insurance</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/create_doctor.jpg') }}">
                                    <img src="{{ asset('web/img/create_doctor.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Create Doctor</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/15. Add Medicine.png') }}">
                                    <img src="{{ asset('web/img/15. Add Medicine.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Create Medicine</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/16. Employee Payroll Details.png') }}">
                                    <img src="{{ asset('web/img/16. Employee Payroll Details.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Add Employee Payroll Detail</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/employee-payroll.jpg') }}">
                                    <img src="{{ asset('web/img/employee-payroll.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Employee Payroll Listing</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/payment-reports.jpg') }}">
                                    <img src="{{ asset('web/img/payment-reports.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Payment Reports</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/enquiries.jpg') }}">
                                    <img src="{{ asset('web/img/enquiries.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Enquiry Listing</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/17. Pateint Admission.png') }}">
                                    <img src="{{ asset('web/img/17. Pateint Admission.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Patient Admission Listing</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/04. Doctors Schedule.png') }}">
                                    <img src="{{ asset('web/img/04. Doctors Schedule.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Doctor schedules</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/birth_report_listing.jpg') }}">
                                    <img src="{{ asset('web/img/birth_report_listing.jpg') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Birth Report Listing</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/18. Email Service.png') }}">
                                    <img src="{{ asset('web/img/18. Email Service.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Email service</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 hms__features__block wow fadeInUp">
                            <div class="hms__features-img lightgallery">
                                <a href="{{ asset('web/img/11. Settings.png') }}">
                                    <img src="{{ asset('web/img/11. Settings.png') }}">
                                </a>
                            </div>
                            <div class="hms__features-content text-center">
                                <h4 class="mt-3">Settings</h4>
                                <p class="hms__feature-text text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="hmsFacilities">
        <h4 class="m-0 p-0 text-center section-heading">Miscellaneous Facilities Of InfyHMS</h4>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="facility-block-one">
                            <li class="facility-item">Host In Your Own Secure Server.</li>
                            <li class="facility-item">No Monthly Or Yearly Fees.</li>
                            <li class="facility-item">24/7 Customer Support.</li>
                            <li class="facility-item">Multi Language System</li>
                            <li class="facility-item">Admin and Customer Has separate UI and Login</li>
                            <li class="facility-item">Email and Sms gateway adding for marketing</li>
                            <li class="facility-item">Complete Hospital Management Solution</li>
                            <li class="facility-item">Prescription Management System</li>
                            <li class="facility-item">Doctor Management System</li>
                            <li class="facility-item">Insurance Management System</li>
                            <li class="facility-item">Billing Management System</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <ul class="facility-block-two">
                            <li class="facility-item">Role Based Permission Setup System</li>
                            <li class="facility-item">Multiple Email and SMS gateway added</li>
                            <li class="facility-item">Human Resource System</li>
                            <li class="facility-item">Complete Bed Management System</li>
                            <li class="facility-item">Medication and Visits System</li>
                            <li class="facility-item">Case Manager Management System</li>
                            <li class="facility-item">Patient Separate Login and Appointment System</li>
                            <li class="facility-item">Hospital Enquiry System</li>
                            <li class="facility-item">Pharmacy Management System</li>
                            <li class="facility-item">Appointment Management System</li>
                            <li class="facility-item">Investigation Reports</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    {{-- start using hms block --}}

    {{--<div class="container-fluid start-using-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 justify-content-center d-flex flex-column start-using-content">
                    <p class="start-using-heading wow fadeInUp" data-wow-delay=".2s">Start using <br> InfyHMS now.
                    </p>
                    <a class="get-started-btn wow bounceInUp" data-wow-delay=".3s" href="{{url('login')}}">Get
                        Started</a>
                </div>
                <div class="col-lg-7 start-using-image">
                    <img src="{{ asset('web/img/dashboard.png') }}" class="w-100 wow fadeInUp" data-wow-delay=".4s">
                </div>
            </div>
        </div>
    </div>--}}
    {{-- end start using hms block --}}

    @if(count($testimonials) > 0)
        <div class="container testimonials" id="testimonials">
            <h4 class="text-center section-heading">{{ __('messages.testimonials') }}</h4>
            <div class="testimonial-wrapper mt-3">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel owl-theme">
                        @foreach($testimonials as $testimonial)
                            <div class="item">
                                <div class="testimonial-item d-flex align-items-center flex-column">
                                    <img src="{{ $testimonial->document_url }}" class="testimonial-image"
                                         alt="Testimonial Image">
                                    <div class="testimonial-content">
                                        <h3 class="testimonial-name">{{$testimonial->name}}</h3>
                                        @if((Str::length($testimonial->description) < 90))
                                            <span>{{$testimonial->description}}</span>
                                        @else
                                            <span data-toggle="tooltip" data-placement="bottom"
                                                  title="{{$testimonial->description}}"
                                                  data-delay="{'show':500,'hide':100}">
                                            {{ Str::limit($testimonial->description,200,'...') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- end testimonial block --}}
@endsection
@section('page_scripts')
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lightgallery/dist/js/lightgallery.js') }}"></script>
    <script src="{{ mix('assets/js/web/plugin.js') }}"></script>
@endsection
