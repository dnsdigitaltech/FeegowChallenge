/***************************** VReport *****************************
 *
 * Relat�rio em HTML com cabe�alho e rodap� para impress�o
 *
 * Criado por Vin�cius Nunes Lage
 * Contatos: op.vini@gmail.com ou http://www.isecretaria.net/vinicius
 * Direitos reservados desde 2009
 * Este script pode ser utilizado por qualquer pessoa para qualquer fim
 * S� � necess�rio que cite no sistema que voc� utiliza o VReport
 *
 *********************************************************************/

var _VReportTable = '<table id="_VReportTable"><thead><tr><th id="_VReportTHead">&nbsp;</th></tr></thead><tfoot><tr><th id="_VReportTFoot">&nbsp;</th></tr></tfoot><tbody><tr><td valign="top"><div id="_VReportContentClient"></div></td></tr></tbody></table>';
var _VReportContentClient = document.getElementById('_VReportContent').innerHTML;
document.getElementById('_VReportContent').innerHTML = _VReportTable;
document.getElementById('_VReportContentClient').innerHTML = _VReportContentClient;
document.getElementById('_VReportTHead').style.height = document.getElementById('_VReportHeader').clientHeight + "px";
document.getElementById('_VReportTFoot').style.height = document.getElementById('_VReportFooter').clientHeight + "px";