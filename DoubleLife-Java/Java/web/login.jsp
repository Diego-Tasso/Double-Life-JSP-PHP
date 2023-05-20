<%@page import="classes.Usuario"%>
<%@ page import="dao.Dao, dao.Dao"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<jsp:useBean id="u" class="classes.Usuario"></jsp:useBean>
<jsp:setProperty property="*" name="u" />
    
<%
    //Lê valores do formulário
    String email = request.getParameter("email");
    String senha = request.getParameter("senha");
    
    //Envia os valores para o Dao e recebe o resultado da consulta
    Usuario usuario = Dao.logar(email, senha);
    
    //Verifica se algum usuário foi encontrado
    if(usuario!=null){
        request.getSession().setAttribute("tipo", usuario.getTipo());    
        response.sendRedirect("principal.jsp");
        
        //Redireciona erros para a tela de login
    }else{
        response.sendRedirect("index.jsp");
    }
%>