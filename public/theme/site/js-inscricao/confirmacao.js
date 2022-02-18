function showPwd(id, el) {
    let x = document.getElementById(id);
    if (x.type === "password") {
      x.type = "text";
      el.className = 'fa fa-eye-slash showpwd';
    } else {
      x.type = "password";
      el.className = 'fa fa-eye showpwd';
    }
  } 
//$(":file").filestyle({buttonText: "&nbsp;Escolher arquivos"});
//accordion
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
}
//Select2
$(document).on("ready", function() {
    $('.pais1').select2();
});
$(document).on("ready", function() {
    $('.pais2').select2();
});
$(document).on("ready", function() {
    $('.nacionalidade').select2();
});
$(document).on("ready", function() {
    $('.crm_uf').select2();
});
$(document).on("ready", function() {
    $('.nacionalidade').select2();
});
$(document).on("ready", function() {
    $('.estado').select2();
});
$(document).on("ready", function() {
    $('.estado2').select2();
});
$(document).on("ready", function() {
    $('.cidade').select2();
});
$(document).on("ready", function() {
    $('.cidade2').select2();           
});
//Adiciona outro pagador
var update_pgto = function () {            
    if ($("#pgto").is(":checked")) {
        $('.ptgo_reponsavel').prop('disabled', false);
        $("#nome_pagador").val('');
        $("#cpf_pagador").val('');
        $("#pais_pagador").val('');
        $("#estado_pagador").val('');
        $("#estado_pagador").prop('disabled', false);
        $("#cidade_pagador").val('');
        $("#cidade_pagador").prop('disabled', false);
        $("#cep_pagador").val('');
        $("#cep_pagador").prop('disabled', false);
        $("#bairro_pagador").val('');
        $("#bairro_pagador").prop('disabled', false);
        $("#logradouro_pagador").val('');
        $("#logradouro_pagador").prop('disabled', false);
        $("#numero_pagador").val('');  
        $("#numero_pagador").prop('disabled', false);          
        $("#complemento_pagador").val('');
        $("#complemento_pagador").prop('disabled', false);
         
    }else {
        $('.ptgo_reponsavel').prop('disabled', 'disabled');  
        $("#nome_pagador").val($("#nome_pagador1").val());   
        $("#nome_pagador").prop('disabled', 'disabled');    
        $("#cpf_pagador").val($("#cpf_pagador1").val()); 
        $("#pais_pagador").val($("#pais_pagador1").val());  
        $("#estado_pagador").val($("#estado_pagador1").val());
        $("#estado_pagador").prop('disabled', 'disabled');
        $("#cidade_pagador").val($("#cidade_pagador1").val());
        $("#cidade_pagador").prop('disabled', 'disabled');
        $("#cep_pagador").val($("#cep_pagador1").val());   
        $("#cep_pagador").prop('disabled', 'disabled'); 
        $("#bairro_pagador").val($("#bairro_pagador1").val()); 
        $("#bairro_pagador").prop('disabled', 'disabled'); 
        $("#logradouro_pagador").val($("#logradouro_pagador1").val());
        $("#logradouro_pagador").prop('disabled', 'disabled'); 
        $("#numero_pagador").val($("#numero_pagador1").val());
        $("#numero_pagador").prop('disabled', 'disabled'); 
        $("#complemento_pagador").val($("#complemento_pagador1").val()); 
        $("#complemento_pagador").prop('disabled', 'disabled'); 
         
    }
};
$(update_pgto);
$("#pgto").change(update_pgto);
//Muda a categoria
var update_categoria = function () {
    if ($("#nova-categoria").is(":checked")) {
        $("#categ-nova").show();
        $("#categ-atual").hide();
        $("#msg-cat").show();
        $("#msg-cat").css("color", "#666");
        $("#categoria_candidato").prop('disabled', 'disabled'); 
        $("#categoria").prop('disabled', false);    
        //$("#cpf").prop('disabled', false);                   
        $("#cpf").val('');       
        $("#passaporte").prop('disabled', false);
        $("#passaporte").val('');  
        $("#select-categoria").prop('disabled', false);
        $("#comprovante").prop('disabled', false);
        $("#newId").attr("id", "cpf"); //add id CPF
    }else {
        $("#categ-nova").hide();
        $("#categ-atual").show();
        $("#msg-cat").hide(); 
        $("#cpf_candidato").prop('disabled', false);   
        $("#cpf_candidato").addClass("requerido"); 
        $("#categoria_candidato").prop('disabled', false);   
        $("#categoria_candidato").addClass("requerido"); 
        //$("#cpf").prop('disabled', true); 
        $("#cpf").removeClass("requerido"); 
        $("#passaporte").prop('disabled', true);
        $("#passaporte").removeClass("requerido");
        $("#select-categoria").prop('disabled', true);
        $("#select-categoria").removeClass("requerido");
        $("#comprovante").prop('disabled', true);     
        $("#comprovante").removeClass("requerido");     
        $("#cpf").attr("id", "newId");//remove o id CPF          
    }
};
$(update_categoria);
$("#nova-categoria").change(update_categoria);

