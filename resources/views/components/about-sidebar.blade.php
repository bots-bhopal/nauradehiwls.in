<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('nwls.about-introduction') }}"
                            class="{{ Request::is('about/introduction') ? 'active' : '' }}">{{ trans('navbar.introduction') }}</a>
                    </li>

                    <ul class="link blog-link">
                        {{-- <li>
                            <a href="{{ route('nwls.history') }}"
                                class="{{ Request::is('about/history') ? 'active' : '' }}">{{ trans('navbar.history') }}</a>
                        </li> --}}

                        <li>
                            <a href="{{ route('nwls.sanctuary-profile') }}"
                                class="{{ Request::is('about/sanctuary-profile') ? 'active' : '' }}">{{ trans('navbar.reserve-profile') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.forest-type') }}"
                                class="{{ Request::is('about/forest-type') ? 'active' : '' }}">{{ trans('navbar.forest-type') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.topography') }}"
                                class="{{ Request::is('about/topography') ? 'active' : '' }}">{{ trans('navbar.topography') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.significance') }}"
                                class="{{ Request::is('about/significance') ? 'active' : '' }}">{{ trans('navbar.significance') }}</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>

        {{-- <div class="single-sidebar-widget">
            <div class="sec-title">
                <h2>Download<span> brochure</span></h2>
                <span>Here is some useful documents</span>
            </div>

            <ul class="brochure-btns">
                <li>
                    <a href="BTR.pdf" class="clearfix" target="_blank"><i class="fa fa-file-pdf-o"></i> <span>Download Brochure</span></a>
                </li>
            </ul>
        </div> --}}
    </div>
</div>
