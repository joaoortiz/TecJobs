# TecJobs
Database model focused on crossing informations. Data source to build profiles. Objects management by DAO and Model Layers.

1. Módulo de Usuários
  1.1 Cadastro de Empresa
    1.1.1 Formulário de Informações gerais (UI)
      1.1.1.1 Upload de imagem   
      1.1.1.2 Insert na tabela Usuarios
      1.1.1.3 Inser na tabela Empresas      
    1.1.2 Formulário de Descrição da empresa (UI)
    1.1.3 Seleção das Tecnologias (UI)
  1.2 Cadastro de Candidato
    1.2.1 Formulário de Informações gerais (UI)
      1.2.1.1 Upload de imagem   
      1.2.1.2 Insert na tabela Usuarios
      1.2.1.3 Inser na tabela Candidatos      
    1.2.2 Formulário de bio do candidato (UI)
    1.2.3 Seleção dos conhecimentos (UI)
  1.3 Autenticação
    1.3.1 - Formulário de Login (UI)
      1.3.1.1 - Consulta no banco de dados na tabela Usuarios
      1.3.1.2 - Validação de nível
      1.3.1.3 - Consulta na tabela Empresas/Candidatos
      1.3.1.4 - Gravação da Sessão
      1.3.1.5 - Redirecionamento

2. Módulo de Perfil
  2.1 - Layout do Perfil (UI)
    2.1.1 -  Carregamento da Sessão
      2.1.1.1 - Exibição de dados gerais (UI)  
    2.1.2 - Listagem de Empresas de interesse(Seguindo)
      2.1.2.1 - Consulta na tabela Interesses
    2.1.3 - Listagem de Formação Acadêmica (Candidato - UI)
      2.1.3.1 -  Consulta de relações nas tabelas Instituições, Cursos, Formações
    2.1.4 Exibição dos conhecimentos (Candidato - UI)
      2.1.4.1 Consulta de relação nas tabelas Tecnologias e Níveis
    2.1.5 Contagem de seguidores (Empresa - UI)
      2.1.5.1 Consulta(count) na tabela Interesses
    2.1.6 Contagem de vagas disponíveis (Empresa - UI)
      2.1.6.1 Consulta(count) na tabela Vagas
    2.1.6 Exibição rápida de vagas (UI)
      2.1.6.1 Listagem completa de vagas por empresa
   2.2 Gerenciamento de Perfil (**PENDENTE**)
    
3. Módulo de Vagas
    3.1 - Cadastro de vagas
    3.2 - Aplicação de vagas 
    3.3 - Descoberta de vagas 
    3.4 - Gerenciamento das vagas
      3.4.1 - Edição de informações de vaga
      3.4.2 - Listagem de candidatos por vaga
      3.4.3 - Listagem de tecnologias por vaga
 
4. Módulo de Relacionamento (***PENDENTE***)
  4.1 - Gerenciamento de Seguidores
    4.1.1 - Adicionar Empresa
      4.1.1.1 - Cadastro na tabela Interesses
    4.1.2 - Remover Empresa
      4.1.2.1 - Exclusão na tabela Interesses
    
5. Módulo de Mensagens

6. Módulo de Avaliações 
