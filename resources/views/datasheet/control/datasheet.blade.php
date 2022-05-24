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
                    </div>
                    <p class="card-description">
                        Full Datasheet
                    </p>
                    <div class="table-responsive pt-3">
                        <p class="card-description">
                            GENERAL
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Datasheet</th>
                                    <th>Tag No</th>
                                    <th>P&ID Number</th>
                                    <th>Line Number</th>
                                    <th>Line Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveGeneral->datasheet }}</td>
                                    <td>{{ $controlValveGeneral->tag_no }}</td>
                                    <td>{{ $controlValveGeneral->p_id_number }}</td>
                                    <td>{{ $controlValveGeneral->line_number }}</td>
                                    <td>{{ $controlValveGeneral->line_size }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="card-description mt-3">
                            PROCESS CONDITION
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Datasheet</th>
                                    <th>Component</th>
                                    <th>Cases</th>
                                    <th>Fluid</th>
                                    <th>Gas Flow</th>
                                    <th>Liquid Flow</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveProcessCondition->datasheet }}</td>
                                    <td>{{ $controlValveProcessCondition->component }}</td>
                                    <td>{{ $controlValveProcessCondition->cases }}</td>
                                    <td>{{ $controlValveProcessCondition->fluid }}</td>
                                    <td>{{ $controlValveProcessCondition->gas_flow }}</td>
                                    <td>{{ $controlValveProcessCondition->liquid_flow }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Upstream Pressure</th>
                                    <th>Downstream Pressure</th>
                                    <th>Design Pressure</th>
                                    <th>Operating Temperature</th>
                                    <th>Design Temperature</th>
                                    <th>Viscosity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveProcessCondition->upstream_pressure }}</td>
                                    <td>{{ $controlValveProcessCondition->downstream_pressure }}</td>
                                    <td>{{ $controlValveProcessCondition->design_pressure }}</td>
                                    <td>{{ $controlValveProcessCondition->operating_temperature }}</td>
                                    <td>{{ $controlValveProcessCondition->design_temperature }}</td>
                                    <td>{{ $controlValveProcessCondition->viscosity }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Density @ FTP</th>
                                    <th>Molecular Weight</th>
                                    <th>Vapor Pressure at T</th>
                                    <th>Sp. Heat Ratio (Cp/Cv)</th>
                                    <th>Critical Pressure</th>
                                    <th>Critical Temperature</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveProcessCondition->density_ftp }}</td>
                                    <td>{{ $controlValveProcessCondition->molecular_weight  }}</td>
                                    <td>{{ $controlValveProcessCondition->vapor_pressure_at }}</td>
                                    <td>{{ $controlValveProcessCondition->sp_heat_ratio }}</td>
                                    <td>{{ $controlValveProcessCondition->critical_pressure }}</td>
                                    <td>{{ $controlValveProcessCondition->critical_temperature  }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Specific Gravity</th>
                                    <th>Calculated Cv (Note 4)</th>
                                    <th>Valve Opening (Note 4)</th>
                                    <th>Flash. / Cav. / Chocked (Note 4)</th>
                                    <th>Predicted SPL (Note 5)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveProcessCondition->specific_gravity }}</td>
                                    <td>{{ $controlValveProcessCondition->calculated_cv }}</td>
                                    <td>{{ $controlValveProcessCondition->valve_opening }}</td>
                                    <td>{{ $controlValveProcessCondition->flash_cav_chocked }}</td>
                                    <td>{{ $controlValveProcessCondition->predicted_spl }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="card-description mt-3">
                            BODY AND VALVE TRIM
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Daatasheet</th>
                                    <th>Manufacturer </th>
                                    <th>Valve Body Type </th>
                                    <th>Body Size</th>
                                    <th>End Connect Size </th>
                                    <th>Flange Face Finish </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveBodyAndValveTrim->datasheet }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->manufacturer }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->valve_body_type }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->body_size }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->end_connect_size }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->flange_face_finish }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Valve Rated Cv </th>
                                    <th>Body Material </th>
                                    <th>Plug Material </th>
                                    <th>Seat Material </th>
                                    <th>Seal Material </th>
                                    <th>Stem Material  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveBodyAndValveTrim->valve_rated_cv }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->body_material }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->plug_material }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->seat_material }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->seal_material }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->stem_material }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Bolt and Nut Material </th>
                                    <th>Packing Type & Material </th>
                                    <th>Flow Direction </th>
                                    <th>Model No </th>
                                    <th>Trim Characteristic </th>
                                    <th>Port Size </th>
                                    <th>Outlet </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveBodyAndValveTrim->bolt_nut_material }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->packing_type_material }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->flow_direction }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->model_no }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->trim_charac }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->port_size }}</td>
                                    <td>{{ $controlValveBodyAndValveTrim->outlet }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="card-description mt-3">
                            PNEUMATIC CONTROLLER
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Datasheet</th>
                                    <th>Function </th>
                                    <th>Ouput Signal </th>
                                    <th>Control Modes</th>
                                    <th>Output Action</th>
                                    <th>Mounting  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValvePneumatic->datasheet }}</td>
                                    <td>{{ $controlValvePneumatic->function }}</td>
                                    <td>{{ $controlValvePneumatic->output_signal }}</td>
                                    <td>{{ $controlValvePneumatic->control_modes }}</td>
                                    <td>{{ $controlValvePneumatic->output_action }}</td>
                                    <td>{{ $controlValvePneumatic->mounting }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Weather Proof Protection </th>
                                    <th>Repeatability </th>
                                    <th>Certifications </th>
                                    <th>Hazardous Area Class </th>
                                    <th>Supply in/out gauge </th>
                                    <th>Instrument Gas Supply  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValvePneumatic->weather_proof }}</td>
                                    <td>{{ $controlValvePneumatic->repeatabiity }}</td>
                                    <td>{{ $controlValvePneumatic->certifications }}</td>
                                    <td>{{ $controlValvePneumatic->hazardous }}</td>
                                    <td>{{ $controlValvePneumatic->suply_in }}</td>
                                    <td>{{ $controlValvePneumatic->instrument_gas }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Filter Regulator Valve </th>
                                    <th>Controller Pneumatic Connection </th>
                                    <th>Supply</th>
                                    <th>Output</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValvePneumatic->filter_regulator }}</td>
                                    <td>{{ $controlValvePneumatic->controller_pneumatic }}</td>
                                    <td>{{ $controlValvePneumatic->suply }}</td>
                                    <td>{{ $controlValvePneumatic->output }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="card-description mt-3">
                            ACTUATOR
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Datasheet</th>
                                    <th>Actuator Type </th>
                                    <th>Travel</th>
                                    <th>Bench Set </th>
                                    <th>Supply</th>
                                    <th>Air Supply</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveActuator->datasheet }}</td>
                                    <td>{{ $controlValveActuator->actuator }}</td>
                                    <td>{{ $controlValveActuator->travel }}</td>
                                    <td>{{ $controlValveActuator->bench }}</td>
                                    <td>{{ $controlValveActuator->supply }}</td>
                                    <td>{{ $controlValveActuator->air_supply }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>To Actuator</th>
                                    <th>Fails Valve due to loss supply</th>
                                    <th>Handwheel</th>
                                    <th>Hydrostatic Testing</th>
                                    <th>Mounting Brackets</th>
                                    <th>Lockup Device</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveActuator->to_actuator }}</td>
                                    <td>{{ $controlValveActuator->fails_valve }}</td>
                                    <td>{{ $controlValveActuator->handwheel }}</td>
                                    <td>{{ $controlValveActuator->hydrostatic }}</td>
                                    <td>{{ $controlValveActuator->mounting }}</td>
                                    <td>{{ $controlValveActuator->lockup }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Mechanical Position Indicator</th>
                                    <th>Mechanical Stopper</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveActuator->mechanical_position }}</td>
                                    <td>{{ $controlValveActuator->mechanical_stopper }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="card-description mt-3">
                            ELEMENT
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Datasheet</th>
                                    <th>Element Type  </th>
                                    <th>Element Material</th>
                                    <th>Body Material </th>
                                    <th>Flange Material</th>
                                    <th>Bolt and Nut Material</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveElement->datasheet }}</td>
                                    <td>{{ $controlValveElement->element_type }}</td>
                                    <td>{{ $controlValveElement->element_material }}</td>
                                    <td>{{ $controlValveElement->body_material }}</td>
                                    <td>{{ $controlValveElement->flange_material }}</td>
                                    <td>{{ $controlValveElement->bolt_and_nut }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Fill Fluid</th>
                                    <th>Painting</th>
                                    <th>Instrument Range</th>
                                    <th>Calibration Range</th>
                                    <th>Scale</th>
                                    <th>Static Pressure Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveElement->fill_fluid }}</td>
                                    <td>{{ $controlValveElement->painting }}</td>
                                    <td>{{ $controlValveElement->instrument_range }}</td>
                                    <td>{{ $controlValveElement->calibration_range }}</td>
                                    <td>{{ $controlValveElement->scale }}</td>
                                    <td>{{ $controlValveElement->static_pressure }}</td>
                                </tr>
                            </tbody>

                            <thead>
                                <tr>
                                    <th>Model No.</th>
                                    <th>Manufacture</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValveElement->model_no }}</td>
                                    <td colspan="">{{ $controlValveElement->manufacture }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="card-description mt-3">
                            PURCHASE
                        </p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Datasheet</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $controlValvePurchase->datasheet }}</td>
                                    <td>{{ $controlValvePurchase->type }}</td>
                                    <td>{{ $controlValvePurchase->size }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>

@push('js-for-this-page')
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endpush
</x-layout-app>
