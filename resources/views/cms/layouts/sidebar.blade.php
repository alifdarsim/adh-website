<div class="nk-sidebar is-light nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{route('index')}}" class="logo-link">
                <img class="logo-light logo-img" style="height: 40px" src="/assets/images/logo-dark.png" srcset="/assets/images/logo-dark.png" alt="logo">
                <img class="logo-dark logo-img" style="height: 40px" src="/assets/images/logo-dark.png" srcset="/assets/images/logo-dark.png" alt="logo-dark">
            </a>
        </div>

        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">RESOURCES</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('cms.blogs.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-blogger"></em></span>
                            <span class="nk-menu-text">Blogs</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('cms.case-studies.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-regen-alt"></em></span>
                            <span class="nk-menu-text">Case Studies</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('cms.articles.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file"></em></span>
                            <span class="nk-menu-text">Articles</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
