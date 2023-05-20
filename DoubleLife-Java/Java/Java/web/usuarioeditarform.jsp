<%@ page import="dao.Dao, classes.Usuario, java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="/imagens/Logo_Cubo_para_empresa_de_Arquitetura_Design_e_Engenharia_2.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/icone.png" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
    <body>
        <%@include file="acessoadm.jsp"%>
        <%
            String id = request.getParameter("id");
            Usuario usuario = Dao.getUsuarioById(Integer.parseInt(id));
        %>
          
    <div class="container" >
            <div class="second-column" style = "margin-top: 100px; background-color: white; padding: 50px 10px 50px 10px ">
                <h2 class="title title-second">Editar</h2>
                <p class="description description-second">Edite o usuário Número: <%=usuario.getId()%>  </p>
                <form class="form" method="post" action="usuarioeditar.jsp">
                    
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
                        <input type="password" name="senha" value="<%=usuario.getSenha()%>" placeholder="Senha" required>>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-chalkboard-user icon-modify"></i>
                        <input type="tel" name="cpf" value="<%=usuario.getCpf()%>" placeholder="CPF" required>
                    </label>
                    
                    <label class="label-input">
                        <i class="far fa-solid fa-house icon-modify"></i>
                        <input type="text" name="cep" value="<%=usuario.getCep()%>" placeholder="CEP" required>
                    </label>

                    <label class="label-input">
                        <i class="far fa-solid fa-phone icon-modify"></i>
                        <input type="text" name="telefone"  value="<%=usuario.getTelefone()%>" placeholder="Número de Telefone" required>
                    </label>
                    <label class="label-input">
                        <i class="far fa-solid fa-phone icon-modify"></i>
                        <input type="text" name="endereco"  value="<%=usuario.getEndereco()%>" placeholder="Endereco" required>
                    </label>
    
                    <label class="label-input">
                        <i class="far fa-solid fa-calendar icon-modify" ></i>
                        <input type="text" value="<%=usuario.getTipo()%>" name="tipo" required>
                    </label>
                    
 
            <button  value="Editar" id="btn-logar" class="btn btn-second" style = "margin-top: 20px">Editar</button>

                </form>
            </div><!-- second column -->
        </div><!-- first content -->
    </body>
</html>
