<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('nwls.admin-body') }}"
                            class="{{ Request::is('management/admin-body') ? 'active' : '' }}">{{ trans('navbar.administrative-body') }}</a>
                    </li>

                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('nwls.activities') }}"
                                class="{{ Request::is('management/activities') ? 'active' : '' }}">{{ trans('navbar.management-activities') }}</a>
                        </li>

                        {{-- <li>
                            <a href="{{ route('nwls.objectives') }}"
                                class="{{ Request::is('management/objectives') ? 'active' : '' }}">{{ trans('navbar.other-activities') }}</a>
                        </li> --}}

                        {{-- <li>
                            <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx" target="_blank">{{ trans('navbar.donation') }}</a>
                        </li> --}}

                        <li>
                            <a href="{{ route('nwls.contact') }}"
                                class="{{ Request::is('management/contact') ? 'active' : '' }}">{{ trans('navbar.contact') }}</a>
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
