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

        if($Alternative == 'Alternative2')
            {
                $Maintenance_yrs = 3;
                $Rehabilitation_yr = 6;
            }
        else
            {
                $Maintenance_yrs = 2;
                $Rehabilitation_yr = 6;
            }

    $Sum = $Quantities_sum;
    $Analysis_period = $Section_Cost_Analysis->Analysis_Period;
    $Start_year = $Section_Cost_Analysis->Worked_date;
    $Sum1 = $Totalcostrehab;
    $Sum2 = $TotalMaintCost;
    $discount_rate = $Section_Cost_Analysis->Discount_Rate;
    $initial_cost = $Section_Cost_Analysis->Initial_Construction_Cost;
    $Salvage_value = $Section_Cost_Analysis->Salvage_value;

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

         .sub-menu{
             background-color: #0d1217;
         }
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
            <div class="page-sidebar navbar-collapse collapse" style="position: fixed;">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="start ">
                        <a href="/Section_dashboard">
                            <i class="fa fa-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="start">
                        <a>
                            <i class="fa fa-cogs"></i>
                            <span class="title">System Analysis</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/add_condition_index">
                                    <i class="fa fa-add"></i>
                                    Add new Inspeciton </a>
                            </li>
                            <li>
                                <a href="/density_deduct_values">
                                    <i class=""></i>
                                    Density and Deduct value</a>
                            </li>
                            <li>
                                <a href="/distress_Identification">
                                    <i class=""></i>
                                    Distress identification view</a>
                            </li>
                        </ul>
                    </li>
                    <li class="start ">
                        <a href="/Cost_Analysis_input_view">
                            <i class="fa fa-money"></i>
                            <span class="title">Cost</span>
                        </a>
                    </li>



                    <li class="start ">
                        <a href="/Section_dashboard">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">Reports</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/Treatment_Recommendation">
                                    <i class="fa fa-add"></i>
                                    Treatment Recommend. </a>
                            </li>
                            <li>
                                <a href="/Maintainance_and_Rehablitation_plan">
                                    <i class=""></i>
                                    Maintenace and rehab plan </a>
                            </li>
                            <li>
                                <a href="/rehablitation_alternatives">
                                    <i class=""></i>
                                    Rehabilitation Alternatives</a>
                            </li>
                            <li>
                                <a href="/Life_Cycle_Cost_Analysis">
                                    <i class=""></i>
                                    Life Cycle Cost Analysis</a>
                            </li>

                        </ul>
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
                                    <h4><b> Surface :</b> {{ $Surface  }}  </h4>
                                </div>
                                <div class="col-md-3">
                                    <h4><b> Worked year :</b> {{ $Start_year }}   </h4>
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
                                <div class="col-md-3">
                                    <h4><b> Alternative :</b>  {{ $Alternative }} </h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="portlet bordered col-md-12">
                            <div class="portlet-body">
                                <div class="">
                                    <h4> Net Prest Value </h4>

                                    <table class="table">
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
                                            <td class="analysis_year"> {{ $Start_year }} </td>
                                            <td> - </td>
                                            <td> Initial cost </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td class="total_cost"> {{$initial_cost}} </td>
                                        </tr>
                                        <?php $Start_year = $Start_year + 1 + $Maintenance_yrs; ?>
                                        <?php $yr_long = 0; ?>
                                        @while( $yr_long <= ($Analysis_period / $Maintenance_yrs ) )
                                            @if (! fmod(($Maintenance_yrs * $yr_long) , $Rehabilitation_yr) )
                                                <tr style="background: #14B9D6;">
                                                    <td class="analysis_year"> {{ $Start_year + ($Maintenance_yrs * $yr_long) }} </td>
                                                    <td> {{ $yr_long * $Maintenance_yrs }} </td>
                                                    <td> Asphalt Concrete Overlay(m3) </td>
                                                    <td> {{$Sum1}} </td>
                                                    <td> {{ round((1 / pow((1 + $discount_rate),( $yr_long * $Maintenance_yrs ) ) ),2)}} </td>
                                                    <td class="total_cost maintain"> {{ round (($Sum1 * (1 / pow((1 + $discount_rate),( $yr_long * $Maintenance_yrs ) ))),2) }} </td>
                                                    <?php $yr_long++; ?>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td class="analysis_year"> {{ $Start_year + ($Maintenance_yrs * $yr_long) }} </td>
                                                    <td> {{ $yr_long * $Maintenance_yrs }} </td>

                                                    @if( $Alternative == 'Alternative2' )
                                                        <td> Micro surfacing (m3) </td>
                                                    @else
                                                        <td> Slurry Seal (m2) </td>
                                                    @endif


                                                    <td> {{$Sum2}} </td>
                                                    <td> {{ round((1 / pow((1 + $discount_rate),( $yr_long * $Maintenance_yrs ) ) ),2)}} </td>
                                                    <td class="total_cost"> {{  round(($Sum2 * (1 / pow((1 + $discount_rate),( $yr_long * $Maintenance_yrs ) ))),2) }} </td>
                                                    <?php $yr_long++; ?>
                                                </tr>
                                            @endif
                                        @endwhile
                                        <tr>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td> Salvage value </td>
                                            <td> {{ $Salvage_value }} </td>
                                        </tr>
                                        <tr>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td>  </td>
                                            <td> Total present Worth Cost </td>
                                            <td id = "total_of_total"> 0  </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!--End of databale i pasted-->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="">
                                <div class="col-md-6">
                                    <h4> Equivalent uniform annual cost </h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th> PWC </th>
                                            <th> Capital Recover Factor </th>
                                            <th> EUAC </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td id="pwc"> </td>
                                                <td id="capital_recover_factor"> {{ round(((pow((1+$discount_rate),$Analysis_period)) /  (-1 + pow((1+$discount_rate),$Analysis_period))),2) }}  </td>
                                                <td id="EUAC">  </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--End of databale i pasted-->
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <br/>
                                        <div class="col-md-6">
                                            <h3 class="left"> <b> NPV :</b></h3> <h3 id="sum3">  </h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="left"> <b> EUAC :</b> </h3> <h3 id="euac_total">  </h3>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="chart">
                        <canvas id="canvas1">
                        </canvas>
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
<script src="homepage__/js/Chart.js" type="text/javascript"></script>
<script src="homepage__/js/quick-sidebar.js" type="text/javascript"></script>

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

