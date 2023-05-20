<%@ page import="dao.Dao"%>
<jsp:useBean id="d" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="d" />
    
<%
    int i = Dao.editarMedico(d);
    
    if(i>0){
        response.sendRedirect("medicoscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("medicoerro.jsp");        
    }
%>
