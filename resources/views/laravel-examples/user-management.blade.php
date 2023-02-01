@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Usuários</h5>
                            </div>
                            <a href="{{ route('create-user') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Novo
                                Usuário</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Avatar
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nome
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Função
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Data de Criação
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Acções
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($usuarios as $index=>$item)
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $index+1 }}</p>
                                            </td>
                                            <td>
                                                @if ($item->avatar)
                                                <div>
                                                    <img src="storage/users/{{ $item->avatar }}" class="avatar avatar-sm me-3">
                                                </div>
                                                @else
                                                <div>
                                                    <img src="../assets/img/avatar.png" class="avatar avatar-sm me-3">
                                                </div>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->name }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->email }}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->getRoleNames()[0] }}</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $item->created_at->format('j F, Y') }}</span>
                                            </td>
                                            <td class="text-center">
                                                @can('edit-usuario')
                                                <a href="{{ route('edit.user', $item->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit user">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                @endcan
                                                @can('destroy-usuario')
                                                <span>
                                                    <i class="cursor-pointer fas fa-trash text-secondary" data-id="{{ $item->id }}" data-route="{{ route('destroy-users', $item->id) }}"></i>
                                                </span>
                                                @endcan
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
