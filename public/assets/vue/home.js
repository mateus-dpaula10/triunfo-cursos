
/**
 * --------------------------------------------------------
 * ini : INSCRICAO
 * --------------------------------------------------------
**/	
var vue = new Vue({
	el : "#app",

	data : {
		currentIndex : -1,
		formContato : {
			baseacao : 'SEND-FORM-FALE-CONOSCO',
			nome : '',
			dtenascto : '',
			telefone : '',
		},
		error_form_contato : {
			nome : '',
			dtenascto : '',
			telefone : '',
		},
		overlay : { active : false },
		loading : { active : false },
		linkpagto: { active : false },

		overlay : { active : false },
		loading : { active : false },
		messageResult : '',
		urlPost : SITE_URL,
		seen: false
	},

	methods : {
		SendFormContato : function(){
			//if(vue.messageResult.length == 0){
				//vue.messageResult = 'Informações enviadas com sucesso!';
			//}else{
			//	vue.messageResult = '';
			//}
			//console.log( JSON.stringify(vue.formContato, null, 4) );
			//console.log( vue.urlPost +'ajaxform.php' );
			if(vue.ValidateForm()){
				vue.loading.active = true;
				vue.overlay.active = false;
				let form = vue.formData(vue.formContato);
				//console.log( JSON.stringify(vue.formContato, null, 4) );
				//return false;
				axios.post(vue.urlPost +'ajaxform.php', form).then(function(response){
					vue.loading.active = false;
					if( response.data ){
						let respData = response.data;
						if( respData.error_num == '0' ){
							vue.ResetForm();
							vue.messageResult = respData.error_msg;	
							vue.overlay.active = true;
						}
						vue.messageResult = respData.error_msg;	
						setTimeout(() => {
							vue.messageResult = '';	
							vue.overlay.active = false;
						}, 3000);
						return false;
					}
				});
				return false;
			}
		},
		openFormDestaque : function(){
			vue.form_destaque.active = !vue.form_destaque.active;
			if( vue.form_destaque.active === true){
				vue.msg_active_dest.active = false;
			}

		},
				
		formData : function(obj){
			var formData = new FormData();
			for(var key in obj){
				formData.append(key, obj[key]);
			}
			return formData;
		},
		ValidateForm : function(){
			var error = 0;
			//return (error === 0);
			this.ResetError();
			if(this.formContato.nome.length == 0){
				error++; this.error_form_contato.nome = "Requerido";
			}
			if(this.formContato.dtenascto.length == 0){
				error++; this.error_form_contato.dtenascto = "Requerido";
			}
			if(this.formContato.telefone.length == 0){
				error++; this.error_form_contato.telefone = "Requerido";
			}
			console.log('error', error);
			return (error === 0);
		},
		ResetForm : function(){
			this.formContato.nome = "";
			this.formContato.dtenascto = "";
			this.formContato.telefone = "";
		},
		ResetError : function(){
			this.error_form_contato.nome = '';
			this.error_form_contato.dtenascto = '';
			this.error_form_contato.telefone = '';
		},

		closeOverlay : function(){
			vue.messageResult = '';	
			vue.overlay.active = false;
		},
		
		closeOverlay : function(){
			vue.messageResult = '';	
			vue.overlay.active = false;
		},
	},
	beforeMount(){
		//this.load_models_home();
		////this.getImoveisVenda( this.venda_type );
		////this.getImoveisAluguel( this.aluguel_type );

		//console.log( 'POST_HASHKEY ', POST_HASHKEY );
		//console.log( this.messageResultDest.length );
		//this.detail_model_unic( POST_HASHKEY );
	},
});

/**
 * --------------------------------------------------------
 * end : INSCRICAO
 * --------------------------------------------------------
**/	
