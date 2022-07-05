<aside class="main-sidebar sidebar-dark-primary elevation-4 d-none d-sm-block">
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light">پنل مدیریت ارجاعات</span>
    </a>
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{route('customers.index')}}" class="nav-link {{ request()->is('customers*') ?'active':''}}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                مدیریت مشتری‌ها
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview menu-open">
                        <a href="{{route('referrals.showCheck')}}" class="nav-link {{Route::currentRouteName()=='referrals.showCheck'?'active':''}}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                اصالت سنجی کد ارجاع
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{route('discounts.index')}}" class="nav-link {{Route::currentRouteName()=='discounts.index'?'active':''}}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                لیست کدتخفیف ها
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{route('discounts.showCheck')}}" class="nav-link {{Route::currentRouteName()=='discounts.showCheck'?'active':''}}">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                اصالت سنجی کد تخفیف
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview menu-open">
                        <a href="{{route('logout')}}" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                خروج
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>
