<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Médicos</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
    <body>
        <%@include file="acessoadm.jsp"%>
        <%
            String id = request.getParameter("id");
            Usuario usuario = Dao.getMedicoById(Integer.parseInt(id));
        %>
          
    <div class="container" >
            <div class="second-column" style = "margin-top: 100px; background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Editar</h2>
                <p class="description description-second">Edite o médico Número: <%=usuario.getId()%>  </p>
                <form class="form" method="post" action="medicoeditar.jsp">
                    
                    <input type="hidden" name="id"  value="<%=usuario.getId()%>" required >
                    <label class="label-input">
                        <i class="far fa-solid fa-clipboard icon-modify"></i>
                        <input type="text" name="nome"  value="<%=usuario.getNome()%>"  placeholder="Nome Completo"  required >
                    </label>
                
                    <label class="label-input">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email"  value="<%=usuario.getEmail()%>" placeholder="Email" required>
                    </label>
                    

                    
                    <label class="label-input">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="text" name="especialidade" value="<%=usuario.getEspecialidade()%>" placeholder="Especialidade" required>>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="text" name="data_entrada" value="<%=usuario.getData_entrada()%>" placeholder="Data de Entrada" required>
                    </label>
                    
                    <label class="label-input">
                        <i class="far fa-solid fa-house icon-modify"></i>
                        <input type="text" name="faculdade" value="<%=usuario.getFaculdade()%>" placeholder="Faculdade" required>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-phone icon-modify"></i>
                        <input type="text" name="Consulta"  value="<%=usuario.getConsulta()%>" placeholder="Consultas realizadas" required>
                    </label>
 
            <button  value="Editar" id="btn-logar" class="btn btn-second" style = "margin-top: 20px">Editar</button>

                </form>
            </div><!-- second column -->
        </div><!-- first content -->
    </body>
</html>
