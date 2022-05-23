<x-layout-app>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Datasheet</h4>
                    <ul>
                        <li>Tag No: {{ $controlValveGeneral->tag_no }}</li>
                        <li>P&ID Number: {{ $controlValveGeneral->p_id_number }}</li>
                        <li>Line Number: {{ $controlValveGeneral->line_number }}</li>
                        <li>Line Size: {{ $controlValveGeneral->line_size }}</li>
                        <li>Valve Service Type: {{ $controlValveGeneral->valve_service_type }}</li>
                        <li>Quantity: {{ $controlValveGeneral->quantity }}</li>
                        <li>Service: {{ $controlValveGeneral->service }}</li>
                        <li>Piping Class: {{ $controlValveGeneral->piping_class }}</li>
                        <li>Schedule: {{ $controlValveGeneral->schedule }}</li>
                    </ul>
                    <a href="{{ route('datasheets.control.valve.general.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    <a href="{{ route('datasheets.control.valve.general.edit' , ['general' => $controlValveGeneral]) }}" class="btn btn-sm btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
