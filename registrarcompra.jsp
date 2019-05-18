<%@ page language="java" import="java.sql.*"  %>

<%

String admclicpf = request.getParameter("admclicpf");
Float  valcompra = Float.parseFloat(request.getParameter("valcompra"));

String driver = "net.sourceforge.jtds.jdbc.Driver" ;
String url = "jdbc:jtds:sqlserver://10.4.0.90:1433/bd519172018" ;
String usuario = "bd519172018";
String senha = "123456";

Class.forName( driver ) ;

Connection conexao = DriverManager.getConnection( url, usuario, senha ) ;


String sql = "insert into Compras (CompData, CompValor, CPFCli, Funcionario) values (getdate()," + valcompra + ",'" + admclicpf + "', 123); update Pessoas set Saldo = Saldo +" + valcompra +" where CPF ="+ admclicpf;

Statement stm = conexao.createStatement() ;

stm.executeUpdate( sql ) ;

out.print("<a href='teste.html'>") ;
out.print("Voltar") ;
out.print("</a>") ;

%>







