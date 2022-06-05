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
                <!--begin::Products-->
                <div class="card card-flush">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th>No</th>
                                    <th class="min-w-200px">Product</th>
                                    <th class="text-end min-w-100px">Jumlah</th>
                                    <th class="text-end min-w-50px">Aksi</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                <!--begin::Table row-->
                                <tr>
                                    <td>1</td>
                                    <td>Product 1</td>
                                    <td class="text-end pe-0" data-order="25">
                                        <span class="fw-bolder ms-3">25</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <a href="#" class="btn btn-icon btn-info">
                                            <i class="las la-eye fs-2 me-2"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-primary">
                                            <i class="las la-edit fs-2 me-2"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-danger">
                                            <i class="las la-trash fs-2 me-2"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
 @endsection
