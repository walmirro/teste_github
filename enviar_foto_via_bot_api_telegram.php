<?php
// SE TIVER PROBLEMAS DE VALIDAÇÃO DE USUÁRIO LOGADO, COMENTE OU DESCOMENTE ESTE TRECHO DO CÓDIGO ABAIXO, PARA QUE SE INICIE O USO DE SESSION NO PHP. (-------------------INÍCIO-------------------)
if (!isset($_SESSION)) 
{
session_start();
}
// SE TIVER PROBLEMAS DE VALIDAÇÃO DE USUÁRIO LOGADO, COMENTE OU DESCOMENTE ESTE TRECHO DO CÓDIGO ABAIXO, PARA QUE SE INICIE O USO DE SESSION NO PHP. (-------------------FIM-------------------)
?>
<?php
// SOBRE ESTE ARQUIVO
// SOBRE ESTE ARQUIVO
// SOBRE ESTE ARQUIVO
$nome_inserido_manualmente___deste_arquivo = "template___index.php";
$versao_deste_arquivo = "1.0";
$autor_deste_arquivo = "WALMIR ALMEIDA";
$atualizacao_deste_arquivo = "30/08/2018 23:11";
$descricao_deste_arquivo = "Template index para servir de base na criação das páginas deste site";
$caminho_em_partes = pathinfo( __FILE__ );
$nome_automatico_do_arquivo_atual = $caminho_em_partes['basename'];
// SOBRE ESTE ARQUIVO
// SOBRE ESTE ARQUIVO
// SOBRE ESTE ARQUIVO
?>
<?php
// PEGA OS DADOS TRAZIDOS DA PAGINA ANTERIOR (EXCLUSIVO DESTA PÁGINA) - (INÍCIO)
// PEGA OS DADOS TRAZIDOS DA PAGINA ANTERIOR (EXCLUSIVO DESTA PÁGINA) - (INÍCIO)
// PEGA OS DADOS TRAZIDOS DA PAGINA ANTERIOR (EXCLUSIVO DESTA PÁGINA) - (INÍCIO)
if (!empty($_POST['xyz']))
{
$xyz___trazido_da_pagina_anterior = $_POST['xyz'];
}
else
{
$xyz___trazido_da_pagina_anterior = "";
}
// PEGA OS DADOS TRAZIDOS DA PAGINA ANTERIOR (EXCLUSIVO DESTA PÁGINA) - (FIM)
// PEGA OS DADOS TRAZIDOS DA PAGINA ANTERIOR (EXCLUSIVO DESTA PÁGINA) - (FIM)
// PEGA OS DADOS TRAZIDOS DA PAGINA ANTERIOR (EXCLUSIVO DESTA PÁGINA) - (FIM)
?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/variaveis_gerais.php');
?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/include___pega_os_dados_trazidos_da_pagina_anterior___comum_a_todas_as_paginas.php');
?>
<?php
// SOBRE ESTE SITE
// SOBRE ESTE SITE
// SOBRE ESTE SITE
//$nome_do_servidor = $_SERVER['SERVER_NAME'];
//$protocolo = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");
//$url_deste_site = 'https://' . $nome_do_servidor;
// SOBRE ESTE SITE
// SOBRE ESTE SITE
// SOBRE ESTE SITE
?>
<?php
// OB START
// OB START
// OB START
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/ob_start.php');
// OB START
// OB START
// OB START
?>
<?php
// SESSION START
// SESSION START
// SESSION START
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/session_start.php');
// SESSION START
// SESSION START
// SESSION START
?>
<?php
// IMPEDIR OU INVALIDAR REFRESH NA PÁGINA (INÍCIO)
// IMPEDIR OU INVALIDAR REFRESH NA PÁGINA (INÍCIO)
// IMPEDIR OU INVALIDAR REFRESH NA PÁGINA (INÍCIO)
if (!isset($_SESSION)) 
{
session_start();
}
$refreshes_permitidos = 0;
//$_SESSION['refresh_atual_desta_pagina'] = $refreshes_permitidos;
// IMPEDIR OU INVALIDAR REFRESH NA PÁGINA (FIM)
// IMPEDIR OU INVALIDAR REFRESH NA PÁGINA (FIM)
// IMPEDIR OU INVALIDAR REFRESH NA PÁGINA (FIM)
?>
<?php
// DETERMINE AQUI O CÓDIGO EXCLISIVO (IDENTIDADE) DA PÁGINA PARA ATUALIZAR VISITAS, ETC.
// CÓDIGO_DESTA_PÁGINA
// CÓDIGO_DESTA_PÁGINA
// CÓDIGO_DESTA_PÁGINA
$codigo_desta_pagina = "0";
// CÓDIGO_DESTA_PÁGINA
// CÓDIGO_DESTA_PÁGINA
// CÓDIGO_DESTA_PÁGINA
?>
<?php
// TÍTULO DESTA PÁGINA
// TÍTULO DESTA PÁGINA
// TÍTULO DESTA PÁGINA
$titulo_desta_pagina = $frase_padrao_do_site;
// TÍTULO DESTA PÁGINA
// TÍTULO DESTA PÁGINA
// TÍTULO DESTA PÁGINA
?>
<?php
// ÍCONE DESTA PÁGINA
// ÍCONE DESTA PÁGINA
// ÍCONE DESTA PÁGINA
$icone_desta_pagina = $url_deste_site . '/imagens/icones/creditos.png';
// ÍCONE DESTA PÁGINA
// ÍCONE DESTA PÁGINA
// ÍCONE DESTA PÁGINA
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

