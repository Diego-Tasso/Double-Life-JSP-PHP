<%@ page import="dao.Dao"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<jsp:useBean id="u" class="classes.Usuario"></jsp:useBean>
<jsp:useBean id="m" class="classes.Medicos"></jsp:useBean>
<jsp:setProperty property="*" name="u" />
<jsp:setProperty property="*" name="m" />

<%@include file="acessoadm.jsp"%>

<%
    int i = Dao.cadastrarMedico(u, m);
    
    if(i>0){
        response.sendRedirect("medicoscontrolar.jsp?pag=1");
    }else{
        response.sendRedirect("medicoerro.jsp");        
    }
%>