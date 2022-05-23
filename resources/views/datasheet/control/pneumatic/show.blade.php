<x-layout-app>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Datasheet</h4>
                    <ul>
                        <li>Function: {{ $controlValvePneumatic->function }}</li>
                        <li>Ouput Signal: {{ $controlValvePneumatic->output_signal }}</li>
                        <li>Control Modes: {{ $controlValvePneumatic->control_modes }}</li>
                        <li>Output Action: {{ $controlValvePneumatic->output_action }}</li>
                        <li>Mounting: {{ $controlValvePneumatic->mounting }}</li>
                        <li>Weather Proof Protection: {{ $controlValvePneumatic->weather_proof }}</li>
                        <li>Repeatability: {{ $controlValvePneumatic->repeatabiity }}</li>
                        <li>Certifications: {{ $controlValvePneumatic->certifications }}</li>
                        <li>Hazardous Area Class: {{ $controlValvePneumatic->hazardous }}</li>
                        <li>Supply in/out gauge: {{ $controlValvePneumatic->suply_in }}</li>
                        <li>Instrument Gas Supply: {{ $controlValvePneumatic->instrument_gas }}</li>
                        <li>Filter Regulator Valve: {{ $controlValvePneumatic->filter_regulator }}</li>
                        <li>Controller Pneumatic Connection: {{ $controlValvePneumatic->controller_pneumatic }}</li>
                        <li>Supply: {{ $controlValvePneumatic->suply }}</li>
                        <li>Output: {{ $controlValvePneumatic->output }}</li>
                    </ul>
                    <a href="{{ route('datasheets.control.valve.pneumatic.controller.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{{ route('datasheets.control.valve.pneumatic.controller.edit' , ['pneumatic_controller' => $controlValvePneumatic]) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
