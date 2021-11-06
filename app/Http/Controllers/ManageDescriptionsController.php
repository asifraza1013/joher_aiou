<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;

class ManageDescriptionsController extends Controller
{
    /**
     * get description for admission tab
     * get requested param and show description accordingly.
     */
    public function admissionsDescription($category)
    {
        $backPage = 'Admissions';
        $backRpute = route('admission');
        $title = '';
        if($category == 'fee_structure'){
            $title = 'Fee Strcuture';
        }
        if($category == 'online_admission_form'){
            $title = 'Online Admission Form';
        }
        if($category == 'admission_confirmation'){
            $title = 'Admission Confirmation';
        }
        if($category == 'admission_objection'){
            $title = 'Admission Objection';
        }
        if($category == 'tutor_information'){
            $title = 'Tutor Information';
        }
        $description = Description::where('category', $category)->first();
        return view('front.pages.admission-detail',  compact([
            'backRpute',
            'backPage',
            'description',
            'title',
        ]));
    }


    /**
     * lms portal page
     */
    public function lmsPortalTabs()
    {
        return view('front.pages.lms_portal');
    }

    /**
     * get description for LMS Portal tab
     * get requested param and show description accordingly.
     */
    public function lmsPortalDescription($category)
    {
        $backPage = 'LMS Portal';
        $backRpute = route('front.lms.portal.tab');
        $title = '';
        if($category == 'online_workshop'){
            $title = 'Online Workshop';
        }
        if($category == 'online_assignment_submission'){
            $title = 'Online Assignments Submission';
        }
        if($category == 'thesis_tech_practice_submission'){
            $title = 'Online Thesis & Teaching Practice  Submission';
        }
        $description = Description::where('category', $category)->first();

        return view('front.pages.admission-detail',  compact([
            'backPage',
            'backRpute',
            'description',
            'title',
        ]));
    }

    /**
     * get description for Compressor tab
     * get requested param and show description accordingly.
     */
    public function compressorTab()
    {

        $description = Description::where('category', 'compressor')->first();
        return view('front.pages.compressor', compact([
            'description'
        ]));
    }
}
