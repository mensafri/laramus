@extends('layouts.app')

@section('body')
<section class ="bg-gray pt-4 pb5" class="container">
<div class="mb4">
    <div class="mb-3 d-flex align-items-center justify-content-between">
        <h2 class="me-4 mb-0">
         All Discussions
        </h2> 
            <div>
                51,785 discussions
            </div>
    </div>
    <a href="#"clas= "btn btn-primary">Log in To Create Discussion</a>
   </div>
   <div class="row">
    <div class="col-12 col-lg-8 mb-5 mb-lg-0">
           <div class="card card discussions">
            <div class="row">
                <div class="col-12 col-lg-2 mb-1 mb-lg mb-0 d-flex flex-row flex-lg-column align-items-end">
                    <div class="text-nowrap me-2 me-lg-0">
                        3 Likes
                    </div>
                    <div class="text-nowrap color-gray">
                        9 Answers
                    </div>
                </div>
                    <div class="col-12 col-lg-10">
                        <a href="#">
                            <h3>How to add a custom validation in laravel?</h3>
                        </a>
                        <p>I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the "...</p>
                        <div class="row">
                            <div class="col me-1 me-lg">
                                <a href="#">
                                    <span class="badge rounded-pill text-bglight">Eloquent</span>
                                </a>
                            </div>
                                <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-werapper d-inline-block">
                                            <a href="#"class="me-1">
                                                    <img src="{{url('assets/images/avatar-sm.png')}}" alt="Farrel"class="avatar rounded-circle">
                                            </a>
                                        </div>
                                            <span class="fs-12px">
                                                <a href="#" class="me-1 fw-bold">
                                                    Farrel
                                                </a>
                                                    <span class=color-gray>7 jam yang lalu</span>
                                            </span>
                                </div>
                        </div>
                    </div>
            </div>
           </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="car">
            <h3>All Categories </h3>
                <div>
                        <a href="#">
                            <span class="badge rounded-pill text-bglight">Eloquent</span>
                            <span class="badge rounded-pill text-bglight">Facade</span>
                            <span class="badge rounded-pill text-bglight">Helper</span>
                            <span class="badge rounded-pill text-bglight">Eloquent</span>
                            <span class="badge rounded-pill text-bglight">Eloquent</span>
                        </a>
                </div>
        </div>
    </div>
</div>
</section>
@endsection