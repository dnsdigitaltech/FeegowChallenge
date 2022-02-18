<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }} | {{ $title }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery -->
  <script src="{{ asset('theme/admin/plugins/jquery/jquery.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Date picker -->
  <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('theme/admin/dist/css/adminlte.min.css') }}">
  <!-- Animations -->
  <link rel="stylesheet" href="{{ asset('theme/admin/dist/css/animate.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/toastr/toastr.min.css')}}">
  <!--Fancybox-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <!-- Styles -->
  <link rel="icon" href="{{ asset('theme/admin/dist/img/favicon.ico')}}" type="image/x-icon"/>
  <style>
    .content-load {
        display:none;
    }

    .preload {
            margin:0;
            position:absolute;
            top:80%;
            left:50%;
            margin-right: -50%;
            transform:translate(-50%, -50%);
            font-weight: bolder;
    }
    .button-image{
        position:relative;
        bottom:-50px;
        left: -190px;
        width:100px;
        height:30px;
    }
    .images{
        padding-bottom: 10px;
    }
    .navbar-blue {
        background-color: #57a2de !important;
    }
    .navbar-dark .navbar-nav .nav-link {
      color: rgba(41, 41, 41, 0.75);
    }
    .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
      color: rgb(29, 28, 28);
    }
    .navbar-primary {
        background-color: #0066c8;
    }
    .layout-footer-fixed .wrapper .main-footer{
      font-size:0.8em;
    }
    .elevation-4 {
      box-shadow: 0 !important;
    }

    /* All Mobile Sizes (devices and browser) */
    @media only screen and (max-width: 767px) {
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            /*padding: 1.25rem;*/
            padding: 2rem;
        }

        .opt-credito{
            float: left;
        }
        .opt-pix{
            float: left;
        }
    }

    /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            /*padding: 1.25rem;*/
            padding: 0;
        }
        
    }

    /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
    @media only screen and (max-width: 479px) {
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            /*padding: 1.25rem;*/
            padding: 0;
        }
        a {
            font-size: 0.8em !important;
        }
        .table {
            font-size: 0.4em;
        }
        .table td, .table th {
            padding: 0.5rem;
        }
        .main-footer {
            font-size: 0.6rem;
        }
        .card-title {
            font-size: 0.7em !important;
        }
        .card-footer {
            font-size: 0.7em !important;
        }
    }
  </style>
  <!-- Money -->
  <script src="{{asset('theme/admin/maskmoney/src/jquery.maskMoney.js')}}" type="text/javascript"></script>
  <!-- Tinymce -->
  <script src="{{asset('theme/tinymce/js/tinymce/tinymce.min.js')}}"></script>
  <script>
    var editor_config = {
      path_absolute : "/",
      height:300,
      menubar: false,
      language: 'pt_BR',
      selector: "textarea.my-editor",
      theme_modern_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
      font_size_style_values: "12px,13px,14px,16px,18px,20px",
      plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "print preview searchreplace | undo redo | fontselect | fontsizeselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | table | link imageinsertfile image media | emoticons | code",

      relative_urls: true,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Upload de arquivos',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);

  </script>

  <script type="text/javascript">
    function ShowLoading(e) {
        document.getElementById('hidenBoton').setAttribute("disabled","disabled");
        var div = document.createElement('div');
        //var img = document.createElement('img');
        //var button = document.createElement('button');
        //img.src = 'http://ladima.tuseon.com.br/images/loading.gif';
        div.innerHTML = "Aguarde Carregando... <i class='fa fa-spinner fa-pulse fa-0x fa-fw'></i>";
        div.style.cssText = 'position: fixed; top: 5%; left: 40%; z-index: 5000; padding:10px; color:#fff; text-align: center; background: #3c8dbc; border: 1px solid #fff';
        //button.style.cssBoton = 'display: none;';
        //div.appendChild(img);
        document.body.appendChild(div);
        //document.body.appendChild(button);
        return true;
        // These 2 lines cancel form submission, so only use if needed.
        window.event.cancelBubble = true;
        e.stopPropagation();
    }
</script>
<!-- Adicionando Javascript -->
  <script type="text/javascript" >

  $(document).ready(function() {

      function limpa_formulário_cep() {
          // Limpa valores do formulário de cep.
          $("#rua").val("");
          $("#bairro").val("");
          $("#cidade").val("");
          $("#uf").val("");
          $("#ibge").val("");
      }

      //Quando o campo cep perde o foco.
      $("#cep").blur(function() {

          //Nova variável "cep" somente com dígitos.
          var cep = $(this).val().replace(/\D/g, '');

          //Verifica se campo cep possui valor informado.
          if (cep != "") {

              //Expressão regular para validar o CEP.
              var validacep = /^[0-9]{8}$/;

              //Valida o formato do CEP.
              if(validacep.test(cep)) {

                  //Preenche os campos com "..." enquanto consulta webservice.
                  $("#rua").val("...");
                  $("#bairro").val("...");
                  $("#cidade").val("...");
                  $("#uf").val("...");
                  $("#ibge").val("...");

                  //Consulta o webservice viacep.com.br/
                  $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                      if (!("erro" in dados)) {
                          //Atualiza os campos com os valores da consulta.
                          $("#rua").val(dados.logradouro);
                          $("#bairro").val(dados.bairro);
                          $("#cidade").val(dados.localidade);
                          $("#uf").val(dados.uf);
                          $("#ibge").val(dados.ibge);
                      } //end if.
                      else {
                          //CEP pesquisado não foi encontrado.
                          limpa_formulário_cep();
                          alert("CEP não encontrado.");
                      }
                  });
              } //end if.
              else {
                  //cep é inválido.
                  limpa_formulário_cep();
                  alert("Formato de CEP inválido.");
              }
          } //end if.
          else {
              //cep sem valor, limpa formulário.
              limpa_formulário_cep();
          }
      });
  });

  </script>
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-open">
<!-- Site wrapper -->
<div class="wrapper">
    @include('layouts.admin-lte.nav-login')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      @include('layouts.admin-lte.logo')
    <!-- Sidebar -->
    <div class="sidebar">
      @include('layouts.admin-lte.user')
      @include('layouts.app')
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.admin-lte.section-crumb')
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="{{$fapage}}"></i> {{$titleinfopage}}</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Deslizar a página">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
            @yield('content')
            <div class="preload">
                <img src="{{asset('theme/admin/dist/img/spinner.gif')}}"
                <i class="fa fa-pulse fa-3x fa-fw"></i>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Olá <b>{{ auth()->user()->name }}</b> você está logado em {{ date('d/m/Y') }} às {{ date('H:i') }}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.admin-lte.footer')
  @include('layouts.admin-lte.profile')
</div>
<!-- ./wrapper -->
<!-- Date picker -->
<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('theme/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('theme/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('theme/admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('theme/admin/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('theme/admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{ asset('theme/admin/plugins/toastr/toastr.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('theme/admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('theme/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('theme/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('theme/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('theme/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('theme/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('theme/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- AdminLTE App -->
<script src="{{ asset('theme/admin/dist/js/adminlte.min.js') }}"></script>
<script>
  //preload
  $(function() {
    $(".preload").fadeOut(1000, function() {
      $(".content-load").fadeIn(1000);
    });
  });
  //Datatable
  $(function () {
      $('#tableRequests').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      $('#tableRequestsTranspFiscal').DataTable({
        'paging'      : false,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      });
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      });
  });

  $(function () {
    //Initialize Money
    $(document).ready(function(){
            $("input.dinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
    });
    //Initialize Select2 Elements
    $('.select2').select2({width: '100%'})

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      locale: 'pt-br',

    });

  });
</script>
</body>
</html>
