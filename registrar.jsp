<%@ page language="java" import="java.sql.*"  %>

<%

String vclicpf = request.getParameter("clicpf");
String vclinome = request.getParameter("clinome");
String vclisenha= request.getParameter("clisenha");
String vcliemail = request.getParameter("cliemail");


String driver = "net.sourceforge.jtds.jdbc.Driver" ;
String url = "jdbc:jtds:sqlserver://10.4.0.90:1433/bd519172018" ;
String usuario = "bd519172018";
String senha = "123456";

Class.forName( driver ) ;

Connection conexao = DriverManager.getConnection( url, usuario, senha ) ;


String sql = "insert into Pessoas (CPF,PesNome,PesSenha,Saldo,PesEmail) values ('"+ vclicpf +"','"+ vclinome +"','"+ vclisenha +"', 0.00,'"+ vcliemail +"')";

Statement stm = conexao.createStatement() ;

stm.executeUpdate( sql ) ;

out.print("<a href='teste.html'>") ;
out.print("Voltar") ;
out.print("</a>") ;

%>







