<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
	include_once('conexaoRel.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
	

		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'MODELO DE RELATÓRIO DE REGISTRO DAS ATIVIDADES DE ENFERMAGEM.xls';
		// Inserir uma nova geração de Relatório no banco de dados:
		$periodo 		   = $_POST['periodo'];
		$ano		       = $_POST['ano'];
		$status  		   = $_POST['status'];
		$nome_profissional = $_POST['nome_profissional'];

		$result_msg_contatos = "INSERT INTO relatorio (periodo,ano,status,nome_profissional) VALUES ('".$periodo."', '".$ano."', '".$status."','".$nome_profissional."')";
		$inserted = mysqli_query($conn , $result_msg_contatos);

	
		$htmljaneirojunho = '
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

		<html>
		<head>
			
			<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
			<title></title>
			<meta name="generator" content="LibreOffice 7.2.6.2 (Linux)"/>
			<meta name="author" content="professor"/>
			<meta name="created" content="2009-04-16T08:32:48.390000000"/>
			<meta name="changedby" content="IFAL"/>
			<meta name="changed" content="2015-12-29T13:20:36"/>
			<meta name="Info 1" content=""/>
			<meta name="Info 2" content=""/>
			<meta name="Info 3" content=""/>
			<meta name="Info 4" content=""/>
			
			<style type="text/css">
				body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Arial"; font-size:x-small }
				a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
				a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
				comment { display:none;  } 
			</style>
			
		</head>

		<body>
		<table align="left" cellspacing="0" border="0">
			<colgroup width="264"></colgroup>
			<colgroup width="64"></colgroup>
			<colgroup width="51"></colgroup>
			<colgroup width="63"></colgroup>
			<colgroup width="51"></colgroup>
			<colgroup width="63"></colgroup>
			<colgroup width="51"></colgroup>
			<colgroup width="63"></colgroup>
			<colgroup width="51"></colgroup>
			<colgroup width="63"></colgroup>
			<colgroup width="51"></colgroup>
			<colgroup width="63"></colgroup>
			<colgroup width="51"></colgroup>
			<colgroup width="63"></colgroup>
			<colgroup width="51"></colgroup>
			<tr>
				<td height="20" align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td colspan=11 height="20" align="center" valign=middle><b><font color="#000000">Instituto Federal de Alagoas – IFAL</font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td colspan=11 height="20" align="center" valign=middle><b><font color="#000000">Pró-Reitoria de Ensino – PROEN</font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td colspan=11 height="20" align="center" valign=middle><b><font color="#000000">Diretoria de Políticas Estudantis – DPE</font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td colspan=11 height="20" align="center" valign=middle><b><font color="#000000">CÂMPUS ...</font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td height="20" align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td height="20" align="center"><b><font color="#000000"><br></font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td colspan=11 height="20" align="center" valign=middle><b><font color="#000000">RELATÓRIO DE REGISTRO DAS ATIVIDADES/AÇÕES DESENVOLVIDAS NA ASSISTÊNCIA ESTUDANTIL</font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td height="21" align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=15 height="21" align="center" valign=middle><b><font color="#000000">*A/A = Atendimentos e ações</font></b></td>
				</tr>
			<tr>
				<td height="20" align="left" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 height="20" align="center" valign=middle bgcolor="#339966"><b><font color="#000000">ENFERMAGEM</font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="40" align="center"><b><font color="#000000">PARTICIPAÇÃO EM<br>ATIVIDADE/AÇÃO</font></b></td>
				<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">JAN</font></b></td>
				<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">FEV</font></b></td>
				<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">MAR</font></b></td>
				<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">ABR</font></b></td>
				<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">MAIO</font></b></td>
				<td style="border-left: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">JUNHO</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696"><b><font color="#000000">TOTAL</font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="34" align="justify" bgcolor="#FFFFFF"><font color="#000000">Participação em capacitações/eventos promovidos pelo Instituto</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="34" align="justify" bgcolor="#FFFFFF"><font color="#000000">Participação em capacitações/eventos<br>externos</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="justify"><font color="#000000">Participação em comissões</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="justify"><font color="#000000">Relatórios / Documentos elaborados</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="justify"><font color="#000000">Planejamento de ações</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="justify"><font color="#000000">Reuniões do grupo de Enfermagem</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="justify"><font color="#000000">Reuniões da Equipe de AE</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="justify"><font color="#000000">Reuniões Institucionais internas</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" height="19" align="justify"><font color="#000000">Reuniões Institucionais externas</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="justify"><font color="#000000">Reunião de pais (responsáveis)</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="34" align="left"><font color="#000000">Participação em Projetos de Pesquisa<br>e/ou extensão</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="left" bgcolor="#969696"><font color="#000000">TOTAL</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td height="19" align="left"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center" valign=middle><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=15 height="20" align="center" bgcolor="#339966"><b><font color="#000000">          CÔMPUTO GERAL DOS PROGRAMAS</font></b></td>
				</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="58" align="center" valign=middle><b><font size=4 color="#000000">ATIVIDADE/AÇÃO</font></b></td>
				<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">JAN</font></b></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">FEV</font></b></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">MAR</font></b></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">ABR</font></b></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">MAIO</font></b></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">JUNHO</font></b></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#969696"><b>TOTAL</b></td>
				</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696">Nº de<br>A/A</td>
				<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696">N° de alunos</td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="left" valign=middle><b><font color="#000000">Programa de Assistência à Saúde</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#969696"><br></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#969696"><br></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="34" align="left"><b><font color="#000000">Programa de Prevenção a Fatores<br>de Risco e Promoção à Saúde</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#969696"><br></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" bgcolor="#969696"><br></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" bgcolor="#969696"><font color="#000000">TOTAL</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" bgcolor="#969696"><font color="#000000"><br></font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" bgcolor="#FFFF00" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" bgcolor="#FFFF00" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
			</tr>
			<tr>
				<td height="20" align="justify"><font color="#000000"><br></font></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="center" valign=middle><b><font color="#000000"><br></font></b></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="54" align="center" valign=middle><b><font size=4 color="#000000">ATIVIDADE/AÇÃO<br>DESENVOLVIDAS</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">JAN</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">FEV</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">MAR</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">ABR</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">MAIO</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">JUNHO</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#969696"><b><font color="#000000">TOTAL</font></b></td>
				</tr>
			<tr>
				<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font color="#000000">N° de<br>alunos</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696"><font color="#000000">Nº de<br>A/A</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696"><font color="#000000">N° de alunos</font></td>
			</tr>';

			$caso = "SELECT casocomum FROM casoscomuns";
			$casos = mysqli_query($conn , $caso);

			
			while($casows = $casos->fetch_assoc()){
				$htmljaneirojunho .= 
				'
				<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="57" align="justify"><font color="#000000">'.$casows["casocomum"].'</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				</tr>
				';

				;
			}


			$htmljaneirojunho .='
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle bgcolor="#969696"><b><font color="#000000">TOTAL</font></b></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#969696" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFF00" sdval="0" sdnum="1033;"><font color="#000000">0</font></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=15 height="20" align="left" valign=middle><b><font color="#000000">Observações, justificativas, dificuldades:</font></b></td>
				</tr>
			<tr>
				<td style="border-left: 1px solid #000000" height="19" align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td style="border-right: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-left: 1px solid #000000" height="19" align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td style="border-right: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-left: 1px solid #000000" height="19" align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td align="center"><font color="#000000"><br></font></td>
				<td style="border-right: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td height="19" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td style="border-bottom: 1px solid #000000" align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
			<tr>
				<td height="19" align="left"><font color="#000000"><br></font></td>
				<td colspan=9 align="center" valign=middle><font color="#000000">Responsável pela informação</font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
				<td align="left"><font color="#000000"><br></font></td>
			</tr>
		</table>
		<img src="MODELO DE RELATÓRIO DE REGISTRO DAS ATIVIDADES DE ENFERMAGEM_html_76a15f3085493271.png" width=183 height=76>
		<br clear=left>
		<!-- ************************************************************************** -->
		</body>

		</html>

		';
		
		
		// A partir daqui introduzir os dados
		// Criamos uma tabela HTML com o formato da planilha
		/*$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Planilha Mensagem de Contatos</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Sintomas</b></td>';
		$html .= '<td><b>Turma</b></td>';
		$html .= '<td><b>Data</b></td>';
		$html .= '</tr>';
		*/
		//Selecionar todos os itens da tabela 
		/*$result_msg_contatos = "SELECT * FROM consulta";
		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);

		
		while($row_msg_contatos = $resultado_msg_contatos->fetch_assoc()){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome_paciente"].'</td>';
			$html .= '<td>'.$row_msg_contatos["sintomas"].'</td>';
			$html .= '<td>'.$row_msg_contatos["turma"].'</td>';
			$data = date('d/m/Y H:i:s',strtotime($row_msg_contatos["data_consulta"]));
			$html .= '<td>'.$data.'</td>';
			$html .= '</tr>';
			;
		}*/

		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $htmljaneirojunho;
		
		exit;
		?>

			
	</body>
</html>