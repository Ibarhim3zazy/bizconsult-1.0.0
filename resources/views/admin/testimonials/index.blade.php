@extends('admin.master')

@section('title', __('keywords.testimonials'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 row align-items-center">
            <h2 class="h5 page-title col">{{ __('keywords.testimonials') }}</h2>
            <x-add-new-button href="{{ route('admin.testimonials.create') }}" />
            <x-alert type="success" />
            <!-- testimonials Table -->
            <div class="col-md-12 my-4">
                <div class="card shadow">
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="2%">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="chall">
                                            <label class="custom-control-label" for="d1"></label>
                                        </div>
                                    </th>
                                    <th width="5%">#</th>
                                    <th width="20%">{{ __('keywords.name') }}</th>
                                    <th width="10%">{{ __('keywords.position') }}</th>
                                    <th width="10%">{{ __('keywords.image') }}</th>
                                    <th>{{ __('keywords.description') }}</th>
                                    <th width="5%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($testimonials->count() !== 0)
                                @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="d1">
                                            <label class="custom-control-label" for="d1"></label>
                                        </div>
                                    </td>
                                    <td width="5%">{{ $testimonials->firstItem() + $loop->index }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td width="10%">{{ $testimonial->position }}</td>
                                    <td width="10%">
                                        <img src="{{ file_exists(trim(" storage/testimonials/$testimonial->image")) ?
                                        asset("storage/testimonials/$testimonial->image") :
                                        $testimonial->image }}"
                                        alt="{{ $testimonial->name }}" width="100px">
                                    </td>
                                    <td width="50%">{{ $testimonial->description }}</td>
                                    <td width="5%">
                                        <x-action-button
                                            hrefShow="{{ route('admin.testimonials.show', ['testimonial' => $testimonial]) }}"
                                            hrefEdit="{{ route('admin.testimonials.edit', ['testimonial' => $testimonial]) }}"
                                            hrefDelete="{{ route('admin.testimonials.destroy', ['testimonial' => $testimonial]) }}" />
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <x-no-records-found-alert />
                                @endif
                            </tbody>
                        </table>
                        {{ $testimonials->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div> <!-- testimonials Table -->
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