//        $('#side_bar_accordion').val('accordion');

        $('#example_length').hide();
        $('.mdl-grid').first().hide();


        $('.modal').modal({
            size: 'small'
        });


        $('#example_filter').appendTo('#append');


        var years = new Array();
        $('.analysis_year').each(function () {
            years.push( Number ($(this)[0].innerText ));
        });

        var Totals = new Array();
        $('.total_cost').each(function () {
            Totals.push( Number ($(this)[0].innerText ));
        });

        var Total_maintain = new Array();
        $('.maintain').each(function () {
            Total_maintain.push( Number ($(this)[0].innerText ));
        });



        console.log(Totals);

        var sum = Totals.reduce(function(a, b) { return a + b; }, 0);

        console.log(sum);
        console.log(sum = sum - '{{$Salvage_value}}');

        $('#total_of_total').text(Math.round(sum * 100) / 100);
        $('#pwc').text(Math.round(sum * 100) / 100);
        $('#sum3').text((Math.round(sum * 100) / 100) +" birr" );

        console.log( Number($('#capital_recover_factor')[0].innerHTML));

        $('#EUAC').text(
                (Math.round( ( sum *  Number($('#capital_recover_factor')[0].innerHTML) ) * 100) / 100)
        );

        $('#euac_total').text(
                (Math.round( ( sum *  Number($('#capital_recover_factor')[0].innerHTML) ) * 100) / 100) +" birr"
        );

        var ctx = document.getElementById("canvas1").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: years,
                datasets: [{
                    label: 'birr',
                    data: Totals,
                    backgroundColor: "rgba(20,185,214,1)"
                }]
            }
        });

    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>