<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 16:13
 */ ?>
<!-- layout in cake-->
<div class="container" >

    <!-- admin in cake-->

    <!-- admin search in cake-->
    <div class="container text-right">
        <div class="row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <h1 class="deepshadow">Quiz Game</h1>
            </div>
            <div class="col-sm-3" style="margin-top:4.15em">
                <button class="btn btn-default" > <img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/crown_gold.png" />Ranking </button>
                <!--   search in cake-->
            </div>
            <div class="col-sm-3" style="margin-top:3.5em">
                <form class="navbar-form " role="search" >
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" required="required">
                    </div>
                    <button type="submit" class="btn btn-default"> <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png" /> </button>
                </form>
            </div>
        </div>
    </div>
    <!-- end admin search in cake-->

    <div class="row" style="margin-top:2em">

        <!-- admin icon in cake-->
        <div class="col-sm-2" style="margin-top:1em;margin-bottom:1em">
            <div class="container-fluid">
                <button type="button" class="circular_profile_user btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
                <div class="collapse " id="collapseExample">
                    <button type="button" class="circular_profile_info_user btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Profile Info"></button>
                    <button type="button" class="circular_badges_user btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Badges"></button>
                    <button type="button" class="circular_add btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Add Quiz"></button>
                    <button type="button" class="circular_logout btn btn-danger" data-placement="right" data-toggle="tooltip" data-original-title="Log Out"></button>
                </div>
            </div>
        </div>
        <!--end  admin icon in cake-->
        <!-- play field in cake-->
        <div class="col-sm-10" >
            <div class="container-fluid showcontent_nofixes">
                <div class="badges text-center">
                    <h2>Badges</h2>
                    <!--this part put in php loop pull badges that match with username-->
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="row badgestyle1">
                                <div class="col-sm-2 badgestyle2">this part pull img if hav</div>
                                <div class="col-sm-8 text-left  ">this part is description of badges</div>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <!--end-->
                </div>
            </div>
            <!--end play field in cake-->
        </div>
    </div>
    <!-- end layout in cake-->