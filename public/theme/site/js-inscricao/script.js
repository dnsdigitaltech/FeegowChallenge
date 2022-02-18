let tipoDocumento = 'CPF'; 
let $comprovante = "";
let categoria = 0;

$(function(){
    $('.oculta-form-email-exist').show();
    $('.mostra-msg-email-exist').hide();   
    $('.mostra-msg-cpf-pago').hide();  
    $('#oculta-cat-rem-exist').addClass('hidden'); 
    $("#msg-doc").hide();
    //oculta conteudo de outro pais
    $('.guarda-outro-estado').hide();
    $('.guarda-outra-cidade').hide();
    $('.guarda-outro-cep').hide();
    $('.guarda-outro-bairro').hide();
    $('.guarda-outra-rua').hide();
    $('.guarda-outro-n').hide();
    $('.guarda-outro-comp').hide();
    //tira requirer conteudo de outro pais
    $('#outro-estado').removeClass('requerido');
    $('#outra-cidade').removeClass('requerido');
    $('#outro-cep').removeClass('requerido');
    $('#outro-bairro').removeClass('requerido');
    $('#outro-logradouro').removeClass('requerido');
    $('#outro-numero').removeClass('requerido');
    $('#outro-complemento').removeClass('requerido');

    $("#passaporte").hide();

    $('#crm').removeClass('requerido');
    $('#crm_uf').removeClass('requerido');
    $(".profissao").hide();
    $("#comprovantes")
        .hide()
        .find('#comprovante')
        .removeClass('requerido');
        
    var categorias = [
        [0, "Sócio Ativo"],
        [1, "Sócio Aspirante"],
        [2, "Médico Residente"],
        [3, "Acadêmico Medicina"],
        [4, "Não Sócio"],
        [5, "Estrangeiro"],
        [6, "Sócio Remido"],	
        [7, "Convidado"],
        [8, "Somente Workshop"],
        [9, "Clasa"],
        [10, "Sócio Adjunto"],
        [11, "Sócio Honorário"],
        [12, "Presidente"],
        [13, "Ligas Acadêmicas"],
        [14, "Acompanhante"],
        [15, "Sócio Aspirante Adjunto"],
        [16, "..."],
        [17, "Outros Profissionais"],
    ];

   /* $("#cpf").mask("999.999.999-99");
    $("#cep").mask("99.999-999");
    $("#telefone").mask("(99)9999-9999");
    $("#celular").mask("(99)99999-9999");
    $("#cartao").mask("9999 9999 9999 99?99");
    $("#validade").mask("99/9999");
    $("#cvv").mask("999?9");
*/
    $("#forma-pagamento").load("boleto-corpo.php", function(){
        $("#cpf-cartao").mask("999.999.999-99");
        $("#cep").mask("99.999-999");
    });

//$("#valor-parcelas").hide(); //oculta parcelas que poderão mudar

$(document).on("change", "#pais", function(){
    let paisEscolhido = $(this).children("option:selected").val();
    if(paisEscolhido == 36){

        //mostra conteudo do Brasil
        $('.guarda-estado').show();
        $('.guarda-cidade').show();
        $('.guarda-cep').show();
        $('.guarda-bairro').show();
        $('.guarda-rua').show();
        $('.guarda-n').show();
        $('.guarda-comp').show();
        $('.guarda-cpf-cartao').show();
        //Habilita conteudo do Brasil
        $('#estado').prop('disabled', false);
        $('#cidade').prop('disabled', false);
        $('#cep').prop('disabled', false);
        $('#bairro').prop('disabled', false);
        $('#logradouro').prop('disabled', false);
        $('#numero').prop('disabled', false);
        $('#complemento').prop('disabled', false);

        //oculta conteudo de outro pais
        $('.guarda-outro-estado').hide();
        $('.guarda-outra-cidade').hide();
        $('.guarda-outro-cep').hide();
        $('.guarda-outro-bairro').hide();
        $('.guarda-outra-rua').hide();
        $('.guarda-outro-n').hide();
        $('.guarda-outro-comp').hide();
        //tira requirer conteudo de outro pais
        $('#outro-estado').removeClass('requerido');
        $('#outra-cidade').removeClass('requerido');
        $('#outro-cep').removeClass('requerido');
        $('#outro-bairro').removeClass('requerido');
        $('#outro-logradouro').removeClass('requerido');
        $('#outro-numero').removeClass('requerido');
        $('#outro-complemento').removeClass('requerido');
        //Habilita conteudo de outro pais
        $('#outro-estado').prop('disabled', true);
        $('#outra-cidade').prop('disabled', true);
        $('#outro-cep').prop('disabled', true);
        $('#outro-bairro').prop('disabled', true);
        $('#outro-logradouro').prop('disabled', true);
        $('#outro-numero').prop('disabled', true);
        $('#outro-complemento').prop('disabled', true);
        $('#outro-complemento').prop('disabled', true);
        //habilita RG e orgao emissor
        $('#rg').show();
        $('#rgemissor').show();
        $('#rg').addClass('requerido');
        $('#rgemissor').addClass('requerido');
        $('#rgemissor').prop('disabled', false); 
        $('#rg').prop('disabled', false);
        $('.div-orgao').show(); 
        $('.div-rg').show(); 

        if (verificaSeNecessarioComprovante(categoria) == false) {
            $('.guarda-cpf-cartao').show();
            $('#info-pagamento').show();
            $('.guarda-cep').show();
            $('.guarda-bairro').show();
            $('.guarda-rua').show();
            $('.guarda-n').show();
            $('.guarda-comp').show();
        }
    }
    else{
        //Coloca primeiras letras em maiuscula
        $("#outro-estado").on("input", function(){
            $(this).val($(this).val().toLowerCase());
        });
        $("#outra-cidade").on("input", function(){
            $(this).val($(this).val().toLowerCase());
        });
        $("#outro-cep").on("input", function(){
            $(this).val($(this).val().toLowerCase());
        });
        $("#outro-bairro").on("input", function(){
            $(this).val($(this).val().toLowerCase());
        });        
        $("#outro-logradouro").on("input", function(){
            $(this).val($(this).val().toLowerCase());
        });
        //oculta conteudo do Brasil
        $('.guarda-estado').hide();
        $('.guarda-cidade').hide();
        $('.guarda-cep').hide();
        $('.guarda-bairro').hide();
        $('.guarda-rua').hide();
        $('.guarda-n').hide();
        $('.guarda-comp').hide();
        $('.guarda-cpf-cartao').hide();
        //tire required conteudo do Brasil
        $('#estado').removeClass('requerido');
        $('#cidade').removeClass('requerido');
        $('#cep').removeClass('requerido');
        $('#bairro').removeClass('requerido');
        $('#logradouro').removeClass('requerido');
        $('#numero').removeClass('requerido');
        $('#complemento').removeClass('requerido');
        //Desabilita conteudo do Brasil
        $('#estado').prop('disabled', true);
        $('#cidade').prop('disabled', true);
        $('#cep').prop('disabled', true);
        $('#bairro').prop('disabled', true);
        $('#logradouro').prop('disabled', true);
        $('#numero').prop('disabled', true);
        $('#complemento').prop('disabled', true);

        //mostra conteudo de outro pais
        $('.guarda-outro-estado').show();
        $('.guarda-outra-cidade').show();
        $('.guarda-outro-cep').show();
        $('.guarda-outro-bairro').show();
        $('.guarda-outra-rua').show();
        $('.guarda-outro-n').show();
        $('.guarda-outro-comp').show();
        //Desabilita conteudo de outro pais
        $('#outro-estado').prop('disabled', false);
        $('#outra-cidade').prop('disabled', false);
        $('#outro-cep').prop('disabled', false);
        $('#outro-bairro').prop('disabled', false);
        $('#outro-logradouro').prop('disabled', false);
        $('#outro-numero').prop('disabled', false);
        $('#outro-complemento').prop('disabled', false);        
        //add required conteudo de outro pais
        $('#outro-estado').addClass('requerido');
        $('#outra-cidade').addClass('requerido');
        $('#outro-cep').addClass('requerido');
        $('#outro-bairro').addClass('requerido');
        $('#outro-logradouro').addClass('requerido');
        $('#outro-numero').addClass('requerido');
        //desabilita RG e orgao emissor
        $('#rg').hide();
        $('#rgemissor').hide();
        $('#rg').removeClass('requerido');
        $('#rgemissor').removeClass('requerido');
        $('#rgemissor').prop('disabled', true); 
        $('#rg').prop('disabled', true); 
        $('.div-orgao').hide(); 
        $('.div-rg').hide(); 
    }
});

$(document).on("change", "#estado", function(){
    cidade(0,$(this).val());
});
$(document).on("change", "#estado3", function(){
    cidade(0,$(this).val());
});
$(document).on("change", "#estado2", function(){
    cidade2(0,$(this).val());
});

$(document).on("change", ".card", function(){
    $(".opt-pagamento").removeClass('opt-pagamento-checked');
    var opcao = $(this);
        opcao.parent().addClass("opt-pagamento-checked");
    
    if (opcao.val() == 'cartao') {
        pagina = "cartao.php";
    } else {
        pagina = "boleto-corpo.php";
    }

    $("#forma-pagamento").load(pagina, function() {
        $("#cpf-cartao").mask("999.999.999-99");
        //$("#cep").mask("99.999-999");
    });

});

$(document).on("change", "#select-categoria", function() {

    categoria = $(this).val();
    $("#comprovantes")
        .hide()
        .find('#comprovante')
        .removeClass('requerido');

        retornaValorInscricao(categoria);
        result = verificaSeNecessarioComprovante(categoria);
        /*if (result) {
            retornaMensagem(2, result);
        }*/

});

function verificaSeNecessarioComprovante(categoria){
    $("#info-pagamento select, #info-pagamento input").addClass('requerido');
    $("#info-pagamento input[name=complemento]").removeClass('requerido');

    let categorias = [];   
        categorias[0] = 'Categoria de Sócio.'; 
        categorias[2] = 'Categoria de Médico Residente.';
        categorias[3] = 'Categoria de Acadêmico Medicina.';
        categorias[4] = 'Categoria Não Sócio.';
        categorias[5] = 'Categoria Estrangeiro';
        /*categorias[15] = 'Escolha uma categoria para continuar seu cadastro';*/
        /*categorias[13] = 'Categoria de Ligas Acadêmicas';*/
        //categorias[11] = 'Categoria de Grupo (mínimo 40).';
        /*categorias[9] = 'Categoria Clasa';*/
        categorias[17] = 'Outros Profissionais';

        result = categorias.filter(function(result, index) { 
            if (index == categoria && categoria != 0) {
                //upload de arquivos
                if(categoria == 2 || categoria == 3 || categoria == 9 || categoria == 4 || categoria == 13){
                    $("#comprovantes")
                        .show()
                        .find('#comprovante')
                        .addClass('requerido');
                    $(".profissao").hide();
                    $("#info-pagamento").hide();
                    $("#info-pagamento select, #info-pagamento input").removeClass('requerido');
                }
                if(categoria == 17){
                    $(".profissao").show();
                }
                return result;
            }

        });

        if (result.length > 0) {
            return result;
        }

        return false;
}
//pega cpf ao digitar
$(document).on("blur", "#cpf", function(){

    var cpf = $(this).val();    
    if(!testaCPF(cpf)){
    
        $(this).parent().addClass('has-error');
        retornaMensagem(3, 'CPF inválido, por favor verifique e tente novamente.');

        return ;
    }
    //verifica se já existe cpf cadastrado a esta inscrição
    verificaCPF(cpf);
    //verifica se o cpf é válido
    verificaSituacao(cpf);    
});
//email cpf ao digitar
$(document).on("blur", "#email", function(){
    var email = $(this).val();
    verificaEmail(email);
});

$(document).on("change", "#nome", function(){
    
    var nome = $(this).val();
    $("#sacado").val(nome);
});

$(document).on("blur","#cpf-cartao", function(){
    var cpf = $(this).val();

    if(!testaCPF(cpf)){

        $(this).parent().addClass('has-error');
        retornaMensagem(3, 'CPF inválido, por favor verifique e tente novamente.');

        return ;
    }
});

function verificaSituacao(dado) {
    var response2 = '';
    //situção do inscrito
    $.ajax({
        async: true,
        crossDomain: true,
        url: "https://www.sbahq.org/api/form-inscricao-cba-cva/",
        data: { cpf:dado },
        method: "POST",
        beforeSend: function() {
            $("#nome").val('');
            $("#nome-cracha").val('');
            $("#celular").val('');
            /*estados = $("#estado option");
            estados[0].setAttribute('selected', true);*/
            //$("#cidade").html('');
            $("#email").html('');
            //$("#pais").html('');
            //$("#info-pagamento").show();
            //$("#info-pagamento .form-control").addClass('requerido');
            // $("#complemento").removeClass("requerido");           
        }

    }).done(function (response) {        
        var dados = response.dados;
        
        //$("#nome, #sacado").val(dados.nome);
        //$("#cpf-cartao").val($("#cpf").val());
        if (response.liberado === true) {
            //$("#nome-cracha").val(nomeCracha(dados.nome));
            var nome_cracha = dados.nome.split(" ");                              
            $("#nome-cracha").val(nome_cracha[0]+' '+nome_cracha[nome_cracha.length-1]);
            $("#nome-certificado").val(dados.nome);
            $("#nome").val(dados.nome);
            $("#celular").val(dados.celular);
            $("#email").val(dados.email);
            $("#presidente").val(dados.presidente);
            
            uf('estado', dados.estado);
            uf('pais', dados.pais);

            cidade(dados.cidade, indexUf(uf));

            $("#select-categoria").html(retornaCategoria(dados.categoria));            
            if (dados.categoria == "REM") {
                $("#info-pagamento").hide();
                $("#info-pagamento .form-control").removeClass('requerido');
                
            }
            
        } else {                
            if (dados.categoria == "HON"){
                var nome_cracha = dados.nome.split(" "); 
                $("#nome-cracha").val(dados.nome);
                $("#nome-cracha").val(nome_cracha[0]+' '+nome_cracha[nome_cracha.length-1]);
                $("#nome-certificado").val(dados.nome);
                $("#nome").val(dados.nome);
                $("#celular").val(dados.celular);
                $("#email").val(dados.email);
                
                //uf('estado', dados.estado);
                //uf('pais', dados.pais);

                cidade(dados.cidade, indexUf(uf));

                $("#select-categoria").html(retornaCategoria(dados.categoria));            
                if (dados.categoria == "HON") {
                    $("#info-pagamento").hide();
                    $("#info-pagamento .form-control").removeClass('requerido');
                    
                }
            }else{
                //retornaMensagem(3, "Escolha uma categoria para continuar seu cadastro");
                $("#select-categoria")
                    .html(retornaCategoria("N"));
            }           

        }

        $("#group-categoria")
            .removeClass('hidden');

    }).fail(function(response) {
        console.log(response);
    });

}

//verificar se ja está cadastrado no email
function verificaEmail(email) {
    //Verificar se o email ou CPF ja está cadastrado
    let _token   = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        async: true,
        crossDomain: true,
        url: "./verifica-email",
        dataType: "json",
        data: {
            email:email,
            _token:_token
        },
        method: "POST"
    }).done(function (response) {    
        //console.log('email') ;
        //console.log(response)   
        //se caso existe o email já cadastrado o form será oculto
        if(response.status == 'pago'){
            $('.oculta-form-email-exist').hide();
            $('.mostra-msg-email-exist').show();
            $('#mensagem').hide();     
            $('#msg-cpf').hide();    
            $('#msg-email').show();  
            $("#msg-email").html('Já existe uma inscrição confirmada para este E-mail. Acesse o painel abaixo e verifique seu status!');
        }else if(response.status == 'aguardando'){
            $('.oculta-form-email-exist').hide();
            $('.mostra-msg-email-exist').show();
            $('#mensagem').hide();          
            $('#msg-cpf').hide();  
            $('#msg-email').show(); 
            $("#msg-email").html('Já existe uma inscrição confirmada para este E-mail. Acesse o painel abaixo e verifique seu status!');
        }else if(response.status == 'isento'){
            $('.oculta-form-email-exist').hide();
            $('.mostra-msg-email-exist').show();
            $('#mensagem').hide();    
            $('#msg-cpf').hide();  
            $('#msg-email').show();       
            $("#msg-email").html('Já existe uma inscrição confirmada para este E-mail. Acesse o painel abaixo e verifique seu status!');
        }else{
            $('.oculta-form-email-exist').show();
            $('.mostra-msg-email-exist').hide();          
            $('mensagem').hide();
            $('#msg-cpf').hide();  
            $('#msg-email').show(); 
        }
    }).fail(function(response) {
        //console.log(response);
    });    
}
//verificar se ja está cadastrado no email
function verificaCPF(cpf) {
    //Verificar se o email ou CPF ja está cadastrado
    let _token   = $('meta[name="csrf-token"]').attr('content');        
    $.ajax({
        async: true,
        crossDomain: true,
        url: "./verifica-cpf",
        dataType: "json",
        data: {
            'cpf':cpf,
            '_token': _token
        },
        method: "POST"
    }).done(function (response) { 
        //se caso existe o cpf já cadastrado o form será oculto
        if(response.status == 'pago'){
            $('.oculta-form-email-exist').hide();
            $('.mostra-msg-cpf-pago').hide();
            $('.mostra-msg-email-exist').show();
            $('#mensagem').hide();  
            $('#msg-email').hide();  
            $('#msg-cpf').show();                    
            $("#msg-cpf").html('Já existe uma inscrição confirmada para este CPF. Acesse o painel abaixo e verifique seu status!');
        }else if(response.status == 'cpfpago'){
            $('.oculta-form-email-exist').hide();
            $('.mostra-msg-email-exist').hide();
            $('.mostra-msg-cpf-pago').show();
            $('#mensagem').hide();  
            $('#msg-email').hide();  
            $('#msg-cpf').hide();
        }else if(response.status == 'aguardando'){
            $('.oculta-form-email-exist').hide();
            $('.mostra-msg-cpf-pago').hide();
            $('.mostra-msg-email-exist').show();
            $('#mensagem').hide();   
            $('#msg-email').hide(); 
            $('#msg-cpf').show();          
            $("#msg-cpf").html('Já existe uma inscrição confirmada para este CPF. Acesse o painel abaixo e verifique seu status!');
        }else if(response.status == 'isento'){
            $('.oculta-form-email-exist').hide();
            $('.mostra-msg-cpf-pago').hide();
            $('.mostra-msg-email-exist').show();
            $('#mensagem').hide();   
            $('#msg-email').hide(); 
            $('#msg-cpf').show();          
            $("#msg-cpf").html('Já existe uma inscrição confirmada para este CPF. Acesse o painel abaixo e verifique seu status!');
        }else{
            $('.oculta-form-email-exist').show();
            $('.mostra-msg-cpf-pago').hide();
            $('.mostra-msg-email-exist').hide();          
            $('mensagem').hide();
            $('#msg-email').hide();
            $('#msg-cpf').show();    
        }
    }).fail(function(response) {
        console.log(response);
    });    
}

