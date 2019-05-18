<%@ page language="java" import="java.sql.*"  %>

<%

String admnome = request.getParameter("admnome");
String admsenha = request.getParameter("admsenha");



String driver = "net.sourceforge.jtds.jdbc.Driver" ;
String url = "jdbc:jtds:sqlserver://10.4.0.90:1433/bd519172018" ;
String usuario = "bd519172018";
String senha = "123456";

Class.forName( driver ) ;

Connection conexao = DriverManager.getConnection( url, usuario, senha ) ;

String sql = "select * from Funcionarios where FunciNome= '" + admnome + "' and FunciSenha='" + admsenha  +  "'" ;

Statement stm = conexao.createStatement() ;

ResultSet rs = stm.executeQuery( sql ) ;

if ( rs.next() ) {

response.sendRedirect("http://10.4.0.90:8080/tecwebnoiteIIgrupo18/Lucas/projeto/logoadm.html");

}else{
 
out.print("<font style='font-size: 16px; color: RED;'>Informações Erradas</font>") ;
}

%>







