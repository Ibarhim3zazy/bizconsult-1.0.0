@extends('admin.master')

@section('title', __('keywords.settings'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 row align-items-center">
            <h2 class="h5 page-title col">{{ __('keywords.edit_settings') }}</h2>
            <x-alert type="success" />
            <!-- Create Form -->
            <form class="col-md-12 my-4" method="POST"
                action="{{ route('admin.settings.update', ['setting' => $setting]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <x-form-label field="address"></x-form-label>
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="{{ __('keywords.address') }}"
                            value="{{ $setting->address ?? old('address') }}">
                        <x-validation-error field="address"></x-validation-error>
                    </div>
                    <div class="form-group col-md-6">
                        <x-form-label field="email"></x-form-label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="{{ __('keywords.email') }}" value="{{ $setting->email ?? old('email') }}">
                        <x-validation-error field="email"></x-validation-error>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <x-form-label field="phone"></x-form-label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone ?? old('phone') }}">
                        <x-validation-error field="phone"></x-validation-error>
                    </div>
                    <div class="form-group col-md-6">
                        <x-form-label field="facebook"></x-form-label>
                        <input type="text" class="form-control" id="facebook" name="facebook"
                            placeholder="{{ __('keywords.facebook') }}"
                            value="{{ $setting->facebook ?? old('facebook') }}">
                        <x-validation-error field="facebook"></x-validation-error>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <x-form-label field="twitter"></x-form-label>
                        <input type="text" class="form-control" id="twitter" name="twitter"
                            placeholder="{{ __('keywords.twitter') }}"
                            value="{{ $setting->twitter ?? old('twitter') }}">
                        <x-validation-error field="twitter"></x-validation-error>
                    </div>
                    <div class="form-group col-md-6">
                        <x-form-label field="youtube"></x-form-label>
                        <input type="text" class="form-control" id="youtube" name="youtube"
                            placeholder="{{ __('keywords.youtube') }}"
                            value="{{ $setting->youtube ?? old('youtube') }}">
                        <x-validation-error field="youtube"></x-validation-error>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <x-form-label field="instagram"></x-form-label>
                        <input type="text" class="form-control" id="instagram" name="instagram"
                            placeholder="{{ __('keywords.instagram') }}"
                            value="{{ $setting->instagram ?? old('instagram') }}">
                        <x-validation-error field="instagram"></x-validation-error>
                    </div>
                    <div class="form-group col-md-6">
                        <x-form-label field="linkedin"></x-form-label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                            placeholder="{{ __('keywords.linkedin') }}"
                            value="{{ $setting->linkedin ?? old('linkedin') }}">
                        <x-validation-error field="linkedin"></x-validation-error>
                    </div>
                </div>
                <x-form-submit-button></x-form-submit-button>
            </form>
            <!-- Create Form -->
        </div>
    </div>
</div>
</div>
<div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group list-group-flush my-n3">
                    <div class="list-group-item bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="fe fe-box fe-24"></span>
                            </div>
                            <div class="col">
                                <small><strong>Package has uploaded successfull</strong></small>
                                <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                <small class="badge badge-pill badge-light text-muted">1m ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="fe fe-download fe-24"></span>
                            </div>
                            <div class="col">
                                <small><strong>Widgets are updated successfull</strong></small>
                                <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                <small class="badge badge-pill badge-light text-muted">2m ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="fe fe-inbox fe-24"></span>
                            </div>
                            <div class="col">
                                <small><strong>Notifications have been sent</strong></small>
                                <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                <small class="badge badge-pill badge-light text-muted">30m ago</small>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="list-group-item bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="fe fe-link fe-24"></span>
                            </div>
                            <div class="col">
                                <small><strong>Link was attached to menu</strong></small>
                                <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                <small class="badge badge-pill badge-light text-muted">1h ago</small>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .list-group -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5">
                <div class="row align-items-center">
                    <div class="col-6 text-center">
                        <div class="squircle bg-success justify-content-center">
                            <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                        </div>
                        <p>Control area</p>
                    </div>
                    <div class="col-6 text-center">
                        <div class="squircle bg-primary justify-content-center">
                            <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                        </div>
                        <p>Activity</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6 text-center">
                        <div class="squircle bg-primary justify-content-center">
                            <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                        </div>
                        <p>Droplet</p>
                    </div>
                    <div class="col-6 text-center">
                        <div class="squircle bg-primary justify-content-center">
                            <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                        </div>
                        <p>Upload</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6 text-center">
                        <div class="squircle bg-primary justify-content-center">
                            <i class="fe fe-users fe-32 align-self-center text-white"></i>
                        </div>
                        <p>Users</p>
                    </div>
                    <div class="col-6 text-center">
                        <div class="squircle bg-primary justify-content-center">
                            <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                        </div>
                        <p>Settings</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection