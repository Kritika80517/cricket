@extends('frontend.layouts.master')
@section('page-title', 'Series')
@section('website-content')
    <style>
        /* CSS Styles */
        .cb-nav-pill-1 {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #eee;
            text-decoration: none;
            color: #000;
            display: inline-block;
        }

        .cb-font-12 {
            font-size: 12px;
        }

        .ct-on-tab-click {
            cursor: pointer;
        }

        .active {
            background-color: #ccc;
        }

        .cb-lv-grn-strip {
            background-color: #8fbc8f;
            color: #fff;
        }

        .cb-col {
            display: inline-block;
            color: black;
        }

        .cb-col-16 {
            width: 16%;
            color: black;
        }

        .cb-col-84 {
            width: 84%;
        }

        .cb-col-100 {
            width: 100%;
        }

        .text-bold {
            font-weight: bold;
        }

        .text-black {
            color: #000;
        }

        .text-gray {
            color: #777;
        }

        .text-hvr-underline:hover {
            text-decoration: underline;
        }
    </style>

    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
            <h3>Series</h3>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Series</li>
            </ul>
        </div>
    </div>

    <section id="contant" class="contant main-heading team">
        <div class="container">
            <div class="cb-bg-white cb-schdl cb-col cb-col-100 ng-scope" ng-controller="scheduleFilters">
                <!----Cricket Schedule-->
                {{-- <h1 class="cb-schdl-hdr cb-font-24 line-ht30">Series</h1> --}}

                <nav class="cb-schdl-nvtb" gtm-label="upcoming series">

                    <a id="category-link" href="#"
                        class="cb-nav-pill-1 cb-font-12 ct-on-tab-click active">International</a>

                    <a id="srs_category_domestic_others" href="#" class="cb-nav-pill-1 cb-font-12 ct-on-tab ">Domestic
                        & Others</a>

                    <a id="srs_category_t20_leagues" href="#" class="cb-nav-pill-1 cb-font-12 ct-on-tab-click">T20
                        Leagues</a>

                    <a id="women-category" href="#" class="cb-nav-pill-1 cb-font-12 ct-on-tab-click">Women</a>
                </nav>

                <div class="cb-lv-grn-strip cb-col-16 cb-col" style="padding-top:5px;">Month</div>
                <div class="cb-col-84 cb-col cb-lv-grn-strip" style="padding:5px 0 5px 20px;">Series Name</div>


                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth" style="display: block;">February 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="ICC Cricket World Cup League Two 2023-27 Matches Feb 15, 2024 - Mar 30, 2027">
                                <span class="text-black">ICC Cricket World Cup League Two 2023-27</span>
                            </a>
                            <div class="text-gray cb-font-12">Feb 15 - Mar 30</div>
                        </div>
                    </div>
                </div>
                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth" style="display: block;">May 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Pakistan tour of England, 2024 Matches May 22, 2024 - May 30, 2024">
                                <span class="text-black">Pakistan tour of England, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">May 22 - May 30</div>
                        </div>
                    </div>
                </div>
                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth">June 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="ICC Mens T20 World Cup 2024 Matches Jun 01, 2024 - Jun 29, 2024">
                                <span class="text-black">ICC Mens T20 World Cup 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Jun 01 - Jun 29</div>
                        </div>
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="ICC Mens T20 World Cup Europe Qualifier Group A 2024 Matches Jun 09, 2024 - Jun 16, 2024">
                                <span class="text-black">ICC Mens T20 World Cup Europe Qualifier Group A 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Jun 09 - Jun 16</div>
                        </div>
                    </div>
                </div>

                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth">July 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="India tour of Zimbabwe, 2024 Matches Jul 06, 2024 - Jul 14, 2024">
                                <span class="text-black">India tour of Zimbabwe, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Jul 06 - Jul 14</div>
                        </div>
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="West Indies tour of England, 2024 Matches Jul 10, 2024 - Jul 30, 2024">
                                <span class="text-black">Zimbabwe tour of Ireland, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Jul 25 - Jul 29</div>
                        </div>

                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="South Africa tour of West Indies, 2024 Matches Jul 31, 2024 - Aug 27, 2024 ">
                                <span class="text-black">South Africa tour of West Indies, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Jul 31 - Aug 27</div>
                        </div>

                    </div>
                </div>


                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth" style="display: block;">August 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Sri Lanka tour of England, 2024 Matches Aug 21, 2024 - Sep 10, 2024">
                                <span class="text-black">Sri Lanka tour of England, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Aug 21 - Sep 10</div>
                        </div>
                    </div>
                </div>


                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth">September 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Australia tour of England, 2024 Matches Sep 11, 2024 - Sep 29, 2024">
                                <span class="text-black">Australia tour of England, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Sep 11 - Sep 29</div>
                        </div>
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Ireland v South Africa in UAE, 2024 Matches Sep 27, 2024 - Oct 07, 2024">
                                <span class="text-black">Ireland v South Africa in UAE, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Sep 27 - Oct 07</div>
                        </div>
                    </div>
                </div>

                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth" style="display: block;">October 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="England tour of West Indies, 2024 Matches Oct 31, 2024 - Nov 17, 2024">
                                <span class="text-black">England tour of West Indies, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Oct 31 - Nov 17</div>
                        </div>
                    </div>
                </div>

                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth">November 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Pakistan tour of Australia, 2024 Matches Nov 04, 2024 - Nov 18, 2024">
                                <span class="text-black">Pakistan tour of Australia, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Nov 04 - Nov 18</div>
                        </div>
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Bangladesh tour of West Indies, 2024 Matches Nov 15, 2024 - Dec 19, 2024">
                                <span class="text-black">Bangladesh tour of West Indies, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Nov 15 - Dec 19</div>
                        </div>

                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="India tour of Australia, 2024-25 Matches Nov 22, 2024 - Jan 07, 2025 ">
                                <span class="text-black">India tour of Australia, 2024-25</span>
                            </a>
                            <div class="text-gray cb-font-12">Nov 22 - Jan 07</div>
                        </div>

                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Sri Lanka tour of South Africa, 2024 Matches Nov 27, 2024 - Dec 09, 2024 ">
                                <span class="text-black">Sri Lanka tour of South Africa, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Nov 27 - Dec 09</div>
                        </div>

                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="England tour of New Zealand, 2024 Matches Nov 28, 2024 - Dec 18, 2024 ">
                                <span class="text-black">England tour of New Zealand, 2024</span>
                            </a>
                            <div class="text-gray cb-font-12">Nov 28 - Dec 18</div>
                        </div>

                    </div>
                </div>

                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth" style="display: block;">December 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Pakistan tour of South Africa, 2024 -25 Matches Dec 10, 2024 - Jan 07, 2025">
                                <span class="text-black">Pakistan tour of South Africa, 2024 -25</span>
                            </a>
                            <div class="text-gray cb-font-12">Dec 10 - Jan 07</div>
                        </div>
                    </div>
                </div>

                <div class="cb-col-100 cb-col">
                    <div class="cb-col-16 cb-col text-bold cb-mnth" style="display: block;">February 2024</div>
                    <div class="cb-col cb-col-84">
                        <div class="cb-sch-lst-itm">
                            <a class="text-black text-hvr-underline" href="#"
                                title="Zimbabwe tour of England, 2025 Matches May 28, 2025 - May 31, 2025">
                                <span class="text-black">Zimbabwe tour of England, 2025</span>
                            </a>
                            <div class="text-gray cb-font-12">May 28 - May 31</div>
                        </div>
                    </div>
                </div>

                <div id="top-btn" class="cb-text-white text-center text-bold" title="Go to top"
                    style="display: none;">
                    <div>Move to top</div>
                    <div class="cb-pageup-arrow cb-ico"></div>
                </div>

                <script type="text/javascript">
                    var script_tag = document.getElementsByTagName('script')[0];
                    (function() {
                        var cmin = document.createElement('script');
                        cmin.type = 'text/javascript';
                        cmin.async = true;
                        cmin.src = '/dist/js/cricbuzz.min.1716560347.js';
                        script_tag.parentNode.insertBefore(cmin, script_tag);
                    })();
                </script>

                <script>
                    var firebaseScript = ['https://www.gstatic.com/firebasejs/7.22.0/firebase-app.js',
                        'https://www.gstatic.com/firebasejs/7.22.0/firebase-analytics.js'
                    ];
                    var firebaseJS = [];
                    for (var i = 0; i < firebaseScript.length; i++) {
                        firebaseJS[i] = document.createElement('script');
                        firebaseJS[i].type = 'text/javascript';
                        firebaseJS[i].async = true;
                        firebaseJS[i].src = firebaseScript[i];
                        var stag = document.getElementsByTagName('script')[0];
                        stag.parentNode.insertBefore(firebaseJS[i], stag);
                    }

                    function initializeFirebaseJS() {
                        var firebaseConfig = {
                            apiKey: "AIzaSyCTfMJJ_bLdOnp_OKuxi9ce8vmnzgqUHiM",
                            authDomain: "cricbuzz-desktop.firebaseapp.com",
                            databaseURL: "https://cricbuzz-desktop.firebaseio.com",
                            projectId: "cricbuzz-desktop",
                            storageBucket: "cricbuzz-desktop.appspot.com",
                            messagingSenderId: "820819117977",
                            appId: "1:820819117977:web:eabf3544ac136b1a643508",
                            measurementId: "G-4H06J8XXQH"
                        };
                        if (typeof(firebase) != undefined) {
                            var cbPlusState = (localStorage.getItem('userState') != null) ? localStorage.getItem('userState') :
                                'NOTSET';
                            var cbPlusUId = (localStorage.getItem('userId') != null) ? localStorage.getItem('userId') : 'NOTSET';
                            var cbSubscriptionPlan = (localStorage.getItem('planId') != null) ? 'PLAN' + localStorage.getItem(
                                'planId') : 'PLAN0';
                            cbSubscriptionPlan = (localStorage.getItem('termId') != null) ? cbSubscriptionPlan + '-TERM' + localStorage
                                .getItem('termId') : cbSubscriptionPlan;
                            var is_premium_page = false;
                            firebase.initializeApp(firebaseConfig);
                            firebase.analytics().setUserProperties({
                                cb_user: cbPlusUId,
                                cb_subscription_plan: cbSubscriptionPlan,
                                cb_sub_user_state: cbPlusState
                            });
                            firebase.analytics().logEvent('cb_screen_name', {
                                cb_premium_screen: is_premium_page
                            });
                        } else {
                            setTimeout(initializeFirebaseJS, 3000);
                        }
                    }
                    firebaseJS[1].onload = function() {
                        initializeFirebaseJS();
                    }
                </script>
            </div>
    </section>

@endsection
