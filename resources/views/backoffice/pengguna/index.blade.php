@extends('backoffice.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                @include('backoffice.layouts.breadcumbs')
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Primary button-->
                    <a href="" class="btn btn-sm btn-primary">Pengguna Baru</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                        <!--begin::Row-->
                        <div class="row g-6 g-xl-9">
                            @foreach ($data as $item)
                            <!--begin::Col-->
                            <div class="col-md-6 col-xxl-4">
                                <!--begin::Card-->
                                <div class="card">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                            <span class="symbol-label fs-2x fw-bold text-primary bg-light-primary">{{ substr($item->name, 0, 1) }}</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{ $item->name }}</a>
                                        <!--end::Name-->
                                        <!--begin::Position-->
                                        <div class="fw-bold text-gray-400 mb-6">{{ $item->email }}</div>
                                        <!--end::Position-->
                                        <!--begin::Position-->
                                        <div class="fw-bold text-gray-400 mb-6">
                                            <span class="badge badge-primary">{{ $item->getRoleNames() }}</span>
                                        </div>
                                        <!--end::Position-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-center flex-wrap">


                                            <!--begin::Stats-->
                                            <div class="py-1 mx-1 mb-2">
                                                <a href="#" class="btn btn-icon btn-success">
                                                    <i class="las la-edit fs-2 me-2"></i>
                                                </a>
                                            </div>
                                            <!--end::Stats-->
                                            <!--begin::Stats-->
                                            <div class="py-1 mx-1 mb-2">
                                                <a href="#" class="btn btn-icon btn-danger">
                                                    <i class="las la-trash  fs-2 me-2"></i>
                                                </a>
                                            </div>
                                            <!--end::Stats-->

                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            @endforeach

                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
 @endsection