<!-- TÍTULO DESTA PÁGINA -->
<!-- TÍTULO DESTA PÁGINA -->
<!-- TÍTULO DESTA PÁGINA -->
<!-- #BeginEditable "titulo_desta_pagina" -->
<title>
<?php
echo ("$titulo_desta_pagina");
?>
</title>
<!-- #EndEditable -->
<!-- TÍTULO DESTA PÁGINA -->
<!-- TÍTULO DESTA PÁGINA -->
<!-- TÍTULO DESTA PÁGINA -->

<!-- ÍCONE DESTA PÁGINA -->
<!-- ÍCONE DESTA PÁGINA -->
<!-- ÍCONE DESTA PÁGINA -->
<!-- #BeginEditable "icone_desta_pagina" -->
<link href='<?php echo ("$icone_desta_pagina"); ?>' rel='icon' type='image/x-icon'/>
<!-- #EndEditable -->
<!-- ÍCONE DESTA PÁGINA -->
<!-- ÍCONE DESTA PÁGINA -->
<!-- ÍCONE DESTA PÁGINA -->

<!-- META TAGS DEFINIDAS PELO DESENVOLVEDOR DO SITE -->
<!-- META TAGS DEFINIDAS PELO DESENVOLVEDOR DO SITE -->
<!-- META TAGS DEFINIDAS PELO DESENVOLVEDOR DO SITE -->
<!-- #BeginEditable "meta_tags_definidas_pelo_dono_do_site" -->
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/meta_tags_definidas_pelo_dono_do_site.php');
?>
<!-- #EndEditable -->
<!-- META TAGS DEFINIDAS PELO DESENVOLVEDOR DO SITE -->
<!-- META TAGS DEFINIDAS PELO DESENVOLVEDOR DO SITE -->
<!-- META TAGS DEFINIDAS PELO DESENVOLVEDOR DO SITE -->

<!-- TAGS OG PARA API DO FACEBOOK -->
<!-- TAGS OG PARA API DO FACEBOOK -->
<!-- TAGS OG PARA API DO FACEBOOK -->
<!-- #BeginEditable "meta_tags_og_para_api_do_facebook" -->
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/meta_tags_og_para_api_do_facebook.php');
?>
<!-- #EndEditable -->
<!-- TAGS OG PARA API DO FACEBOOK -->
<!-- TAGS OG PARA API DO FACEBOOK -->
<!-- TAGS OG PARA API DO FACEBOOK -->

<!-- CHAMADAS DAS FRAMEWORKS EM JAVASCRIPT -->
<!-- CHAMADAS DAS FRAMEWORKS EM JAVASCRIPT -->
<!-- CHAMADAS DAS FRAMEWORKS EM JAVASCRIPT -->
<!-- #BeginEditable "configuracoes_de_chamadas_das_frameworks_em_javascript" -->
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/configuracoes_de_chamadas_das_frameworks_em_javascript.php');
?>
<!-- #EndEditable -->
<!-- CHAMADAS DAS FRAMEWORKS EM JAVASCRIPT -->
<!-- CHAMADAS DAS FRAMEWORKS EM JAVASCRIPT -->
<!-- CHAMADAS DAS FRAMEWORKS EM JAVASCRIPT -->

