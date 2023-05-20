<%@ page import="dao.Dao"%>
<jsp:useBean id="e" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="e" />
    
<%
    int i = Dao.editarUsuario(e);
    
    if(i>0){
        response.sendRedirect("usuarioscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuarioerro.jsp");        
    }
%>
