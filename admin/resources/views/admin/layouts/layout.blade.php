<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from thememinister.com/crm/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 11:28:07 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>Tatkal Loan Admin Panel</title>
      <!-- Favicon and touch icons -->
      {{-- <link rel="shortcut icon" href="{{ asset('images/LOGO123.png') }}" type="image/x-icon"> --}}
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      
      <!-- Lobipanel css -->
      <link href="{{asset('assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="{{asset('assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="{{asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="{{asset('assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="{{asset('assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="{{asset('assets/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="{{asset('assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
         <!--<script src="https://cdn.ckeditor.com/4.4.7/standard-all/adapters/jquery.js"></script>-->
   </head>
   <body class="hold-transition sidebar-mini">
    @include('admin.dash.header.header')
    @include('admin.dash.header.sidebar')
    @yield('content')
    @include('admin.dash.footer.footer')
    

    <!-- jQuery -->
    <script src="{{asset('assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
    <!-- jquery-ui --> 
    <script src="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- lobipanel -->
    <script src="{{asset('assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
    <!-- Pace js -->
    <script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript">    </script>
    <!-- FastClick -->
    <script src="{{asset('assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
    <!-- CRMadmin frame -->
    <script src="{{asset('assets/dist/js/custom.js')}}" type="text/javascript"></script>
    <!-- End Core Plugins
        =====================================================================-->
    <!-- Start Page Lavel Plugins
        =====================================================================-->
    <!-- ChartJs JavaScript -->
    <script src="{{asset('assets/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
    <!-- Counter js -->
    <script src="{{asset('assets/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <!-- Monthly js -->
    <script src="{{asset('assets/plugins/monthly/monthly.js')}}" type="text/javascript"></script>
    <!-- End Page Lavel Plugins
        =====================================================================-->
    <!-- Start Theme label Script
        =====================================================================-->
    <!-- Dashboard js -->
    <script src="{{asset('assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
    <!-- End Theme label Script
        =====================================================================-->
    <script>
        function dash() {
        // single bar chart
        var ctx = document.getElementById("singelBarChart");
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
        datasets: [
        {
        label: "My First dataset",
        data: [40, 55, 75, 81, 56, 55, 40],
        borderColor: "rgba(0, 150, 136, 0.8)",
        width: "1",
        borderWidth: "0",
        backgroundColor: "rgba(0, 150, 136, 0.8)"
        }
        ]
        },
        options: {
        scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
        }
        }
        });
            //monthly calender
            $('#m_calendar').monthly({
                mode: 'event',
                //jsonUrl: 'events.json',
                //dataType: 'json'
                xmlUrl: 'events.xml'
            });
        
        //bar chart
        var ctx = document.getElementById("barChart");
        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
        datasets: [
        {
        label: "My First dataset",
        data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
        borderColor: "rgba(0, 150, 136, 0.8)",
        width: "1",
        borderWidth: "0",
        backgroundColor: "rgba(0, 150, 136, 0.8)"
        },
        {
        label: "My Second dataset",
        data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
        borderColor: "rgba(51, 51, 51, 0.55)",
        width: "1",
        borderWidth: "0",
        backgroundColor: "rgba(51, 51, 51, 0.55)"
        }
        ]
        },
        options: {
        scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
        }
        }
        });
            //counter
            $('.count-number').counterUp({
                delay: 10,
                time: 5000
            });
        }
        dash();         
    </script>
    
    <!-- Start CKEDITOR Script
        =====================================================================-->
    <!--<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>-->
    <!--    <script type="text/javascript">-->
    <!--        $(document).ready(function() {-->
    <!--           $('.ckeditor').ckeditor();-->
    <!--        });-->
    <!--    </script>-->
        <!-- End CKEDITOR
        =====================================================================-->
    
       @yield('js')
   </body>
</html>