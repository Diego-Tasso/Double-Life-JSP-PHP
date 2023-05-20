<%@ page import="dao.Dao"%>
<jsp:useBean id="m" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="m" />


<%
    int i = Dao.excluirUsuario(m);
    
    if(i>0){
        response.sendRedirect("medicoscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("medicoerro.jsp");        
    }
%>