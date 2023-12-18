<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $totalUsers }}</h2>
                        <span>Total Users</span>
                    </div>
                </div>
                <div class="overview-chart">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $totalPatients }}</h2>
                        <span>Total Patients</span>
                    </div>
                </div>
                <div class="overview-chart">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $totalAppointments }}</h2>
                        <span>Total Appointments</span>
                    </div>
                </div>
                <div class="overview-chart">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <h2>${{ number_format($totalEarnings, 2) }}</h2>
                        <span>Total Earnings</span>
                    </div>
                </div>
                <div class="overview-chart">
                </div>
            </div>
        </div>
    </div>
</div>
