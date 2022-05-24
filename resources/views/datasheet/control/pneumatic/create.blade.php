<x-layout-app>

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Datasheet</h4>
                <p class="card-description">
                    PNEUMATIC CONTROLLER
                </p>
                <form class="form-sample" action="{{ route('datasheets.control.valve.pneumatic.controller.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="function" class="col-sm-3 col-form-label">Function</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('function') is-invalid @enderror" name="function" id="function" value="{{ old('function') }}" />
                                    @error('function')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="output_signal" class="col-sm-3 col-form-label">Output Signal </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('output_signal') is-invalid @enderror" name="output_signal" id="output_signal" value="{{ old('output_signal') }}" />
                                    @error('output_signal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="control_modes" class="col-sm-3 col-form-label">Control Modes</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('control_modes') is-invalid @enderror" name="control_modes" id="control_modes" value="{{ old('control_modes') }}"  />
                                    @error('control_modes')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="output_action" class="col-sm-3 col-form-label">Output Action</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('output_action') is-invalid @enderror" name="output_action" id="output_action" value="{{ old('output_action') }}" />
                                    @error('output_action')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="mounting" class="col-sm-3 col-form-label">Mounting</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('mounting') is-invalid @enderror" name="mounting" id="mounting" value="{{ old('mounting') }}" />
                                    @error('mounting')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="weather_proof" class="col-sm-3 col-form-label">Weather Proof Protection</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('weather_proof') is-invalid @enderror" name="weather_proof" id="weather_proof" value="{{ old('weather_proof') }}" />
                                    @error('weather_proof')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="repeatabiity" class="col-sm-3 col-form-label">Repeatability</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('repeatabiity') is-invalid @enderror" name="repeatabiity" id="repeatabiity" value="{{ old('repeatabiity') }}" />
                                    @error('repeatabiity')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="certifications" class="col-sm-3 col-form-label">Certifications</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('certifications') is-invalid @enderror" name="certifications" id="certifications" value="{{ old('certifications') }}" />
                                    @error('certifications')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="hazardous" class="col-sm-3 col-form-label">Hazardous Area Class</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('hazardous') is-invalid @enderror" name="hazardous" id="hazardous" value="{{ old('hazardous') }}" />
                                    @error('hazardous')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="suply_in" class="col-sm-3 col-form-label">Supply in/out gauge</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('suply_in') is-invalid @enderror" name="suply_in" id="suply_in" value="{{ old('suply_in') }}" />
                                    @error('suply_in')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="instrument_gas" class="col-sm-3 col-form-label">Instrument Gas Supply</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('instrument_gas') is-invalid @enderror" name="instrument_gas" id="instrument_gas" value="{{ old('instrument_gas') }}" />
                                    @error('instrument_gas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="filter_regulator" class="col-sm-3 col-form-label">Filter Regulator Valve</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('filter_regulator') is-invalid @enderror" name="filter_regulator" id="filter_regulator" value="{{ old('filter_regulator') }}" />
                                    @error('filter_regulator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="controller_pneumatic" class="col-sm-3 col-form-label">Controller Pneumatic Connection</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('controller_pneumatic') is-invalid @enderror" name="controller_pneumatic" id="controller_pneumatic" value="{{ old('controller_pneumatic') }}"  />
                                    @error('controller_pneumatic')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="suply" class="col-sm-3 col-form-label">Supply</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('suply') is-invalid @enderror" name="suply" id="suply" value="{{ old('suply') }}" />
                                    @error('suply')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="output" class="col-sm-3 col-form-label">Output</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('output') is-invalid @enderror" name="output" id="output" value="{{ old('output') }}" />
                                    @error('output')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('datasheets.control.valve.pneumatic.controller.index') }}" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-layout-app>
