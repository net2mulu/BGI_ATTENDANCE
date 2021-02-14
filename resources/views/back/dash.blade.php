@extends('back.layouts.back')

@section('main')
<section class="content">
    <div class="row">
        <div class="col-xl-9 col-12">
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
                <div class="col-xxxl-8 col-xl-7 col-12">
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
                <div class="col-xxxl-4 col-xl-5 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Total Applications</h4>
                        </div>
                        <div class="box-body">
                            <div class="d-flex w-p100 rounded100 overflow-hidden">
                                <div class="bg-danger h-10" style="width: 8%;"></div>
                                <div class="bg-warning h-10" style="width: 12%;"></div>
                                <div class="bg-success h-10" style="width: 22%;"></div>
                                <div class="bg-info h-10" style="width: 58%;"></div>
                            </div>
                        </div>
                        <div class="box-body p-0">
                            <div class="media-list media-list-hover media-list-divided">
                                <a class="media media-single rounded-0" href="#">
                                  <span class="badge badge-xl badge-dot badge-info"></span>
                                  <span class="title">Applications </span>
                                  <span class="badge badge-pill badge-info-light">58%</span>
                                </a>

                                <a class="media media-single rounded-0" href="#">
                                  <span class="badge badge-xl badge-dot badge-success"></span>
                                  <span class="title">Shortlisted</span>
                                  <span class="badge badge-pill badge-success-light">22%</span>
                                </a>

                                <a class="media media-single rounded-0" href="#">
                                  <span class="badge badge-xl badge-dot badge-warning"></span>
                                  <span class="title">On-Hold</span>
                                  <span class="badge badge-pill badge-warning-light">12%</span>
                                </a>

                                <a class="media media-single rounded-0" href="#">
                                  <span class="badge badge-xl badge-dot badge-danger"></span>
                                  <span class="title">Rejected</span>
                                  <span class="badge badge-pill badge-danger-light">08%</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">New Applications</h4>
                        </div>
                        <div class="box-body">
                            <div class="d-flex align-items-center mb-30">
                                <div class="mr-15">
                                    <img src="{{ asset("back/images/avatar/avatar-1.png") }}" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500">
                                    <a href="#" class="text-dark hover-primary mb-1 font-size-16">Sophia Doe</a>
                                    <span class="font-size-12"><span class="text-fade">Applied for</span> Advertising Intern</span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-info">5</span>
                                      </a>
                                      <a class="dropdown-item" href="#">Sent</a>
                                      <a class="dropdown-item" href="#">Spam</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Draft</span>
                                        <span class="badge badge-pill badge-default">1</span>
                                      </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="mr-15">
                                    <img src="{{ asset("back/images/avatar/avatar-10.png") }}" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500">
                                    <a href="#" class="text-dark hover-danger mb-1 font-size-16">Mason Clark</a>						
                                    <span class="font-size-12"><span class="text-fade">Applied for</span> Project Coordinator</span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-info">5</span>
                                      </a>
                                      <a class="dropdown-item" href="#">Sent</a>
                                      <a class="dropdown-item" href="#">Spam</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Draft</span>
                                        <span class="badge badge-pill badge-default">1</span>
                                      </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="mr-15">
                                    <img src="{{ asset("back/images/avatar/avatar-11.png") }}" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500">
                                    <a href="#" class="text-dark hover-success mb-1 font-size-16">Emily Paton</a>						
                                    <span class="font-size-12"><span class="text-fade">Applied for</span> Layout Expert</span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-info">5</span>
                                      </a>
                                      <a class="dropdown-item" href="#">Sent</a>
                                      <a class="dropdown-item" href="#">Spam</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Draft</span>
                                        <span class="badge badge-pill badge-default">1</span>
                                      </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="mr-15">
                                    <img src="{{ asset("back/images/avatar/avatar-12.png") }}" class="avatar avatar-lg rounded100 bg-primary-light" alt="" />
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500">
                                    <a href="#" class="text-dark hover-info mb-1 font-size-16">Daniel Breth</a>											
                                    <span class="font-size-12"><span class="text-fade">Applied for</span> Interior Architect</span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-info">5</span>
                                      </a>
                                      <a class="dropdown-item" href="#">Sent</a>
                                      <a class="dropdown-item" href="#">Spam</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item flexbox" href="#">
                                        <span>Draft</span>
                                        <span class="badge badge-pill badge-default">1</span>
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>				
        <div class="col-xl-3 col-12">
            <div class="box">
                <div class="box-body">							
                    <div class="box no-shadow">
                        <div class="box-body px-0 pt-0">
                            <div id="calendar" class="dask evt-cal min-h-350"></div>
                        </div>
                    </div>
                    <div>
                        <h4 class="box-title mb-30">Scheduled Meeting</h4>
                        <div>
                              <div class="d-flex align-items-center mb-30 justify-content-between">
                                <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                    <p class="mt-5 mb-0 text-warning">Thu</p>
                                    <p class="mb-0">8</p>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                    <a href="#" class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Interview</a>
                                    <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 9:00am - 11:30am </span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                              <div class="d-flex align-items-center mb-30 justify-content-between">
                                <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                    <p class="mt-5 mb-0 text-warning">Fri</p>
                                    <p class="mb-0">10</p>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                    <a href="#" class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Organizational meeting</a>
                                    <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 10:00am - 10:30am </span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                              <div class="d-flex align-items-center mb-30 justify-content-between">
                                <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                    <p class="mt-5 mb-0 text-warning">Mon</p>
                                    <p class="mb-0">17</p>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                    <a href="#" class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Meeting with the manager</a>
                                    <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 9:00am - 11:30am </span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                              <div class="d-flex align-items-center mb-30 justify-content-between">
                                <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                    <p class="mt-5 mb-0 text-warning">Set</p>
                                    <p class="mb-0">18</p>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                    <a href="#" class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Interview</a>
                                    <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 9:00am - 11:30am </span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                              <div class="d-flex align-items-center mb-20 justify-content-between">
                                <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                    <p class="mt-5 mb-0 text-warning">Fri</p>
                                    <p class="mb-0">22</p>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                    <a href="#" class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Organizational meeting</a>
                                    <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 10:00am - 10:30am </span>
                                </div>
                                <div class="dropdown">
                                    <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="box box-inverse bg-twitter">
            <div class="box-body">
              <h3 class="text-white mt-0">Vivamus condimentum erat non turpis placerat.</h3>
              <small>14 April, 2020 via web</small>
              <div class="mt-20">
                <i class="fa fa-twitter font-size-26"></i>
                <ul class="list-inline float-right mb-0">
                  <li class="list-inline-item">
                    <i class="fa fa-heart"></i> 845
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-thumbs-up"></i> 956
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="box box-inverse bg-facebook">
            <div class="box-body">
              <h3 class="text-white mt-0">Vivamus condimentum erat non turpis placerat.</h3>
              <small>14 April, 2020 via web</small>
              <div class="mt-20">
                <i class="fa fa-facebook font-size-26"></i>
                <ul class="list-inline float-right mb-0">
                  <li class="list-inline-item">
                    <i class="fa fa-thumbs-o-up"></i> 845
                  </li>
                  <li class="list-inline-item">
                    <i class="fa fa-star"></i> 956
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="box box-inverse box-info">
            <div class="box-body">
              <a class="avatar float-left mr-20" href="javascript:void(0)">
                <img src="{{ asset("back/images/avatar/5.jpg") }}" alt="">
              </a>
              <div>
                <small class="float-right">Today, 16:05</small>
                <div class="font-size-18">Johen Doe</div>
                <div class="font-size-14 mb-10">Designer</div>
                <blockquote class="blockquote my-10 font-size-16 text-white mr-0">Vivamus condimentum erat non turpis placerat, at volutpat metus.</blockquote>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection