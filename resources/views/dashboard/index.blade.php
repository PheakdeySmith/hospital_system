@extends('layouts.dashboard')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">overview</h2>
                        <a href="{{ route('patients.create') }}" class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>add patient
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card Start --}}
            @include('components.dashboard.card')
            {{-- Card End --}}

            <div class="row">
                {{-- Chart by Percent Start --}}
                @include('components.dashboard.chart_by_percent')
                {{-- Chart by Percent End --}}
            </div>

            {{-- Item Table Start --}}
            @include('components.dashboard.item_table')
            {{-- Item Table End --}}
        </div>
    </div>
</div>

@section('additional-scripts')
    <script>
        var chartData = @json($chartData);

        var ctx = document.getElementById('count-chart').getContext('2d');
        ctx.canvas.width = 400;
        ctx.canvas.height = 400;

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: Object.keys(chartData),
                datasets: [{
                    data: Object.values(chartData),
                    backgroundColor: ['#36A2EB', '#FF6384', '#4CAF50'],
                    hoverBackgroundColor: ['#36A2EB', '#FF6384', '#4CAF50'],
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
            }
        });
    </script>
@endsection

@endsection
