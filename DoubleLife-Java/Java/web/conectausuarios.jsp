<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
            <%               
                int numMedico = Dao.getRelatorioMedico();
                int numComum = Dao.getRelatorioComum();
                int numAdmin = Dao.getRelatorioAdmin();
                request.setAttribute("numMedico", numMedico);  
                request.setAttribute("numComum", numComum); 
                request.setAttribute("numAdmin", numAdmin); 
            %>
<%=jo%>

            