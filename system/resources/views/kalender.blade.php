<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Kalender</title>

    <!-- Fontfaces CSS-->
    <link href="dist/css/font-face.css" rel="stylesheet" media="all">
    <link href="dist/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="dist/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="dist/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="disk/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="dist/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="dist/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="dist/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="dist/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="dist/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="dist/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="dist/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- FullCalendar -->
    <link href="dist/vendor/fullcalendar-3.10.0/fullcalendar.css" rel='stylesheet' media="all" />

    <!-- Main CSS-->
    <link href="dist/css/theme.css" rel="stylesheet" media="all">
    
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include ('template/section/sidebar')
        
        

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
            <!-- HEADER DESKTOP-->
            @include ('template/section/header')
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                              <div class="au-card">
                                <div id="calendar"></div>
                              </div>
                            </div><!-- .col -->
                        </div>
                    </div>
                </div>
            </div>  
                        
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            @include ('template/section/footer')
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="dist/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="dist/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="dist/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="dist/vendor/slick/slick.min.js">
    </script>
    <script src="dist/vendor/wow/wow.min.js"></script>
    <script src="dist/vendor/animsition/animsition.min.js"></script>
    <script src="dist/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="dist/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="dist/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="dist/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="dist/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dist/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="dist/vendor/select2/select2.min.js">
    </script>
<!-- full calendar requires moment along jquery which is included above -->
<script src="dist/vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="dist/vendor/fullcalendar-3.10.0/fullcalendar.js"></script>

    <!-- Main JS-->
    <script src="dist/js/main.js"></script>
<script type="text/javascript">
$(function() {
// for now, there is something adding a click handler to 'a'
var tues = moment().day(2).hour(19);

// build trival night events for example data
var events = [
{
  title: "Special Conference",
  start: moment().format('YYYY-MM-DD'),
  url: '#'
},
{
  title: "Doctor Appt",
  start: moment().hour(9).add(2, 'days').toISOString(),
  url: '#'
}

];

var trivia_nights = []

for(var i = 1; i <= 4; i++) {
var n = tues.clone().add(i, 'weeks');
console.log("isoString: " + n.toISOString());
trivia_nights.push({
  title: 'Trival Night @ Pub XYZ',
  start: n.toISOString(),
  allDay: false,
  url: '#'
});
}

// setup a few events
$('#calendar').fullCalendar({
header: {
  left: 'prev,next today',
  center: 'title',
  right: 'month,agendaWeek,agendaDay,listWeek'
},
events: events.concat(trivia_nights)
});
});
</script>
</body>

</html>
<!-- end document-->
