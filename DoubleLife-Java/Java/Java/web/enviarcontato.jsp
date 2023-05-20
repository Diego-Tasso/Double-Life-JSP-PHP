<%@ page import="dao.Dao"%>
<jsp:useBean id="c" class="classes.Contato"></jsp:useBean>
<jsp:setProperty property="*" name="c" />
    
<%
    int i = Dao.enviarContato(c);
    
    if(i>0){
        response.sendRedirect("mensagenscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("mensagemerro.jsp");        
    }
%>