function retornaValorInscricao(categoria) {
   /* if(categoria == 6){
        $('.oculta-form-email-exist').addClass('hidden');   
        $('#oculta-cat-rem-exist').removeClass('hidden');     
        $('.mostra-msg-email-exist').addClass('hidden');            
    }else{
        $('.oculta-form-email-exist').removeClass('hidden');
        $('#mostra-msg-email-exist').addClass('hidden');      
        $('.oculta-cat-rem-exist').addClass('hidden');        
    }*/

  

    /*if(categoria == 0){
        retornaMensagem(0, "<p><b>Atenção:</b> Caso tenha se inscrito no CBIGS e é sócio regularizado com a SBA, o(a) senhor(a) tem direito a 30% de desconto no CVA.</p> <p>Caso o desconto não se aplique automaticamente, pode haver alguma inconsistência no e-mail ou CPF na base de sócios. <br/><b><a href='https://www.sbahq.org/contato/' target='_blank'>Clique aqui</a></b> para entrar em contato e lhe ajudaremos a finalizar sua inscrição no CVA.</p>");
    }
    if(categoria == 1){
        retornaMensagem(0, "<p><b>Atenção:</b> Caso tenha se inscrito no CBIGS e é sócio regularizado com a SBA, o(a) senhor(a) tem direito a 30% de desconto no CVA.</p> <p>Caso o desconto não se aplique automaticamente, pode haver alguma inconsistência no e-mail ou CPF na base de sócios. <br/><b><a href='https://www.sbahq.org/contato/' target='_blank'>Clique aqui</a></b> para entrar em contato e lhe ajudaremos a finalizar sua inscrição no CVA.</p>");
    }
    if(categoria == 6){
        retornaMensagem(0, "<p><b>Atenção:</b> Caso tenha se inscrito no CBIGS e é sócio regularizado com a SBA, o(a) senhor(a) tem direito a 30% de desconto no CVA.</p> <p>Caso o desconto não se aplique automaticamente, pode haver alguma inconsistência no e-mail ou CPF na base de sócios. <br/><b><a href='https://www.sbahq.org/contato/' target='_blank'>Clique aqui</a></b> para entrar em contato e lhe ajudaremos a finalizar sua inscrição no CVA.</p>");
    }*/
    //se categoria != 10 trás as informaç]oes de valores
    if(categoria != 16){
        let cpf = $("#cpf").val(); 
        let nome = $("#nome").val(); 
        let presidente = $("#presidente").val(); 
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "./valor-inscricao",
            type:"POST",
            data:{
                "cpf": cpf,
                "categoria": categoria,
                "_token": _token,
                "presidente": presidente
            },
            success:function(data){
                    if(data.anoDiferente){
                        retornaMensagem(3, data.anoDiferente);  
                    }else{
                        var retorno = "<tr>"+
                            "<td>Inscrição CBIGS 2022</td>"+
                            "<td>"+nome+"</td>"+
                            "<td>" + categorias[categoria][1] + "</td>";  
                            let valorReal = data.valor;        
                            /*if (data.valor > 0) {
                                retorno += "<td class='text-right'>R$ "+ data.valor +"</td>"; 
                                valorTotal = parseFloat(data.valor)
                                desconto = data.valorComDesconto                            
                                valorDesconto = desconto / 100 * valorTotal
                                total = valorTotal-valorDesconto                               
                            } else {   */
                                valorTotal = parseFloat(data.valor)
                                valorTotalReal = valorTotal.toLocaleString();
                                desconto = data.valorComDesconto                            
                                valorDesconto = desconto / 100 * valorTotal
                                total = valorTotal-valorDesconto          
                                if(valorReal == 0){
                                    retorno += `<td>R$ 0,00</td>`
                                }else{
                                    retorno += `<td>${valorReal.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})} </td>`;                             
                                }
                                retorno += "<td><center>1<center></td>";
                                if(valorReal == 0){
                                    retorno += `
                                            <td> R$ 0,00
                                                <input type='hidden' name='valor_candidato' value='${valorTotal}'>
                                                <input type="hidden" name="categoria_id" id="categoria_id" value="${categorias[categoria][0]}">
                                                <input type="hidden" name="categoria_nome" value="${categorias[categoria][1]}">
                                                <input type="hidden" name="categoria_nome" value="${categorias[categoria][1]}">
                                                <input type="hidden" name="desconto_candidato" value="${desconto}">
                                                <input type="hidden" name="valor_total" value="${total}">
                                            </td>`; 
                                }else{
                                    retorno += `
                                            <td>
                                                ${valorReal.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}
                                                <input type='hidden' name='valor_candidato' value='${valorTotal}'>
                                                <input type="hidden" name="categoria_id" id="categoria_id" value="${categorias[categoria][0]}">
                                                <input type="hidden" name="categoria_nome" value="${categorias[categoria][1]}">
                                                <input type="hidden" name="categoria_nome" value="${categorias[categoria][1]}">
                                                <input type="hidden" name="desconto_candidato" value="${desconto}">
                                                <input type="hidden" name="valor_total" value="${total}">
                                            </td>`;                              
                                } 
                            //}
                        "</tr>";

                    /* if (categoria == 6 || categoria == 11 || data === "Isento" || data.valor == "Isento") {

                            retorno = "<tr>"+
                                "<td colspan='1'>Inscrição CVA</td>"+
                                "<td colspan='1' width=135>" + categorias[categoria][1] + "</td>"+
                                "<td colspan='1'>1</td>"+
                                "<td colspan='1' class='text-right'> Isento </td>"+
                            "</tr>"
                            total = "Isento";

                            $("#info-pagamento input").removeClass('requerido');
                            $("#info-pagamento select").removeClass('requerido');

                        } 
                        if (categoria == 4 || categoria == 0 || categoria == 1) {
                            if (data === "Isento" || data.valor == "Isento") {
                                $("#info-pagamento").hide();
                            }
                            else{
                                $("#info-pagamento").show();
                            }
                        }else{
                            $("#info-pagamento").hide();
                        }*/

                            $("#resumo-pagamento tbody").html(retorno);
                            if (categoria != 6 || categoria != 11){           
                                if(data.valor == 'Isento'){
                                $(".total").html('Total: Isento');
                                $(".qtdetotal").html('Quantidade total: 1');
                                $(".desconto").html('Desconto: Isento');
                            }else{
                                if(desconto == 30){
                                $(".total").html('Total: '+ total.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}));
                                $(".qtdetotal").html('Quantidade total: 1');
                                $(".desconto").html('Desconto CBIGS: '+ desconto +'%');
                            }else{                         
                                if(total == 'Isento'){      
                                    $(".total").html('Total: Isento');  
                                    $(".desconto").html('Desconto: Isento');
                                }else{
                                    $(".total").html('Total: '+ total.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})); 
                                    $(".qtdetotal").html('Quantidade total: 1');
                                    $(".desconto").html('Desconto: '+ desconto +'%');
                                }
                            }
                        }
                    }
                }

                //criando o select de valores para cartão de créditos dinamicos
                //let valores_juros = [{id: 1, valor: 2.70}, {id: 2, valor:  2.99}, {id: 3, valor:  2.99}];
                let valores_juros = [{id: 1, valor: 0}, {id: 2, valor:  0}, {id: 3, valor:  0}];
                $("#valor-taxas").empty();
                $("#valor-parcelas").empty();
                $("#valor-parcelas").show(); //parcelas que poderão mudar
                //$("#cartao_num_parcelas").hide();//parcelas que vem do peirmiro valor
                valor_parcela = '<option value="">...</option>'
                $('#valor-parcelas').append(valor_parcela)
                valores_juros.forEach(element => {
                    let valor = element['valor'];
                    let id = element['id'];
                    let totalFloat = parseFloat(total);

                    if(totalFloat == 0){
                        incremeto = 0;
                    }else{
                        //incremeto = 1.1;
                        incremeto = 0;
                    }            

                    //calcula valores com juros
                    let valorPercentual = valor / 100
                    let valorAPagar = valorPercentual * totalFloat
                    let valorIncremento = valorAPagar + incremeto
                    let valorTotal = valorIncremento + totalFloat
                    let parcelas = valorTotal / id
                    let valorPercent = valorIncremento / totalFloat
                    let porcentagem = valorPercent * 100
                    porcentagem = porcentagem.toLocaleString('pt-br')
                    valorTotal = valorTotal.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})
                    parcelas = parcelas.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})
                    //pega os valores e colca no select
                    var valor_parcela = `
                    <option value="${id}">${id}x de ${parcelas} (${valorTotal})</option>
                    `;
                    $('#valor-parcelas').append(valor_parcela)

                    var valor_taxas = `
                    <li class="list-group-item list-group-item-info">Taxa de juros da operadora ${id} parcela(s): ${porcentagem}%</li>
                    `
                    $('#valor-taxas').append(valor_taxas)
                });

        },
        error: function(error) {
            console.log(error);
        }
    });
}

} 