<!-- CHAMA AS FOLHAS DE ESTILOS CSS VIA PHP -->
<!-- CHAMA AS FOLHAS DE ESTILOS CSS VIA PHP -->
<!-- CHAMA AS FOLHAS DE ESTILOS CSS VIA PHP -->
<!-- #BeginEditable "css_via_require_once" -->
<?php
// CHAMA AS FOLHAS DE ESTILOS CSS
require_once ($_SERVER['DOCUMENT_ROOT'] . '/css_estilos/css_via_require_once.php'); 
?>
<!-- #EndEditable -->
<!-- CHAMA AS FOLHAS DE ESTILOS CSS VIA PHP -->
<!-- CHAMA AS FOLHAS DE ESTILOS CSS VIA PHP -->
<!-- CHAMA AS FOLHAS DE ESTILOS CSS VIA PHP -->

<!-- FUNÇÃO JAVASCRIPT PARA FAZER O AUTOCOMPLETE -->
<!-- FUNÇÃO JAVASCRIPT PARA FAZER O AUTOCOMPLETE -->
<!-- FUNÇÃO JAVASCRIPT PARA FAZER O AUTOCOMPLETE -->
<?php
// ATUALIZA ARQUIVO DE DADOS DAS DOS ASSUNTOS
//require_once ($_SERVER['DOCUMENT_ROOT'] . '/links/atualizar_arquivo_de_dados_dos_assuntos.php'); 
?>
<script>
$(function() 
{
var assuntos = <?php echo ("[$assuntos]"); ?>;	
$("#assunto" ).autocomplete({source: assuntos, minLength: 3});});
</script>
<!-- FUNÇÃO JAVASCRIPT PARA FAZER O AUTOCOMPLETE -->
<!-- FUNÇÃO JAVASCRIPT PARA FAZER O AUTOCOMPLETE -->
<!-- FUNÇÃO JAVASCRIPT PARA FAZER O AUTOCOMPLETE -->

</head>

<!-- CHAMA O COMANDO DA API PARA ExibirLocalizacao NO BODY ON LOAD -->
<!-- CHAMA O COMANDO DA API PARA ExibirLocalizacao NO BODY ON LOAD -->
<!-- CHAMA O COMANDO DA API PARA ExibirLocalizacao NO BODY ON LOAD -->
<body class="home" onLoad="ExibirLocalizacao()">
<!-- CHAMA O COMANDO DA API PARA ExibirLocalizacao NO BODY ON LOAD -->
<!-- CHAMA O COMANDO DA API PARA ExibirLocalizacao NO BODY ON LOAD -->
<!-- CHAMA O COMANDO DA API PARA ExibirLocalizacao NO BODY ON LOAD -->

<!-- LINK PARA VOLTAR AO TOPO DA PÁGINA -->
<!-- LINK PARA VOLTAR AO TOPO DA PÁGINA -->
<!-- LINK PARA VOLTAR AO TOPO DA PÁGINA -->
<a name="topo"></a>
<!-- LINK PARA VOLTAR AO TOPO DA PÁGINA -->
<!-- LINK PARA VOLTAR AO TOPO DA PÁGINA -->
<!-- LINK PARA VOLTAR AO TOPO DA PÁGINA -->

<!-- CHAMADA PARA O TEMPLATE ANTES DO CONTEÚDO PRINCIPAL DINÂMICO -->
<!-- CHAMADA PARA O TEMPLATE ANTES DO CONTEÚDO PRINCIPAL DINÂMICO -->
<!-- CHAMADA PARA O TEMPLATE ANTES DO CONTEÚDO PRINCIPAL DINÂMICO -->
<!-- #BeginEditable "template___antes_do_conteudo_principal" -->
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/Templates/Templates_Por_Walmir/estrutura_basica_em_partes/template___antes_do_conteudo_principal.php');
?>
<!-- #EndEditable -->
<!-- CHAMADA PARA O TEMPLATE ANTES DO CONTEÚDO PRINCIPAL DINÂMICO -->
<!-- CHAMADA PARA O TEMPLATE ANTES DO CONTEÚDO PRINCIPAL DINÂMICO -->
<!-- CHAMADA PARA O TEMPLATE ANTES DO CONTEÚDO PRINCIPAL DINÂMICO -->

