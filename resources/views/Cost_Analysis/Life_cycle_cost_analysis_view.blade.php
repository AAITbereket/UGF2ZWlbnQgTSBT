<?php

    $Section_Id = $Pavement_section_->Section_Id;
    $Section_Name = $Pavement_section_->Section_Name;
    $From = $Pavement_section_->From;
    $To = $Pavement_section_->To;
    $length = $Pavement_section_->Length;
    $Surface = $Pavement_section_->Surface;
    $Carriage_width = $Pavement_section_->Carriage_width;
    $Number_of_lane = $Pavement_section_->Number_of_lane;
    $Area = $Pavement_section_->Area;
    $Street_type = $Pavement_section_->Street_type;
    $Direction = $Pavement_section_->Direction;
    $Carriage_way_type = $Pavement_section_->Carriage_way_type;

    $Sum = $Quantities_sum;

    $Start_year = 2014;

    $Maintenance_yrs = 2;
    $Rehabilitation_yr = 6;
?>

<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>PMS-AACR</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!--materialize ui-->
    <link href="homepage__/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>
    <link href="homepage__/css/material.min.css" rel="stylesheet" type="text/css"/>
    <link href="homepage__/materialize/css/dataTables.material.min.css" rel="stylesheet" type="text/css"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="homepage__/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="homepage__/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="homepage__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="homepage__/css/uniform.default.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="homepage__/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="homepage__/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="homepage__/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="homepage__/css/grey.css" rel="stylesheet" type="text/css"/>
    <link href="homepage__/css/custom.css" rel="stylesheet" type="text/css"/>

    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <style>
         .modal-content input {
            font-size: 14px;
        }

          .dataTables_filter label {
              line-height: 0px;
          }

         .modal-content input {
             font-size: 14px;
         }

         .modal { width: 40% !important ; height: 35% !important ; }

    </style>

</head>