function retornaCategoria(categoria) {
    var html = '';   
    switch(categoria){
        case "AAD":
            html += '<option value="'+ categorias[15][0] + '" selected="selected">'+ categorias[15][1] + '</option>';
            retornaValorInscricao(categorias[15][0]);
            break;
        case "ADJ":
                html += '<option value="'+ categorias[10][0] + '" selected="selected">'+ categorias[10][1] + '</option>';
                retornaValorInscricao(categorias[10][0]);
                break;
        case "ASP":
            html += '<option value="'+ [1][0] + '" selected="selected">'+ categorias[1][1] + '</option>';
            retornaValorInscricao(categorias[1][0]);
            break;
        case "EST":
            html += '<option value="'+ categorias[5][0] + '" selected="selected">'+ categorias[5][1] + '</option>';
            retornaValorInscricao(categorias[5][0]);
            break;
        case "N":
             
            html += '<option value="'+ categorias[16][0] + '" selected="selected">'+ categorias[16][1] + '</option>';
            //html += '<option value="'+ categorias[2][0] + '">'+ categorias[2][1] + '</option>';
            html += '<option value="'+ categorias[3][0] + '">'+ categorias[3][1] + '</option>';
            html += '<option value="'+ categorias[4][0] + '">'+ categorias[4][1] + '</option>';
            //html += '<option value="'+ categorias[5][0] + '">'+ categorias[5][1] + '</option>';              
            html += '<option value="'+ categorias[17][0] + '">'+ categorias[17][1] + '</option>';
            //html += '<option value="'+ categorias[13][0] + '">'+ categorias[13][1] + '</option>';           
            //html += '<option value="'+ categorias[9][0] + '">'+ categorias[9][1] + '</option>';            
            retornaValorInscricao(categorias[16][0]);
            break;
        case "REM":
            html += '<option value="'+ categorias[6][0] + '" selected="selected">'+ categorias[6][1] + '</option>';
            retornaValorInscricao(6);
            break;
        case "HON":
            html += '<option value="'+ categorias[11][0] + '" selected="selected">'+ categorias[11][1] + '</option>';
            retornaValorInscricao(11);
            break;
        case "W":
            html += '<option value="'+ categorias[8][0] + '" selected="selected">'+ categorias[8][1] + '</option>';
            retornaValorInscricao(8);
            break;
        default:
            html += '<option value="'+ categorias[0][0] + '" selected="selected">'+ categorias[0][1] + '</option>';
            retornaValorInscricao(0);
        
    }

    return html;
}