<!-- SALDAÇÃO PARA O USUÁRIO/VISITANTE NO TOPO DA PÁGINA -->
<!-- SALDAÇÃO PARA O USUÁRIO/VISITANTE NO TOPO DA PÁGINA -->
<!-- SALDAÇÃO PARA O USUÁRIO/VISITANTE NO TOPO DA PÁGINA -->
<?php
if(!isset($_SESSION['codigo_do_usuario']))
{
echo (" - Olá, <strong><a href=\"https://linktudo.com.br/login_para_o_publico/area_de_trabalho.php\">".visitante."</a></strong> !!! ");
}
else
{
echo (" - Olá, <strong><a href=\"https://linktudo.com.br/login_para_o_publico/area_de_trabalho.php\">".$_SESSION['login_do_usuario']."</a></strong> !!! ");
}
echo ("- Hoje é: ");
echo ("<strong>");
echo date("d/m/Y");
echo ("</strong>");
echo (" - ");
echo ("<strong>");
echo date("H:i");
echo ("</strong>");
?>
<!-- SALDAÇÃO PARA O USUÁRIO/VISITANTE NO TOPO DA PÁGINA -->
<!-- SALDAÇÃO PARA O USUÁRIO/VISITANTE NO TOPO DA PÁGINA -->
<!-- SALDAÇÃO PARA O USUÁRIO/VISITANTE NO TOPO DA PÁGINA -->


<!-- BUSCA DADOS DE GEOLOCATION DO USUÁRIO -->
<!-- BUSCA DADOS DE GEOLOCATION DO USUÁRIO -->
<!-- BUSCA DADOS DE GEOLOCATION DO USUÁRIO -->
<!-- #BeginEditable "geolocation_busca_dados" -->
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/geolocation_busca_dados.php');
?>
<!-- #EndEditable -->
<!-- BUSCA DADOS DE GEOLOCATION DO USUÁRIO -->
<!-- BUSCA DADOS DE GEOLOCATION DO USUÁRIO -->
<!-- BUSCA DADOS DE GEOLOCATION DO USUÁRIO -->

<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<div class="principal" id="principal">
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->

<!-- CABEÇALHO -->
<!-- CABEÇALHO -->
<!-- CABEÇALHO -->
<div class="cabecalho" id="cabecalho">
<!-- CABEÇALHO -->
<!-- CABEÇALHO -->
<!-- CABEÇALHO -->
<!-- #BeginEditable "cabecalho" -->
<?php
// EXIBIR IMAGEM LOGOMARCA PRINCIPAL
// EXIBIR IMAGEM LOGOMARCA PRINCIPAL
// EXIBIR IMAGEM LOGOMARCA PRINCIPAL
require_once($_SERVER['DOCUMENT_ROOT'] . '/cabecalho_so_logomarca.php');
// EXIBIR IMAGEM LOGOMARCA PRINCIPAL
// EXIBIR IMAGEM LOGOMARCA PRINCIPAL
// EXIBIR IMAGEM LOGOMARCA PRINCIPAL
?>
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<div class="frase_padrao" id="frase_padrao">
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- #BeginEditable "frase_padrao" -->
<h1>
<?php
echo (" $frase_padrao_do_site");
?>
</h1>
<!-- #EndEditable -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
</div>
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->
<!-- FRASE PADRÃO DO SITE (PRÉ DEFINIDA NUMA VARIÁVEL) -->

<!-- #EndEditable -->
<!-- CABEÇALHO -->
<!-- CABEÇALHO -->
<!-- CABEÇALHO -->
</div>
<!-- CABEÇALHO -->
<!-- CABEÇALHO -->
<!-- CABEÇALHO -->

<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->
<div class="menu_principal" id="menu_principal">
<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->
<!-- #BeginEditable "menu_principal" -->
<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . '/menu_principal.php');
?>
<!-- #EndEditable -->
<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->
</div>
<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->
<!-- MENU PRINCIPAL -->

