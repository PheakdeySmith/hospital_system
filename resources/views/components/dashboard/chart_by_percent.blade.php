<div class="col-lg-12">
    <div class="au-card chart-percent-card">
        <div class="au-card-inner">
            <h3 class="title-2 tm-b-5">Chart by Count</h3>
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="chart-note-wrap">
                        @foreach ($chartData as $label => $count)
                            <div class="chart-note mr-0 d-block">
                                <span class="dot dot--{{ strtolower($label) }}"></span>
                                <span>{{ $label }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="percent-chart">
                        <canvas id="count-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
