<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
        <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="user" />
    </div>
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                </div>
                <!--end::Avatar-->

                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">
                        Max Smith <span
                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>

                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                        max@kt.com </a>
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
            <a href="account/overview.html" class="menu-link px-5">
                My Profile
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="apps/projects/list.html" class="menu-link px-5">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
                    <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                </span>
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
            </a>

            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="account/referrals.html" class="menu-link px-5">
                        Referrals
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="account/billing.html" class="menu-link px-5">
                        Billing
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="account/statements.html" class="menu-link px-5">
                        Payments
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">
                        Statements

                        <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                            title="View your statements">
                            <i class="ki-duotone ki-information-5 fs-5"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></i> </span>
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->

                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content px-3">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                value="1" checked="checked" name="notifications" />
                            <span class="form-check-label text-muted fs-7">
                                Notifications
                            </span>
                        </label>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="account/statements.html" class="menu-link px-5">
                My Statements
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->

        <!--begin::Menu item-->
        <div class="menu-item px-5 my-1">
            <a href="account/settings.html" class="menu-link px-5">
                Account Settings
            </a>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button :href="route('logout')" class="menu-link px-5 w-100"
                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    Sign Out
                </button>
            </form>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::User account menu-->
    <!--end::Menu wrapper-->
</div>
