<%@ page import="dao.Dao"%>
<jsp:useBean id="c" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="c" />


<%
    int i = Dao.excluirUsuario(c);
    
    if(i>0){
        response.sendRedirect("usuarioscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuarioerro.jsp");        
    }
%>