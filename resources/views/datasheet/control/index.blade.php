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
                    <h4 class="card-title">Datasheet</h4>
                    <p class="card-description">
                        Control Valve
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr align="center">
                                    <th rowspan="2" colspan="5">MWP BH & BE DATASHEET PRESSURE REGULATOR VALVES</th>
                                    <th colspan="2">Document number <br>
                                        ID-BKP-SOME-1074-570001</th>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="d-flex justify-content-between garis-parent">
                                            <span>Revision : 0.7 <span class="garis"></span></span>
                                            <span>Status : IFAnd</span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">Document type : DTS</td>
                                    <td colspan="2"> System / Subsystem : N/A</td>
                                    <td>Discipline : INS</td>
                                    <td>Rev. Date : 13-Nov-2021</td>
                                </tr>
                                <tr>
                                    <td colspan="5">Originator document number : N/A</td>
                                    <td>Page : 8 of 11</td>
                                </tr>
                                <tr>
                                    <td rowspan="5">General</td>
                                    <td>1</td>
                                    <td>Tag No.</td>
                                    <td>Quantity</td>
                                    <td>PCV-17332</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>P&ID Number</td>
                                    <td>Service</td>
                                    <td>ID-BKP-MWPBH-1074-512008</td>
                                    <td>Fuel Gas Scrubber (V-17330) Inlet Bypass</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Line Number</td>
                                    <td>Piping Class</td>
                                    <td>2"-HC-BH-H03-06.03</td>
                                    <td>H03</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Line Size</td>
                                    <td>Schedule</td>
                                    <td>2"</td>
                                    <td>XXS</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td colspan="2">Valve Service Type</td>
                                    <td colspan="2">Control Valve</td>
                                </tr>
                                <tr>
                                    <td rowspan="22">PROCESS CONDITION</td>
                                    <td>6</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <span class="me-5">Component</span>
                                            <span>Corrosive</span>
                                        </div>
                                    </td>
                                    <td>Erosive</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
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
