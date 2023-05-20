<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
        <title>Lista de Usuários</title>
    </head>
    <body>
        <%@include file="acessoadm.jsp"%>
            <div class="topnav">
                <%@include file="menu.jsp"%>
            </div>
            <div class="content">        
            <%
                String pag = request.getParameter("pag");
                int id = Integer.parseInt(pag);
                
                //Quantidade de Registros da Página
                int total = 5;
                
                if(id!=1){
                    id = id -1;
                    id = id * total + 1;
                }
                
                List<Usuario> list = Dao.getUsuarios(id,total);
                request.setAttribute("list", list);
                
                int contagem = Dao.getContagem();
                int i;
                request.setAttribute("contagem", contagem);
                if(contagem%total==0){
                    contagem=contagem/total;
                }else{
                    contagem=contagem/total + 1;    
                }

            %>
        
            <table>
            <tr><th> ID</th><th>Nome</th><th>Email</th><th>Senha</th><th>CPF</th> <th>CEP</th> <th>Telefone</th> <th>Endereco</th> <th>Tipo</th> <th>Status</th> <th colspan="4">Ações</th></tr>
                <c:forEach items="${list}" var="usuarios">
                <tr>
                    <td>${usuarios.getId()}</td>
                    <td>${usuarios.getNome()}</td>
                    <td>${usuarios.getEmail()}</td>            
                    <td>${usuarios.getSenha()}</td>
                    <td>${usuarios.getCpf()}</td>   
                    <td>${usuarios.getCep()}</td>
                    <td>${usuarios.getTelefone()}</td>   
                    <td>${usuarios.getEndereco()}</td>   
                    <td>${usuarios.getTipo()}</td> 
                    <td>${usuarios.getStatus()}</td>
                    <td><a href="usuarioeditarform.jsp?id=${usuarios.getId()}"><img src="./imagens/editar.png" alt="Editar Usuário" width ="48" height = "48"></a></td>    
                    <td><a href="usuariobloquear.jsp?id=${usuarios.getId()}&status=${usuarios.getStatus()}" alt="Bloquear Usuário"><img src="imagens/Block.png"  width ="48" height = "48"></a></td>
                    <td><a href="usuarioexcluir.jsp?id=${usuarios.getId()}"><img src="./imagens/excluir.png" alt="Excluir Usuário" width = "48" height = "48"></a></td> 
                    
                </tr>
                </c:forEach>
            </table>
            <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="usuarioscontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>   
                </div> 
    </div>
    <div class="footer">
        <%@include file="rodape.jsp"%>
    </div>
    </body>
</html>
