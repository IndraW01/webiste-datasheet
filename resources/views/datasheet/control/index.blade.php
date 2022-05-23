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

    <x-Include.table all-data="datasheets.control.valve.general.index" datasheet="Control Valve General">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tag No</th>
                    <th>P&ID Number</th>
                    <th>Line Number</th>
                    <th>Line Size</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controlValveGenerals as $key => $controlValveGeneral)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $controlValveGeneral->tag_no }}</td>
                        <td>{{ $controlValveGeneral->p_id_number }}</td>
                        <td>{{ $controlValveGeneral->line_number }}</td>
                        <td>{{ $controlValveGeneral->line_size }}</td>
                        <td>
                            <a href="{{ route('datasheets.control.valve.general.show', ['general' => $controlValveGeneral]) }}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveGeneral->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-Include.table>

    <x-include.table all-data="datasheets.control.valve.process.condition.index" datasheet="Control Valve Process Condition">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Component</th>
                    <th>Cases</th>
                    <th>Fluid</th>
                    <th>Gas Flow</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controlValveProcessConditions as $key => $controlValveProcessCondition)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $controlValveProcessCondition->component }}</td>
                        <td>{{ $controlValveProcessCondition->cases }}</td>
                        <td>{{ $controlValveProcessCondition->fluid }}</td>
                        <td>{{ $controlValveProcessCondition->gas_flow }}</td>
                        <td>
                            <a href="{{ route('datasheets.control.valve.process.condition.show', ['process_condition' => $controlValveProcessCondition]) }}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveProcessCondition->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-include.table>

    <x-include.table all-data="datasheets.control.valve.body.trim.index" datasheet="Control Valve Body And Valve Trim">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Manufacturer</th>
                    <th>Valve Body Type</th>
                    <th>Body Size</th>
                    <th>End Connect. Size </th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controlValveBodyAndValveTrims as $key => $controlValveBodyAndValveTrim)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $controlValveBodyAndValveTrim->manufacturer }}</td>
                        <td>{{ $controlValveBodyAndValveTrim->valve_body_type }}</td>
                        <td>{{ $controlValveBodyAndValveTrim->body_size }}</td>
                        <td>{{ $controlValveBodyAndValveTrim->end_connect_size }}</td>
                        <td>
                            <a href="{{ route('datasheets.control.valve.body.trim.show', ['body_trim' => $controlValveBodyAndValveTrim]) }}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveBodyAndValveTrim->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-include.table>

    <x-include.table all-data="datasheets.control.valve.pneumatic.controller.index" datasheet="Control Valve Pneumatic Controller">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Function</th>
                    <th>Output Signal</th>
                    <th>Control Modes</th>
                    <th>Output Action</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controlValvePneumatics as $key => $controlValvePneumatic)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $controlValvePneumatic->function }}</td>
                        <td>{{ $controlValvePneumatic->output_signal }}</td>
                        <td>{{ $controlValvePneumatic->control_modes }}</td>
                        <td>{{ $controlValvePneumatic->output_action }}</td>
                        <td>
                            <a href="{{ route('datasheets.control.valve.pneumatic.controller.show', ['pneumatic_controller' => $controlValvePneumatic]) }}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValvePneumatic->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-include.table>

    <x-include.table all-data="datasheets.control.valve.actuator.index" datasheet="Control Valve Actuator">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Actuator Type</th>
                    <th>Travel</th>
                    <th>Bench Set</th>
                    <th>Supply</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controlValveActuators as $key => $controlValveActuator)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $controlValveActuator->actuator }}</td>
                        <td>{{ $controlValveActuator->travel }}</td>
                        <td>{{ $controlValveActuator->bench }}</td>
                        <td>{{ $controlValveActuator->supply }}</td>
                        <td>
                            <a href="{{ route('datasheets.control.valve.actuator.show', ['actuator' => $controlValveActuator]) }}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveActuator->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-include.table>

    <x-include.table all-data="datasheets.control.valve.element.index" datasheet="Control Valve Element">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Element Type</th>
                    <th>Element Material</th>
                    <th>Body Material</th>
                    <th>Flange Material</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controlValveElements as $key => $controlValveElement)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $controlValveElement->element_type }}</td>
                        <td>{{ $controlValveElement->element_material }}</td>
                        <td>{{ $controlValveElement->body_material }}</td>
                        <td>{{ $controlValveElement->flange_material }}</td>
                        <td>
                            <a href="{{ route('datasheets.control.valve.element.show', ['element' => $controlValveElement]) }}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValveElement->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-include.table>

    <x-include.table all-data="datasheets.control.valve.purchase.index" datasheet="Control Valve Purchase">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($controlValvePurchase as $key => $controlValvePurchas)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $controlValvePurchas->type }}</td>
                        <td>{{ $controlValvePurchas->size }}</td>
                        <td>
                            <a href="{{ route('datasheets.control.valve.purchase.show', ['purchase' => $controlValvePurchas]) }}" class="btn btn-success btn-sm">Show</a>
                            <a href="{{ route('datasheets.control.valve.control.valve.full', ['id' => $controlValvePurchas->datasheet]) }}" class="btn btn-warning btn-sm">Full Datasheet</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-include.table>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
