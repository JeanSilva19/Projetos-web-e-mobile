<?php
if(isset($_POST['submit']))
{
    //   print_r('Nome: ' . ($_POST['solicitante']);
    //   print_r('<br>');
    //   print_r('descrição: ' . ($_POST['descricao']);
    //   print_r('<br>');
    //   print_r('Data: ' . ($_POST['dataEhora']);
    //   print_r('<br>');
    //   print_r('Ocorrência: ' . ($_POST['Ocor']);

    include_once('testeJEAN.php');

    $solicitante = $_POST['solicitante'];
    $descricao = $_POST['descrição'];
    $dataEhora = $_POST['Data'];
    $Ocor = $_POST['ocorrência'];

    $result - mysqli_query($conexao, "INSERT INTO O.S(Solicitante,Descrição,dataEhora)VALUES ('$solicitante','$descricao','$Ocor')");

    $result - mysqli_query($conexao, "INSERT INTO Ocorrências(descrição_ocorrência)VALUES ('$Ocor')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar O.S</title>
    <link rel="stylesheet" href="CSS/Gerar.css">

    <script>
        window.alert("Bem-vindos");
        alert("2º página do projeto Teste!");
        </script>
</head>
<body> 
    <h1>Ordens de Serviços</h1>
    <br>   
    <a href="inicio.html"><button>Voltar</button></a>
    <div class="box">
        <form action="Gerar.php" method="POST">
            <fieldset>
                <legend><b>Nova O.S</b></legend>
                <br>
            <div>
                <strong>Solicitante</strong>
                <br>
                    <input name="solicitante" type="text" class="form-control" id="solicitante" placeholder="Nome e Contato"  size="100" maxlength="100">
            </div>               
                    <br>
            <div>
                    <div></div>
                <strong>Descrição</strong>
                <br>
                <textarea name="descricao" class="form-control" id="descricao" placeholder="Descreva a ocorrência, testes realizados e possiveis problemas" rows="10" cols="100" ></textarea>
            </div>
                <br>
                <div id="Ocor">
                <strong>Ocorrência</strong><br width="60%" class="text-center"><select class="form-control select2" name="entrada_idocorrencia" id="entrada_idocorrencia"><option value="0">Selecione Ocorrência</option><option value ="947">ADAPTADOR FURTADO</option><option value ="733">ADAPTADORES DE DISPLAYPORT / HDMI FURTADO</option><option value ="732">ADAPTADORES DE DISPLAYPORT / HDMI INOPERANTE</option><option value ="345">ADOBE ACROBAT READER</option><option value ="753">ANTENA FURTADA</option><option value ="343">ANTIVIRUS</option><option value ="340">ARMÁRIO FURTADO</option><option value ="189">ARMÁRIO INOPERANTE</option><option value ="351">ARMÁRIO SOLICITAÇÃO</option><option value ="728">ATENDIMENTOS DE VSAT SEM CONTRATO</option><option value ="837">AULA EM CASA - APP AULA EM CASA AMAZONAS</option><option value ="818">AULA EM CASA - AVA</option><option value ="840">AULA EM CASA - CADASTRO DE LOGINS MODERADORES</option><option value ="817">AULA EM CASA - CONVERSOR EXTERNO</option><option value ="834">AULA EM CASA - FALHA CONTEÚDO PROF</option><option value ="832">AULA EM CASA - FALHA OPERACIONAL TRANSMISSÃO</option><option value ="833">AULA EM CASA - FALHA PRODUÇÃO CONTEÚDO</option><option value ="822">AULA EM CASA - INFO EMAIL CONTATO</option><option value ="821">AULA EM CASA - INTERIOR</option><option value ="829">AULA EM CASA - LINK ALFA INOPERANTE</option><option value ="830">AULA EM CASA - LINK PRODAM METROMAO INOPERANTE</option><option value ="831">AULA EM CASA - LINK VD INOPERANTE</option><option value ="811">AULA EM CASA - MANO - ACESSO A CANAIS</option><option value ="824">AULA EM CASA - MANO - CONSUMO PLANO DADOS</option><option value ="814">AULA EM CASA - MANO - HORÁRIO AULAS</option><option value ="812">AULA EM CASA - MANO - INFORMAÇÃO BLOQUEIO </option><option value ="813">AULA EM CASA - MANO - INSTALAÇÃO</option><option value ="825">AULA EM CASA - MANO - OUTROS</option><option value ="810">AULA EM CASA - MANO - VÍDEO TRAVANDO</option><option value ="836">AULA EM CASA - MERENDA</option><option value ="828">AULA EM CASA - ORIENTAÇÕES SOBRE FREQUÊNCIA</option><option value ="827">AULA EM CASA - ORIENTAÇÕES SOBRE REPOSIÇÃO DE AULA</option><option value ="823">AULA EM CASA - OUTROS</option><option value ="820">AULA EM CASA - SABER MAIS</option><option value ="815">AULA EM CASA - SINTONIA TV</option><option value ="816">AULA EM CASA - TV A CABO</option><option value ="819">AULA EM CASA - YOUTUBE</option><option value ="941">BATERIA NOBREAK FURTADA</option><option value ="168">CABO DE ÁUDIO FURTADO</option><option value ="925">CABO DE FORÇA FURTADO</option><option value ="657">CABO DE FORÇA INOPERANTE</option><option value ="169">CABO DE VÍDEO FURTADO</option><option value ="336">CABO HDMI FURTADO</option><option value ="124">CABO HDMI INOPERANTE</option><option value ="976">CABO P2/RCA FURTADO</option><option value ="338">CABO P2P2- AUDIO FURTADO</option><option value ="333">CABO P2P2- AUDIO INOPERANTE</option><option value ="1055">CABO PS2/RCA(CABO Y) FURTADO</option><option value ="337">CABO RCA-AUDIO FURTADO</option><option value ="332">CABO RCA-AUDIO INOPERANTE</option><option value ="339">CABO USB FURTADO</option><option value ="230">CABO USB INOPERANTE</option><option value ="377">CABO VGA FURTADO</option><option value ="376">CABO VGA INOPERANTE</option><option value ="727">CABO XLR FURTADO</option><option value ="721">CABO XLR INOPERANTE</option><option value ="924">CADASTRO DE LOGIN NO SERVICE</option><option value ="931">CAIXA DE SOM FURTADA</option><option value ="930">CAIXA DE SOM INOPERANTE</option><option value ="335">CAMERA FURTADA</option><option value ="331">CAMERA INOPERANTE</option><option value ="892">Conector/Cabo DVI/HDMI Inoperante</option><option value ="893">Conector/Cabo DVI/VGA Inoperante</option><option value ="582">CORREÇÃO DE TIPO DE USO DO LOCAL</option><option value ="176">CPU FURTADO</option><option value ="198">CPU INOPERANTE</option><option value ="350">CRIAÇÃO DE PERFIL</option><option value ="218">ESTABILIZADOR FURTADO</option><option value ="2">ESTABILIZADOR INOPERANTE</option><option value ="115">ESTABILIZADOR SOLICITAÇÃO</option><option value ="715">FILTRO DE LINHA FURTADO</option><option value ="653">FILTRO DE LINHA INOPERANTE</option><option value ="248">FONTE FURTADA SALA </option><option value ="548">FONTE IDU FURTADA</option><option value ="935">FONTE IPTV.BOX FURTADA</option><option value ="934">FONTE IPTV.BOX INOPERANTE</option><option value ="784">FONTE NETBOX FURTADA</option><option value ="985">FURTO DE HASTE CENTRAL</option><option value ="986">FURTO DE HASTE LATERAL</option><option value ="371">HEADSET FURTADO</option><option value ="370">HEADSET INOPERANTE</option><option value ="788">HOME THEATER FURTADO</option><option value ="789">HOME THEATER INOPERANTE</option><option value ="974">HUB USB FURTADO</option><option value ="894">HUB USB INOPERANTE</option><option value ="58">IMPLANTAÇÃO DE KIT SALA</option><option value ="123">IMPLANTAÇÃO DE KIT VSAT</option><option value ="149">IMPRESSORA FURTADA</option><option value ="12">IMPRESSORA INOPERANTE</option><option value ="34">IMPRESSORA SOLICITAÇÃO</option><option value ="356">INSTALAÇÃO DE KIT DE SALA</option><option value ="180">INSTALAÇÃO DE KIT DE VSAT</option><option value ="679">INSTALAÇÃO DE PONTO LÓGICO</option><option value ="372">INTERNET INOPERANTE</option><option value ="76">INVENTÁRIO DOS EQUIPAMENTOS - SALA</option><option value ="536">INVENTÁRIO DOS EQUIPAMENTOS - VSAT</option><option value ="726">IP.TV BOX FURTADO</option><option value ="720">IP.TV BOX INOPERANTE</option><option value ="342">IPTV</option><option value ="752">LNB FURTADO</option><option value ="787">LOCAÇÃO DE IMPRESSORA</option><option value ="163">LOGIN E-MAIL</option><option value ="236">MANUTENÇÃO PREVENTIVA</option><option value ="617">MANUTENÇÃO PREVENTIVA VSAT</option><option value ="898">Matrícula 2021- Orientação Código Verificação</option><option value ="899">Matrícula 2021- Orientação sobre calendário de matrícula</option><option value ="906">Matrícula 2021- Orientação sobre Confirmação da Matrícula</option><option value ="903">Matrícula 2021- Orientação sobre documentos necessários para matrícula</option><option value ="901">Matrícula 2021- Orientação sobre local de matrícula presencial</option><option value ="897">Matrícula 2021- Orientação sobre matrícula</option><option value ="908">Matrícula 2021- Orientação sobre matrícula Outros</option><option value ="905">Matrícula 2021- Orientação sobre matrícula para EJA</option><option value ="904">Matrícula 2021- Orientação sobre matricular aluno estrangeiro</option><option value ="902">Matrícula 2021- Orientação sobre redefinição de senha</option><option value ="900">Matrícula 2021- Orientação sobre transferência</option><option value ="919">Matrícula 2021- Suporte técnico atendentes</option><option value ="907">Matrícula 2021- Transferência para Cadastramento de aluno</option><option value ="920">Matrícula 2021- Treinamento</option><option value ="113">MICROFONE FURTADO</option><option value ="15">MICROFONE INOPERANTE</option><option value ="148">MODEM FURTADO</option><option value ="16">MODEM INOPERANTE</option><option value ="194">MONITOR FURTADO</option><option value ="219">MONITOR INOPERANTE</option><option value ="143">MONITOR SOLICITAÇÃO</option><option value ="209">MONITORAMENTO</option><option value ="225">MOUSE FURTADO</option><option value ="17">MOUSE INOPERANTE</option><option value ="729">MUDANÇA DE FREQUÊNCIA VSAT</option><option value ="348">NAVEGADOR INTERNET</option><option value ="224">NETBOX FURTADO</option><option value ="203">NETBOX INOPERANTE</option><option value ="334">NOBREAK FURTADO</option><option value ="18">NOBREAK INOPERANTE</option><option value ="88">NOBREAK SOLICITAÇÃO</option><option value ="150">NOTEBOOK FURTADO</option><option value ="73">NOTEBOOK INOPERANTE</option><option value ="751">OMT FURTADO</option><option value ="344">OPEN OFICCE</option><option value ="341">OUTRAS SOLICITAÇÕES</option><option value ="554">PERIFÉRICOS FURTADOS</option><option value ="353">PORTAL</option><option value ="652">PREVISÃO DE ATENDIMENTO</option><option value ="681">PREVISÃO DE ATENDIMENTO VSAT</option><option value ="1053">PRIMEIRA ENTREGA DE IMPRESSORA</option><option value ="552">RÁDIO FURTADO</option><option value ="891">REMOÇÃO DE ELETRÔNICOS VSAT</option><option value ="358">REMOÇÃO DE KIT DE SALA</option><option value ="359">REMOÇÃO DE KIT DE SALA PARA DESATIVAÇÃO</option><option value ="179">REMOÇÃO DE KIT DE VSAT</option><option value ="357">REMOÇÃO TEMPORÁRIA DE KIT DE SALA</option><option value ="354">REMOÇÃO TEMPORÁRIA DE KIT DE VSAT</option><option value ="380">REMOÇÃO TEMPORÁRIA DE KIT DE VSAT PARA EMPRESA</option><option value ="138">REMONTAGEM DE KIT DE SALA</option><option value ="355">REMONTAGEM DE KIT VSAT</option><option value ="949">REPOSIÇÃO DE ADAPTADOR FURTADO</option><option value ="950">REPOSIÇÃO DE ADAPTADOR FURTADO EMPRESA</option><option value ="951">REPOSIÇÃO DE ADAPTADOR SINISTRO</option><option value ="952">REPOSIÇÃO DE ADAPTADOR SINISTRO EMPRESA</option><option value ="734">REPOSIÇÃO DE ADAPTADORES DE DISPLAYPORT / HDMI</option><option value ="963">REPOSIÇÃO DE ADAPTADORES DE DISPLAYPORT / HDMI FURTADO</option><option value ="964">REPOSIÇÃO DE ADAPTADORES DE DISPLAYPORT / HDMI FURTADO EMPRESA</option><option value ="683">REPOSIÇÃO DE ARMÁRIO FURTADO</option><option value ="775">REPOSIÇÃO DE ARMÁRIO FURTADO EMPRESA</option><option value ="942">REPOSIÇÃO DE BATERIA NOBREAK FURTADA</option><option value ="943">REPOSIÇÃO DE BATERIA NOBREAK FURTADA EMPRESA</option><option value ="945">REPOSIÇÃO DE BATERIA NOBREAK SINISTRO</option><option value ="946">REPOSIÇÃO DE BATERIA NOBREAK SINISTRO EMPRESA</option><option value ="583">REPOSIÇÃO DE CABO DE ÁUDIO FURTADO</option><option value ="688">REPOSIÇÃO DE CABO DE ÁUDIO FURTADO EMPRESA</option><option value ="955">REPOSIÇÃO DE CABO DE FORÇA FURTADO</option><option value ="956">REPOSIÇÃO DE CABO DE FORÇA FURTADO EMPRESA</option><option value ="584">REPOSIÇÃO DE CABO DE VÍDEO FURTADO</option><option value ="585">REPOSIÇÃO DE CABO HDMI FURTADO</option><option value ="850">REPOSIÇÃO DE CABO HDMI SINISTRO</option><option value ="868">REPOSIÇÃO DE CABO HDMI SINISTRO EMPRESA</option><option value ="978">REPOSIÇÃO DE CABO P2/RCA FURTADO</option><option value ="977">REPOSIÇÃO DE CABO P2/RCA FURTADO EMPRESA</option><option value ="933">REPOSIÇÃO DE CABO P2P2</option><option value ="586">REPOSIÇÃO DE CABO P2P2 - AUDIO FURTADO</option><option value ="851">REPOSIÇÃO DE CABO P2P2 AUDIO SINISTRO</option><option value ="869">REPOSIÇÃO DE CABO P2P2 AUDIO SINISTRO EMPRESA</option><option value ="1056">REPOSIÇÃO DE CABO PS2/RCA(CABO Y) FURTADO</option><option value ="1057">REPOSIÇÃO DE CABO PS2/RCA(CABO Y) FURTADO EMPRESA</option><option value ="932">REPOSIÇÃO DE CABO RCA</option><option value ="771">REPOSIÇÃO DE CABO RCA - AUDIO FURTADO</option><option value ="651">REPOSIÇÃO DE CABO USB FURTADO</option><option value ="587">REPOSIÇÃO DE CABO VGA FURTADO</option><option value ="724">REPOSIÇÃO DE CABO XLR FURTADO</option><option value ="981">REPOSIÇÃO DE CABO XLR FURTADO EMPRESA</option><option value ="725">REPOSIÇÃO DE CABO XLR FURTADO VAT</option><option value ="1004">REPOSIÇÃO DE CABO XLR SINISTRO EMPRESA</option><option value ="929">REPOSIÇÃO DE CAIXA DE SOM</option><option value ="928">REPOSIÇÃO DE CAIXA DE SOM FURTADA</option><option value ="650">REPOSIÇÃO DE CAMERA FURTADA</option><option value ="776">REPOSIÇÃO DE CÂMERA FURTADA EMPRESA</option><option value ="588">REPOSIÇÃO DE CPU FURTADO</option><option value ="971">REPOSIÇÃO DE CPU FURTADO EMPRESA</option><option value ="854">REPOSIÇÃO DE CPU SINISTRO</option><option value ="872">REPOSIÇÃO DE CPU SINISTRO EMPRESA</option><option value ="644">REPOSIÇÃO DE ESTABILIZADOR FURTADO</option><option value ="855">REPOSIÇÃO DE ESTABILIZADOR SINISTRO</option><option value ="873">REPOSIÇÃO DE ESTABILIZADOR SINISTRO EMPRESA</option><option value ="772">REPOSIÇÃO DE FILTRO DE LINHA FURTADO</option><option value ="716">REPOSIÇÃO DE FILTRO DE LINHA FURTADO EMPRESA</option><option value ="856">REPOSIÇÃO DE FILTRO DE LINHA SINISTRO</option><option value ="874">REPOSIÇÃO DE FILTRO DE LINHA SINISTRO EMPRESA</option><option value ="710">REPOSIÇÃO DE FONTE DO MODEM EMPRESA</option><option value ="589">REPOSIÇÃO DE FONTE FURTADA SALA</option><option value ="590">REPOSIÇÃO DE FONTE IDU FURTADA</option><option value ="958">REPOSIÇÃO DE FONTE IDU FURTADA EMPRESA</option><option value ="937">REPOSIÇÃO DE FONTE IPTV.BOX FURTADA</option><option value ="936">REPOSIÇÃO DE FONTE IPTV.BOX FURTADA EMPRESA</option><option value ="987">REPOSIÇÃO DE HASTE CENTRAL</option><option value ="988">REPOSIÇÃO DE HASTE CENTRAL EMPRESA</option><option value ="989">REPOSIÇÃO DE HASTE LATERAL</option><option value ="990">REPOSIÇÃO DE HASTE LATERAL EMPRESA</option><option value ="649">REPOSIÇÃO DE HEADSET FURTADO</option><option value ="790">REPOSIÇÃO DE HOME THEATER FURTADO</option><option value ="1005">REPOSIÇÃO DE HUB SINISTRO EMPRESA</option><option value ="975">REPOSIÇÃO DE HUB USB FURTADO EMPRESA</option><option value ="581">REPOSIÇÃO DE IMPRESSORA</option><option value ="968">REPOSIÇÃO DE IMPRESSORA DESCARTE EMPRESA</option><option value ="684">REPOSIÇÃO DE IMPRESSORA FURTADA</option><option value ="778">REPOSIÇÃO DE IMPRESSORA FURTADA EMPRESA</option><option value ="1002">REPOSIÇÃO DE IMPRESSORA SINISTRO</option><option value ="1003">REPOSIÇÃO DE IMPRESSORA SINISTRO EMPRESA</option><option value ="687">REPOSIÇÃO DE IMPRESSORA SOLICITAÇÃO</option><option value ="722">REPOSIÇÃO DE IP.TV BOX FURTADO</option><option value ="723">REPOSIÇÃO DE IP.TV BOX FURTADO EMPRESA</option><option value ="857">REPOSIÇÃO DE IP.TV BOX SINISTRO</option><option value ="875">REPOSIÇÃO DE IP.TV BOX SINISTRO EMPRESA</option><option value ="711">REPOSIÇÃO DE LNB EMPRESA</option><option value ="773">REPOSIÇÃO DE LNB FURTADO</option><option value ="781">REPOSIÇÃO DE LNB FURTADO EMPRESA</option><option value ="529">REPOSIÇÃO DE MATERIAL FURTADO</option><option value ="553">REPOSIÇÃO DE MATERIAL FURTADO VSAT</option><option value ="648">REPOSIÇÃO DE MICROFONE FURTADO</option><option value ="982">REPOSIÇÃO DE MICROFONE SINISTRO</option><option value ="983">REPOSIÇÃO DE MICROFONE SINISTRO EMPRESA</option><option value ="708">REPOSIÇÃO DE MODEM EMPRESA</option><option value ="591">REPOSIÇÃO DE MODEM FURTADO</option><option value ="782">REPOSIÇÃO DE MODEM FURTADO EMPRESA</option><option value ="647">REPOSIÇÃO DE MONITOR FURTADO</option><option value ="592">REPOSIÇÃO DE MOUSE FURTADO</option><option value ="886">REPOSIÇÃO DE MOUSE SINISTRO</option><option value ="887">REPOSIÇÃO DE MOUSE SINISTRO EMPRESA</option><option value ="593">REPOSIÇÃO DE NETBOX FURTADO</option><option value ="701">REPOSIÇÃO DE NETBOX FURTADO EMPRESA</option><option value ="860">REPOSIÇÃO DE NETBOX SINISTRO</option><option value ="878">REPOSIÇÃO DE NETBOX SINISTRO EMPRESA</option><option value ="645">REPOSIÇÃO DE NOBREAK FURTADO</option><option value ="703">REPOSIÇÃO DE NOBREAK FURTADO EMPRESA</option><option value ="862">REPOSIÇÃO DE NOBREAK SINISTRO</option><option value ="880">REPOSIÇÃO DE NOBREAK SINISTRO EMPRESA</option><option value ="594">REPOSIÇÃO DE NOTEBOOK FURTADO</option><option value ="704">REPOSIÇÃO DE NOTEBOOK FURTADO EMPRESA</option><option value ="712">REPOSIÇÃO DE OMT EMPRESA</option><option value ="774">REPOSIÇÃO DE OMT FURTADO</option><option value ="595">REPOSIÇÃO DE PERIFÉRICOS FURTADOS</option><option value ="709">REPOSIÇÃO DE RADIO EMPRESA</option><option value ="596">REPOSIÇÃO DE RÁDIO FURTADO</option><option value ="799">REPOSIÇÃO DE ROTEADOR FURTADO</option><option value ="798">REPOSIÇÃO DE ROTEADOR FURTADO EMPRESA</option><option value ="597">REPOSIÇÃO DE SWITCH FURTADO</option><option value ="865">REPOSIÇÃO DE SWITCH SINISTRO</option><option value ="883">REPOSIÇÃO DE SWITCH SINISTRO EMPRESA</option><option value ="598">REPOSIÇÃO DE TECLADO FURTADO</option><option value ="866">REPOSIÇÃO DE TECLADO SINISTRO</option><option value ="884">REPOSIÇÃO DE TECLADO SINISTRO EMPRESA</option><option value ="580">REPOSIÇÃO DE TV</option><option value ="965">REPOSIÇÃO DE TV DESCARTE CLIENTE</option><option value ="967">REPOSIÇÃO DE TV DESCARTE EMPRESA</option><option value ="707">REPOSIÇÃO DE TV EMPRESA</option><option value ="599">REPOSIÇÃO DE TV FURTADA</option><option value ="783">REPOSIÇÃO DE TV FURTADA EMPRESA</option><option value ="867">REPOSIÇÃO DE TV SINISTRO</option><option value ="643">REPOSIÇÃO DE ULTRATOP FURTADO</option><option value ="779">REPOSIÇÃO DE ULTRATOP FURTADO EMPRESA</option><option value ="853">REPOSIÇÃO DE VGA SINISTRO</option><option value ="871">REPOSIÇÃO DE VGA SINISTRO EMPRESA</option><option value ="646">REPOSIÇÃO DE WEBCAM FURTADA</option><option value ="780">REPOSIÇÃO DE WEBCAM FURTADA EMPRESA</option><option value ="1000">REPOSIÇÃO DE WEBCAM SINISTRO</option><option value ="1001">REPOSIÇÃO DE WEBCAM SINISTRO EMPRESA</option><option value ="692">REPOSIÇÃO DE CABO DE ÁUDIO RCA FURTADO EMPRESA </option><option value ="689">REPOSIÇÃO DE CABO DE VÍDEO FURTADO EMPRESA</option><option value ="690">REPOSIÇÃO DE CABO HDMI FURTADO EMPRESA</option><option value ="691">REPOSIÇÃO DE CABO P2P2 AUDIO FURTADO EMPRESA </option><option value ="696">REPOSIÇÃO DE ESTABILIZADOR FURTADO EMPRESA </option><option value ="702">REPOSIÇÃO DE FONTE DE NETBOX EMPRESA</option><option value ="697">REPOSIÇÃO DE HEADSET FURTADO EMPRESA </option><option value ="698">REPOSIÇÃO DE MICROFONE FURTADO EMPRESA </option><option value ="699">REPOSIÇÃO DE MONITOR FURTADO EMPRESA </option><option value ="700">REPOSIÇÃO DE MOUSE FURTADO EMPRESA </option><option value ="705">REPOSIÇÃO DE SWITCH FURTADO EMPRESA </option><option value ="706">REPOSIÇÃO DE TECLADO FURTADO EMPRESA</option><option value ="693">REPOSIÇÃO DE USB FURTADO EMPRESA </option><option value ="694">REPOSIÇÃO DE VGA FURTADO EMPRESA </option><option value ="844">RETORNO ÀS AULAS - FALTA DE EPCs</option><option value ="843">RETORNO ÀS AULAS - FALTA DE EPIs</option><option value ="842">RETORNO ÀS AULAS - INFORMAÇÕES GERAIS</option><option value ="841">RETORNO ÀS AULAS - INFORMAÇÕES PROTOCOLO DE SAÚDE</option><option value ="848">RETORNO ÀS AULAS - ORIENTAÇÕES SASI COVID</option><option value ="845">RETORNO ÀS AULAS - OUTROS</option><option value ="796">ROTEADOR FURTADO</option><option value ="797">ROTEADOR INOPERANTE</option><option value ="352">SCA</option><option value ="375">SEDUC INFO</option><option value ="948">SINISTRO DE ADAPTADOR </option><option value ="756">SINISTRO DE ANTENA</option><option value ="761">SINISTRO DE ARMÁRIO</option><option value ="944">SINISTRO DE BATERIA NOBREAK</option><option value ="659">SINISTRO DE CABO DE ÁUDIO</option><option value ="660">SINISTRO DE CABO DE VÍDEO</option><option value ="661">SINISTRO DE CABO HDMI</option><option value ="662">SINISTRO DE CABO P2P2 AUDIO</option><option value ="762">SINISTRO DE CABO XLR</option><option value ="763">SINISTRO DE CAMERA</option><option value ="666">SINISTRO DE CPU</option><option value ="667">SINISTRO DE ESTABILIZADOR</option><option value ="764">SINISTRO DE FILTRO DE LINHA</option><option value ="785">SINISTRO DE FONTE DE NETBOX</option><option value ="770">SINISTRO DE FONTE IDU</option><option value ="745">SINISTRO DE FUSO</option><option value ="743">SINISTRO DE HASTE CENTRAL</option><option value ="744">SINISTRO DE HASTE LATERAL</option><option value ="668">SINISTRO DE HEADSET</option><option value ="791">SINISTRO DE HOME THEATER</option><option value ="748">SINISTRO DE IMPRESSORA</option><option value ="765">SINISTRO DE IP.TV BOX</option><option value ="755">SINISTRO DE LNB</option><option value ="669">SINISTRO DE MICROFONE</option><option value ="769">SINISTRO DE MODEM</option><option value ="670">SINISTRO DE MODEM</option><option value ="671">SINISTRO DE MONITOR</option><option value ="672">SINISTRO DE MOUSE</option><option value ="673">SINISTRO DE NETBOX</option><option value ="674">SINISTRO DE NOBREAK</option><option value ="675">SINISTRO DE NOTEBOOK</option><option value ="754">SINISTRO DE OMT</option><option value ="742">SINISTRO DE PARÁBOLA</option><option value ="676">SINISTRO DE RADIO</option><option value ="663">SINISTRO DE RCA AUDIO</option><option value ="795">SINISTRO DE ROTEADOR</option><option value ="677">SINISTRO DE SWITCH</option><option value ="973">SINISTRO DE SWITCH</option><option value ="678">SINISTRO DE TECLADO</option><option value ="766">SINISTRO DE TV</option><option value ="767">SINISTRO DE ULTRATOP</option><option value ="664">SINISTRO DE USB</option><option value ="665">SINISTRO DE VGA</option><option value ="768">SINISTRO DE WEBCAM</option><option value ="347">SISTEMA OPERACIONAL</option><option value ="984">SOLICITAÇÃO DE CONFIGURAÇÃO TERCEIROS</option><option value ="993">SUBSTITUIÇÃO DE IMPRESSORA</option><option value ="994">SUBSTITUIÇÃO DE IMPRESSORA EMPRESA</option><option value ="253">SWITCH FURTADO</option><option value ="23">SWITCH INOPERANTE</option><option value ="177">TECLADO FURTADO</option><option value ="24">TECLADO INOPERANTE</option><option value ="849">Telessaúde – Atualização de IPTV </option><option value ="939">TESTE INTERNO DE EQUIPAMENTOS DE SALA</option><option value ="938">TESTE INTERNO DE EQUIPAMENTOS DE VSAT</option><option value ="14">TONNER SOLICITAÇÃO</option><option value ="381">TRANSFERÊNCIA DE EQUIPAMENTO ENTRE SALAS</option><option value ="972">TRANSMISSÃO DE EVENTOS EXTERNOS</option><option value ="404">TROCA DE EQUIPAMENTOS DA ANTENA DA HUGHES PARA VIA DIRETA</option><option value ="193">TV FURTADA</option><option value ="25">TV INOPERANTE</option><option value ="151">TV SOLICITAÇÃO</option><option value ="642">ULTRATOP FURTADO</option><option value ="641">ULTRATOP INOPERANTE</option><option value ="346">VNC</option><option value ="129">VSAT INOPERANTE</option><option value ="57">WEBCAM FURTADA</option><option value ="29">WEBCAM INOPERANTE</option></select></br>
            </div>
            <br>
            <input type="submit" name="submit" id="submit">
        </fieldset>
</body>
</html>