<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (INÍCIO) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (INÍCIO) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (INÍCIO) -->
<div class="conteudo_central" id="conteudo_central">
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (INÍCIO) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (INÍCIO) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (INÍCIO) -->
<!-- #BeginEditable "conteudo_central_principal_e_dinamico_desta_pagina" -->
<?php
// SE PRECISAR VALIDAR USUÁRIO
// SE PRECISAR VALIDAR USUÁRIO
// SE PRECISAR VALIDAR USUÁRIO
require_once($_SERVER['DOCUMENT_ROOT'] . '/login_para_o_publico/valida_usuario.php');
// SE PRECISAR VALIDAR USUÁRIO
// SE PRECISAR VALIDAR USUÁRIO
// SE PRECISAR VALIDAR USUÁRIO
?>
<?php
// GEOLOCATION - PEDIR PERMISSAO PARA EXIBIR LOCALIZAÇÃO
// GEOLOCATION - PEDIR PERMISSAO PARA EXIBIR LOCALIZAÇÃO
// GEOLOCATION - PEDIR PERMISSAO PARA EXIBIR LOCALIZAÇÃO
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/geolocation___pedir_permissao_para_exibir_localizacao.php');
// GEOLOCATION - PEDIR PERMISSAO PARA EXIBIR LOCALIZAÇÃO
// GEOLOCATION - PEDIR PERMISSAO PARA EXIBIR LOCALIZAÇÃO
// GEOLOCATION - PEDIR PERMISSAO PARA EXIBIR LOCALIZAÇÃO
?>
<?php
// SE PRECISAR CHAMAR O CÓDIGO DO REGISTRO PRINCIPAL A PROCESSAR
// SE PRECISAR CHAMAR O CÓDIGO DO REGISTRO PRINCIPAL A PROCESSAR
// SE PRECISAR CHAMAR O CÓDIGO DO REGISTRO PRINCIPAL A PROCESSAR
//require_once('codigo_do_registro_a_processar.php');
// SE PRECISAR CHAMAR O CÓDIGO DO REGISTRO PRINCIPAL A PROCESSAR
// SE PRECISAR CHAMAR O CÓDIGO DO REGISTRO PRINCIPAL A PROCESSAR
// SE PRECISAR CHAMAR O CÓDIGO DO REGISTRO PRINCIPAL A PROCESSAR
?>
<?php
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (INÍCIO)
?>
<?php
if
($nivel_de_acesso == 'administrador')
{
echo "- Logado como admin.<hr>";
// MEMU DE ADMINISTRADOR
//echo("<hr/>$email_geral<hr/>");
?>
<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/include___anuncios___google_adsense.php');
?>
<?php
$nome_do_bot_1 = "Admin_1_linktudo";
$nome_de_usuario_do_bot_1 = "@linktudo_admin_1_bot";
$link_do_bot_1 = "t.me/linktudo_admin_1_bot";
$token_da_api_do_bot_1 = "5319732505:AAFdRAvMOZv3rKhL8DwXCymBqSfJOcuDHpI";

// chat_id TEM QUE PEGAR O LINK DO GRUPO E SUBSTITUIR "https://t.me/" POR "@"
//$chat_id = "@linktudo_ponto_com_ponto_br_2";
$chat_id = "@fujoes_da_marca_666";
$data_hora_atual_formato_brasileiro = date('d/m/Y H:i:s', strtotime($data_hora_atual));
?>
<?php
$response = $telegram->sendPhoto([
    'chat_id' => '@fujoes_da_marca_666', 
    'photo' => 'https://linktudo.com.br/links/267/panfleto-267.png', 
    'caption' => 'Veja que interessante'
]);

$messageId = $response->getMessageId();
echo ("<hr/>");
?>
<?php
echo "<hr>- FINAL DE Logado como admin.<hr>";
}
?>
<?php
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
// EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI EDITE AQUI (FIM)
?>
<!-- #EndEditable -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (FIM) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (FIM) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (FIM) -->
</div>
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (FIM) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (FIM) -->
<!-- CONTEUDO PRINCIPAL, PRÓPRIO OU EXCLUSIVO DESTA PÁGINA (FIM) -->


<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<div class="menu_principal_no_rodape" id="menu_principal_no_rodape">
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- #BeginEditable "menu_principal_no_rodape" -->
<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . '/menu_principal.php');
?>
<!-- #EndEditable -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
</div>
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->
<!-- SE PRECISAR DO MENU_PRINCIPAL NO FINAL DA PÁGINA -->

