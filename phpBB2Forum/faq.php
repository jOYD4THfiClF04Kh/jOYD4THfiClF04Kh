<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="./index.php?sid=24ce6187166d80500d60cf0c4df8efc7" title="hutten.be Forumindex" />
<link rel="search" href="./search.php?sid=24ce6187166d80500d60cf0c4df8efc7" title="Zoeken" />
<link rel="help" href="./faq.php?sid=24ce6187166d80500d60cf0c4df8efc7" title="FAQ" />
<link rel="author" href="./memberlist.php?sid=24ce6187166d80500d60cf0c4df8efc7" title="Gebruikerslijst" />

<title>hutten.be :: FAQ</title>
<!-- link rel="stylesheet" href="templates/subSilver/subSilver.css" type="text/css" -->
<style type="text/css">
<!--
/*
  The original subSilver Theme for phpBB version 2+
  Created by subBlue design
  http://www.subBlue.com

  NOTE: These CSS definitions are stored within the main page body so that you can use the phpBB2
  theme administration centre. When you have finalised your style you could cut the final CSS code
  and place it in an external file, deleting this section to save bandwidth.
*/

/* General page style. The scroll bar colours only visible in IE5.5+ */
body {
        background-color: #E5E5E5;
        scrollbar-face-color: #DEE3E7;
        scrollbar-highlight-color: #FFFFFF;
        scrollbar-shadow-color: #DEE3E7;
        scrollbar-3dlight-color: #D1D7DC;
        scrollbar-arrow-color:  #006699;
        scrollbar-track-color: #EFEFEF;
        scrollbar-darkshadow-color: #98AAB1;
}

