
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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
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
                <ul class="page-sidebar-menu page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="start ">
                        <a href="index.html">
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
                        <a href="index.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">Reports</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/Treatment_Recommendation">
                                    <i class="fa fa-add"></i>
                                    Treament Recommendation </a>
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
                    Maintenace and Rehabilitation Plan
                </h3>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->

                <div id="Main-Content">
                    <div class="row">

                        <div class="col-md-5">
                            <ul class="collection">
                                <li class="collection-item"><u> Pavement Work </u>  <div class="right"> <u>Unit</u> </div> </li>
                                <li class="collection-item"> Asphalt Concrete pothole Maintenance <div class="right">  M<sup>3</sup> </div> </li>
                                <li class="collection-item"> Asphalt Concrete Cold mix <div class="right">  M<sup>3</sup> </div> </li>
                                <li class="collection-item"> Asphalt Concrete Overlay <div class="right">  M<sup>3</sup> </div> </li>
                                <li class="collection-item"> Roadbed - Preparation <div class="right">  M<sup>2</sup> </div> </li>
                                <li class="collection-item"> Tack Coat Application <div class="right">  M<sup>2</sup> </div> </li>
                                <li class="collection-item"> Prime Coat Application  <div class="right">  M<sup>2</sup> </div> </li>
                                <li class="collection-item"> Gravel Resurfacing(Natural Aggregate) <div class="right">  M<sup>3</sup> </div> </li>
                                <li class="collection-item"> Asphalt mul for 2 <div class="right">  M<sup>2</sup> </div> </li>
                                <li class="collection-item"> Compact the milled area <div class="right">  M<sup>2</sup> </div> </li>

                                @if(! empty($maintan_rehab_plan))
                                    @foreach($maintan_rehab_plan as $list_item)
                                        @if($list_item->Type == "Pavement_work")
                                            <li class="collection-item"> {{$list_item->Name}} <div class="right">  {{$list_item->unit}} </div> </li>
                                        @endif
                                    @endforeach
                                @endif

                                <li class="collection-item">
                                    <form method="POST" action="{{url( '/new_rehabplan_pavement_work' )}}"> {{csrf_field()}}
                                    <input style="width: 50%; font-size: 14px;" class="inline" type="text" name="pavement_work_new"> <input style="width: 15%; font-size: 14px;" class="inline" type="text" name="pavement_work_new_unit" placeholder="unit">  <input type="submit" class="secondary-content btn btn-sm" value="Add new">
                                    </form>
                                </li>
                            </ul>

                        </div>

                        <div class="col-md-4">
                            <ul class="collection">
                                <li class="collection-item"><u> Maintenance type </u> </li>
                                <li class="collection-item"> Slurry Seal coat </li>
                                <li class="collection-item"> Micro Surfacing </li>
                                <li class="collection-item"> Crack Sealing </li>
                                <li class="collection-item"> Patching </li>
                                <li class="collection-item"> Thin Overlay </li>
                                @if(! empty($maintan_rehab_plan))
                                    @foreach($maintan_rehab_plan as $list_item)
                                        @if($list_item->Type == "maintain_type")
                                            <li class="collection-item"> {{$list_item->Name}} <div class="right">  {{$list_item->unit}} </div> </li>
                                        @endif
                                    @endforeach
                                @endif
                                <li class="collection-item">
                                    <form method="POST" action="{{url( '/new_rehabplan_mantaince_type' )}}"> {{csrf_field()}}
                                        <input style="width: 55%; font-size: 14px;" class="inline" type="text" name="maintance_type_new">  <input type="submit" class="secondary-content btn btn-sm" value="Add new">
                                    </form>
                                </li>
                            </ul>

                        </div>

                        <div class="col-md-3">
                            <ul class="collection">
                                <li class="collection-item"><u> Rehablitation Tretments </u> </li>
                                <li class="collection-item"> Thick Overlay </li>
                                <li class="collection-item"> Mill and Overlay </li>
                                <li class="collection-item"> Remove and Replace </li>
                                @if(! empty($maintan_rehab_plan))
                                    @foreach($maintan_rehab_plan as $list_item)
                                        @if($list_item->Type == "treatment_type")
                                            <li class="collection-item"> {{$list_item->Name}} <div class="right">  {{$list_item->unit}} </div> </li>
                                        @endif
                                    @endforeach
                                @endif
                                <li class="collection-item">
                                    <form method="POST" action="{{url( '/new_rehabplan_treatment_type' )}}"> {{csrf_field()}}
                                        <input style="width: 35%; font-size: 14px;" class="inline" type="text" name="treatment_type_new">  <input type="submit" class="secondary-content btn btn-sm" value="Add new">
                                    </form>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <div class="row">
                        <div class="content right">
                            <form method="POST" action="{{url( '/reset_maintain_and_rehab_plan' )}}"> {{csrf_field()}}
                                    <input type="submit" class="secondary-content btn btn-sm red lighten-1" value="Reset to defaults">
                            </form>
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
            2017 &copy; pavement Management system 
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
            "pageLength": 3,
            columnDefs: [
                {
                    targets: [ 0, 1, 2 ],
                    className: 'mdl-data-table__cell--non-numeric'
                }
            ]
        } );

        $('#example_length').hide();
        $('.mdl-grid').first().hide();
        $('#example_filter').appendTo('#append');

        $('.modal').modal();


        $('form.ajax').submit(function(e){
            e.preventDefault();

            $('#modal1').modal('close');

            var registerForm = $("#edit_section");
            var formData = registerForm.serialize();

            $.ajax({
                type     : "POST",
                url      : '/edit_section',
                data     : formData,
                success  : function(data) {
                    console.log(data);
                    Materialize.toast('Successfully Added', 4000, 'blue darken-4');
                    window.location.reload(true);
                }
            });
        });

        $('#length').change(function() {

            $('#Area').val( $('#length').val() * $('#C_width').val() );

        });

        $('#C_width').change(function() {

            $('#Area').val( $('#length').val() * $('#C_width').val());

        });


    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>