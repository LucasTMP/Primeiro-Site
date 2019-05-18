<%@ page language="java" import="java.sql.*"  %>

<%

String consulcpf = request.getParameter("consulcpf");

String driver = "net.sourceforge.jtds.jdbc.Driver" ;
String url = "jdbc:jtds:sqlserver://10.4.0.90:1433/bd519172018" ;
String usuario = "bd519172018";
String senha = "123456";

Class.forName( driver ) ;

Connection conexao = DriverManager.getConnection( url, usuario, senha ) ;


String sql = "select Saldo from Pessoas where CPF ='" + consulcpf + "'";

Statement stm = conexao.createStatement() ;
//out.print(sql);

ResultSet rs = stm.executeQuery( sql ) ;

out.print("<a href='teste.html'>") ;
out.print("Voltar") ;
out.print("</a>") ;

String saldo ="0";

if (rs.next()) {

saldo = rs.getString("Saldo") ;

out.print("<font style='font-size: 12px; font-color: #0022aa;'>Seu Saldo atual:</font>" + saldo) ;

}else{
 
out.print("<font style='font-size: 12px; font-color: #0022aa;'>CPF não Cadastrado</font>") ;
}

%>







