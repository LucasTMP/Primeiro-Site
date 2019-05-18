

Validações:

<input type="button" value="Gravar" onclick="verificar()">

<script type="text/javascript">

        function verificar() {

          var n,i,e ;

          n = document.form1.txtnome.value ;

          if ( n.length == 0 ) {

            alert("Preencha o campo nome") ;
            document.form1.txtnome.focus() ;
            document.form1.txtnome.style.background="yellow";  
            return false ;

          }

          i = document.form1.txtidade.value ;

          if ( isNaN(i)  ||  i.length == 0  ) {
            alert("Preencha corretamente o campo idade") ;
            document.form1.txtidade.focus() ;
            document.form1.txtidade.style.background="yellow";  

            document.form1.txtidade.value = "" ;

            return false ;


          }


          e = document.form1.txtemail.value ;

          if ( e.indexOf("@") < 0 ) {

            alert("Preencha corretamente o campo e-mail") ;
            document.form1.txtemail.focus() ;
            document.form1.txtemail.style.background="yellow";  
            return false ;
          }


          document.form1.submit() ;
        }  

     </script>

//-------------------------------------------------------------------------------------------
Nome

var CliNome;

          CliNome = document.form1.txtnome.value ;

          if ( n.length == 0 ) {

            alert("Preencha o campo nome") ;
            document.form1.txtnome.focus() ;
            document.form1.txtnome.style.background="yellow";  
            return false ;

          }

//--------------------------------------------------------------------------------------------
Senha

var CliSenha;

          CliSenha = document.form1.txtnome.value ;

          if ( n.length == 0 ) {

            alert("Preencha o campo nome") ;
            document.form1.txtnome.focus() ;
            document.form1.txtnome.style.background="yellow";  
            return false ;

          }

//-------------------------------------------------------------------------------------------
Email

var CliEmail;

          CliEmail = document.form1.txtnome.value ;

          if ( n.length == 0 ) {

            alert("Preencha o campo nome") ;
            document.form1.txtnome.focus() ;
            document.form1.txtnome.style.background="yellow";  
            return false ;

          }

//-------------------------------------------------------------------------------------------
CPF

var CliCpf;

          CliCpf = document.form1.txtnome.value ;

          if ( n.length == 0 ) {

            alert("Preencha o campo nome") ;
            document.form1.txtnome.focus() ;
            document.form1.txtnome.style.background="yellow";  
            return false ;

          }

//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
Valor da compra

var ValCompra;

          ValCompra = document.form1.txtnome.value ;

          if ( n.length == 0 ) {

            alert("Preencha o campo nome") ;
            document.form1.txtnome.focus() ;
            document.form1.txtnome.style.background="yellow";  
            return false ;

          }

//-------------------------------------------------------------------------------------------
Data da compra

var DataCompra;

          DataCompra = document.form1.txtnome.value ;

          if ( n.length == 0 ) {

            alert("Preencha o campo nome") ;
            document.form1.txtnome.focus() ;
            document.form1.txtnome.style.background="yellow";  
            return false ;

          }

//-------------------------------------------------------------------------------------------
