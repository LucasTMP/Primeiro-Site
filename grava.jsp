<%@ page language="java" import="java.sql.*"  %>

<%

String vnome = request.getParameter("txtnome");
int    vidade= Integer.parseInt(request.getParameter("txtidade"));
String vemail= request.getParameter("txtemail");

String driver = "net.sourceforge.jtds.jdbc.Driver" ;
String url = "jdbc:jtds:sqlserver://10.4.0.90:1433/bdRa" ;
String usuario = "";
String senha = "";

Class.forName( driver ) ;

Connection conexao = DriverManager.getConnection( url, usuario, senha ) ;

String sql = "insert into cadastro_n2 (nome,idade,email) values ('" + vnome + "'," + vidade + ",'" + vemail + "')";

Statement stm = conexao.createStatement() ;

stm.executeUpdate( sql ) ;

out.print("Dados gravados com sucesso<br><br>") ;

out.print("<a href='index.html'>") ;
out.print("Voltar") ;
out.print("</a>") ;

%>







