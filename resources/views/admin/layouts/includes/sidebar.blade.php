<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(68,67,69)">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('public/web/title.png') }}" alt="najezedu" class=" brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Al-Education</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/admin/dist/img/default_user.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column p-0" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link bg-origin">
                        <i class="nav-icon fas fa-tachometer-alt "></i>
                        <p>
                            الرئيسيه
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs text-green"></i>
                        <p>
                            الاعدادات العامة
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('generalSetting.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon green-1"></i>
                                <p>بيانات المؤسسة</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-cogs text-green"></i>
                                <p>
                                    المستخدمين
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('users.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon green-1"></i>
                                        <p>اضافة مستخدم</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon green-1"></i>
                                        <p>صلاحيات المستخدمين </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon green-1"></i>
                                <p>اضافة تصنيف</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subCategory.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon green-1"></i>
                                <p>اضافة تصنيف فرعى</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subject.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon green-1"></i>
                                <p>اضافة دروس</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
