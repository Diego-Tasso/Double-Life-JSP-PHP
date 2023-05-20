
package dao;
import classes.Usuario;
import classes.Contato;
import classes.Consulta;
import java.sql.Connection;
import java.util.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;
import java.util.Calendar;
import java.util.GregorianCalendar;

public class Dao {

    public static Connection getConnection(){
    Connection con = null;
    try{
        Class.forName("com.mysql.jdbc.Driver");       
        con=DriverManager.getConnection("jdbc:mysql://localhost:3306/id18647165_doublelifebd","root","");
    }catch(Exception erro){
        System.out.println(erro);
    }
        return con;
    
    }
    
    public static Usuario getUsuarioById(int id){
        Usuario usuario = null;      
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from usuarios where Id=?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setSenha(rs.getString("senha"));   
            usuario.setCpf(rs.getString("cpf"));
            usuario.setCep(rs.getString("cep"));
            usuario.setEndereco(rs.getString("endereco"));
            usuario.setTelefone(rs.getString("telefone"));
            usuario.setTipo(rs.getString("tipo"));
            
        }
    }catch(Exception erro){
        System.out.println(erro);
    }      
        return usuario;
    }
    
    public static Contato getContatoById (int id){
        Contato contato = null;      
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from contato where Id=?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            contato = new Contato();
            contato.setId(rs.getInt("id"));
            contato.setNome(rs.getString("nome"));
            contato.setEmail(rs.getString("email"));         
            contato.setAssunto(rs.getString("assunto"));   
            contato.setMensagem(rs.getString("mensagem"));
         
            
        }
    }catch(Exception erro){
        System.out.println(erro);
    }      
        return contato;
    }
    
   public static int editarUsuario(Usuario usuario){
       int status = 0;  
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE usuarios SET Nome=?, Email=?, Senha =?, Cpf =?, Cep=?, Telefone=?, Endereco=?, Tipo=? WHERE id=?");
            ps.setString(1, usuario.getNome());
            ps.setString(2, usuario.getEmail());
            ps.setString(3, usuario.getSenha());
            ps.setString(4, usuario.getCpf());
            ps.setString(5, usuario.getCep());
            ps.setString(6, usuario.getTelefone());
            ps.setString(7, usuario.getEndereco());
            ps.setString(8, usuario.getTipo());
            ps.setInt(9, usuario.getId());         
            status = ps.executeUpdate();
        }  
        catch(Exception erro){
            System.out.println(erro);
        }      
    return status;
   }
   public static int editarContato(Contato contato){
       int status = 0;  
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE contato SET Nome=?, Email=?, Assunto =?, Mensagem =? WHERE id=?");
            ps.setString(1, contato.getNome());
            ps.setString(2, contato.getEmail());
            ps.setString(3, contato.getAssunto());
            ps.setString(4, contato.getMensagem());    
            ps.setInt(5, contato.getId()); 
            status = ps.executeUpdate();
        }  
        catch(Exception erro){
            System.out.println(erro);
        }      
    return status;
   }
   
    
    public static List<Usuario> getUsuarios(int inicio, int total) {
    List<Usuario> list = new ArrayList<Usuario>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM usuarios WHERE tipo = 'c' OR (tipo = 'a') ORDER BY id LIMIT " + (inicio - 1) + " ," + total);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Usuario usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setSenha(rs.getString("senha"));   
            usuario.setCpf(rs.getString("cpf"));
            usuario.setCep(rs.getString("cep"));
            usuario.setEndereco(rs.getString("endereco"));
            usuario.setTelefone(rs.getString("telefone"));
            usuario.setTipo(rs.getString("tipo"));
            usuario.setStatus(rs.getString("status"));
            list.add(usuario);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
    
    public static int excluirUsuario(Usuario usuario){
       int status = 0;  
        try{
             Connection con = getConnection();
             PreparedStatement ps = (PreparedStatement) con.prepareStatement("DELETE FROM usuarios WHERE id=?");
             ps.setInt(1, usuario.getId());         
             status = ps.executeUpdate();
         }catch(Exception ex){
             System.out.println(ex);
         }      
            return status;
   }
   public static int excluirContato(Contato contato){
       
       int status = 0;  
        try{
             Connection con = getConnection();
             PreparedStatement ps = (PreparedStatement) con.prepareStatement("DELETE FROM contato WHERE id=?");
             ps.setInt(1, contato.getId());         
             status = ps.executeUpdate();
         }catch(Exception ex){
             System.out.println(ex);
         }      
            return status;
   }
    
    
   public static int cadastrarUsuario (Usuario usuario){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("INSERT INTO USUARIOS(NOME,EMAIL,SENHA,CPF,CEP,TELEFONE,ENDERECO,TIPO,STATUS) VALUES(?,?,?,?,?,?,?,?,'ativo')");
        ps.setString(1, usuario.getNome());
        ps.setString(2, usuario.getEmail());
        ps.setString(3, usuario.getSenha());
        ps.setString(4, usuario.getCpf());
        ps.setString(5, usuario.getCep());
        ps.setString(6, usuario.getTelefone());
        ps.setString(7, usuario.getEndereco());
        ps.setString(8, usuario.getTipo());  
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
   
   public static int enviarContato (Contato contato){
       int status = 0;  
   try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("INSERT INTO CONTATO(NOME,EMAIL,ASSUNTO,MENSAGEM) VALUES(?,?,?,?)");
        ps.setString(1, contato.getNome());
        ps.setString(2, contato.getEmail());
        ps.setString(3, contato.getAssunto());
        ps.setString(4, contato.getMensagem());
  
        status = ps.executeUpdate();
    }catch(Exception erro){
        System.out.println(erro);
    }      
       return status;
   }
    public static int cadastrarComentario(Contato contato){
    int status = 0;  
    try{
    Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("INSERT INTO contato(nome,email,assunto,mensagem) VALUES(?,?,?,?)");

        ps.setString(1, contato.getNome());
        ps.setString(2, contato.getEmail());
        ps.setString(3, contato.getAssunto());        
        ps.setString(4, contato.getMensagem());
             
        status = ps.executeUpdate();
   
    }catch(Exception erro){
        System.out.println( erro);
    }
    
    return status;
    }
    
    public static List<Contato> getContato(int inicio, int total) {
    List<Contato> list = new ArrayList<Contato>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM contato ORDER BY id LIMIT " + (inicio - 1) + " ," + total);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Contato contato = new Contato();
            contato.setId(rs.getInt("Id"));
            contato.setNome(rs.getString("Nome"));
            contato.setEmail(rs.getString("Email"));         
            contato.setAssunto(rs.getString("Assunto"));
            contato.setMensagem(rs.getString("Mensagem"));
            list.add(contato);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
   
    public static int getContagem() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM usuarios WHERE tipo = 'c' OR (tipo = 'a')");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
    public static int getContagemContato() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM contato");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
    public static int getContagemMedico() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM medico");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
    public static int getAdm(){
    int numadm=0;
        try{
    Connection con = getConnection();//ele esta ativando a exceção, por isso da erro
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) as a FROM usuarios WHERE tipo='a'");
        ResultSet rs = ps.executeQuery();

  
 while(rs.next()){
                 numadm= rs.getInt("admin");
            }  
            
    }catch(Exception erro){
   
   System.out.println(erro);
    }
      
    return numadm;
  
    }
    public static List<Usuario> getRelatorio() {
    List<Usuario> list = new ArrayList<Usuario>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM usuarios WHERE tipo = 'c' OR (tipo = 'a')");
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
             Usuario usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setSenha(rs.getString("senha"));   
            usuario.setCpf(rs.getString("cpf"));
            usuario.setCep(rs.getString("cep"));
            usuario.setEndereco(rs.getString("endereco"));
            usuario.setTelefone(rs.getString("telefone"));
            usuario.setTipo(rs.getString("tipo"));
            list.add(usuario);
        }       
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
    public static List<Usuario> getRelatorioMedicos() {
    List<Usuario> list = new ArrayList<Usuario>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM usuarios WHERE tipo = 'm'");
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Usuario usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setEspecialidade(rs.getString("especialidade"));   
            usuario.setData_entrada(rs.getString("data_entrada"));
            usuario.setFaculdade(rs.getString("faculdade"));
            usuario.setConsulta(rs.getInt("consulta"));
            list.add(usuario);
        }       
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
    public static int getRelatorioComum() {

        int numComum = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS c FROM usuarios where tipo = 'c'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numComum = rs.getInt("c");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numComum;
    }
    public static int getRelatorioAdmin() {

        int numAdmin = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS a FROM usuarios where tipo = 'a'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numAdmin = rs.getInt("a");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numAdmin;
    }
    public static int getRelatorioMedico() {

        int numMedico = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS m FROM usuarios where tipo = 'm'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numMedico = rs.getInt("m");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numMedico;
    }
    
    public static List<Contato> getMSG() {
    List<Contato> list = new ArrayList<Contato>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM contato");
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Contato contato = new Contato();
            contato.setId(rs.getInt("id"));
            contato.setNome(rs.getString("nome"));
            contato.setEmail(rs.getString("email"));         
            contato.setAssunto(rs.getString("Assunto"));   
            contato.setMensagem(rs.getString("Mensagem"));
            
            list.add(contato);
        }       
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
    
     public static int bloquearUsuario(Usuario usuario){
       int status = 0;  
       String statusdousuario;
       
       if(usuario.getStatus().equals("ativo")){
        statusdousuario = "bloqueado";    
       }else{
        statusdousuario = "ativo";   
       }
        try{
             Connection con = getConnection();
             PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE usuarios SET Status=? WHERE id=?");
             ps.setString(1, statusdousuario);
             ps.setInt(2, usuario.getId());         
             status = ps.executeUpdate();
         }catch(Exception erro){
             System.out.println(erro);
         }      
            return status;
   } 
     public static int getContagemMedicos() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM usuarios WHERE tipo = 'm'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
     public static List<Usuario> getMedicos(int inicio, int total) {
    List<Usuario> list = new ArrayList<Usuario>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM usuarios WHERE tipo = 'm' ORDER BY id LIMIT " + (inicio - 1) + " ," + total);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Usuario usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setEspecialidade(rs.getString("especialidade"));   
            usuario.setData_entrada(rs.getString("data_entrada"));
            usuario.setFaculdade(rs.getString("faculdade"));
            usuario.setConsulta(rs.getInt("consulta"));
            list.add(usuario);
        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
     public static int editarMedico(Usuario usuario){
       int status = 0;  
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("UPDATE usuarios SET Nome=?, Email=?, Especialidade=?, Data_entrada=?, Faculdade=?, Consulta=? WHERE id=?");
            ps.setString(1, usuario.getNome());
            ps.setString(2, usuario.getEmail());
            ps.setString(3, usuario.getEspecialidade());
            ps.setString(4, usuario.getData_entrada());
            ps.setString(5, usuario.getFaculdade());
            ps.setInt(6, usuario.getConsulta());
            ps.setInt(7, usuario.getId());         
            status = ps.executeUpdate();
        }  
        catch(Exception erro){
            System.out.println(erro);
        }      
    return status;
   }
     public static Usuario getMedicoById(int id){
        Usuario usuario = null;      
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from usuarios where Id=?");
        ps.setInt(1, id);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            usuario = new Usuario();
            usuario.setId(rs.getInt("id"));
            usuario.setNome(rs.getString("nome"));
            usuario.setEmail(rs.getString("email"));         
            usuario.setSenha(rs.getString("senha"));   
            usuario.setEspecialidade(rs.getString("especialidade"));
            usuario.setData_entrada(rs.getString("data_entrada"));
            usuario.setFaculdade(rs.getString("faculdade"));
            usuario.setConsulta(rs.getInt("consulta"));
            
        }
    }catch(Exception erro){
        System.out.println(erro);
    }      
        return usuario;
    }
     public static Usuario logar(String email, String senha){ 
Usuario usuario = new Usuario();    
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("select * from usuarios where Email=?");
        ps.setString(1, email);
        ResultSet rs = ps.executeQuery();
        //Verifica se a consulta retornou resultado
        if (rs.next()) {       
                    if(rs.getString("senha").equals(senha)){
                        usuario.setId(rs.getInt("id"));
                        usuario.setNome(rs.getString("nome"));
                        usuario.setEmail(rs.getString("email"));         
                        usuario.setSenha(rs.getString("senha"));   
                        usuario.setCpf(rs.getString("cpf"));
                        usuario.setCep(rs.getString("cep"));
                        usuario.setTelefone(rs.getString("telefone"));
                        usuario.setEndereco(rs.getString("endereco"));
                        usuario.setTipo(rs.getString("tipo"));     
                    }else{
                        //Senha errada
                        usuario = null;
                    }
         
        }else{
            // E-mail não existe
            usuario = null; 
        }
    }catch(Exception erro){
        System.out.println(erro);
    }      
        return usuario;
    }
    public static List<Consulta> getConsulta(int inicio, int total) {
    List<Consulta> list = new ArrayList<Consulta>();
    try{
        Connection con = getConnection();
        PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT * FROM consultas ORDER BY id LIMIT " + (inicio - 1) + " ," + total);
        ResultSet rs = ps.executeQuery();
        while(rs.next()){
            Consulta consulta = new Consulta();
            consulta.setId(rs.getInt("id"));
            consulta.setData(rs.getString("data"));
            consulta.setId_medico(rs.getInt("id_medico"));
            consulta.setId_usuario(rs.getInt("id_usuario"));
            consulta.setStatus(rs.getString("status"));
            list.add(consulta);

        }
    }catch(Exception erro){
        System.out.println(erro);
    }
    return list;
    }
      public static int getContagemConsulta() {
        int contagem = 0;
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS contagem FROM consultas");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                contagem = rs.getInt("contagem");
            }   
        }catch(Exception erro){
            System.out.println(erro);
        }
        return contagem;
    }
    public static int excluirConsulta (Consulta consulta){
       
       int status = 0;  
        try{
             Connection con = getConnection();
             PreparedStatement ps = (PreparedStatement) con.prepareStatement("DELETE FROM consultas WHERE id=?");
             ps.setInt(1, consulta.getId());         
             status = ps.executeUpdate();
         }catch(Exception ex){
             System.out.println(ex);
         }      
            return status;
   } 
   public static int getRelatorioCardiologia() {

        int numCardiologia = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS cardiologia FROM usuarios where especialidade = 'cardiologia'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numCardiologia = rs.getInt("cardiologia");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numCardiologia;
    } 
   public static int getRelatorioGeriatria() {

        int numGeriatria = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS geriatria FROM usuarios where especialidade = 'geriatria'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numGeriatria = rs.getInt("geriatria");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numGeriatria;
    } 
    public static int getRelatorioGinecologia() {

        int numGinecologia = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS ginecologia FROM usuarios where especialidade = 'ginecologia'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numGinecologia = rs.getInt("ginecologia");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numGinecologia;
    } 
    
    public static int getRelatorioOncologia() {

        int numOncologia = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS oncologia FROM usuarios where especialidade = 'oncologia'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numOncologia = rs.getInt("oncologia");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numOncologia;
    } 
    public static int getRelatorioOrtopedia() {

        int numOrtopedia = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS ortopedia FROM usuarios where especialidade = 'ortopedia'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numOrtopedia = rs.getInt("ortopedia");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numOrtopedia;
    } 
    public static int getRelatorioPediatria() {

        int numPediatria = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS pediatria FROM usuarios where especialidade = 'pediatria'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numPediatria = rs.getInt("pediatria");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numPediatria;
    } 
    public static int getRelatorioUrologia() {

        int numUrologia = 0;
        
        try{
            Connection con = getConnection();
            PreparedStatement ps = (PreparedStatement) con.prepareStatement("SELECT count(*) AS urologia FROM usuarios where especialidade = 'urologia'");
            ResultSet rs = ps.executeQuery();
            while(rs.next()){
                numUrologia = rs.getInt("urologia");
            
           }   
 
        }catch(Exception erro){
            System.out.println(erro);
        }
        return numUrologia;
    } 
     
   
}
