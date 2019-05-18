<%@ page language="java" import="java.sql.*"  %>

<%

String clicpf = request.getParameter("lclicpf");
String clisenha= request.getParameter("lclisenha");


String driver = "net.sourceforge.jtds.jdbc.Driver" ;
String url = "jdbc:jtds:sqlserver://10.4.0.90:1433/bd519172018" ;
String usuario = "bd519172018";
String senha = "123456";

Class.forName( driver ) ;

Connection conexao = DriverManager.getConnection( url, usuario, senha ) ;

String sql = "select * from Pessoas where CPF= '" + clicpf + "' and PesSenha='" + clisenha  +  "'" ;

Statement stm = conexao.createStatement() ;

ResultSet rs = stm.executeQuery( sql ) ;

if ( rs.next() ) {

float clisaldo = rs.getFloat("Saldo");
out.print("<font style='font-size: 16px; color: #0022aa; margin-right: 10px;'>Seu Saldo atual:</font>" + clisaldo) ;
}else{
 
out.print("<font style='font-size: 16px; color: RED;'>Informações Erradas</font>") ;
}


%>







