
function validaForm(frm) {
    if(frm.nome.value == "" || frm.nome.value == null || frm.nome.value.lenght < 3) {
        alert("Por favor, indique o seu nome.");
        frm.nome.focus();
        return false;
    }
    if(frm.email.value == null || frm.email.value == ""  ) {
        alert("Por favor, indique um e-mail válido.");
        frm.email.focus();
        return false;
    }
    if(frm.email.value.indexOf("@") == -1 ) {
        alert("Por favor, indique um e-mail válido. Com @");
        frm.email.focus();
        return false;
    }
    if(frm.email.value.indexOf(".") == -1 ) {
        alert("Por favor, indique um e-mail válido. Com '.' ");
        frm.email.focus();
        return false;
    }
    if(frm.telefone.value == "" || frm.telefone.value.lenght < 11) {
        alert("Informe um telefone válido.");
        frm.telefone.focus();
        return false;
    }
    if(frm.cargo.value == "" || frm.cargo.value.lenght < 1) {
        alert("Informe o cargo");
        frm.cargo.focus();
        return false;
    }
    if(frm.matricula.value == "" || frm.matricula.value == null) {
        alert("Por favor, insira uma matricula.");
        frm.matricula.focus();
        return false;
    }
    if(frm.nascdata.value == "" || frm.nascdata.value == null) {
        alert("Por favor, insira a data de nascimento.");
        frm.nascdata.focus();
        return false;
    }
    if(frm.ingdata.value == "" || frm.ingdata.value == null) {
        alert("Por favor, insira a data de ingresso.");
        frm.ingdata.focus();
        return false;
    }
    if(frm.senha.value == "" || frm.senha.value == null || frm.senha.value.lenght < 3) {
        alert("Por favor, insira uma senha.");
        frm.senha.focus();
        return false;
    }
    if(frm.rsenha.value == "" || frm.rsenha.value == null) {
        alert("Por favor, confirme a senha.");
        frm.rsenha.focus();
        return false;
    }
    if(frm.rsenha.value != frm.senha.value) {
        alert("Por favor, confirme a senha. As senhas não coincidem !");
        frm.rsenha.focus();
        return false;
    }
	document.getElementById("formCadastroUsuario").submit();
	return true;
}

function validaLogin() {
	var mat=document.getElementById("inMat").value;
	var senha=document.getElementById("inSenha").value;
	if (mat.length==0) {
		alert("Digite o número de matrícula");
		document.getElementById("nome").focus();
		return false;
	} else if (mat.length<7) {
		alert("A matrícula deve ter 7 caracteres");
		document.getElementById("nome").focus();
		return false;
	}
	if (senha.length==0) {
		alert("Digite a sua senha");
		document.getElementById("nome").focus();
		return false;
	} 
	document.getElementById("formLogin").submit();
	return 1;
}
			
function filtroTeclas(event) {
	return (event.charCode>=48 && event.charCode<=57); 
}

function validaFormPeca(frm) {
	if(frm.numeracao.value == "" || frm.numeracao.value == null || frm.numeracao.value.lenght < 5) {
		alert("Por favor, informe a numeração da peça");
		frm.numeracao.focus();
		return false
	}
	if(frm.tipo.value == "" || frm.tipo.value == null) {
		alert("Por favor, indique o tipo da peça.");
		frm.tipo.focus();
		return false;
	}
	if(frm.modelo.value == "" || frm.modelo.value == null || frm.modelo.value.lenght < 6) {
		alert("Informe um modelo valido");
		frm.modelo.focus();
		return false
	}
	if(frm.fabdata.value == "" || frm.fabdata.value == null) {
		alert("Por favor, indique a data de fabricação.");
		frm.fabdata.focus();
		return false;
	}
	if(frm.garantia.value == "" || frm.garantia.value == null) {
		alert("Por favor, informe a garantia.");
		frm.garantia.focus();
		return false;
	}
	if(frm.fornecedor.value == "" || frm.fornecedor.value == null) {
		alert("Por favor, informe o fornecedor.");
		frm.fornecedor.focus();
		return false;
	}
	/*if(frm.obs.value == "" || frm.obs.value == null || frm.obs.value.lenght < 10) {
		alert("Digite uma obeservação minima de pelo menos 10 digitos.");
		frm.obs.focus();
		return false;
	}*/
	document.getElementById("formCadastroPeca").submit();
}
			
function validaFormPedido(frm) {
	if(frm.peca.value == "" || frm.peca.value == null) {
		alert("Informe o tipo da peça");
		frm.peca.focus();
		return false
	}
	if(frm.quantidade.value == "" || frm.quantidade.value == null) {
		alert("Por favor, indique a quantidade.");
		frm.quantidade.focus();
		return false;
	}
	/*if(frm.obs.value == "" || frm.obs.value == null || frm.obs.value.lenght < 10) {
		alert("Digite uma obeservação minima de pelo menos 10 digitos.");
		frm.obs.focus();
		return false;
	}*/
	document.getElementById("formCadastroPedido").submit();
	return true;
}

function validaBusca(frm) {
	if (frm.op.value != "") {
		if (frm.busca.value == "" || frm.busca.value == null) {
			alert("Por favor, informe uma chave de busca");
			frm.busca.focus();
			return false;
		}
	}
	document.getElementById("formBusca").submit();
	return true;
}