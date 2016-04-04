<!doctype html>
<html>
<head>
    <title>Thank you</title>
    <meta charset="utf-8">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>

</head>
<body style="background-color: #e2e3e5; font-family: 'Open Sans', sans-serif; color: #888;">
<div>
    <div>
        <div style="height: 1px; background: #fff; top: 65px!important;"></div>
        <header style="background: #88001b; padding-bottom: 10px;">
            <img class="Home_Logo" src="<?php echo base_url('public/images/amanjaya-logo.png'); ?>"
                 style="display: block; margin: 0 auto;"/>
        </header>
    </div>

    <div
        style="color: #333; text-align: center; font-size: 16px; background-color: #fff; padding-top: 30px; padding-bottom: 30px;">
        <div style=" font-weight: 600; text-transform: capitalize; padding-bottom: 40px;">
            Dear Kwest
        </div>

        <div style="padding-bottom: 10px">
            <p style="line-height: 5px">You have one new booking: </p>
            <p style="line-height: 5px">Name of booking</p>

            <p style="line-height: 5px text-transform: capitalize;">
                <span style="color: #88001b;"><?php echo $booking->row('name_of_reservation'); ?></span>
            </p>
        </div>

        <div style="padding-bottom: 10px">
            <p style="line-height: 5px">
                <span style="color: #88001b;"><?php echo $booking->row('number_of_guests'); ?></span>
                <span> guest(s)</span>
            </p>
        </div>

        <div style="padding-bottom: 10px">
            <p style="line-height: 5px">on the</p>
            <p style="line-height: 5px">
                <span style="color: #88001b;"><?php echo date('F jS, Y', strtotime($booking->row('date'))); ?></span>
                <span> at </span>
                <span style="color: #88001b;"><?php echo date('h:i A', strtotime($booking->row('time'))); ?></span>
            </p>
        </div>

        <div style="padding-bottom: 10px">
            <p style="line-height: 5px">comments:</p>
            <p style="line-height: 5px">
                <span style="color: #88001b;">
                    <?php echo $booking->row('remarks'); ?>
                </span>
            </p>
        </div>

        <div style="border-top:2px solid #88001b; margin-top: 80px;"></div>

        <div style="padding: 40px">
            <img src="<?php echo base_url('public/images/kwest-logo.png') ?>" alt="kwest-logo">
        </div>

        <div style=" background: #88001b; padding-bottom: 0 !important; padding-top: 5px;">
            <a href="#">
                <svg id="Capa_1" width="30px" height="30px" viewBox="0 0 96.124 96.123" style="padding: 5px 40px;">
                    <path fill="#fff" d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
		c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
		c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
		c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
                </svg>
            </a>
            <a href="#">
                <svg id="Capa_2" width="30px" height="30px" viewBox="0 0 178.083 178.083" style="padding: 5px 40px;">
                    <path fill="#fff" d="M152.235,8.9c0.417-2.195-0.166-4.462-1.591-6.184C149.219,0.996,147.101,0,144.867,0H42.777
	c-9.407,0-17.06,7.653-17.06,17.062v153.521c0,3.093,1.898,5.868,4.781,6.99c0.884,0.344,1.805,0.51,2.717,0.51
	c2.063,0,4.081-0.852,5.53-2.432l51.479-56.161h34.787c3.602,0,6.695-2.56,7.368-6.1l9.905-52.128
	c0.002-0.007,0.003-0.013,0.004-0.019L152.235,8.9z M118.802,104.49H86.925c-2.103,0-4.108,0.883-5.529,2.432l-40.68,44.38V17.062
	c0-1.117,0.944-2.062,2.06-2.062h93.031l-7.077,37.244H83.995c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h41.884L118.802,104.49z
	"/>
                </svg>
            </a>
            <a href="#">
                <svg id="Capa_3"  width="30px" height="30px" viewBox="0 0 612 612" style="padding: 5px 40px;">
                    <path style="fill:#fff;" d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
			c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
			c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
			c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
			c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
			c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
			c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
                </svg>
            </a>
        </div>

        <div style="font-size: 14px !important; text-transform: uppercase;">
            <p style="font-size: 16px !important; padding: 30px; font-weight: 600; line-height: 5px">amanjaya suites
                hotel</p>
            <div class="section" style="padding-bottom: 10px; font-size: 14px !important; text-transform: uppercase;">
                <p style="line-height: 5px">#1 street 154</p>
                <p style="line-height: 5px">[ corner with sisovath quay ]</p>
                <p style="line-height: 5px">phnom penh kingdom of cambodia </p>
            </div>
            <p style="line-height: 5px">T +855 (0) 23 21 47 47 </p>
            <p style="line-height: 5px">F +855 (0) 23 21 95 45 </p>
        </div>
    </div>

</div>

</body>
</html>
