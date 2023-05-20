<%@ page import="dao.Dao"%>
<jsp:useBean id="z" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="z" />

<%@include file="acessoadm.jsp"%>

<%
    int i = Dao.bloquearUsuario(z);
    
    if(i>0){
        response.sendRedirect("usuarioscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("usuarioerro.jsp");        
    }
%>