<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->
<div class="menu_voltar_a_pagina_inicial_ou_sair" id="menu_voltar_a_pagina_inicial_ou_sair">
<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->
<!-- #BeginEditable "voltar_ou_sair" -->
<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/menu_voltar_a_pagina_inicial_ou_sair.php');
?>
<!-- #EndEditable -->
<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->
</div>
<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->
<!-- VOLTAR OU SAIR -->

<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<div class="rodape" id="rodape">
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- #BeginEditable "rodape" -->
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/rodape.php');
?>
<!-- #EndEditable -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
</div>
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->
<!-- RODAPÉ COMUM A TODAS AS PÁGINAS -->

<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
</div>
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->
<!-- DIV (CONTAINER) PRINCIPAL DESTA PAGINA -->

<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
<div class="rodape_fixo" id="rodape_fixo">
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- #BeginEditable "rodape_fixo" -->
<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . '/rodape_fixo.php');
?>
<a href="#abrir_modal"><img src="https://linktudo.com.br/imagens/icones/botao_menu.png" alt="opções..." /></a>

<div id="abrir_modal" class="dialogo_modal"> 
<div>
<a class="fechar" title="Fechar" href="#fechar"> X </a>
<hr>
<?php
// URL PARA RECUPAÇÃO DE DADOS
$url = ('https://linktudo.com.br/menu_principal.php');

// ARMAZENA OS DADOS DA URL VIA CURL
$curl = curl_init();
$timeout = 0;
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
$conteudo_curl = curl_exec ($curl);
curl_close($curl);

//mostrando o conteúdo...
echo $conteudo_curl;
?>
<hr>
<a class="fechar" title="Fechar" href="#fechar"> X </a>
</div>
</div>
<!-- #EndEditable -->
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
</div>
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
<!-- RODAPÉ RODAPÉ FIXO -->
</body>
<?php
//  EXIBIÇÃO DE COMENTÁRIOS NO CODIGO FONTE SOBRE ESTE ARQUIVO (INDICADOS ABAIXO)
?>
<?php
echo ("<!--SOBRE ESTE ARQUIVO-->");
?>
<?php
echo ("<!--NOME: $nome_automatico_do_arquivo_atual-->");
?>
<?php
echo ("<!--VERSÃO: $versao_deste_arquivo-->");
?>
<?php
echo ("<!--AUTOR: $autor_deste_arquivo-->");
?>
<?php
echo ("<!--ATUALIZAÇÃO: $atualizacao_deste_arquivo-->");
?>
<?php
echo ("<!--DESCRIÇÃO: $descricao_deste_arquivo-->");
?>
<?php
echo ("<!--URL: $url_da_pagina_atual-->");
?>
</html>
<?php
// CHAMADA PARA O TEMPLATE DEPOIS DO CONTEÚDO PRINCIPAL DINÂMICO
// CHAMADA PARA O TEMPLATE DEPOIS DO CONTEÚDO PRINCIPAL DINÂMICO
// CHAMADA PARA O TEMPLATE DEPOIS DO CONTEÚDO PRINCIPAL DINÂMICO
require_once($_SERVER['DOCUMENT_ROOT'] . '/Templates/Templates_Por_Walmir/estrutura_basica_em_partes/template___depois_do_conteudo_principal.php');
// CHAMADA PARA O TEMPLATE DEPOIS DO CONTEÚDO PRINCIPAL DINÂMICO
// CHAMADA PARA O TEMPLATE DEPOIS DO CONTEÚDO PRINCIPAL DINÂMICO
// CHAMADA PARA O TEMPLATE DEPOIS DO CONTEÚDO PRINCIPAL DINÂMICO
?>
<?php
// ABRIR JANELA MODAL DE PUBLICIDADE
// ABRIR JANELA MODAL DE PUBLICIDADE
// ABRIR JANELA MODAL DE PUBLICIDADE
require_once($_SERVER['DOCUMENT_ROOT'] . '/links/abrir_modal_de_publicidade.php');
// ABRIR JANELA MODAL DE PUBLICIDADE
// ABRIR JANELA MODAL DE PUBLICIDADE
// ABRIR JANELA MODAL DE PUBLICIDADE
?>
<?php
// OB START
// OB START
// OB START
require_once($_SERVER['DOCUMENT_ROOT'] . '/configuracoes_gerais/ob_end_flush.php');
// OB START
// OB START
// OB START
?>