<header id="masthead" class="masthead--transparent">
    <div class="header-menu-overlay header-menu-overlay--primary"></div>
    <div class="page-container">
        <div class="header-menu-overlay header-menu-overlay--secondary"></div>
        <div class="header-wrap">
            <div class="header-logo">
                <!-- Large screen logo -->
                <a class="navbar-brand footer-logo" href="{{route('index')}}">
                    <img src="assets/images/footer-logo.png" style="width: 96px; height: 42px"></a>
                <!-- Small screen logo -->
                <a class="navbar-brand res-logo" href="{{route('index')}}" style="padding:5px 0px 15px 5px;display: none;">
                    <img src="assets/images/res-logo.png" style="width: 30px; height: 30px"></a>
            </div>

            <ul id="menu-header-main" class="header-menu header-menu-primary">
                <li class="dmenu header-menu-item header-menu-item-163 menu-item-depth--0 header-menu-item--has-children">
                    <a href="#" id="menuh" class="header-menu-link menuh">
                        <span>{{__('OFFERING')}}</span>
                    </a>
                    <button type="button" class="header-menu-expand">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--plus">
                                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--minus">
                                <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="header-sub-menu sm-menu">

                        <ul class="header-sub-menu-column">
                            <li class="header-menu-item header-menu-item-29577 menu-item-depth--1 header-menu-item--has-children">
                                <div class="header-menu-link header-menu-link--disabled">
                                    <span>EXPERT BASED CONSULTING</span>
                                </div>
                            <li class="header-menu-item header-menu-item-191 menu-item-depth--1">
                                <a href="{{route('offering.research', 'ms')}}" class="header-menu-link">
                                    <span>Research</span>
                                </a>
                                <!---->
                            </li>
                            <li class="header-menu-item header-menu-item-21544 menu-item-depth--1">
                                <a href="{{route('offering.strategy', 'ms')}}" class="header-menu-link">
                                    <span>Strategy</span>
                                </a>
                                <!---->
                            </li>
                            <li class="header-menu-item header-menu-item-2406 menu-item-depth--1">
                                <a href="{{route('offering.operation', 'ms')}}" class="header-menu-link">
                                    <span>Operation</span>
                                </a>
                                <!---->
                            </li>
                            <li class="header-menu-item header-menu-item-2406 menu-item-depth--1">
                                <a href="{{route('offering.digital', 'ms')}}" class="header-menu-link">
                                    <span>Digital</span>
                                </a>
                                <!---->
                            </li>
                </li>
            </ul>
            <ul class="header-sub-menu-column">
                <li class="header-menu-item header-menu-item-29578 menu-item-depth--1 header-menu-item--has-children">
                    <div class="header-menu-link header-menu-link--disabled">
                        <span>ORIGINATION/HUBS</span>
                    </div>
                    <ul class="header-sub-menu-column">
                        <li class="header-menu-item header-menu-item-194 menu-item-depth--2">
                            <a href="{{route('offering.develop', 'ms')}}" class="header-menu-link">
                                <span>Research & Development</span>
                            </a>
                        </li>
                        <li class="header-menu-item header-menu-item-197 menu-item-depth--2">
                            <a href="{{route('offering.marketing', 'ms')}}" class="header-menu-link">
                                <span>Marketing</span>
                            </a>
                        </li>
                        <li class="header-menu-item header-menu-item-31870 menu-item-depth--2">
                            <a href="{{route('offering.merger', 'ms')}}" class="header-menu-link">
                                <span>Merger & Acquisition</span>
                            </a>
                        </li>
                        <li class="header-menu-item header-menu-item-31870 menu-item-depth--2">
                            <a href="{{route('offering.procurement', 'ms')}}" class="header-menu-link">
                                <span>Procurement</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="header-sub-menu-column">
                <li class="header-menu-item header-menu-item-29579 menu-item-depth--1 header-menu-item--has-children">
                    <div class="header-menu-link header-menu-link--disabled">
                        <span>TRADING</span>
                    </div>
                    <ul class="header-sub-menu-column">
                        <li class="header-menu-item header-menu-item-671 menu-item-depth--2">
                            <a href="{{route('offering.commodity', 'ms')}}" class="header-menu-link">
                                <span>Commodity</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="header-sub-menu-column">
                <li class="header-menu-item header-menu-item-29579 menu-item-depth--1 header-menu-item--has-children">
                    <div class="header-menu-link header-menu-link--disabled">
                        <span>PLATFORM</span>
                    </div>
                    <ul class="header-sub-menu-column">
                        <li class="header-menu-item header-menu-item-671 menu-item-depth--2">
                            <a href="{{route('offering.service', 'ms')}}" class="header-menu-link">
                                <span> Sourcing As A Service</span>
                            </a>
                        </li>
                        <li class="header-menu-item header-menu-item-671 menu-item-depth--2">
                            <a href="{{route('offering.intelligence-marketplace', 'ms')}}" class="header-menu-link">
                                <span> Intelligent Marketplace</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        </li>
        <li class="dmenu header-menu-item header-menu-item-2427 menu-item-depth--0 header-menu-item--has-children">
            <a href="#" id="menuh" class="header-menu-link menuh">
                <span>{{__('INDUSTRY')}}</span>
            </a>
            <button type="button" class="header-menu-expand">
                <div class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--plus">
                        <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--minus">
                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                </div>
            </button>
            <div class="header-sub-menu sm-menu">
                <ul class="header-sub-menu-column">
                    <li class="header-menu-item header-menu-item-32339 menu-item-depth--1 header-menu-item--has-children">

                        <ul class="header-sub-menu-column">
                            <li class="header-menu-item header-menu-item-176 menu-item-depth--2">
                                <a href="{{route('industry.aero', 'ms')}}" class="header-menu-link">
                                    <span>Aerospace & Defense</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-20849 menu-item-depth--2">
                                <a href="industry-agriculture.php" class="header-menu-link">
                                    <span>Agriculture</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-20850 menu-item-depth--2">
                                <a href="industry-auto.php" class="header-menu-link">
                                    <span>Automotive & Assembly</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-182 menu-item-depth--2">
                                <a href="industry-chemical.php" class="header-menu-link">
                                    <span>Chemical</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-cus-good.php" class="header-menu-link">
                                    <span>Consumer Packed Goods</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-184 menu-item-depth--2">
                                <a href="industry-education.php" class="header-menu-link">
                                    <span>Education</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-20291 menu-item-depth--2">
                                <a href="industry-electric.php" class="header-menu-link">
                                    <span>Electric Power & Natural Gas</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-20947 menu-item-depth--2">
                                <a href="industry-engee.php" class="header-menu-link">
                                    <span>Engineering & Construction</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="header-sub-menu-column">
                    <li class="header-menu-item header-menu-item-32340 menu-item-depth--1 header-menu-item--has-children">

                        <ul class="header-sub-menu-column">
                            <li class="header-menu-item header-menu-item-20291 menu-item-depth--2">
                                <a href="industry-financial.php" class="header-menu-link">
                                    <span>Financial Services</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-health.php" class="header-menu-link">
                                    <span>Healthcare</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-184 menu-item-depth--2">
                                <a href="industry-life.php" class="header-menu-link">
                                    <span>Life Science</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-20947 menu-item-depth--2">
                                <a href="industry-in-elec.php" class="header-menu-link">
                                    <span>Industrials & Electronics</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-metals.php" class="header-menu-link">
                                    <span>Metals & Mining</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-184 menu-item-depth--2">
                                <a href="industry-oil.php" class="header-menu-link">
                                    <span>Oil & Gas</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-20291 menu-item-depth--2">
                                <a href="industry-packing.php" class="header-menu-link">
                                    <span>Packaging & Paper</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-20947 menu-item-depth--2">
                                <a href="industry-private.php" class="header-menu-link">
                                    <span>Private Equity & Principal Investors</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="header-sub-menu-column">
                    <li class="header-menu-item header-menu-item-32340 menu-item-depth--1 header-menu-item--has-children">

                        <ul class="header-sub-menu-column">
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-public.php" class="header-menu-link">
                                    <span>Public Sector</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-reales.php" class="header-menu-link">
                                    <span>Real Estate</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-retail.php" class="header-menu-link">
                                    <span>Retail</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-semi.php" class="header-menu-link">
                                    <span>Semiconductor</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-social.php" class="header-menu-link">
                                    <span>Social Sector</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-media.php" class="header-menu-link">
                                    <span>Technology, Media & Telecommunications</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-177 menu-item-depth--2">
                                <a href="industry-travel.php" class="header-menu-link">
                                    <span>Travel, Logistics & Infrastructure</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </li>
        <li class="header-menu-item header-menu-item-151 menu-item-depth--0">
            <a href="{{route('expert.index', 'ms')}}" id="menuh" class="header-menu-link">
                <span>{{__('EXPERT')}}</span>
            </a>
            <!---->
            <!---->
        </li>


        <li class="dmenu header-menu-item header-menu-item-5778 menu-item-depth--0 header-menu-item--has-children">
            <a href="#" id="menuh" class="header-menu-link menuh">
                <span>{{__('RESOURCE')}}</span>
            </a>
            <button type="button" class="header-menu-expand">
                <div class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--plus">
                        <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--minus">
                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                </div>
            </button>
            <div class="header-sub-menu sm-menu">
                <ul class="header-sub-menu-column">
                    <li class="header-menu-item header-menu-item-103 menu-item-depth--1">
                        <a href="resources.php?type=blogs" class="header-menu-link">
                            <span>Blog</span>
                        </a>
                        <!---->
                    </li>
                    <li class="header-menu-item header-menu-item-5810 menu-item-depth--1">
                        <a href="resources.php?type=case_study" class="header-menu-link">
                            <span>Case Study</span>
                        </a>
                        <!---->
                    </li>
                </ul>

            </div>
        </li>
        <li class="dmenu header-menu-item header-menu-item-5778 menu-item-depth--0 header-menu-item--has-children">
            <a href="#" id="menuh" class="header-menu-link menuh">
                <span>{{__('ABOUT US')}}</span>
            </a>
            <button type="button" class="header-menu-expand">
                <div class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--plus">
                        <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon--minus">
                        <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                    </svg>
                </div>
            </button>

            <div class="header-sub-menu sm-menu">
                <ul class="header-sub-menu-column">
                    <li class="header-menu-item header-menu-item-29579 menu-item-depth--1 header-menu-item--has-children">
                        <div class="header-menu-link header-menu-link--disabled">
                            <span>COMPANY</span>
                        </div>
                        <ul class="header-sub-menu-column">
                            <li class="header-menu-item header-menu-item-671 menu-item-depth--2">
                                <a href="company.php" class="header-menu-link">
                                    <span> History</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-671 menu-item-depth--2">
                                <a href="{{route('about-us.team', 'ms')}}" class="header-menu-link">
                                    <span> Team</span>
                                </a>
                            </li>
                            <li class="header-menu-item header-menu-item-671 menu-item-depth--2">
                                <a href="{{route('about-us.contact', 'ms')}}" class="header-menu-link">
                                    <span> Contact</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="header-sub-menu-column">
                    <li class="header-menu-item header-menu-item-29579 menu-item-depth--1 header-menu-item--has-children">
                        <div class="header-menu-link header-menu-link--disabled">
                            <span> FOR THE FUTURE</span>
                        </div>

                    </li>
                    <li class="header-menu-item header-menu-item-671 menu-item-depth--2">
                        <a href="{{route('about-us.career', 'ms')}}" class="header-menu-link">
                            <span> Career</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        </ul>

        <ul id="menu-header-right" class="header-menu header-menu-secondary">
            <li id="menuh" class="dmenu1 header-menu-item header-menu-item-108 menu-item-depth--0 header-menu-item--has-children">
                <button id="btn" class="header-menu-link">
                    <span>{{__('SIGN IN')}}</span>
                </button>
                <div class="header-sub-menu sm-menu1">
                    <ul class="header-sub-menu-column">
                        <li class="header-menu-item header-menu-item-10388 menu-item-depth--1">
                            <a href="https://app.asiadealhub.com/auth/login/expert" class="header-menu-link">
                                <span>Expert Network Platform</span>
                            </a>
                        </li>
                        <li class="header-menu-item header-menu-item-10389 menu-item-depth--1">
                            <a href="" class="header-menu-link">
                                <span>Sourcing Service Platform</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li id="menuh" class="dmenu1 header-menu-item header-menu-item-109 menu-item-depth--0">
                <button type="button" class="header-menu-link">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd" class="icon">
              <path d="M12.02 0C18.634.011 24 5.383 24 12c0 6.623-5.376 12-12 12-6.623 0-12-5.377-12-12C0 5.383 5.367.011 11.981 0h.039zm3.694 16H8.287c.639 4.266 2.242 7 3.713 7 1.472 0 3.075-2.734 3.714-7m6.535 0h-5.523c-.426 2.985-1.321 5.402-2.485 6.771A11.025 11.025 0 0022.249 16M7.275 16H1.751a11.029 11.029 0 008.009 6.771C8.596 21.402 7.701 18.985 7.275 16m-.123-7H1.416a11.043 11.043 0 000 6h5.736a29.82 29.82 0 010-6m8.691 0H8.158a28.617 28.617 0 000 6h7.685a28.62 28.62 0 000-6m6.742 0h-5.736c.062.592.308 3.019 0 6h5.736a11.042 11.042 0 000-6M9.76 1.229A11.029 11.029 0 001.751 8h5.524c.426-2.985 1.321-5.403 2.485-6.771M15.714 8C15.075 3.734 13.472 1 12 1c-1.471 0-3.074 2.734-3.713 7h7.427zm-1.473-6.771C15.405 2.597 16.3 5.015 16.726 8h5.523a11.025 11.025 0 00-8.008-6.771" fill="#fff"></path>
            </svg>
          </span>
                </button>
                <div class="header-sub-menu sm-menu1">
                    <ul class="header-sub-menu-column">
                        <li class="header-menu-item menu-item-depth--1">
                            <a href="" onclick="" class="header-menu-link lang-btn" data-lang="en">
                                <span>English</span>
                            </a>
                        </li>
                        <li class="header-menu-item menu-item-depth--1">
                            <a href="" class="header-menu-link lang-btn" data-lang="zh">
                                <span>中文</span>
                            </a>
                        </li>
                        <li class="header-menu-item menu-item-depth--1">
                            <a href="" class="header-menu-link lang-btn" data-lang="ja">
                                <span>日本語</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="header-sub-menu-column">
                        <li class="header-menu-item menu-item-depth--1">
                            <a href="" class="header-menu-link lang-btn" data-lang="ko">
                                <span>한국어</span>
                            </a>
                        </li>
                        <li class="header-menu-item menu-item-depth--1">
                            <a href="" class="header-menu-link lang-btn" data-lang="ms">
                                <span>Bahasa Melayu</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dmenu header-menu-item menu-item-depth--0 header-menu-item--mobile-toggle header-menu-item--has-children">
                <button type="button" class="header-menu-link mobile-menu-toggle">
                    <span>Menu</span>
                </button>
            </li>
        </ul>
    </div>
    </div>
</header>
