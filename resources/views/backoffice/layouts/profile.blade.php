<div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::User menu-->
    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{asset('media/avatars/300-1.jpg')}}" alt="user" />
        </div>
        <!--begin::User account menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img alt="Logo" src="{{asset('media/avatars/300-1.jpg')}}" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <div class="d-flex flex-column">
                        <div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->name }}
                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">
                           @hasrole('admin')
                           admin
                           @elserole('administrasi')
                           administrasi
                           @elserole('pimpinan')
                           pimpinan
                           @endrole
                        </span></div>
                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{Auth::user()->email }}</a>
                    </div>
                    <!--end::Username-->
                </div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="" class="menu-link px-5">My Profile</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-5">
                <a href="" class="menu-link px-5">Sign Out</a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::User account menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
</div>