<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner container">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                {{--<img src="homepage__/img/logo-default.png" alt="logo" class="logo-default"/>--}}
                <h3 class="logo-default" style="color: #edecec;"><b> PMS-AACR </b></h3>
            </a>
            <div class="menu-toggler sidebar-toggler fa fa-bars">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->

        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->

        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top ">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->

            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END NOTIFICATION DROPDOWN -->

                    <!-- BEGIN INBOX DROPDOWN -->

                    <!-- END INBOX DROPDOWN -->

                    <!-- BEGIN TODO DROPDOWN -->

                    <!-- END TODO DROPDOWN -->

                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="homepage__/img/avatar3_small.jpg"/>
						<span class="username username-hide-on-mobile">
						{{ Auth::user()->name }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-key"></i> Log Out </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse" style="position: fixed;">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="start ">
                        <a href="/dashboard">
                            <i class="fa fa-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="index.html">
                            <i class="fa fa-cogs"></i>
                            <span class="title">System Analysis</span>
                        </a>
                    </li>
                    <li class="start ">
                        <a href="index.html">
                            <i class="fa fa-money"></i>
                            <span class="title">Cost</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="index.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">Reports</span>
                        </a>
                    </li>
                    <li class="start ">
                        <a href="/project_info">
                            <i class="fa fa-info-circle"></i>
                            <span class="title">Project info</span>
                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <h3 class="page-title">
                    {{ $Section_Name }}- Life Cycle Cost Analysis
                </h3>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->

                <div id="Main-Content">
                    <div class="row" style="margin-bottom: 0px;">
                        <div class="col-md-12 portlet" style="background-color:#c0c6c21a;">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4><b > From: </b> {{ $From }}
                                        <b> To: </b> {{$To}} </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Surface :</b> {{ $Surface  }}  </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4><b> Area : </b> {{ $Area  }} <small>m2</small>  </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Inspection Date :</b> {{ $Session_Inspection_Date  }}   </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Total Quantity :</b> {{ $Sum  }} <small>m2</small>  </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Maintenance years :</b>  {{$Maintenance_yrs}}  </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Rehabilitation :</b>  {{ $Rehabilitation_yr }} </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="portlet bordered col-md-12">
                            <div class="portlet-body">
                                <div class="">
                                    <h4> Net Prest Value </h4>

                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Analysis year</th>
                                            <th> Age(yrs) </th>
                                            <th> Rehabilitation and Maintenance work </th>
                                            <th> Cost </th>
                                            <th> PWF </th>
                                            <th> Present worth cost </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td> {{ $Start_year }} </td>
                                            <td> - </td>
                                            <td> Initial Cost </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td> Initial cost </td>
                                        </tr>
                                        <tr>
                                            <td> {{ $Start_year + $Maintenance_yrs }} </td>
                                            <td> 0 </td>
                                            <td> Asphalt Concrete Overlay(m3) </td>
                                            <td> sum1 </td>
                                            <td> 1 / (1 + discount_rate) </td>
                                            <td> 1 * 2 </td>
                                        </tr>
                                        <tr>
                                            <td> {{ $Start_year + ($Maintenance_yrs * 2) }} </td>
                                            <td> 0 + matenance year </td>
                                            <td> Slurry Seal (m2) </td>
                                            <td> sum2 </td>
                                            <td> 1 / (1 + discount_rate) </td>
                                            <td> 1 * 2 </td>
                                        </tr>
                                        <tr>
                                            <td> {{ $Start_year + ($Maintenance_yrs * 3) }} </td>
                                            <td> 0 + (2 * matenance year) </td>
                                            <td> Slurry Seal (m2) </td>
                                            <td> sum2 </td>
                                            <td> 1 / (1 + discount_rate) </td>
                                            <td> 1 * 2 </td>
                                        </tr>
                                        <tr>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td> Salvage value </td>
                                            <td> 0 </td>
                                        </tr>
                                        <tr>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td> Total present Worth Cost </td>
                                            <td> Sum of total </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!--End of databale i pasted-->

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="portlet bordered col-md-12">
                            <div class="portlet-body">
                                <div class="col-md-6">
                                    <h4> Equivalent uniform annual cost </h4>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th> PWC </th>
                                            <th> Capital Recover Factor </th>
                                            <th> EUAC </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td> total present worth cost </td>
                                                <td>  </td>
                                                <td> 1 * 2 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--End of databale i pasted-->
                                </div>

                                <div class="col-md-6">
                                    <br/><br/><br/>
                                    <div class="col-md-6">
                                        <h3> <b> NPV :</b> sum3 birr </h3>
                                    </div>
                                    <div col-md-6>
                                        <h3> <b> EUAC :</b> 1 * 2 birr </h3>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- END PAGE CONTENT-->
            </div>
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <!--Cooming Soon...-->
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
        </div>
        <div class="scroll-to-top">
            <i class="fa fa-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>

<!--materialize JS-->


<![endif]-->
<script src="homepage__/js/jquery.min.js" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="homepage__/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="homepage__/js/bootstrap.min.js" type="text/javascript"></script>
<script src="homepage__/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="homepage__/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="homepage__/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="homepage__/js/metronic.js" type="text/javascript"></script>
<script src="homepage__/js/layout.js" type="text/javascript"></script>
<script src="homepage__/js/demo.js" type="text/javascript"></script>
<script src="homepage__/materialize/js/materialize.js"></script>
<script src="homepage__/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="homepage__/js/dataTables.material.min.js" type="text/javascript"></script>

<script>
//    $(document).ready(function(){
//        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
//    });

    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features

        $('#example').DataTable( {
            "pageLength": 60,
            columnDefs: [
                {
                    targets: [ 0, 1, 2 ],
                    className: 'mdl-data-table__cell--non-numeric'
                }
            ]
        } );

        $('#example_length').hide();
        $('.mdl-grid').first().hide();


        $('.modal').modal({
            size: 'small'
        });


        $('form.ajax').submit(function(e){
            e.preventDefault();
            var formData = new FormData($(this)[0]);

//            if( ! $('#Condition_Index_id').val() )
//            {
//                $('#modal1').modal('close');
//                alert('First Select a Distress type')
//                return false;
//            }

            $('#modal1').modal('close');

            var registerForm = $("#add_picture");
//            var formData = new FormData(registerForm);
            $.ajax({
                type     : "POST",
                url      : '/add_distress_pictures',
                data     : formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                success  : function(data) {
                    console.log(data);
                    Materialize.toast('Image Added', 4000, 'blue darken-2');

                }
            });
        });

        $('#example_filter').appendTo('#append');

        var valuesArray = new Array();

        $('.Deduct_values').each(function () {
            valuesArray.push( Number ($(this)[0].innerText ));
        });

        console.log( valuesArray );
        var max_Dv = Math.max.apply(Math, valuesArray);
        m = 1 + ( (9/98) * (100 - max_Dv ) );
        console.log(m);
        $('#m').html(Math.round(m * 1000) / 1000);

        var sum = 0;
        $.each(valuesArray,function(){sum+=parseFloat(this) || 0;});
        console.log(sum);
        $('#tdv').html(Math.round(sum * 1000) / 1000);

        // Cdv is to be calculated here

        m = Math.round(m);
        console.log(m);
//        m=2;

        if (m == 0)
        {
            var Cdv =  95;
        }
        else if (m == 1)
        {
            var Cdv =  sum;
        }
        else if (m == 2)
        {
            var Cdv =  -1.907 +  (0.819 * Math.pow(sum,1)) + (-0.0006 * Math.pow(sum,2)) + (-0.000004 * Math.pow(sum,3)) ;
            console.log(Cdv);
        }
        else if (m == 3)
        {
            var Cdv =  -6.1516 +  (0.8016 * Math.pow(sum,1)) + (-0.0009 * Math.pow(sum,2)) + (-0.000002 * Math.pow(sum,3)) ;
        }
        else if (m == 4)
        {
            var Cdv =  -7.9770 +  (0.6844 * Math.pow(sum,1)) + (0.0002 * Math.pow(sum,2)) + (-0.000005 * Math.pow(sum,3)) ;
            console.log(Cdv);
        }
        else if (m == 5)
        {
            var Cdv =  -7.8998 +  (0.6105 * Math.pow(sum,1)) + (0.0003 * Math.pow(sum,2)) + (-0.000004 * Math.pow(sum,3)) ;
        }
        else if (m == 6)
        {
            var Cdv =  -6.6359 +  (0.5140 * Math.pow(sum,1)) + (0.0009 * Math.pow(sum,2)) + (-0.000005 * Math.pow(sum,3)) ;
        }
        else
        {
            var Cdv =  -7.2983 +  (0.5192 * Math.pow(sum,1)) + (0.0012 * Math.pow(sum,2)) + (-0.000008 * Math.pow(sum,3)) ;
        }


        $('#cdv').html(Math.round(Cdv * 100) / 100);

        var pci = 100 - Cdv;

        pci = Math.round(pci * 100) / 100;

        if (85 < pci && pci < 100)
        {
            // Good Dark green
            $('#Progress_bar').css('background-color', "#006400" );
            $('#Progress_bar').css('color', "#fff" );
            $('#Progress_bar').html(  pci + "% " + "Good");
            $('#pci_status').html(  pci + "% " + "Good");
            $('#Progress_bar').css('width', pci + "%" );

        }
        else if( pci > 70)
        {

            $('#Progress_bar').css('background-color', "#90EE90" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "Satisfactory");
//            $('#pci_status').html(  pci + "% " + "Satisfactory");
            $('#Progress_bar').css('width', pci + "%" );

        }
        else if(pci > 55)
        {
            $('#Progress_bar').css('background-color', "#ffff00" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "Fair");
//            $('#pci_status').html(  pci + "% " + "Fair");
            $('#Progress_bar').css('width', pci + "%" );
        }
        else if(pci > 40)
        {
            $('#Progress_bar').css('background-color', "#ff7777" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "Poor");
            $('#Progress_bar').css('width', pci + "%" );
        }
        else if(pci > 25)
        {
            $('#Progress_bar').css('background-color', "#ff5454" );
            $('#Progress_bar').css('color', "#fff" );
            $('#pci_status').html(  pci + "% " + "Very Poor");
            $('#Progress_bar').css('width', pci + "%" );
        }
        else if(pci > 10)
        {
            $('#Progress_bar').css('background-color', "#ff0000" );
            $('#Progress_bar').css('color', "#fff" );
            $('#pci_status').html(  pci + "% " + "Serious");
            $('#Progress_bar').css('width', pci + "%" );
        }
        else
        {
            $('#Progress_bar').css('background-color', "#666666" );
            $('#Progress_bar').css('color', "#000" );
            $('#pci_status').html(  pci + "% " + "failed");
            $('#Progress_bar').css('width', pci + "%" );
        }


    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>