function nomeCracha(nomeCompleto) {

    var arrNome = nomeCompleto.split(' ');
    cracha = arrNome[0] + ' ' + arrNome[arrNome.length -1];

    return cracha;
}

function uf(campo = 'estado', uf) {
    $("#" + campo + " option").each(function(i, item) {
        if (uf === item.text) {
            item.setAttribute('selected', true);
        }
    });
}



function indexUf(uf) {

    return $("#estado option:selected").val();
}			

/* $("#password-confirm").blur(function(){
    
    var senha = $("#password");
    var confirm = $("#password-confirm");

    if(senha.val() !== confirm.val()){

        confirm.parent().addClass('has-error');
        senha.parent().addClass('has-error');
        
        retornaMensagem(3, 'As senha digitadas não conferem. Por favor verifique e tente novamente.');

        senha.focus();
    }
});
 */

$('#password-confirm').on( "focusout", function(){
                    
    if($('#password-confirm').val() != $('#password').val()){

        alertify.dialog('alert').set(
        {
            transition:'slide',
            message: 'Campo <b>Confirmar senha</b> precisar ser igual ao campo <b>senha</b>!'
        }).setHeader('<em class="text-center"> Atenção!! </em> ').show(); 
        
        $('#password-confirm').css("border", "2px solid red");
        $('#lblpassword-confirm').css("color", "#red");

    }else{
        $('#password-confirm').css("border", "1px solid #CCCCCC");
        $('#lblpassword-confirm').css("color", "#000");
    }
});

