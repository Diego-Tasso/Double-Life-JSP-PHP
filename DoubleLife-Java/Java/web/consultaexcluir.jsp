<%@ page import="dao.Dao"%>
<jsp:useBean id="con" class="classes.Consulta"></jsp:useBean>
<jsp:setProperty property="*" name="con" />


<%
    int i = Dao.excluirConsulta(con);
    
    if(i>0){
        response.sendRedirect("consultascontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuarioerro.jsp");        
    }
%>