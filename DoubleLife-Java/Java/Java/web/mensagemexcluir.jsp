<%@ page import="dao.Dao"%>
<jsp:useBean id="z" class="classes.Contato"></jsp:useBean>
<jsp:setProperty property="*" name="z" />


<%
    int i = Dao.excluirContato(z);
    
    if(i>0){
        response.sendRedirect("mensagenscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("contatoerro.jsp");        
    }
%>