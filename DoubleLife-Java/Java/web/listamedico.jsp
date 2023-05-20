<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .pdf {
                transition: 0.4s;
                margin-left: 50px;
            }
            .pdf:hover{ 
                cursor: pointer;
                color: white;
                background-color: black;
            }
        </style>
        <script src="js/pdf.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.min.js"></script>   
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/tabela.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
        <script src="js/filtrar.js"></script>
        <title>Lista de Médicos</title>
    </head>
    <body>
        <%@include file="acessoadm.jsp"%>
            <div class="topnav">
                <%@include file="menu.jsp"%>
            </div>
            <div class="content">   
                <%
               
                List<Usuario> list = Dao.getRelatorioMedicos();
                request.setAttribute("list", list);

                %>  
      
            		<input type="text" id="filtrarnomes" onkeyup="filtrar('filtrarnomes', 1)" placeholder="Busca de nomes">
			<input type="text" id="filtraremails" onkeyup="filtrar('filtraremails', 3)" placeholder="Busca de emails">
            
                        
            <table>
                <tr><th>ID</th> <th>Nome</th> <th> Email </th>
                    <th> Especialidade </th> <th> Data de Entrada </th><th> Faculdade </th> <th> Consultas realizadas </th> </tr>
                <c:forEach items="${list}" var="medico">
                    <tr>
                    <td>${medico.getId()}</td>
                    <td>${medico.getNome()}</td>
                    <td>${medico.getEmail()}</td>              
                    <td>${medico.getEspecialidade()}</td>
                    <td>${medico.getData_entrada()}</td>
                    <td>${medico.getFaculdade()}</td>
                    <td>${medico.getConsulta()}</td>    
                    </tr>
                </c:forEach>
                   
            </table>
                        
    </div>
            <!-- PDF III - Botão que aciona a função getPDF() no arquivo pdf.js -->
            <form><input class="pdf" type="button" value="Gerar PDF" onclick="getPDF()"></form>
    <div class="footer">
        <%@include file="rodape.jsp"%>
    </div>
    </body>
</html>