/* General font families for common tags */
font,th,td,p { font-family: Verdana, Arial, Helvetica, sans-serif }
a:link,a:active,a:visited { color : #006699; }
a:hover                { text-decoration: underline; color : #DD6900; }
hr        { height: 0px; border: solid #D1D7DC 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline        { background-color: #FFFFFF; border: 1px #98AAB1 solid; }

/* This is the outline round the main forum tables */
.forumline        { background-color: #FFFFFF; border: 2px #006699 solid; }

/* Main table cell colours and backgrounds */
td.row1        { background-color: #EFEFEF; }
td.row2        { background-color: #DEE3E7; }
td.row3        { background-color: #D1D7DC; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
                background-color: #FFFFFF;
                background-image: url(templates/subSilver/images/cellpic2.jpg);
                background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th        {
        color: #FFA34F; font-size: 11px; font-weight : bold;
        background-color: #006699; height: 25px;
        background-image: url(templates/subSilver/images/cellpic3.gif);
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
                        background-image: url(templates/subSilver/images/cellpic1.gif);
                        background-color:#D1D7DC; border: #FFFFFF; border-style: solid; height: 28px;
}

/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
        height: 29px;
        border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
        font-weight: bold; border: #FFFFFF; border-style: solid; height: 28px;
}
td.row3Right,td.spaceRow {
        background-color: #D1D7DC; border: #FFFFFF; border-style: solid;
}

th.thHead,td.catHead { font-size: 12px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow         { border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right         { border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft          { border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
th.thTop         { border-width: 1px 0px 0px 0px; }
th.thCornerL { border-width: 1px 0px 0px 1px; }
th.thCornerR { border-width: 1px 1px 0px 0px; }

/* The largest text used in the index page title and toptic title etc. */
.maintitle        {
        font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif;
        text-decoration: none; line-height : 120%; color : #000000;
}

/* General text */
.gen { font-size : 12px; }
.genmed { font-size : 11px; }
.gensmall { font-size : 10px; }
.gen,.genmed,.gensmall { color : #000000; }
a.gen,a.genmed,a.gensmall { color: #006699; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover        { color: #DD6900; text-decoration: underline; }

/* The register, login, search etc links at the top of the page */
.mainmenu                { font-size : 11px; color : #000000 }
a.mainmenu                { text-decoration: none; color : #006699;  }
a.mainmenu:hover{ text-decoration: underline; color : #DD6900; }

/* Forum category titles */
.cattitle                { font-weight: bold; font-size: 12px ; letter-spacing: 1px; color : #006699}
a.cattitle                { text-decoration: none; color : #006699; }
a.cattitle:hover{ text-decoration: underline; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink                { font-weight: bold; font-size: 12px; color : #006699; }
a.forumlink         { text-decoration: none; color : #006699; }
a.forumlink:hover{ text-decoration: underline; color : #DD6900; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav                        { font-weight: bold; font-size: 11px; color : #000000;}
a.nav                        { text-decoration: none; color : #006699; }
a.nav:hover                { text-decoration: underline; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2        { font-weight: bold; font-size: 11px; color : #000000; }
a.topictitle:link   { text-decoration: none; color : #006699; }
a.topictitle:visited { text-decoration: none; color : #5493B4; }
a.topictitle:hover        { text-decoration: underline; color : #DD6900; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name                        { font-size : 11px; color : #000000;}

/* Location, number of posts, post date etc */
.postdetails                { font-size : 10px; color : #000000; }

/* The content of the posts (body of text) */
.postbody { font-size : 12px; line-height: 18px}
a.postlink:link        { text-decoration: none; color : #006699 }
a.postlink:visited { text-decoration: none; color : #5493B4; }
a.postlink:hover { text-decoration: underline; color : #DD6900}

/* Quote & Code blocks */
.code {
        font-family: Courier, 'Courier New', sans-serif; font-size: 11px; color: #006600;
        background-color: #FAFAFA; border: #D1D7DC; border-style: solid;
        border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
        font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; color: #444444; line-height: 125%;
        background-color: #FAFAFA; border: #D1D7DC; border-style: solid;
        border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright                { font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #444444; letter-spacing: -1px;}
a.copyright                { color: #444444; text-decoration: none;}
a.copyright:hover { color: #000000; text-decoration: underline;}

/* Form elements */
input,textarea, select {
        color : #000000;
        font: normal 11px Verdana, Arial, Helvetica, sans-serif;
        border-color : #000000;
}

/* The text input fields background colour */
input.post, textarea.post, select {
        background-color : #FFFFFF;
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
        background-color : #EFEFEF;
        color : #000000;
        font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif;
}

/* The main submit button option */
input.mainoption {
        background-color : #FAFAFA;
        font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
        background-color : #FAFAFA;
        font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: #DEE3E7; border-style: none; }

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("templates/subSilver/formIE.css");
-->
</style>
</head>
<body bgcolor="#E5E5E5" text="#000000" link="#006699" vlink="#5493B4">

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
        <tr>
                <td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                                <td>

                                <td align="center" width="100%" valign="middle"><span class="maintitle">hutten.be</span><br /><span class="gen">We zijn er om mekaar te helpen, nietwaar?<br />&nbsp; </span>
                                <table cellspacing="0" cellpadding="2" border="0">
                                        <tr>
                                                <td align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="faq.php?sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_faq.gif" width="12" height="13" border="0" alt="FAQ" hspace="3" />FAQ</a>&nbsp; &nbsp;<a href="search.php?sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_search.gif" width="12" height="13" border="0" alt="Zoeken" hspace="3" />Zoeken</a>&nbsp; &nbsp;<a href="memberlist.php?sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_members.gif" width="12" height="13" border="0" alt="Gebruikerslijst" hspace="3" />Gebruikerslijst</a>&nbsp; &nbsp;<a href="groupcp.php?sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_groups.gif" width="12" height="13" border="0" alt="Gebruikersgroepen" hspace="3" />Gebruikersgroepen</a>&nbsp;
                                                &nbsp;<a href="profile.php?mode=register&amp;sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_register.gif" width="12" height="13" border="0" alt="Registreren" hspace="3" />Registreren</a>&nbsp;
                                                </span></td>
                                        </tr>
                                        <tr>
                                                <td height="25" align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="profile.php?mode=editprofile&amp;sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_profile.gif" width="12" height="13" border="0" alt="Profiel" hspace="3" />Profiel</a>&nbsp; &nbsp;<a href="privmsg.php?folder=inbox&amp;sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_message.gif" width="12" height="13" border="0" alt="Log in om je priv&eacute;berichten te bekijken" hspace="3" />Log in om je priv&eacute;berichten te bekijken</a>&nbsp; &nbsp;<a href="login.php?sid=24ce6187166d80500d60cf0c4df8efc7" class="mainmenu"><img src="templates/subSilver/images/icon_mini_login.gif" width="12" height="13" border="0" alt="Inloggen" hspace="3" />Inloggen</a>&nbsp;</span></td>
                                        </tr>
                                </table></td>
                        </tr>
                </table>

                <br />


<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left" class="nav"><a href="index.php?sid=24ce6187166d80500d60cf0c4df8efc7" class="nav">hutten.be Forumindex</a></td>
	</tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<th class="thHead">FAQ</th>
	</tr>
	<tr>
		<td class="row1">
			<span class="gen"><b>Login en registratie</b></span><br />
			<span class="gen"><a href="#0" class="postlink">Waarom kan ik niet inloggen?</a></span><br />
			<span class="gen"><a href="#1" class="postlink">Waarom moet ik eigenlijk registreren?</a></span><br />
			<span class="gen"><a href="#2" class="postlink">Waarom word ik automatisch uitgelogd?</a></span><br />
			<span class="gen"><a href="#3" class="postlink">Hoe kan ik vermijden dat mijn gebruikersnaam verschijnt in de lijst met actieve leden?</a></span><br />
			<span class="gen"><a href="#4" class="postlink">Ik ben mijn wachtwoord kwijt!</a></span><br />
			<span class="gen"><a href="#5" class="postlink">Ik heb me geregistreerd maar kan niet inloggen!</a></span><br />
			<span class="gen"><a href="#6" class="postlink">Ik heb in het verleden geregistreerd maar kan niet meer inloggen!</a></span><br />
			<br />
			<span class="gen"><b>Gebruikersvoorkeuren</b></span><br />
			<span class="gen"><a href="#7" class="postlink">Hoe verander ik mijn instellingen?</a></span><br />
			<span class="gen"><a href="#8" class="postlink">De tijden zijn niet juist!</a></span><br />
			<span class="gen"><a href="#9" class="postlink">Ik veranderde de tijdzone en de tijd is nog steeds fout!</a></span><br />
			<span class="gen"><a href="#10" class="postlink">Mijn taal staat niet in de lijst!</a></span><br />
			<span class="gen"><a href="#11" class="postlink">Hoe kan ik een afbeelding tonen onder mijn gebruikersnaam?</a></span><br />
			<span class="gen"><a href="#12" class="postlink">Hoe kan ik mijn rang aanpassen?</a></span><br />
			<span class="gen"><a href="#13" class="postlink">Waneer ik klik op de e-mail van een gebruiker wordt mij verzocht in te loggen</a></span><br />
			<br />
			<span class="gen"><b>Berichten plaatsen</b></span><br />
			<span class="gen"><a href="#14" class="postlink">Hoe plaats ik een onderwerp in een forum?</a></span><br />
			<span class="gen"><a href="#15" class="postlink">Hoe kan ik een bericht bewerken of wissen?</a></span><br />
			<span class="gen"><a href="#16" class="postlink">Hoe kan ik een onderschrift toevoegen aan mijn bericht?</a></span><br />
			<span class="gen"><a href="#17" class="postlink">Hoe kan ik een poll (opiniepeiling) maken?</a></span><br />
			<span class="gen"><a href="#18" class="postlink">Hoe kan ik een poll (opiniepeiling) bewerken of wissen?</a></span><br />
			<span class="gen"><a href="#19" class="postlink">Waarom krijg ik geen toegang tot een forum?</a></span><br />
			<span class="gen"><a href="#20" class="postlink">Waarom kan ik niet stemmen in polls?</a></span><br />
			<br />
			<span class="gen"><b>Opmaak en onderwerptypen</b></span><br />
			<span class="gen"><a href="#21" class="postlink">Wat is BBCode?</a></span><br />
			<span class="gen"><a href="#22" class="postlink">Kan ik HTML gebruiken?</a></span><br />
			<span class="gen"><a href="#23" class="postlink">Wat zijn smilies?</a></span><br />
			<span class="gen"><a href="#24" class="postlink">Kan ik afbeeldingen plaatsen?</a></span><br />
			<span class="gen"><a href="#25" class="postlink">Wat zijn mededelingen?</a></span><br />
			<span class="gen"><a href="#26" class="postlink">Wat zijn Sticky-onderwerpen?</a></span><br />
			<span class="gen"><a href="#27" class="postlink">Wat zijn gesloten onderwerpen?</a></span><br />
			<br />
			<span class="gen"><b>Gebruikersniveau's en -groepen</b></span><br />
			<span class="gen"><a href="#28" class="postlink">Wat zijn Beheerders?</a></span><br />
			<span class="gen"><a href="#29" class="postlink">Wat zijn Moderators?</a></span><br />
			<span class="gen"><a href="#30" class="postlink">Wat zijn Gebruikersgroepen?</a></span><br />
			<span class="gen"><a href="#31" class="postlink">Hoe kan ik lid worden van een gebruikersgroep?</a></span><br />
			<span class="gen"><a href="#32" class="postlink">Hoe kan ik een groepsmoderator worden?</a></span><br />
			<br />
			<span class="gen"><b>Priv&eacute; berichten</b></span><br />
			<span class="gen"><a href="#33" class="postlink">Ik kan geen priv&eacute;berichten verzenden!</a></span><br />
			<span class="gen"><a href="#34" class="postlink">Ik krijg steeds ongewenste priv&eacute;berichten!</a></span><br />
			<span class="gen"><a href="#35" class="postlink">Ik heb spam of beledigende e-mail gekregen van iemand van dit forum!</a></span><br />
			<br />
			<span class="gen"><b>phpBB 2-gerelateerde zaken</b></span><br />
			<span class="gen"><a href="#36" class="postlink">Wie heeft deze software geschreven?</a></span><br />
			<span class="gen"><a href="#37" class="postlink">Waarom is een bepaalde functie niet beschikbaar?</a></span><br />
			<span class="gen"><a href="#38" class="postlink">Met wie kan ik contact opnemen over misbruik en/of juridische zaken in verband met dit forum?</a></span><br />
			<br />
		</td>
	</tr>
	<tr>
		<td class="catBottom" height="28">&nbsp;</td>
	</tr>
</table>

<br clear="all" />

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<td class="catHead" height="28" align="center"><span class="cattitle">Login en registratie</span></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="0"></a><b>Waarom kan ik niet inloggen?</b></span><br /><span class="postbody">Ben je geregistreerd? Uiteraard moet je eerst lid worden om in te kunnen loggen. Ben je wellicht verbannen van het forum (als dat het geval is wordt dit gemeld tijdens het inloggen)? In dat geval kan je het beste contact opnemen met de beheerder of webmaster van het forum om uit te vinden waarom. Indien je geregistreerd en niet verbannen bent kun je het beste je inlog-gegevens nogmaals controleren. Zorg er ook voor dat Caps Lock uitstaat op je toetsenbord. Kijk ook in je e-mail of je geen activatie-e-mails hebt ontvangen van het forum. Meestal is dat het probleem, indien dit niet zo is, neem dan contact op met de forumbeheerder -- het kan zijn dat het forum verkeerd geconfigureerd is.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="1"></a><b>Waarom moet ik eigenlijk registreren?</b></span><br /><span class="postbody">Misschien hoeft dit niet eens -- het is aan de forumbeheerder om te bepalen of je al dan niet moet registreren om berichten te kunnen plaatsen. Registratie geeft je echter toegang tot bijkomende functies die voor gasten niet beschikbaar zijn, zoals het kiezen van avatar-afbeeldingen, de mogelijkheid tot priv&eacute;berichten, e-mailen naar andere gebruikers, lid worden van gebruikersgroepen, enz. Het neemt slechts een paar minuten in beslag dus het is aan te bevelen om te registreren.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="2"></a><b>Waarom word ik automatisch uitgelogd?</b></span><br /><span class="postbody">Als je <i>Log mij automatisch in</i> niet aanvinkt bij het inloggen, word je na een bepaalde tijd weer uitgelogd. Dit voorkomt misbruik van je account door iemand anders. Indien je dat vakje wel aanvinkt blijf je ingelogd, dit is echter niet aan te raden op een publieke PC op b.v. een universiteit, in een bibliotheek of Internetcaf&eacute;.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="3"></a><b>Hoe kan ik vermijden dat mijn gebruikersnaam verschijnt in de lijst met actieve leden?</b></span><br /><span class="postbody">In je profiel staat een optie <i>Laat andere gebruikers niet weten dat ik online ben</i>, indien je kiest voor <i>Ja</i> ben je alleen zichbaar voor forumbeheerders en jouzelf. Je wordt geteld als een verborgen gebruiker.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="4"></a><b>Ik ben mijn wachtwoord kwijt!</b></span><br /><span class="postbody">Geen paniek! Hoewel je wachtwoord niet teruggehaald kan worden, kan het er wel een nieuw wachtwoord aangemaakt worden. Ga om dit te doen naar de Inlog-pagina en klik op <u>Ik ben mijn wachtwoord vergeten</u>. Volg hierna de instructies, en er wordt een nieuw wachtwoord opgestuurd naar het e-mail-adres dat in je profiel staat.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="5"></a><b>Ik heb me geregistreerd maar kan niet inloggen!</b></span><br /><span class="postbody">Kijk eerst na of je je juiste gebruikersnaam en wachtwoord hebt ingetypt. Indien deze correct zijn kunnen er twee oorzaken zijn: indien COPPA-ondersteuning is ingeschakeld en je hebt geklikt op <u>Ik stem toe met de voorwaarden en ben jonger dan 13 jaar</u> bij het registreren, dan moet je de instructies volgen die je per e-mail hebt ontvangen. Indien dit niet het geval is kan het dat je account geactiveerd moet worden. Sommige forums vereisen dat alle nieuwe registraties worden geactiveerd, of door uzelf of door de forumbeheerder voordat je kan inloggen. Bij registratie wordt dit ook vermeld. Indien je een e-mail hebt ontvangen volg dan de instructies, indien je geen e-mail hebt ontvangen, controleer dan dat het ingevulde adres klopt. Een van de redenen waarom activatie wordt gebruikt, is om de kans te verkleinen dat kwaadwillenden anoniem uit jouw naam misbruik kunnen maken van dit forum. Indien je zeker bent van het e-mail-adres, neem dan contact op met de beheerder.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="6"></a><b>Ik heb in het verleden geregistreerd maar kan niet meer inloggen!</b></span><br /><span class="postbody">De meest aannemelijke redenen hiervoor zijn: je hebt een onjuiste gebruikersnaam of wachtwoord ingegeven (controleer de e-mail die je indertijd bij registratie hebt ontvangen) of de beheerder heeft je account gewist voor een bepaalde reden. Indien het laatste het geval is, kan dit misschien zijn omdat je nooit iets hebt gepost. Het is gebruikelijk voor forums om periodiek gebruikers te wissen die niets hebben gepost om de grootte van de database te beperken. Probeer opnieuw te registreren en doe mee aan de discussies.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<td class="catHead" height="28" align="center"><span class="cattitle">Gebruikersvoorkeuren</span></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="7"></a><b>Hoe verander ik mijn instellingen?</b></span><br /><span class="postbody">Al je instellingen zijn (indien je geregistreerd bent) opgeslagen in de database. Om deze aan te passen klik je op de <u>Profiel</u>-link (meestal bovenaan de pagina maar dit hoeft niet altijd zo te zijn). Dit stelt je in staat om al je instellingen te wijzigen.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="8"></a><b>De tijden zijn niet juist!</b></span><br /><span class="postbody">De tijden zijn bijna zeker juist, echter, wat je ziet kunnen tijden zijn getoond in een andere tijdzone dan die waar je je in bevindt. Als dit zo is moet je in je profiel je tijdzone instellen op die waar je je in bevindt, bijv. Londen, Parijs, New York, Sydney, enz. Let wel dat het aanpassen van de tijdzone, zoals de meeste instellingen, enkel kan worden gedaan door geregistreerde gebruikers. Als je niet geregistreerd bent is dit een goed tijdstip om je te registreren.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="9"></a><b>Ik veranderde de tijdzone en de tijd is nog steeds fout!</b></span><br /><span class="postbody">Indien je zeker bent dat de tijdzone correct is ingesteld en de tijd is nog steeds verkeerd, dan is het meest voor de hand liggende antwoord zomertijd. Dit forum is niet ontworpen om een onderscheid te maken tussen wintertijd en zomertijd, waardoor tijdens de zomermaanden de tijd een uur verschilt met de werkelijke tijd.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="10"></a><b>Mijn taal staat niet in de lijst!</b></span><br /><span class="postbody">De meest voorkomende redenen hiervoor zijn dat de  beheerder deze taal niet heeft ge&iuml;nstalleerd of nog niemand een vertaling heeft geschreven voor jouw taal. Vraag aan de forumbeheerder om jouw taal te installeren. Indien deze niet bestaat kan je deze vertaling ook zelf schrijven. Meer informatie kan gevonden worden op de phpBB-website (zie link onderaan elke pagina).<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="11"></a><b>Hoe kan ik een afbeelding tonen onder mijn gebruikersnaam?</b></span><br /><span class="postbody">Er kunnen twee afbeeldingen staan onder een gebruikersnaam bij het bekijken van posts. De eerste is een afbeelding verbonden met je rang, meestal in de vorm van sterren of blokjes die hoeveel posts je gemaakt hebt of je status op het forum aangeven. Daaronder staat vaak een grotere afbeelding, beter bekend als een avatar, en deze is meestal persoonlijk voor elke gebruiker. Het is aan de forumbeheerder om avatars toe te staan en de wijze waarop avatars kunnen worden geselecteerd te kiezen. Indien je geen avatars kan gebruiken is dit een keuze van de forumbeheerder, vraag hem/haar naar de reden (je kunt er zeker van zijn dat de beheerder hier een goede reden voor heeft!).<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="12"></a><b>Hoe kan ik mijn rang aanpassen?</b></span><br /><span class="postbody">Over het algemeen kan dit niet (je rang verschijnt onder je gebruikersnaam in onderwerpen en je profiel afhankelijk van de stijl). Meestal wordt de rang gebruikt om aan te tonen hoeveel berichten je hebt geplaatst en om sommige speciale gebruikers te tonen, bijvoorbeeld moderators en beheerders kunnen een speciale rang hebben. Misbruik het forum niet door onnodige berichten te plaatsen om zo sneller van rang te verhogen -- hierdoor is het mogelijk dat de moderator of beheerder het aantal berichten verlaagd.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="13"></a><b>Waneer ik klik op de e-mail van een gebruiker wordt mij verzocht in te loggen</b></span><br /><span class="postbody">Sorry, maar alleen geregistreerde gebruikers kunnen e-mail verzenden via het ingebouwde e-mail-formulier (als de beheerder deze functie heeft ingeschakeld). Dit is om misbruik van het e-mail-systeem door anonieme gebruikers te voorkomen.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<td class="catHead" height="28" align="center"><span class="cattitle">Berichten plaatsen</span></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="14"></a><b>Hoe plaats ik een onderwerp in een forum?</b></span><br /><span class="postbody">Eenvoudig -- klik op de overeenstemmende knop in het forum of onderwerp. Misschien moet je registreren om een bericht te plaatsen. De beschikbare mogelijkheden staan in een lijst onderaan de pagina (de <i>Je mag nieuwe onderwerpen plaatsen in dit subforum, Je mag reacties plaatsen in dit subforum</i>, enz. lijst).<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="15"></a><b>Hoe kan ik een bericht bewerken of wissen?</b></span><br /><span class="postbody">Tenzij je een beheerder of moderator bent kan je enkel je eigen berichten bewerken of wissen. Je kan een bericht bewerken (soms maar een beperkte tijd na het aanmaken) door te klikken op de <i>Wijzig</i>-knop van het te wijzigen bericht. Indien iemand reeds geantwoord heeft op je bericht vind je een kleine tekst onderaan het bericht, deze geeft het aantal keer dat je je bericht bewerkt hebt aan. Dit komt enkel te voorschijn indien iemand heeft geantwoord, het komt ook niet tevoorschijn als moderators of beheerders het bericht bewerkt hebben (zij zouden een bericht moeten achterlaten dat vertelt wat ze hebben aangepast en waarom). Let op: Normale gebruikers kunnen geen berichten wissen zodra erop geantwoord is.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="16"></a><b>Hoe kan ik een onderschrift toevoegen aan mijn bericht?</b></span><br /><span class="postbody">Om een onderschrift toe te voegen aan een bericht moet je eerst een onderschift instellen, dit kan je doen via je profiel. Zodra je een onderschrift hebt aangemaakt kan je het <i>Onderschrift toevoegen</i>-vakje aankruisen op het postformulier om je onderschrift toe te voegen. Je kan ook automatisch je onderschrift laten toevoegen aan al je berichten door de overeenstemmende optie te kiezen in je profiel. Zelfs dan kun je er nog per bericht voor kiezen om je onderschrift niet toe te voegen, door het <i>Onderschrift toevoegen</i>-vakje uit te schakelen op het postformulier.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="17"></a><b>Hoe kan ik een poll (opiniepeiling) maken?</b></span><br /><span class="postbody">Een poll maken is eenvoudig -- wanneer je een nieuw onderwerp plaatst (of het eerste bericht van een onderwerp bewerkt, als je die rechten hebt) zie je een formulier <i>Voeg een poll toe</i> onderaan het postformulier. Indien je dit niet ziet heb je waarschijnlijk geen rechten om polls te maken. Je moet eerst een titel opgeven en vervolgens minstens twee opties -- om een optie aan de poll toe te voegen typ je een optie en klik je op de <i>Keuze toevoegen</i>-knop. Je kan ook een tijdslimiet instellen voor de poll, 0 voor een eeuwig geldige poll. Er is een limiet op het aantal opties, die is ingesteld door de beheerder.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="18"></a><b>Hoe kan ik een poll (opiniepeiling) bewerken of wissen?</b></span><br /><span class="postbody">Net als met berichten kunnen polls enkel bewerkt worden door de persoon die ze heeft geplaatst, een moderator of de beheerder. Klik om een poll te bewerken op <i>Wijzig</i> in het eerste bericht in het onderwerp, dat altijd de poll bevat. Indien niemand heeft gestemd kun je de poll verwijderen of elke optie verwijderen of bewerken. Als er echter al gestemd is, kunnen alleen moderators en beheerders de poll bewerken of verwijderen. Dit is om te voorkomen dat mensen polls be&iuml;nvloeden door opties te veranderen terwijl de poll loopt.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="19"></a><b>Waarom krijg ik geen toegang tot een forum?</b></span><br /><span class="postbody">Sommige forums kunnen voorbehouden zijn aan bepaalde gebruikers of groepen. Om deze te bekijken, lezen, berichten te plaatsen, enz. heb je speciale rechten nodig, die alleen de moderators en beheerders kunnen verlenen. Neem contact op met hen.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="20"></a><b>Waarom kan ik niet stemmen in polls?</b></span><br /><span class="postbody">Alleen geregistreerde gebruikers kunnen stemmen in een poll om be&iuml;nvloeding van resulaten te voorkomen. Indien je geregistreerd bent en nog steeds niet kan stemmen heb je waarschijnlijk niet de nodige toegangsrechten.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<td class="catHead" height="28" align="center"><span class="cattitle">Opmaak en onderwerptypen</span></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="21"></a><b>Wat is BBCode?</b></span><br /><span class="postbody">BBCode is een speciale implementatie van HTML. Of je al dan niet BBCode kan gebruiken wordt bepaald door de beheerder. Je kan dit ook per bericht uitschakelen op het postformulier. BBCode op zich is vergelijkbaar met HTML, tags zijn ingesloten in rechte haken [ en ] inplaats van &lt; en &gt; en BBCode geeft een betere controle over wat en hoe iets wordt getoond. Zie voor meer informatie de gids die je kunt bereiken via het postformulier.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="22"></a><b>Kan ik HTML gebruiken?</b></span><br /><span class="postbody">Dat hangt er vanaf of de beheerders dit toelaten, zij hebben er volledige controle over. Indien je HTML kan gebruiken, zullen maar een paar tags werken. Dit is een <i>veiligheids</i>procedure om misbruik van het forum te voorkomen door gebruik van tags die de opmaak kunnen schaden of andere problemen kunnen veroorzaken. Als HTML ingeschakeld is kun je het per bericht uitschakelen op het postformulier.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="23"></a><b>Wat zijn smilies?</b></span><br /><span class="postbody">Smilies, of emoticons, zijn kleine afbeeldingen die gebruikt kunnen worden gebruikt bepaalde gevoelens uit te drukken met een code, zo betekent bijvoorbeeld :) gelukkig, en :( triest. De volledige lijst van emoticons kan geraadpleegd worden via het postformulier. Probeer niet teveel smileys te plaatsen in je berichten, want ze kunnen een bericht onleesbaar maken en een moderator kan beslissen deze te verwijderen of het bericht in zijn geheel te verwijderen.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="24"></a><b>Kan ik afbeeldingen plaatsen?</b></span><br /><span class="postbody">Afbeeldingen kunnen inderdaad worden getoond in je berichten. Echter, er is momenteel geen functie om afbeeldingen te uploaden naar dit forum. Daarom moet je een link plaatsen naar een afbeelding opgeslagen op een openbaar toegankelijke webserver, bijvoorbeeld http://www.een-onbekende-plaats.net/mijn-foto.gif. Je kan niet linken naar afbeeldingen opgeslagen op je eigen PC (tenzij het een openbaar toegankelijke server is) noch afbeeldingen opgeslagen op beveiligde locaties, zoals Hotmail- of Yahoo-mailboxen, sites met wachtwoordbeveiliging, enz. Gebruik om de afbeelding in te voegen ofwel de BBCode-tag [img] of toepasselijke HTML (indien toegelaten). Afbeeldingen dienen altijd te eindigen op .jpg, .jpeg, .gif of .png.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="25"></a><b>Wat zijn mededelingen?</b></span><br /><span class="postbody">Mededelingen bevatten meestal belangrijke informatie en moet je daarom zo snel mogelijk lezen. Mededelingen verschijnen bovenaan van elke pagina in het forum waar ze zijn geplaatst. Of je al dan niet een mededeling kan plaatsen hangt af van de permissies die je nodig hebt, die zijn ingesteld door de beheerder.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="26"></a><b>Wat zijn Sticky-onderwerpen?</b></span><br /><span class="postbody">Sticky-onderwerpen verschijnen onder de mededelingen in het forum en enkel op de eerste bladzijde. Deze zijn meestal van belang dus moet je ze bij voorkeur lezen. Net als met mededelingen is het de beheerder die bepaalt wie Sticky-onderwerpen kan plaatsen in welk forum.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="27"></a><b>Wat zijn gesloten onderwerpen?</b></span><br /><span class="postbody">Gesloten onderwerpen zijn zodanig ingesteld door de moderator van dat forum of door de beheerder. Je kan niet antwoorden op gesloten onderwerpen een eventuele poll wordt automatisch be&euml;indigd. Onderwerpen kunnen gesloten worden om verschillende redenen.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<td class="catHead" height="28" align="center"><span class="cattitle">Gebruikersniveau's en -groepen</span></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="28"></a><b>Wat zijn Beheerders?</b></span><br /><span class="postbody">Beheerders zijn mensen met de meeste controle over het forum. Deze mensen hebben controle over alle facetten van dit forum zoals het instellen van permissies, verbanning van gebruikers, aanmaken van gebruikersgroepen of moderatoren, enz. Zij hebben ook alle rechten die moderators hebben in alle forums.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="29"></a><b>Wat zijn Moderators?</b></span><br /><span class="postbody">Moderators zijn personen (of groepen van personen) wiens werk het elke dag op het forum te letten. Zij hebben het vermogen om berichten te bewerken, te wissen en onderwerpen te sluiten, heropenen, verplaatsen, wissen en splitsen in het forum waar zij moderator van zijn. Over het algemeen zijn moderators er om te voorkomen dat mensen <i>off-topic</i> gaan (afwijken van het onderwerp) of verwerpelijk materiaal plaatsen.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="30"></a><b>Wat zijn Gebruikersgroepen?</b></span><br /><span class="postbody">Gebruikersgroepen zijn een manier waarop beheerders gebruikers in een groep kunnen plaatsen. Elke gebruiker kan lid zijn van meerdere groepen en elke groep kan andere toegangsrechten toegewezen kregen. Dit maakt het gemakkelijk voor de beheerders om verschillende gebruikers moderator van een forum te maken, of toegang te verlenen aan een priv&eacute;forum, enz.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="31"></a><b>Hoe kan ik lid worden van een gebruikersgroep?</b></span><br /><span class="postbody">Om lid te worden van een gebruikersgroep klik je op de Gebruikersgroepen-link bovenaan de pagina (afhankelijk van de stijl die je gebruikt), en je kan alle gebruikersgroepen zien. Niet alle groepen hebben <i>open toegang</i> -- sommige zijn gesloten en andere hebben misschien verborgen lidmaatschap. Als de groep open is kan je een aanvraag tot toetreding doen door te klikken op de overeenstemmende knop. De groepsmoderator moet je aanvraag goedkeuren, deze kan je vragen waarom je wil toetreden tot een groep. Leg je neer bij het besluit van een groepsmoderator indien deze je aanvraag afkeurt -- deze zal daar goede redenen voor hebben.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="32"></a><b>Hoe kan ik een groepsmoderator worden?</b></span><br /><span class="postbody">Gebruikersgroepen zijn in eerste instantie gecre&euml;erd door de beheerders, zij kiezen ook een groepsmoderator. Indien je interesse hebt in het stichten van een gebruikersgroep moet je eerst contact opnemen met de beheerder, stuur hem/haar een priv&eacute;bericht.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<td class="catHead" height="28" align="center"><span class="cattitle">Priv&eacute; berichten</span></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="33"></a><b>Ik kan geen priv&eacute;berichten verzenden!</b></span><br /><span class="postbody">Hier kunnen drie redenen voor zijn: je bent niet geregistreerd en/of niet ingelogd, de beheerder heeft priv&eacute;berichten uitgeschakeld voor het gehele forum of de beheerder heeft je verhinderd priv&eacute;berichten te verzenden. Is het laatste het geval, dan zou je de beheerder moeten vragen waarom.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="34"></a><b>Ik krijg steeds ongewenste priv&eacute;berichten!</b></span><br /><span class="postbody">In de toekomst wordt er een lijst met ongewenste afzenders toegevoegd aan het priv&eacute;berichtensysteem. Voorlopig echter, moet je de forumbeheerder op de hoogte stellen als je ongewenste berichten van iemand blijft ontvangen -- deze heeft de mogelijkheid om een gebruiker te verhinderen priv&eacute;berichten te verzenden.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="35"></a><b>Ik heb spam of beledigende e-mail gekregen van iemand van dit forum!</b></span><br /><span class="postbody">We vinden het spijtig dit te horen. Het e-mail-formulier van dit forum heeft beveiligingen om zulke gebruikers op te sporen. Stuur een e-mail naar de beheerder met een volledige kopie van de e-mail die je ontvangen hebt, het is heel belangrijk dat deze ook de "headers" bevat (deze geven details over de gebruiker die de e-mail heeft verzonden). Dan kan de beheerder actie ondernemen.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
	<tr>
		<td class="catHead" height="28" align="center"><span class="cattitle">phpBB 2-gerelateerde zaken</span></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="36"></a><b>Wie heeft deze software geschreven?</b></span><br /><span class="postbody">Deze software (in haar oorspronkelijke vorm) is geproduceerd door, uitgebracht door en intellectueel eigendom van <a href="http://www.phpbb.com/" target="_blank">phpBB Group</a>. De software is beschikbaar gesteld onder de GNU General Public License en mag vrij worden verspreid; zie de link voor meer informatie.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row2" align="left" valign="top"><span class="postbody"><a name="37"></a><b>Waarom is een bepaalde functie niet beschikbaar?</b></span><br /><span class="postbody">Deze software is geschreven door en intellectueel eigendom van phpBB Group. Als jij van mening bent dat een bepaalde functie moet worden toegevoegd, bezoek dan de phpbb.com-website om te kijken wat de phpBB Group te zeggen heeft. Plaats alsjeblieft geen functieverzoeken op het forum van phpbb.com, aangezien de groep sourceforge gebruikt om deze verzoeken af te handelen. Lees de fora en kijk wat onze mening over een dergelijke cuntie is, en volg dan de procedure aldaar.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<tr>
		<td class="row1" align="left" valign="top"><span class="postbody"><a name="38"></a><b>Met wie kan ik contact opnemen over misbruik en/of juridische zaken in verband met dit forum?</b></span><br /><span class="postbody">Je moet contact opnemen met de forumbeheerder. Als je er niet achter kunt komen wie dit is, neem dan eerst contact op met een van de moderators en vraag deze met wie je uiteindelijk contact op moet nemen. Indien geen reactie moet je contact opnemen met de eigenaar van het domein (je kunt een "whois lookup" doen) of, als het forum op een gratis dienst draait (zoals yahoo, free.fr, f2s.com, enz.), het beheer of de misbruikafdeling van die dienst. Onthoud dat phpBB Group geen controle heeft en op geen enkele manier verantwoordelijk kan worden gehouden voor hoe, waar en door wie dit forum wordt gebruikt. Het is volkomen zinloos om contact op te nemen met phpBB Group over enige juridische zaak (be&euml;indiging, verantwoordelijkheid, beledigende opmerkingen, etc.) niet direct aangaande de phpbb.com-website of de software van phpBB zelf. Als je een e-mail stuurt aan phpBB Group over enig gebruik van deze software door een derde partij kun je rekenen op een korte reactie of helemaal geen reactie.<br /><a class="postlink" href="#top">Terug naar boven</a></span></td>
	</tr>
	<tr>
		<td class="spaceRow" height="1"><img src="templates/subSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
</table>

<br clear="all" />

<table width="100%" cellspacing="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle" nowrap="nowrap"><span class="gensmall">Tijden zijn in GMT - 8 uur</span><br /><br />
<form method="get" name="jumpbox" action="viewforum.php?sid=24ce6187166d80500d60cf0c4df8efc7" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Ga naar:&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">Kies een forum</option><option value="-1">&nbsp;</option><option value="-1">Over het forum</option><option value="-1">----------------</option><option value="1">Hoe werkt dit forum?</option><option value="17">Nog vragen over dit forum?</option><option value="-1">&nbsp;</option><option value="-1">Landeninformatie</option><option value="-1">----------------</option><option value="2">Duitsland</option><option value="3">Frankrijk</option><option value="4">Itali�</option><option value="5">Oostenrijk</option><option value="6">Spanje</option><option value="7">Zwitserland</option><option value="8">Andere landen</option><option value="-1">&nbsp;</option><option value="-1">Berghutten</option><option value="-1">----------------</option><option value="9">Ervaringen</option><option value="10">Routebeschrijvingen</option><option value="-1">&nbsp;</option><option value="-1">Bergtoppen</option><option value="-1">----------------</option><option value="11">Voor de klimmers</option><option value="-1">&nbsp;</option><option value="-1">Diversen</option><option value="-1">----------------</option><option value="12">Reisverslagen</option><option value="13">Vakantieverblijven</option><option value="14">Actualiteit</option><option value="15">Test jouw kennis</option><option value="16">Humor</option><option value="18">Caf�</option></select><input type="hidden" name="sid" value="24ce6187166d80500d60cf0c4df8efc7" />&nbsp;<input type="submit" value="OK" class="liteoption" /></span></td>
	</tr>
</table></form>

</td>
	</tr>
</table>


<div align="center"><span class="copyright"><br /><br />
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB 2.0. If you cannot (for good
	reason) retain the full copyright we request you at least leave in place the
	Powered by phpBB line, with phpBB linked to www.phpbb.com. If you refuse
	to include even this then support on our forums may be affected.

	The phpBB Group : 2002
// -->
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB</a> &copy; 2001, 2005 phpBB Group<br />Vertaling door <a href="http://www.warpcore.tk/" target="_blank">Lennart Goosens</a>.</span></div>
		</td>
	</tr>
</table>

</body>
</html>
