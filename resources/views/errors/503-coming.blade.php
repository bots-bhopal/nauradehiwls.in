<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NWLS | Coming Soon</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/coming-soon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/flip.css')}}">
    <link href="{{asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <style>
		.btn-outline-aqua {
            /* background-color: #047BAB !important; */
            background: linear-gradient(90deg, rgba(29,84,1,1) 0%, rgba(145,190,0,1) 39%, rgba(22,87,0,1) 100%);
            background-size: 300% auto;
			color: #ffffff !important;
            border-radius: 25px;
			border: 2px solid #ffe600!important;
            transition: 1s!important;
		}

		.btn-outline-aqua:hover {
			color: #fff !important;
            border: 2px solid #ffe600!important;
            background: rgba(29,84,1,1);
            background-position: right center;
			/* background-color: #047BAB !important; */
			/* border-color: #047BAB !important; */
		}

        h1{
            font-weight: 700;
            font-size: 52px;
            text-transform: uppercase;
        }

        h2{
            font-weight: 700;
            font-size: 38px;
            text-transform: uppercase;
        }

        .container {
            margin: 0px auto; max-width: 960px;
        }

        .tick {
            font-size:1rem;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        .tick-label {
            color: #fff;
            font-size:.365em;
            text-align:center;
        }

        .tick-group {
            margin:0 .25em;
            text-align:center;
        }
	</style>
</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="title">
                    <h1 class="text-white">
                        <span style="color: #f9c820; text-shadow: 2px 2px 4px #333;">Nauradehi </span> <span style="color: #f4edd2; text-shadow: 2px 2px 4px #333;">Wildlife Sancturay</span>
                    </h1>
                </div>

                <div class="sub-title mt-5">
                    <h2 class="text-white">
                        Coming Soon
                    </h2>
                </div>
            </div>
        </div>

        <div class="tick" data-did-init="handleTickInit">
            <div data-repeat="true" data-layout="horizontal center fit" data-transform="preset(d, h, m, s) -> delay">
                <div class="tick-group">
                    <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">
                        <span data-view="flip"></span>
                    </div>

                    <span data-key="label" data-view="text" class="tick-label"></span>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <a href="{{url('/')}}" class="btn btn-lg btn-outline-aqua" style="font-weight: 700;">LAUNCH  <i class="fa fa-rocket" aria-hidden="true" style="font-size: 22px;"></i></a>
            </div>
        </div>
    </div>

    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/flip.js')}}"></script>

    <script>
        function handleTickInit(tick) {
            // create the schedule counter
            Tick.count.schedule('today at 11:45', { timezone: '+05:30' }).onupdate = function(value) {
                tick.value = value;
            }
        }
    </script>
</body>
</html>
