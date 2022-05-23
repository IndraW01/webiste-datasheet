<x-layout-app>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Datasheet</h4>
                    <ul>
                        <li>Manufacturer: {{ $controlValveBodyAndValveTrim->manufacturer }}</li>
                        <li>Valve Body Type: {{ $controlValveBodyAndValveTrim->valve_body_type }}</li>
                        <li>Body Size: {{ $controlValveBodyAndValveTrim->body_size }}</li>
                        <li>End Connect Size: {{ $controlValveBodyAndValveTrim->end_connect_size }}</li>
                        <li>Flange Face Finish: {{ $controlValveBodyAndValveTrim->flange_face_finish }}</li>
                        <li>Valve Rated Cv: {{ $controlValveBodyAndValveTrim->valve_rated_cv }}</li>
                        <li>Body Material: {{ $controlValveBodyAndValveTrim->body_material }}</li>
                        <li>Plug Material: {{ $controlValveBodyAndValveTrim->plug_material }}</li>
                        <li>Seat Material: {{ $controlValveBodyAndValveTrim->seat_material }}</li>
                        <li>Seal Material: {{ $controlValveBodyAndValveTrim->seal_material }}</li>
                        <li>Stem Material: {{ $controlValveBodyAndValveTrim->stem_material }}</li>
                        <li>Bolt and Nut Material: {{ $controlValveBodyAndValveTrim->bolt_nut_material }}</li>
                        <li>Packing Type & Material: {{ $controlValveBodyAndValveTrim->packing_type_material }}</li>
                        <li>Flow Direction: {{ $controlValveBodyAndValveTrim->flow_direction }}</li>
                        <li>Model No: {{ $controlValveBodyAndValveTrim->model_no }}</li>
                        <li>Trim Characteristic: {{ $controlValveBodyAndValveTrim->trim_charac }}</li>
                        <li>Port Size: {{ $controlValveBodyAndValveTrim->port_size }}</li>
                        <li>Outlet: {{ $controlValveBodyAndValveTrim->outlet }}</li>
                    </ul>
                    <a href="{{ route('datasheets.control.valve.body.trim.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{{ route('datasheets.control.valve.body.trim.edit' , ['body_trim' => $controlValveBodyAndValveTrim]) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