/*$(".dropdown-doc").on("click", function(e) {
    //Escolhe CPF ou PASSAPORTE
    $("#cpf, #passaporte").val('');
    
    retornaMensagem(-1, '');

    var documento = $(this).attr('documento')
    if (documento === 'CPF') {
        $("#cpf").show();
        $("#passaporte").hide();
        $("#group-categoria").addClass('hidden');
        $("#select-categoria").html('');
        $("#msg-doc").hide();
    } else {
        $("#passaporte").show();
        $("#cpf").hide();
        $("#select-categoria").html(retornaCategoria("EST"));
        $("#group-categoria").removeClass('hidden');
        $('#info-pagamento').hide();
        $("#msg-doc").show();
    }


    $("#documento").html(documento);

   /* $("#email").val('');
    $("#nome").val('');
    $("#nome-cracha").val('');
    $("#celular").val('');
    estados = $("#estado option");
    estados[0].setAttribute('selected', true);
    $("#cidade").html('');*

});*/


$("#cpf, #cpf-cartao").on("focus",function(){
    $(this).parent().removeClass('has-error');
    retornaMensagem(-1, '');
});

$(document).on("change", "select[name=categoria]", function(){
    if($(this).val() == 5){
        $(".estrangeiro").show();
        $(".estrangeiro input").addClass('requerido');
        $(".nacional").hide();
        $(".nacional select, .nacional input").removeClass('requerido');

        $('#info-pagamento').hide();
    }else{
        $(".estrangeiro").hide();
        $(".estrangeiro input").removeClass('requerido');
        $(".nacional").show();
        $(".nacional select, .nacional input").addClass('requerido');
        $('#info-pagamento').show();
    }
});

