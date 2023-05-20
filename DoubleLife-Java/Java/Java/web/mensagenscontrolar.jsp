<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Contato, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
        <script src="./scripts/filtrar.js"></script>
        <title>Lista de Mensagens</title>
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
                
                List <Contato> list = Dao.getContato(id,total);
                request.setAttribute("list", list);
                
                int contagem = Dao.getContagemContato();
                int i;
                request.setAttribute("contagem", contagem);
                if(contagem%total==0){
                    contagem=contagem/total;
                }else{
                    contagem=contagem/total + 1;    
                }

            %>
            <table>
            <tr><th>ID</th><th>Nome</th><th>Email</th><th>Assunto</th><th>Mensagem</th><th colspan="2">Ações</td></tr>
                <c:forEach items="${list}" var="contato">
                <tr>
                    <td>${contato.getId()}</td>
                    <td>${contato.getNome()}</td>
                    <td>${contato.getEmail()}</td>            
                    <td>${contato.getAssunto()}</td>
                    <td>${contato.getMensagem()}</td>   
                    <td><a href="mensagemeditarform.jsp?id=${contato.getId()}"><img src="./imagens/editar.png" alt="Editar Mensagem" width ="48" height = "48"></a></td>
                    <td><a href="mensagemexcluir.jsp?id=${contato.getId()}"><img src="./imagens/excluir.png" alt="Excluir Mensagem" width = "48" height = "48"></a></td>            
                </tr>
                </c:forEach>
            </table>
               <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="mensagenscontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>   
                </div> 
            <a href="contato.jsp"><img src="./imagens/incluir.png" alt="Incluir Usuário" width="48" height="48"></a>
    </div>
    <div class="footer">
        <%@include file="rodape.jsp"%>
    </div>
    </body>
</html>
