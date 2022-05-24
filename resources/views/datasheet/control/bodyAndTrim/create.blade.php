<x-layout-app>

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Datasheet</h4>
                <p class="card-description">
                    BODY AND VALVE TRIM
                </p>
                <form class="form-sample" action="{{ route('datasheets.control.valve.body.trim.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="manufacturer" class="col-sm-3 col-form-label">Manufacturer</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" id="manufacturer" value="{{ old('manufacturer') }}" />
                                    @error('manufacturer')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="valve_body_type" class="col-sm-3 col-form-label">Valve Body Type</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('valve_body_type') is-invalid @enderror" name="valve_body_type" id="valve_body_type" value="{{ old('valve_body_type') }}" />
                                    @error('valve_body_type')
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
                                <label for="body_size" class="col-sm-3 col-form-label">Body Size</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('body_size') is-invalid @enderror" name="body_size" id="body_size" value="{{ old('body_size') }}"  />
                                    @error('body_size')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="end_connect_size" class="col-sm-3 col-form-label">End Connect. Size</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('end_connect_size') is-invalid @enderror" name="end_connect_size" id="end_connect_size" value="{{ old('end_connect_size') }}" />
                                    @error('end_connect_size')
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
                                <label for="connect_type_rating" class="col-sm-3 col-form-label">Connect. Type & Rating</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('connect_type_rating') is-invalid @enderror" name="connect_type_rating" id="connect_type_rating" value="{{ old('connect_type_rating') }}" />
                                    @error('connect_type_rating')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="flange_face_finish" class="col-sm-3 col-form-label">Flange Face Finish </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('flange_face_finish') is-invalid @enderror" name="flange_face_finish" id="flange_face_finish" value="{{ old('flange_face_finish') }}" />
                                    @error('flange_face_finish')
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
                                <label for="valve_rated_cv" class="col-sm-3 col-form-label">Valve Rated Cv</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('valve_rated_cv') is-invalid @enderror" name="valve_rated_cv" id="valve_rated_cv" value="{{ old('valve_rated_cv') }}" />
                                    @error('valve_rated_cv')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="body_material" class="col-sm-3 col-form-label">Body Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('body_material') is-invalid @enderror" name="body_material" id="body_material" value="{{ old('body_material') }}" />
                                    @error('body_material')
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
                                <label for="plug_material" class="col-sm-3 col-form-label">Plug Material </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('plug_material') is-invalid @enderror" name="plug_material" id="plug_material" value="{{ old('plug_material') }}" />
                                    @error('plug_material')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="seat_material" class="col-sm-3 col-form-label">Seat Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('seat_material') is-invalid @enderror" name="seat_material" id="seat_material" value="{{ old('seat_material') }}" />
                                    @error('seat_material')
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
                                <label for="seal_material" class="col-sm-3 col-form-label">Seal Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('seal_material') is-invalid @enderror" name="seal_material" id="seal_material" value="{{ old('seal_material') }}" />
                                    @error('seal_material')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="stem_material" class="col-sm-3 col-form-label">Stem Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('stem_material') is-invalid @enderror" name="stem_material" id="stem_material" value="{{ old('stem_material') }}" />
                                    @error('stem_material')
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
                                <label for="bolt_nut_material" class="col-sm-3 col-form-label">Bolt and Nut Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('bolt_nut_material') is-invalid @enderror" name="bolt_nut_material" id="bolt_nut_material" value="{{ old('bolt_nut_material') }}"  />
                                    @error('bolt_nut_material')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="packing_type_material" class="col-sm-3 col-form-label">Packing Type & Material</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('packing_type_material') is-invalid @enderror" name="packing_type_material" id="packing_type_material" value="{{ old('packing_type_material') }}" />
                                    @error('packing_type_material')
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
                                <label for="flow_direction" class="col-sm-3 col-form-label">Flow Direction (Flow To Open / To Close)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('flow_direction') is-invalid @enderror" name="flow_direction" id="flow_direction" value="{{ old('flow_direction') }}" />
                                    @error('flow_direction')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="shut_off" class="col-sm-3 col-form-label">Shut Off Leakage Class</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('shut_off') is-invalid @enderror" name="shut_off" id="shut_off" value="{{ old('shut_off') }}" />
                                    @error('shut_off')
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
                                <label for="model_no" class="col-sm-3 col-form-label">Model No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('model_no') is-invalid @enderror" name="model_no" id="model_no" value="{{ old('model_no') }}" />
                                    @error('model_no')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="trim_charac" class="col-sm-3 col-form-label">Trim Characteristic</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('trim_charac') is-invalid @enderror" name="trim_charac" id="trim_charac" value="{{ old('trim_charac') }}" />
                                    @error('trim_charac')
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
                                <label for="port_size" class="col-sm-3 col-form-label">Port Size</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('port_size') is-invalid @enderror" name="port_size" id="port_size" value="{{ old('port_size') }}" />
                                    @error('port_size')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <label for="outlet" class="col-sm-3 col-form-label">Outlet</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('outlet') is-invalid @enderror" name="outlet" id="outlet" value="{{ old('outlet') }}" />
                                    @error('outlet')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('datasheets.control.valve.body.trim.index') }}" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-layout-app>