function mostraPainel(painel){
    
    $("#" + painel).removeClass('hidden');
}

function escondePainel(painel){
    
        $("#" + painel).addClass('hidden');
}

$("#form-inscricao").on("submit", function(e){
    var boolean = true;
    retornaMensagem(-1, '');
    $(".requerido").attr('disabled');
    $(".requerido").parent().removeClass('has-error');
    $('.requerido').each(function(i,item){
        if(item.value == '' || categoria == '16' || ($(this).val() == 16 && $(this).attr('name') == 'categoria')){ //|| ($(this).val() == 0 && $(this).attr('name') != 'categoria')){
            $(this).parent().addClass('has-error');
            boolean = false;
        }
    });

    // if ($(".dropdown-doc").attr('documento').toLowerCase() == 'cpf') {
    if (tipoDocumento == 'CPF') {
        
        if ($("#cpf").val() === "") {

            $("#cpf").parent().addClass('has-error');
            boolean = false;
        }
    } else {
        
        if ($("#passaporte").val() === "") {

            $("#passaporte").parent().addClass('has-error');
            boolean = false;
        }
    }
    /*if(boolean == false){
        retornaMensagem(2, 'Erro, os campos marcados em vermelho não podem ficar vazios!');
        $(".requerido").removeAttr('disabled');
        e.preventDefault();
    }*/
});

