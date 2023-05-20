    <%
       //Lê dados da sessão 
       String tipo = (String) request.getSession().getAttribute("tipo"); 
       String status = (String) request.getSession().getAttribute("status"); 
       //Verifica se o acesso é de administrador
        if (tipo.equals("a")) { 

           
        }
       
        
        else {
            response.sendRedirect("index.jsp");
        }
        
    %>
