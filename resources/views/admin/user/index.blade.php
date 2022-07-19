@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Users')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            @if (Auth::user()->access_level == 0)
                                <a class="float-right" href="{{ route('user.create') }}">
                                    <button type="button" title="{{ __('Add User') }}" class="btn btn-primary add-button">
                                        <i class="material-icons">add_circle_outline</i>{{ __('Add User') }}
                                    </button>
                                </a>
                            @endif
                            <h4 class="card-title ">{{ __('Users') }}</h4>
                            <p class="card-category">{{ __('List of all users') }}</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            {{ __('Name') }}
                                        </th>
                                        <th>
                                            {{ __('Email') }}
                                        </th>
                                        <th>
                                            {{ __('Access Level') }}
                                        </th>
                                        <th>
                                            {{ __('Actions') }}
                                        </th>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->AccessLevelName }}</td>
                                            <td>
                                            @if ($user->id != 1)
                                                <!-- Edit button -->
                                                    <a href="{{ route('user.edit', $user->id) }}">
                                                        <button type="button" title="{{ __('Edit') }}"
                                                                class="btn btn-warning">
                                                            <i class="material-icons" style="color: white">edit</i>
                                                        </button>
                                                    </a>
                                                    <!-- Delete Button -->
                                                    @if (Auth::user()->access_level == 0)
                                                        <button type="button" title="{{ __('Delete') }}"
                                                            data-toggle="modal" data-target="#delete-modal"
                                                            data-id="{{ $user->id }}" class="btn btn-danger">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    @endif
                                                @endif
                                                <!-- Show button -->
                                                <button type="button" title="{{ __('Details') }}"
                                                        class="btn btn-primary" data-toggle="modal"
                                                        data-target="#modal-detalhes" data-id="{{ $user->id }}">
                                                    <i class="material-icons">info</i>
                                                </button>
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

        <!-- Modal excluir -->
        <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-12 text-dark" id="serviceModalLabel">{{__('Confirmation')}}</h5>
                    </div>
                    <div class="modal-body">{{ __('Are you sure to delete this user?') }}</div>
                    <div class="modal-footer">
                        <form id="delete-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button type="submit" form="delete-form" class="btn btn-danger">Excluir</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim Modal excluir -->
        <!-- Modal Detalhes -->
        <div id="modal-detalhes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detalhes do Cliente</h5>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="detalhes-name" class="col-form-label">Nome</label><br>
                                    <input type="text" id="detalhes-name" name="detalhes-name" class="form-control" readonly/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="detalhes-phone" class="col-form-label">Telefone</label><br>
                                    <input type="text" id="detalhes-phone" name="detalhes-phone" class="form-control" readonly/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="detalhes-email" class="col-form-label">Email</label><br>
                                    <input type="text" id="detalhes-email" name="detalhes-email" class="form-control"readonly/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="detalhes-occupation" class="col-form-label">Cargo</label><br>
                                    <input type="text" id="detalhes-occupation" name="detalhes-occupation" class="form-control" readonly/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="detalhes-access_level" class="col-form-label">Nível de acesso</label><br>
                                    <input type="text" id="detalhes-access_level" name="detalhes-access_level" class="form-control" readonly/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="col-form-label" for="image">Foto</label>
                                    <div>
                                        <img id="detalhes-image" alt="image"
                                            style="max-height: 275px; max-width: 220px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal --}}

    </div>
@endsection

@push('js')
    <!-- Scripts Here -->
    <script>
        /* js to open delete modal */
        $('#delete-modal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            const id = button.data('id')
            $('#delete-form').attr('action', 'user/' + id)
        })
        /* js para abrir Modal de Detalhes de forma dinâmica com as informações desejadas */
        $('#modal-detalhes').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                let modal = $(this)

                const id = button.data('id')
                const url = 'user/' + id

                $.getJSON(url, (resposta) => {
                    if (resposta){
                        if (resposta.access_level == 0){
                            AccessLevelName = 'Administrador Master'
                        }
                        else if(resposta.access_level == 1){
                            AccessLevelName = 'Moderador'
                        }
                        else if(resposta.access_level == 2){
                            AccessLevelName = 'Usuário'
                        }
                        else{
                            AccessLevelName = 'Membro'
                        }
                    }
                    $("#detalhes-name").val(resposta.name);
                    $("#detalhes-occupation").val(resposta.occupation);
                    $("#detalhes-email").val(resposta.email);
                    $("#detalhes-access_level").val(AccessLevelName);
                    $("#detalhes-phone").val(resposta.phone);
                    $('#detalhes-image').attr('src', '/storage/' + resposta.image);

                });
            })

    </script>
@endpush