function codigos(selecionado, codigo, grupo){
    
    $.ajax({
        url: "../json/codigos.php?codigo=" + codigo + "&grupo=" + grupo,
        type: "GET",
        dataType: 'json',
        success: function(data){
            var txt = '';
            var options = '';
            $.each(data, function(i, item){
                
                selecionado = '';
                if(item == selecionado)
                    selecionado = 'selected';
                
                options += '<option value="' + item.id + '">' + item.nome + '</option>';
            });
        }
    });
}

function retornaMensagem(tipo, mensagem){
    var tipos = ['alert alert-info','alert alert-success', 'alert alert-warning', 'alert alert-danger'];
    $("#mensagem").attr('class', 'hidden');
    if(tipo >= 0){
        $("#mensagem").attr('class', tipos[tipo]);
        $("#mensagem").toggleClass('animated fadeInLeft');
        $("#mensagem").html(mensagem);
        $("html").animate({scrollTop: 0}, '100');
    }
}


function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
   /* $("#logradouro").val("");
    $("#bairro").val("");
    $("#cidade-cartao").val("");
    $("#uf-cartao").val("");*/
}

$("#cep").on("blur", function() {
    var cep = $(this).val().replace(/\D/g, '');
    if (cep != "") {
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
            $("#logradouro").val("...");
            $("#bairro").val("...");

            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                if (!("erro" in dados)) {
                    
                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#uf-cartao").val(dados.uf);
                    $("#cidade-cartao").val(dados.localidade);
                        
                } else {
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        }else {
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    }else {
        limpa_formulário_cep();
    }
});

function cidade( cidade, estado ) { 
    let _token   = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url: "./busca-cidades",
        type:"POST",        
        data:{
            "estado": estado,
            "_token": _token
        },
        success:function(data){
            txt = '<option value="" selected>...</option>';
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

function cidade2( cidade2, estado2 ) { 
    let _token   = $('meta[name="csrf-token"]').attr('content');
   
    $.ajax({
        url: "./busca-cidades",
        type:"POST",        
        data:{
            "estado": estado2,
            "_token": _token
        },
        success:function(data){
            txt = '';
            $.each( data[0], function ( i, item ) {
                selected = '<option value="" selected>...</option>';
                if ( cidade2 == item.nome )
                    selected = 'selected';

                    txt += '<option value="' + item.id + '" ' + selected + '>' + item.nome + '</option>';
            } );
            $( "#cidade2" ).html( txt );
        }
    } );
}


function testaCPF(strCPF) {

    strCPF = strCPF.replace('.','');
    strCPF = strCPF.replace('.','');
    strCPF = strCPF.replace('-','');
    
                    
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000"
        || strCPF == "11111111111"
        || strCPF ==  "22222222222"
        || strCPF ==  "33333333333"
        || strCPF ==  "44444444444"
        || strCPF ==  "55555555555"
        || strCPF ==  "66666666666"
        || strCPF ==  "77777777777"
        || strCPF ==  "88888888888"
        || strCPF ==  "99999999999") return false;

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}
});


