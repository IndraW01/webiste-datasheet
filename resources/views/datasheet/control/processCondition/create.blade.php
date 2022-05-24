<x-layout-app>

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Datasheet</h4>
                <p class="card-description">
                    PROCESS CONDITION
                </p>
                <form class="form-sample" action="{{ route('datasheets.control.valve.process.condition.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="component" class="col-sm-3 col-form-label">Component</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('component') is-invalid @enderror" name="component" id="component" value="{{ old('component') }}" />
                                    @error('component')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="cases" class="col-sm-3 col-form-label">Cases</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('cases') is-invalid @enderror" name="cases" id="cases" value="{{ old('cases') }}" />
                                    @error('cases')
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
                                <label for="fluid" class="col-sm-3 col-form-label">Fluid</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('fluid') is-invalid @enderror" name="fluid" id="fluid" value="{{ old('fluid') }}"  />
                                    @error('fluid')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="gas_flow" class="col-sm-3 col-form-label">Gas Flow</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('gas_flow') is-invalid @enderror" name="gas_flow" id="gas_flow" value="{{ old('gas_flow') }}" />
                                    @error('gas_flow')
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
                                <label for="liquid_flow" class="col-sm-3 col-form-label">Liquid Flow</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('liquid_flow') is-invalid @enderror" name="liquid_flow" id="liquid_flow" value="{{ old('liquid_flow') }}" />
                                    @error('liquid_flow')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="upstream_pressure" class="col-sm-3 col-form-label">Upstream Pressure </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('upstream_pressure') is-invalid @enderror" name="upstream_pressure" id="upstream_pressure" value="{{ old('upstream_pressure') }}" />
                                    @error('upstream_pressure')
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
                                <label for="downstream_pressure" class="col-sm-3 col-form-label">Downstream Pressure</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('downstream_pressure') is-invalid @enderror" name="downstream_pressure" id="downstream_pressure" value="{{ old('downstream_pressure') }}" />
                                    @error('downstream_pressure')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="design_pressure" class="col-sm-3 col-form-label">Design Pressure</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('design_pressure') is-invalid @enderror" name="design_pressure" id="design_pressure" value="{{ old('design_pressure') }}" />
                                    @error('design_pressure')
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
                                <label for="operating_temperature" class="col-sm-3 col-form-label">Operating Temperature</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('operating_temperature') is-invalid @enderror" name="operating_temperature" id="operating_temperature" value="{{ old('operating_temperature') }}" />
                                    @error('operating_temperature')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="design_temperature" class="col-sm-3 col-form-label"> Design Temperature</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('design_temperature') is-invalid @enderror" name="design_temperature" id="design_temperature" value="{{ old('design_temperature') }}" />
                                    @error('design_temperature')
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
                                <label for="viscosity" class="col-sm-3 col-form-label">Viscosity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('viscosity') is-invalid @enderror" name="viscosity" id="viscosity" value="{{ old('viscosity') }}" />
                                    @error('viscosity')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="density_ftp" class="col-sm-3 col-form-label">Density @ FTP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('density_ftp') is-invalid @enderror" name="density_ftp" id="density_ftp" value="{{ old('density_ftp') }}" />
                                    @error('density_ftp')
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
                                <label for="molecular_weight" class="col-sm-3 col-form-label">Molecular Weight</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('molecular_weight') is-invalid @enderror" name="molecular_weight" id="molecular_weight" value="{{ old('molecular_weight') }}"  />
                                    @error('molecular_weight')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="vapor_pressure_at" class="col-sm-3 col-form-label">Vapor Pressure at T</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('vapor_pressure_at') is-invalid @enderror" name="vapor_pressure_at" id="vapor_pressure_at" value="{{ old('vapor_pressure_at') }}" />
                                    @error('vapor_pressure_at')
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
                                <label for="sp_heat_ratio" class="col-sm-3 col-form-label">Sp. Heat Ratio (Cp/Cv)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('sp_heat_ratio') is-invalid @enderror" name="sp_heat_ratio" id="sp_heat_ratio" value="{{ old('sp_heat_ratio') }}" />
                                    @error('sp_heat_ratio')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="critical_pressure" class="col-sm-3 col-form-label">Critical Pressure </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('critical_pressure') is-invalid @enderror" name="critical_pressure" id="critical_pressure" value="{{ old('critical_pressure') }}" />
                                    @error('critical_pressure')
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
                                <label for="critical_temperature" class="col-sm-3 col-form-label">Critical Temperature</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('critical_temperature') is-invalid @enderror" name="critical_temperature" id="critical_temperature" value="{{ old('critical_temperature') }}" />
                                    @error('critical_temperature')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="specific_gravity" class="col-sm-3 col-form-label">Specific Gravity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('specific_gravity') is-invalid @enderror" name="specific_gravity" id="specific_gravity" value="{{ old('specific_gravity') }}" />
                                    @error('specific_gravity')
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
                                <label for="calculated_cv" class="col-sm-3 col-form-label">Calculated Cv (Note 4)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('calculated_cv') is-invalid @enderror" name="calculated_cv" id="calculated_cv" value="{{ old('calculated_cv') }}" />
                                    @error('calculated_cv')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="valve_opening" class="col-sm-3 col-form-label">Valve Opening (Note 4)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('valve_opening') is-invalid @enderror" name="valve_opening" id="valve_opening" value="{{ old('valve_opening') }}" />
                                    @error('valve_opening')
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
                                <label for="flash_cav_chocked" class="col-sm-3 col-form-label">Flash. / Cav. / Chocked (Note 4)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('flash_cav_chocked') is-invalid @enderror" name="flash_cav_chocked" id="flash_cav_chocked" value="{{ old('flash_cav_chocked') }}" />
                                    @error('flash_cav_chocked')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="predicted_spl" class="col-sm-3 col-form-label">Predicted SPL (Note 5)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('predicted_spl') is-invalid @enderror" name="predicted_spl" id="predicted_spl" value="{{ old('predicted_spl') }}" />
                                    @error('predicted_spl')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('datasheets.control.valve.process.condition.index') }}" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-layout-app>
