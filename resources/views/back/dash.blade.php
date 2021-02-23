@extends('back.layouts.back')

@section('main')
<section class="content">
    <div class="row">
        <div class="col-xl-12 col-12">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="box">
                        <div class="box-body py-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="text-fade">Applications</h5>
                                    <h2 class="font-weight-500 mb-0">132.0K</h2>
                                </div>
                                <div>
                                    <div id="revenue1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="box">
                        <div class="box-body py-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="text-fade">Shortlisted</h5>
                                    <h2 class="font-weight-500 mb-0">10.9k</h2>
                                </div>
                                <div>
                                    <div id="revenue2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="box">
                        <div class="box-body py-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="text-fade">On Hold</h5>
                                    <h2 class="font-weight-500 mb-0">03.1k</h2>
                                </div>
                                <div>
                                    <div id="revenue3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-12 col-xl-12 col-12 aaaaaaaaaa">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Active Jobs</h4>
                            <ul class="box-controls pull-right d-md-flex d-none">
                              <li class="dropdown">
                                <button class="btn btn-primary px-10 " data-toggle="dropdown" href="#">View List</button>
                              </li>
                            </ul>
                        </div>
                    
                        <div class="box-body">
                            <div id="active_jobs"></div>
                        </div>
                        <div class="box-body">
                            <div class="bb-1 d-flex justify-content-between">
                                <h5>Job title</h5>
                                <h5>Applications</h5>
                            </div>
                            <div class="d-flex justify-content-between my-15">
                                <p>Project Manager</p>
                                <p> 
                                    <strong>325</strong>
                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                        <i class= "fa fa-line-chart"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="d-flex justify-content-between my-15">
                                <p>Sales Manager</p>
                                <p> 
                                    <strong>154</strong>
                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                        <i class= "fa fa-line-chart"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="d-flex justify-content-between my-15">
                                <p>Machine Instrument</p>
                                <p> 
                                    <strong>412</strong>
                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                        <i class= "fa fa-line-chart"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="d-flex justify-content-between mt-15">
                                <p>Operation Manager</p>
                                <p> 
                                    <strong>412</strong>
                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-outline btn-primary-light mx-5">
                                        <i class= "fa fa-line-chart"></i>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>				
    
  
       
    </div>
</section>
@endsection