// Quando a combo de documentos é mudada
function tipoDocumentoEscolhido(elem){
    tipoDocumento = $(elem).text();
}

//validação upload de arquivos

(function ($) {
    $.fn.uploader = function (options) {
       // let textDoc = 'Envio de documentos comprobatórios e/ou CRM para médicos';
    var settings = $.extend(
    {
        MessageAreaText: "Nenhum arquivo selecionado",
        MessageAreaTextWithFiles: 'Envio de documentos comprobatórios e/ou CRM para médicos',
        DefaultErrorMessage: "Não foi possível abrir este arquivo.",
        BadTypeErrorMessage: "Arquivos apenas nos formatos: pdf, jpeg, jpg, png",
        acceptedFileTypes: [
        "pdf",
        "png",
        "jpeg",
        "jpg",
        /*"pdf",
        "gif",
        "bmp",
        "tif",
        "tiff",
        "xps",
        "doc",
        "docx",
        "fax",
        "wmp",
        "ico",
        "txt",
        "cs",
        "rtf",
        "xls",
    "xlsx"*/] },
    options);   
    var uploadId = 0;
    //update the messaging
    $(".file-uploader__message-area p").text(
    options.MessageAreaText || settings.MessageAreaText);

    //create and add the file list and the hidden input list
    var fileList = $('<ul class="file-list"></ul>');
    var hiddenInputs = $('<div class="hidden-inputs hidden"></div>');
    $(".file-uploader__message-area").after(fileList);
    $(".file-list").after(hiddenInputs);

    //when choosing a file, add the name to the list and copy the file input into the hidden inputs
    $(".file-chooser__input").on("change", function () {
        var files = document.querySelector(".file-chooser__input").files;

        for (var i = 0; i < files.length; i++) {if (window.CP.shouldStopExecution(0)) break;
        

        var file = files[i];
        var fileName = file.name.match(/([^\\\/]+)$/)[0];

        //clear any error condition
        $(".file-chooser").removeClass("error");
        $(".error-message").remove();

        //validate the file
        var check = checkFile(fileName);
        if (check === "valid") {
            // move the 'real' one to hidden list
            $(".hidden-inputs").append($(".file-chooser__input"));

            //insert a clone after the hiddens (copy the event handlers too)
            $(".file-chooser").append(
            $(".file-chooser__input").clone({ withDataAndEvents: true }));


            //add the name and a remove button to the file-list
            $(".file-list").append(
            '<li style="display: none;"><span class="file-list__name">' +
            fileName +
            '</span><button class="removal-button" data-uploadid="' +
            uploadId +
            '"><i class="fas fa-trash-alt"></i></button></li>');
                
            $(".file-list").find("li:last").show(800);

            //removal button handler
            $(".removal-button").on("click", function (e) {
            e.preventDefault();

            //remove the corresponding hidden input
            $(
            '.hidden-inputs input[data-uploadid="' +
            $(this).data("uploadid") +
            '"]').
            remove();
            $("#comprovante").val('');
            //remove the name from file-list that corresponds to the button clicked
            $(this).
            parent().
            hide("puff").
            delay(10).
            queue(function () {
                $(this).remove();
            });

            //if the list is now empty, change the text back
            if ($(".file-list li").length === 0) {
                $(".file-uploader__message-area").text(
                options.MessageAreaText || settings.MessageAreaText);

            }
            });

            //so the event handler works on the new "real" one
            $(".hidden-inputs .file-chooser__input").
            removeClass("file-chooser__input").
            attr("data-uploadId", uploadId);

            //update the message area
            $(".file-uploader__message-area").text(
            options.MessageAreaTextWithFiles ||
            settings.MessageAreaTextWithFiles);


            uploadId++;
        } else {
            //indicate that the file is not ok
            $(".file-chooser").addClass("error");
            var errorText =
            options.DefaultErrorMessage || settings.DefaultErrorMessage;

            if (check === "badFileName") {
            errorText =
            options.BadTypeErrorMessage || settings.BadTypeErrorMessage;
            }

            $(".file-chooser__input").after(
            '<p class="error-message">' + errorText + "</p>");

        }
        }window.CP.exitedLoop(0);
    });

    var checkFile = function (fileName) {
        var accepted = "invalid",
        acceptedFileTypes =
        this.acceptedFileTypes || settings.acceptedFileTypes,
        regex;

        for (var i = 0; i < acceptedFileTypes.length; i++) {if (window.CP.shouldStopExecution(1)) break;
        regex = new RegExp("\\." + acceptedFileTypes[i] + "$", "i");

        if (regex.test(fileName)) {
            accepted = "valid";
            break;
        } else {
            accepted = "badFileName";
        }
        }window.CP.exitedLoop(1);

        return accepted;
    };
    };
})($);
  
  //init
  $(document).ready(function () {    

   /*$(document).on("change", "select[name=categoria]", function(){
        if($(this).val() == 4){
            let textDoc = 'Envio de documento CRM';
            $(".fileUploader").uploader({ MessageAreaText: textDoc, Categoria: $(this).val() });
        }else{
            let textDoc = 'Envio de documentos comprobatórios / CRM';
            $(".fileUploader").uploader({ MessageAreaText: textDoc, Categoria: $(this).val() });
        }        
        
    });*/

    let textDoc = 'Envio de documentos comprobatórios e/ou CRM para médicos';
    $(".fileUploader").uploader({ MessageAreaText: textDoc, Categoria: $(this).val() });
  
  });
  //# sourceURL=pen.js