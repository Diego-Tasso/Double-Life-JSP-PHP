<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Consulta, java.util.*"%>
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
                
                List <Consulta> list = Dao.getConsulta(id,total);
                request.setAttribute("list", list);
                
                int contagem = Dao.getContagemConsulta();
                int i;
                request.setAttribute("contagem", contagem);
                if(contagem%total==0){
                    contagem=contagem/total;
                }else{
                    contagem=contagem/total + 1;    
                }

            %>
            <table>
            <tr><th>ID</th><th>Data da Consulta</th><th>ID do médico</th> <th>ID do cliente</th> <th>Status</th> <th>Ações</th></tr>
                <c:forEach items="${list}" var="consulta">
                <tr>
                    <td>${consulta.getId()}</td>
           
                    <td>${consulta.getData()}</td>
                    <td>${consulta.getId_medico()}</td>   
                    <td>${consulta.getId_usuario()}</td>
                    <td>${consulta.getStatus()}</td> 
                    <td><a href="consultaexcluir.jsp?id=${consulta.getId()}"><img src="./imagens/excluir.png" alt="Excluir Mensagem" width = "48" height = "48"></a></td>            
                </tr>
                </c:forEach>
            </table>
               <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="consultascontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>   
                </div> 
    </div>
    <div class="footer">
        <%@include file="rodape.jsp"%>
    </div>
    </body>
</html>
