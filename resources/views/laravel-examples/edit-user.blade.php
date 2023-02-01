@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
              <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
              <div class="row gx-4">
                <div class="col-auto">
                  <div class="avatar avatar-xl position-relative">
                    <img src="/storage/users/{{ $user->avatar }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                  </div>
                </div>
                <div class="col-auto my-auto">
                  <div class="h-100">
                    <h5 class="mb-1">
                      {{ $user->name }}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                      {{ $user->getRoleNames()[0] }}
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">{{ __('Editar  Utilizador') }}</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('update.user') }}" enctype="multipart/form-data" method="POST" role="form text-left">
                        @csrf
                        @if ($errors->any())
                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                                <span class="alert-text text-white">
                                    {{ $errors->first() }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success"
                                role="alert">
                                <span class="alert-text text-white">
                                    {{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">{{ __('Nome') }}</label>
                                    <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            placeholder="Name" id="user-name" name="name" value="{{ $user->name }}" />
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user-email" class="form-control-label">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="email"
                                            placeholder="@example.com" id="user-email" name="email" value="{{ $user->email }}" />
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user.role" class="form-control-label">{{ __('Função') }}</label>
                                    <div class="@error('user.position')border border-danger rounded-3 @enderror">
                                        <select class="form-select" id="position" name="position">
                                            <option value="">--</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('position')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user.avatar" class="form-control-label">{{ __('Avatar') }}</label>
                                    <div class="@error('user.avatar') border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="file" placeholder="avatar" id="avatar"
                                            name="avatar" value="{{ $user->avatar }}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit"
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Salvar Alterações' }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
