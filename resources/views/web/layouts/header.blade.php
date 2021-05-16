@if(session('status'))
    <div class="alert alert-success m-0 contactSuccess text-center"><h5 class="m-0">{{ session('status') }}</h5></div>
@section('page_scripts')
    <script src="{{ mix('assets/js/web/web.js') }}"></script>
@endsection
@endif
{{-- News container starts --}}
@if(!empty($todayNotice))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">
                <h5 class="p-0 m-0 py-1 news">
                    <marquee>{{ $todayNotice->description }}</marquee>
                </h5>
            </div>
        </div>
    </div>
@endif
{{-- News container ends --}}

<div class="container-fluid nav-bg">
    <div class="row">
    <div class="container">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand pl-3" href="{{ url('/') }}">
            <img src="{{ asset('web/img/logo.jpg') }}" class="d-inline-block align-top img-fluid logo-size"
                 alt="hms-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto font-weight-bold">
                <li class="nav-item active">
                    <a class="nav-link" href="#departments" id="ancDepartments">Departments</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#hmsFeatures" id="ancHmsFeatures">Backend Features</a>
                </li>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#testimonials" id="ancTestimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    </div>
</div>
