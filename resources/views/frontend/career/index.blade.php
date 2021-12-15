@extends('frontend.layouts.master')

@section('title','Career:Page')

@section('content')

    <!--Start Breadcrumb Area-->
    @include('frontend.layouts.breadcrumb',[
       'page'=>'Career',
       'title'=>'Career',
       'banner'=> 'career_image',
   ])
    @include('frontend.layouts.sweetalert')
    <!--End Breadcrumb Area-->
    <!--Start About-->
    <section class="about-agencys pad-tb block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <h2 class="mb20">{{  $_settings['career_title'] ?? 'Insert Career Title' }}</h2>
                        <p>{!! $_settings['career_description'] ?? 'Insert Career Description'  !!}  </p>
                        <a href="#jobs"
                           class="btn-main bg-btn2 lnk mt30"> {{  $_settings['career_button_name'] ?? 'Career Button'  }}
                            <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="image-block mb0 m-mt30">
                        <img src="{{ asset('Frontend/images/about/office-4.jpg') }}" alt="about" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($data['career']) > 0)
        @include('frontend.career.includes.enquiryForm')
    @endif

@endsection

@push('js')
    @include('frontend.career.includes.scripts')
    @include('admin.include.formValidation')
@endpush