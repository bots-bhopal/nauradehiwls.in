<!--loader-->
<div id="preloader">
    <img src="{{ asset('public/assets/images/NWLS-Preloader.gif') }}" alt="nwls-preloader">
</div>
<!--loader-->

<!-- Login Box -->
{{-- <div class="feedback-box">
    <a onclick="feedbackForm();">
        <i class="fa fa-commenting" aria-hidden="true" style="margin-right: 5px;"></i> {{ trans('home.feedback') }}
    </a>
</div> --}}

<!-- Floating Social Media Icons -->
<div class="social-icons">
    <a href="https://www.facebook.com/Nauradehi-Wildlife-Sanctuary-105520571921751/?ti=as" target="_blank"
        class="facebook">Facebook <i class="fa fa-facebook-f"></i></a>
    {{-- <a href="#" target="_blank" class="youtube">Youtube<i
            class="fa fa-youtube"></i></a> --}}
    <a href="https://www.twitter.com/nauradehi" target="_blank" class="twitter">Twitter<i
            class="fa fa-twitter"></i></a>
    <a href="https://instagram.com/nauradehi_wildlife_sanctuary?utm_medium=copy_link" target="_blank"
        class="instagram">Instagram<i class="fa fa-instagram"></i></a>
</div>

<!--Start header area-->
<header class="header-area">
    <div class="container-fluid">
        <div class="row pr-lg-5 pl-lg-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex justify-content-between pt-1 pb-1">
                    <a href="{{ route('nwls.index') }}" class="d-flex align-items-center">
                        <img src="{{ asset('public/assets/images/nwls-logo.png') }}" alt="NWLS-Logo" width="100"
                            height="90"/>
                        <h2 class="my-auto text-center ml-2 mr-2" style="font-family: 'Merriweather Sans', sans-serif;">
                            {{ trans('navbar.title') }}</h2>
                    </a>

                    {{-- <a href="https://forest.mponline.gov.in/Search.aspx?park=STR" target="_blank"
                        class="my-auto">
                        <img src="{{ asset('public/assets/images/safari.jpg') }}" class="img-fluid pt-1"
                            alt="click-to-book-safari" width="120">
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area">
    <div class="container-fluid">
        <div class="mainmenu-bg">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu navbar-toggleable-md">
                        <div class="navbar-header hidden-lg-up">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- ==========================	Desktop Nav ============================ -->
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li>
                                    <a href="{{ route('nwls.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('nwls.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.sanctuary-profile') }}">{{ trans('navbar.reserve-profile') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.forest-type') }}">{{ trans('navbar.forest-type') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.topography') }}">{{ trans('navbar.topography') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.bio-diversity') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('nwls.flora') }}"
                                                class="active">{{ trans('navbar.flora') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.fauna') }}">{{ trans('navbar.fauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.avifauna') }}">{{ trans('navbar.avifauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.butterflies') }}">{{ trans('navbar.butterflies') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.census') }}">{{ trans('navbar.census') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('nwls.how-to-reach') }}"
                                                class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.best-time-to-visit') }}">{{ trans('navbar.best-time-to-visit') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.point-of-interests') }}">{{ trans('navbar.point') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.dos') }}"
                                                style="text-transform: none;">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank"
                                                ;>{{ trans('navbar.safari-booking') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.nwls-management') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('nwls.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.activities') }}"
                                                class="active">{{ trans('navbar.management-activities') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a
                                                href="{{ route('nwls.objectives') }}">{{ trans('navbar.other-activities') }}</a>
                                        </li> --}}

                                        <li>
                                            <a
                                                href="{{ route('nwls.contact') }}">{{ trans('navbar.contact') }}</a>
                                        </li>

                                        <li>
                                            <a onclick="feedbackPopup();" style="cursor: pointer;">
                                                {{ trans('navbar.feedback') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('nwls.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('nwls.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.events') }}">{{ trans('navbar.event') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.tenders') }}"
                                                class="active">{{ trans('navbar.tender') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('nwls.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>

                                <li>
                                    <a onclick="feedbackPopup();" style="cursor: pointer;">
                                        {{ trans('navbar.feedback') }}
                                    </a>
                                </li>
                            </ul>


                            <!-- ==========================	Mobile Nav ============================ -->
                            <ul class="mobile-menu clearfix">
                                <li>
                                    <a href="{{ route('nwls.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('nwls.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.sanctuary-profile') }}">{{ trans('navbar.reserve-profile') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.forest-type') }}">{{ trans('navbar.forest-type') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.topography') }}">{{ trans('navbar.topography') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.bio-diversity') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('nwls.flora') }}"
                                                class="active">{{ trans('navbar.flora') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.fauna') }}">{{ trans('navbar.fauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.avifauna') }}">{{ trans('navbar.avifauna') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.butterflies') }}">{{ trans('navbar.butterflies') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.census') }}">{{ trans('navbar.census') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('nwls.how-to-reach') }}"
                                                class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.best-time-to-visit') }}">{{ trans('navbar.best-time-to-visit') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li>

                                        <li>
                                            <a
                                                href="{{ route('nwls.point-of-interests') }}">{{ trans('navbar.point') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.dos') }}"
                                                style="text-transform: none;">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank"
                                                ;>{{ trans('navbar.safari-booking') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.nwls-management') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a
                                                href="{{ route('nwls.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.activities') }}"
                                                class="active">{{ trans('navbar.management-activities') }}</a>
                                        </li>

                                        {{-- <li>
                                            <a
                                                href="{{ route('nwls.objectives') }}">{{ trans('navbar.other-activities') }}</a>
                                        </li> --}}
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('nwls.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('nwls.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.events') }}">{{ trans('navbar.event') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.tenders') }}"
                                                class="active">{{ trans('navbar.tender') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('nwls.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('nwls.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>

                                <li>
                                    <a onclick="feedbackPopup();" style="cursor: pointer;">
                                        {{ trans('navbar.feedback') }}
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>

            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content"></div>
                    <div class="link_btn float_right">

                        <ul class="navbar-nav language thm-btn bg-clr1">
                            <!-- Language Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <!-- New Language Switcher -->
                                <a class="nav-link dropdown-toggle hover bdr" data-toggle="dropdown" href="#">
                                    <img src="{{ asset('public/assets/images/icons/google-translate.png') }}"
                                        width="24" height="24" alt="Google-Translate" class="img-fluid">
                                    {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right pt-1 pb-1">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                                    class="flag-icon flag-icon-{{ $language['flag-icon'] }}"
                                                    style="margin-right: 8px!important"></span>
                                                {{ $language['display'] }}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->
<!-- END HEADER -->

<!-- Modal -->
<div class="modal fade" id="noticeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-danger" id="exampleModalLabel" style="font-size: 16px; font-weight: 600;"><i
                        class="fa fa-exclamation-triangle" style="margin-right: 5px;"></i>Important
                    Information</h4>
            </div>
            <div class="modal-body text-justify" style="font-size: 18px;">
                You are being redirected to a new tab with Nauradehi Wildlife Sanctuary Feedback form. You may return to the website after filling the form.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 14px; border: none; border-radius: 5px; color: #fff;">Close</button>
                <a onclick="newWindow();" target="_blank" class="btn btn-success" id="ok" data-bs-dismiss="modal" style="font-size: 14px; border: none; border-radius: 5px; color: #fff;">OK</a>
            </div>
        </div>
    </div>
</div>
<!-- /. Modal -->

<!-- Modal -->
{{-- <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content" style="border: 0; border-radius: 0;">
            <div class="modal-header" style="background: #ffcc00;">
                <h5 class="modal-title" id="feedbackModalLabel" style="font-weight: 600;">Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <div id="msg"></div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <form action="{{ route('contact.store') }}" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email Address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Your Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile">
                    </div>
                    <div class="form-group">
                        <label for="message">Feedback/Message</label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" cols="60" rows="4"
                            style="border: 1px solid #999;"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-white" data-dismiss="modal"
                    style="border: none;">Close</button>
                <button type="button" class="btn btn-success text-white" id="formSubmit"
                    style="border: none;">Submit</button>
            </div>
        </div>
    </div>
</div> --}}
<!-- /. Modal -->

@push('js')
    <script>
        // Redirection Modal
        function feedbackPopup() {
             $('#noticeModal').modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            })
        }

        function newWindow(){
            window.open(
              'https://forms.gle/3wftcKWr2GHXTnr97',
              '_blank'
            );
        }

        $('#ok').click(function() {
            $('#noticeModal').modal('hide');
        });

        // Feedback Function
        // function feedbackForm() {
        //     $("#feedbackModal").modal('show');
        // }

        // $(document).ready(function() {
        //     $('#formSubmit').click(function(e) {
        //         e.preventDefault();
        //         $('#formSubmit').attr('disabled', true);

        //         $.ajax({
        //             url: "{{ url('/contact') }}",
        //             method: 'POST',
        //             data: {
        //                 "_token": "{{ csrf_token() }}",
        //                 name: $('#name').val(),
        //                 email: $('#email').val(),
        //                 mobile: $('#mobile').val(),
        //                 message: $('#message').val(),
        //             },
        //             beforeSend: function() {
        //                 let wait =
        //                     '<div class="alert alert-success mb-0">Please wait.....</div>';
        //                 $('#msg').html(wait);
        //             },
        //             success: function(data) {
        //                 if (data.code == 400) {
        //                     $('#formSubmit').attr('disabled', false);
        //                     let error = '<div class="alert alert-danger mb-0">' + data.msg +
        //                         '</div>';
        //                     $('#msg').html(error);
        //                 }

        //                 if (data.code == 200) {
        //                     $('#formSubmit').attr('disabled', false);
        //                     let success = '<div class="alert alert-success mb-0">' + data.msg +
        //                         '</div>';
        //                     $('#msg').html(success);
        //                     $('#formSubmit').attr('disabled', true);

        //                     setInterval(function() {
        //                         location.href =
        //                             "http://localhost/nauradehi.org";
        //                         $('#formSubmit').attr('disabled', false);
        //                     }, 4000);
        //                 }
        //             }
        //         });

        //         //Alert
        //         setTimeout(function() {
        //             $('.alert').slideUp('slow');
        //         }, 5000);
        //     });
        // });
    </script>
@endpush
