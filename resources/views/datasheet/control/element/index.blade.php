<x-layout-app>
    @push('css-for-this-page')
        <style>
            .garis-parent {
                position: relative;
            }
            .garis {
                position: absolute;
                width: 1px;
                height: 51px;
                background-color: #ccc9c9;
                top: -18px;
                right: 50%;
            }
        </style>
    @endpush
    <div class="row">


        <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Datasheet</h4>
                        <div class="add">
                            <a href="{{ route('datasheets.control.valve.element.create') }}" class="btn btn-primary btn-sm">Tambah Valve Element</a>
                            <a href="{{ route('datasheets.control.valve.') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                    </div>
                    <p class="card-description">
                        Control Valve Element
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Element Type  </th>
                                    <th>Element Material</th>
                                    <th>Body Material </th>
                                    <th>Flange Material</th>
                                    <th>Bolt and Nut Material</th>
                                    <th>Fill Fluid</th>
                                    <th>Painting</th>
                                    <th>Instrument Range</th>
                                    <th>Calibration Range</th>
                                    <th>Scale</th>
                                    <th>Static Pressure Unit</th>
                                    <th>Model No.</th>
                                    <th>Manufacture</th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($controlValveElements as $key => $controlValveElement)
                                <tr>
                                        <td>{{ $key + $controlValveElements->firstItem() }}</td>
                                        <td>{{ $controlValveElement->element_type }}</td>
                                        <td>{{ $controlValveElement->element_material }}</td>
                                        <td>{{ $controlValveElement->body_material }}</td>
                                        <td>{{ $controlValveElement->flange_material }}</td>
                                        <td>{{ $controlValveElement->bolt_and_nut }}</td>
                                        <td>{{ $controlValveElement->fill_fluid }}</td>
                                        <td>{{ $controlValveElement->painting }}</td>
                                        <td>{{ $controlValveElement->instrument_range }}</td>
                                        <td>{{ $controlValveElement->calibration_range }}</td>
                                        <td>{{ $controlValveElement->scale }}</td>
                                        <td>{{ $controlValveElement->static_pressure }}</td>
                                        <td>{{ $controlValveElement->model_no }}</td>
                                        <td>{{ $controlValveElement->manufacture }}</td>
                                        <td>
                                            <a href="{{ route('datasheets.control.valve.element.show', ['element' => $controlValveElement]) }}" class="btn btn-success btn-sm">Show</a>
                                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveElement->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $controlValveElements->onEachSide(5)->links() }}
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