/*$( "#cartao_numero" ).mask( "9999 9999 9999 9999" );
//$( "#cc" ).mask( "9999 9999 9999 9999" );
$( "#cpf_pagador" ).mask( "999.999.999-99" );
//$( "#cep_pagador" ).mask( "99.999-999" );*/


/* Brazilian initialisation for the jQuery UI date picker plugin. */
/* Written by Leonildo Costa Silva (leocsilva@gmail.com). */

 $(document).ready(function(){            
    let paisEscolhido = $("input[name=pais_candidato]").val();
    //console.log(paisEscolhido);
        if(paisEscolhido == 'Brasil'){
            //mostra conteudo do Brasil
            //$('.estado').show();
            //$('.cidade').show();
        }

    $('.loading').hide();
   /* $('.form-dados-pagador-cartao').hide();
    $('.form-dados-pagador-boleto').hide();
    $('#cartao_nome').removeClass("requerido");
    $('#cartao_numero').removeClass("requerido");
    $('#cc').removeClass("requerido");
    $('#cartao_data_vencimento').removeClass("requerido");
    $('#cartao_codigo_seguranca').removeClass("requerido");
    $('#valor-parcelas').removeClass("requerido");*/

    $("#enviar").click(function(event) {
        $("#cpf_candidato").prop('disabled', false);   
        $("#cpf_candidato").addClass("requerido"); 
        $('.loading').show();
    });

    $("#sacado").attr("readonly", true);
    
    //Dados do Cartao
    /*$("#forma_pgto").change(function(event) { 
        //$("#enviar").prop('disabled', false);  
        let opcaopgto = $(this).children("option:selected").val();
        if(opcaopgto == 1 || opcaopgto == ''){                    
            $('.form-dados-pagador-cartao').hide();
            $('.form-dados-pagador-boleto').show();
            $('#cartao_nome').removeClass("requerido");
            $('#cartao_numero').removeClass("requerido");
            $('#cc').removeClass("requerido");
            $('#cartao_data_vencimento').removeClass("requerido");
            $('#cartao_codigo_seguranca').removeClass("requerido");
            $('#valor-parcelas').removeClass("requerido");
        } //Cartao
        else{
            //$("#enviar").prop('disabled', true);
            $('.form-dados-pagador-cartao').show();
            $('.form-dados-pagador-boleto').hide();
            $('#cartao_nome').addClass("requerido");
            $('#cartao_numero').addClass("requerido");
            $('#cc').addClass("requerido");
            $('#cartao_data_vencimento').addClass("requerido");
            $('#cartao_codigo_seguranca').addClass("requerido");
            $('#valor-parcelas').addClass("requerido");
            //$("input[name='cartao_data_vencimento']").mask("99/99");
        }
    });*/

    //Parcelas
   /* $("#cartao_num_parcelas").change(function(event) {   
        let opcaoparcelas = $(this).children("option:selected").val();
        console.log(opcaoparcelas);
        if(opcaoparcelas == 1){
            console.log(735 * 0.027 + 1.10);
        }else if(opcaoparcelas == 2 || opcaoparcelas == 3){
            console.log(735 * 0.0299 + 1.10);
        }
        /*if(opcaopgto == 1 || opcaopgto == ''){                    
            $('.form-dados-pagador-cartao').hide();
            $('.form-dados-pagador-boleto').show();
            $('#cartao_nome').removeClass("requerido");
            $('#cartao_numero').removeClass("requerido");
            $('#cartao_data_vencimento').removeClass("requerido");
            $('#cartao_codigo_seguranca').removeClass("requerido");
            $('#cartao_num_parcelas').removeClass("requerido");
        } //Cartao
        else{
            $('.form-dados-pagador-cartao').show();
            $('.form-dados-pagador-boleto').hide();
            $('#cartao_nome').addClass("requerido");
            $('#cartao_numero').addClass("requerido");
            $('#cartao_data_vencimento').addClass("requerido");
            $('#cartao_codigo_seguranca').addClass("requerido");
            $('#cartao_num_parcelas').addClass("requerido");
            $("input[name='cartao_data_vencimento']").mask("99/99");
        }*
    });*/

    $(document).on("change", "#estado", function(){
        cidade(0,$(this).val());
    });

    function cidade( cidade, estado ) { 
        let _token   = $('meta[name="csrf-token"]').attr('content');
        console.log(_token);
        $.ajax({
            url: "./busca-cidades",
            type:"POST",        
            data:{
                "estado": estado,
                "_token": _token
            },
            success:function(data){
                txt = '';
                $.each( data[0], function ( i, item ) {
                    selected = '';
                    if ( cidade == item.nome )
                        selected = 'selected';

                        txt += '<option value="' + item.id + '" ' + selected + '>' + item.nome + '</option>';
                } );
                $( "#cidade" ).html( txt );
            }
        } );
    }

    $(document).on("change", "#estado2", function(){
        cidade2(0,$(this).val());
    });

    function cidade2( cidade2, estado2 ) { 
        let _token   = $('meta[name="csrf-token"]').attr('content');
       // console.log(_token);
        $.ajax({
            url: "./busca-cidades",
            type:"POST",        
            data:{
                "estado": estado2,
                "_token": _token
            },
            success:function(data){
                txt = '<option value="..." selected>...</option>';
                $.each( data[0], function ( i, item ) {
                    selected = '';
                    if ( cidade2 == item.nome )
                        selected = 'selected';
    
                        txt += '<option value="' + item.id + '" ' + selected + '>' + item.nome + '</option>';
                } );
                $( "#cidade2" ).html( txt );
            }
        } );
    }

    ////////////////validar cartão
    var acceptedCreditCards = {
        /*visa: /^4[0-9]{12}(?:[0-9]{3})?$/,
        mastercard: /^5[1-5][0-9]{14}$|^2(?:2(?:2[1-9]|[3-9][0-9])|[3-6][0-9][0-9]|7(?:[01][0-9]|20))[0-9]{12}$/,
        amex: /^3[47][0-9]{13}$/,
        discover: /^65[4-9][0-9]{13}|64[4-9][0-9]{13}|6011[0-9]{12}|(622(?:12[6-9]|1[3-9][0-9]|[2-8][0-9][0-9]|9[01][0-9]|92[0-5])[0-9]{10})$/,
        diners_club: /^3(?:0[0-5]|[68][0-9])[0-9]{11}$/,
        jcb: /^(?:2131|1800|35[0-9]{3})[0-9]{11}$/,*/
        electron: /^(4026|417500|4405|4508|4844|4913|4917)\d+$/,
        maestro: /^(5018|5020|5038|5612|5893|6304|6759|6761|6762|6763|0604|6390)\d+$/,
        elo: /^(636368|438935|504175|451416|636297|5067|4576|4011)\d+$/,
        dankort: /^(5019)\d+$/,
        interpayment: /^(636)\d+$/,
        unionpay: /^(62|88)\d+$/,
        visa: /^4[0-9]{12}(?:[0-9]{3})?$/,
        mastercard: /^5[1-5][0-9]{14}$/,
        amex: /^3[47][0-9]{13}$/,
        diners: /^3(?:0[0-5]|[68][0-9])[0-9]{11}$/,
        discover: /^6(?:011|5[0-9]{2})[0-9]{12}$/,
        jcb: /^(?:2131|1800|35\d{3})\d{11}$/
      };
      
      $('#cc').on('input propertychange paste', function(){        
        var value = $('#cc').val();
        var formattedValue = formatCardNumber(value);
        $('#cc').val(formattedValue);
        if($('#cc').val()==''){
            $('#status').html('<div style="color:red">Digite um número válido</div>');
        }else{
            if (validateCard($('#cc').val())) {
                $('#status').html('<div style="color:green"><i class="fas fa-check-circle"></i> Cartão Válido</div');
                //$("#enviar").prop('disabled', false);
            } else {
                $('#status').html('<div style="color:red"><i class="fas fa-exclamation-triangle"></i> Cartão Inválido</div>');
                //$("#enviar").prop('disabled', true);
            }
        }
      });
      
      function formatCardNumber(value) {
        var value = value.replace(/\D/g, '');
        var formattedValue;
        var maxLength;
        // american express, 15 digits
        if ((/^3[47]\d{0,13}$/).test(value)) {
          formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
          maxLength = 17;
        } else if((/^3(?:0[0-5]|[68]\d)\d{0,11}$/).test(value)) { // diner's club, 14 digits
          formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
          maxLength = 16;
        } else if ((/^\d{0,16}$/).test(value)) { // regular cc number, 16 digits
          formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{4})/, '$1 $2 ').replace(/(\d{4}) (\d{4}) (\d{4})/, '$1 $2 $3 ');
          maxLength = 19;
        }
        
        $('#cc').attr('maxlength', maxLength);
        return formattedValue;
      }
      
      function validateCard(value) {
        // remove all non digit characters
        var value = value.replace(/\D/g, '');
        var sum = 0;
        var shouldDouble = false;
        // loop through values starting at the rightmost side
        for (var i = value.length - 1; i >= 0; i--) {
          var digit = parseInt(value.charAt(i));
      
          if (shouldDouble) {
            if ((digit *= 2) > 9) digit -= 9;
          }
      
          sum += digit;
          shouldDouble = !shouldDouble;
        }
        
        var valid = (sum % 10) == 0;
        var accepted = false;
        
        // loop through the keys (visa, mastercard, amex, etc.)
        Object.keys(acceptedCreditCards).forEach(function(key) {
          var regex = acceptedCreditCards[key];
          if (regex.test(value)) {
            accepted = true;
          }
        });
        
        return valid && accepted;
      }

})

$("document").ready(function(){
    $("#frm").on("click", function(e){
        e.preventDefault();
        var username = $("input#username").val();
        var token =  $("input[name=_token]").val();
        var dataString = 'username='+username+'&token='+token; 
        $.ajax({
            type: "POST",
            url : "admin/login",
            data : dataString,
            success : function(data){
                console.log(data);
            }
        },"json");

    });
});//end of document ready function