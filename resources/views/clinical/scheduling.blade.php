@extends('layouts.admin-lte.site')
@section('content')

<link rel="stylesheet" href="{{asset('theme/site/css-inscricao/index.css')}}">
<section class="content">
    <img src="{{ asset('theme/site/img/topo.png')}}" width="100%" height="150">
   <form  class="form-horizontal" id="form-inscricao">
        <div class="card card-secondary">
            <div class="card-header">
                <h4 class="titulo">Formulário de Agendamento </h4>
            </div>
            @csrf
            <meta name="csrf-token" content="{{ csrf_token() }}">
            @if($errors->any())
            <h4>{{$errors->first()}}</h4>
            @endif
            <div class="card-body">

                <div class="row">
                    <nav class="w-100">
                        <div class="nav nav-tabs" >
                            <a class="nav-item nav-link active"><b>AGENDAR</b></a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent"></div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Consulte a especialidade</h3>
                                </div>
                                    <div class="row">

                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <select name="specialty_id" id="specialty-id" class="form-control">
                                                    <option value=""> Selecione a especialidade </option>
                                                    @foreach($content['content'] as $content)
                                                    <option value="{{ $content['especialidade_id'] }}"  }} >{{  $content['nome'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-success btn_specialty" style="margin-top: 23px; width: 100%">AGENDAR</button>
                                            </div>
                                        </div>
                                    </div>
                                <div>

                            </div>
                        </div>
                    </div>
                    <div class="form-add">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Preencha seus dados para agendar com o profissional <b class="form-add-professional-name"></b></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="add-two-fields"></div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="name" class="control-label">Nome completo *</label>
                                                <input type="text" id="name" class="form-control requerido" maxlength="100" placeholder="Seu nome completo" style="text-transform:capitalize;" autocomplete="false">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="met" class="control-label">Como Conheceu: *</label>
                                                <select id="met" class="form-control">
                                                    <option value=""> Selecione a opção </option>
                                                    <option value="indicacao">Indicação</option>
                                                    <option value="internet">Internet</option>
                                                    <option value="outros">Outros</option>
                                                    <option value="panfletagem">Panfletagem</option>
                                                    <option value="radio">Rádio</option>
                                                    <option value="tv">TV</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="birth" class="control-label">Nascimento *</label>
                                                <input type="text" id="birth" data-toggle="datepicker" placeholder="__/__/____" place class="form-control requerido" data-inputmask-alias="datetime"  data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cpf" class="control-label">CPF *</label>
                                                <input type="text" id="cpf" maxlength="20" class="form-control requerido" placeholder="___.___.___-__" data-inputmask='"mask": "999.999.999-99"' data-mask>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-success btn_ask" style="margin-top: 30px; width: 100%">SOLICITAR HORÁRIOS</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <div class="professional-title"></div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </form>
    <p><center><span class="copyright">Clínica Exemplo ©️ @php echo date('Y') @endphp - todos direitos reservados.</span></center></p>
  </section>
    <script>
    jQuery(document).ready(function(e) {
        $('.form-add').hide();
        //Reset form incricao
        document.getElementById('form-inscricao').reset();

        //Select2
        $(document).ready(function() {
            $('#specialty-id').select2();
        });
    });

    $(document).on('click', '.btn_specialty', function (e) {
        $('.form-add').hide();
        e.preventDefault();
        let specialty_id = $('#specialty-id').val();
        //validando o form
        if(specialty_id == "") {
            toastr.warning('Selecione a especialidade');
            return false;
        }
        $('.btn_specialty').text('Carregando...').prop('disabled', true);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "GET",
            url: "./professional/"+specialty_id,
            dataType: "json",
            success: function (response) {
                let professional = response.total == 1 ? 'profissional' : 'profissionais';
                let found = response.total == 1 ? 'encontrado' : 'encontrados';

                //save specialty localstorage
                localStorage.setItem("specialty_id", response.specialty_id)
                localStorage.setItem("specialty_type", response.specialty_type)
                $('.professional-title').html(
                    `
                    <div class="card card-primary col-md-12">
                        <div class="card-header">
                            <h3 class="card-title">
                            ${response.total} ${professional} da especialidade: <b>${response.specialty_type}</b> ${found}
                            </h3>
                        </div>
                        <div class="card-body p-0">
                            <ul class="users-list clearfix content-professional">
                            </ul>
                        </div>
                    </div>
                    `
                );

                $.each(response.professionals, function (key, item) {
                    if(item.foto != ''){
                        var photo = item.foto
                        var photo_desc = item.nome
                    }else{
                        var photo = 'https://cdn.feegow.com/img/user-dummy.png'
                        var photo_desc = 'Sem foto';
                    }

                    let tratamento = item.tratamento ? item.tratamento : '';
                    //save professional localstorage
                    localStorage.setItem(`treatment${item.profissional_id}`, `${tratamento} ${item.nome}`);
                    $('.content-professional').append(`
                        <li>
                            <img src="${photo}" width="80" alt="${photo_desc}" title="${photo_desc}">
                            <span class="users-list-date">CRM ${item.documento_conselho}</span>
                            <a class="users-list-name"> ${tratamento} ${item.nome} </a>
                            <button type="button" class="btn btn-success" onClick="clickIdProfessionalForm(this.value);" value="${item.profissional_id}">AGENDAR</button>
                        </li>
                    `);
                    $('.btn_specialty').text('AGENDAR').prop('disabled', false);
                });
            }
        }).fail(function (jqXHR, textStatus, error) {
            toastr.error('Erro: Servidor não encontrado!')
            $('.btn_specialty').text('AGENDAR').prop('disabled', false);
        });
    });

    function clickIdProfessionalForm(profissional_id) {
        //get informations professional by localStorage
        let professional_name = localStorage.getItem(`treatment${profissional_id}`);
        let specialty_type = localStorage.getItem("specialty_type");
        let specialty_id = localStorage.getItem("specialty_id");
        $('.form-add-professional-name').html(professional_name)
        $('.add-two-fields').html(`
                <input type="hidden" id="specialty-id" value="${specialty_id}">
                <input type="hidden" id="professional-id" value="${profissional_id}">`)
        $('.form-add').show();

    }

    $(document).on('click', '.btn_ask', function (e) {
        e.preventDefault();
        let name = $('#name').val();
        let met = $('#met').val();
        let birth = $('#birth').val();
        let cpf = $('#cpf').val();
        //validando o form
        if(name == "") {
            toastr.warning('Preencha seu nome');
            return false;
        }
        if(met == "") {
            toastr.warning('Escholha  aopção como nos conheceu');
            return false;
        }
        if(birth == "") {
            toastr.warning('Preencha seu nascimento');
            return false;
        }
        if(cpf == "") {
            toastr.warning('Preencha seu cpf');
            return false;
        }
        $('.btn_ask').text('Carregando...').prop('disabled', true);
        var data = {
            'specialty_id': $('#specialty-id').val(),
            'professional_id': $('#professional-id').val(),
            'name': name,
            'met': met,
            'birth': birth,
            'cpf': cpf
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('add.scheduling') }}",
            type: "POST",
            data: data,
            success: function (response) {
                if (response.status == 400) {
                    toastr.warning('Seu agendamento não foi processado, verifique todos os campos e tente novamente');
                } else if (response.status == 200) {
                    toastr.success('Agendamento criado com sucesso!')
                }else{
                    toastr.error('Erro ao proceso o agendamento!')
                }
                $('.btn_ask').text('SOLICITAR HORÁRIOS').prop('disabled', false);
                let name = $('#name').val('');
                let met = $('#met').val('');
                let birth = $('#birth').val('');
                let cpf = $('#cpf').val('');
            }
        }).fail(function (jqXHR, textStatus, error) {
            toastr.error('Erro: Servidor não encontrado!')
        });
    });
</script>

@endsection
