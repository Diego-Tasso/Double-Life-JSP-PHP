<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
        <title>Lista de Médicos</title>
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
                
                List<Usuario> list = Dao.getMedicos(id,total);
                request.setAttribute("list", list);
                
                int contagem = Dao.getContagemMedicos();
                int i;
                request.setAttribute("contagem", contagem);
                if(contagem%total==0){
                    contagem=contagem/total;
                }else{
                    contagem=contagem/total + 1;    
                }

            %>
        
            <table>
                <tr><th> ID</th><th>Nome</th><th>Email</th><th>Especialidade</th><th>Data de Entrada</th> <th>Faculdade</th> <th>Consultas Realizadas</th><th colspan="3">Ações</th></tr>
                <c:forEach items="${list}" var="medicos">
                <tr>
                    <td>${medicos.getId()}</td>
                    <td>${medicos.getNome()}</td>
                    <td>${medicos.getEmail()}</td>            
                    <td>${medicos.getEspecialidade()}</td>
                    <td>${medicos.getData_entrada()}</td>   
                    <td>${medicos.getFaculdade()}</td>
                    <td>${medicos.getConsulta()}</td>   
                    <td><a href="medicoeditarform.jsp?id=${medicos.getId()}"><img src="./imagens/editar.png" alt="Editar Usuário" width ="48" height = "48"></a></td>    
                    <td><a href="medicoexcluir.jsp?id=${medicos.getId()}"><img src="./imagens/excluir.png" alt="Excluir Usuário" width = "48" height = "48"></a></td> 
                    
                </tr>
                </c:forEach>
            </table>
            <div class="pagination">
                    <% for(i=1; i <= contagem; i++) {%>
                            <a href="medicoscontrolar.jsp?pag=<%=i%>"><%=i%></a>
                    <% } %>   
                </div> 
    </div>
    <div class="footer">
        <%@include file="rodape.jsp"%>
    </div>
    </body>
</html>
