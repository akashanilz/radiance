<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorDepartment;
use App\Models\NoticeBoard;
use App\Models\Setting;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class WebController extends Controller
{
    /**
     *
     * @return Factory|View
     */
    public function index()
    {
        $doctorsDepartments = DoctorDepartment::take(6)->get();
        $doctors = Doctor::with('department')->distinct()->take(6)->get();
        $todayNotice = NoticeBoard::whereDate('created_at', Carbon::today()->toDateTimeString())->latest()->first();
        $contactDetails = Setting::all()->pluck('value', 'key')->toArray();
        $testimonials = Testimonial::all();

        return view('web.home.index',
            compact('doctorsDepartments', 'doctors', 'todayNotice', 'contactDetails', 'testimonials'));
    }

    /**
     * @return Factory|View
     */
    public function demo()
    {
        return \view('web.demo.index');
    }

    /**
     * @return Factory|View
     */
    public function modulesOfHms()
    {
        return \view('web.modules_of_hms.index');
    }
}
