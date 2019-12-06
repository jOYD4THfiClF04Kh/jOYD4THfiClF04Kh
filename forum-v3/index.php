<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="en-gb" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="copyright" content="2000, 2002, 2005, 2007 phpBB Group" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>hutten.be &bull; Index page</title>

<link rel="stylesheet" href="./styles/subsilver2/theme/stylesheet.css" type="text/css" />

<script type="text/javascript">
// <![CDATA[

function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('Enter the page number you wish to go to.:', '');
	var perpage = '';
	var base_url = '';

	if (page !== null && !isNaN(page) && page > 0)
	{
		document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * perpage);
	}
}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}


// ]]>
</script>
<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://adsrv.innocraft.cloud/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '51']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src='//cdn.innocraft.cloud/adsrv.innocraft.cloud/matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="https://adsrv.innocraft.cloud/matomo.php?idsite=51&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code --></head>
<body class="ltr">

<a name="top"></a>

<div id="wrapheader">

	<div id="logodesc">
		<table width="100%" cellspacing="0">
		<tr>
			<td><a href="./index.php"><img src="./styles/subsilver2/imageset/site_logo.gif" width="170" height="94" alt="" title="" /></a></td>
			<td width="100%" align="center"><h1>hutten.be</h1><span class="gen">We zijn er om mekaar te helpen, nietwaar?</span></td>
		</tr>
		</table>
	</div>

	<div id="menubar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="genmed">
							</td>
			<td class="genmed" align="right">
				<a href="./faq.php"><img src="./styles/subsilver2/theme/images/icon_mini_faq.gif" width="12" height="13" alt="*" /> FAQ</a>
							</td>
		</tr>
		</table>
	</div>

	<div id="datebar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="gensmall">Last visit was: Sat Sep 12, 2009 6:55 am</td>
			<td class="gensmall" align="right">It is currently Sat Sep 12, 2009 6:55 am<br /></td>
		</tr>
		</table>
	</div>

</div>

<div id="wrapcentre">

	
	<br style="clear: both;" />

	<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="./index.php">Board index</a></p>
			<p class="datetime">All times are UTC </p>
		</td>
	</tr>
	</table>
	<br /><table class="tablebg" cellspacing="1" width="100%">
<tr>
	<td class="cat" colspan="5" align="right">&nbsp;</td>
</tr>
<tr>
	<th colspan="2">&nbsp;Forum&nbsp;</th>
	<th width="50">&nbsp;Topics&nbsp;</th>
	<th width="50">&nbsp;Posts&nbsp;</th>
	<th>&nbsp;Last post&nbsp;</th>
</tr>
		<tr>
			<td class="cat" colspan="2"><h4><a href="./viewforum.php?f=19">Over het forum</a></h4></td>
			<td class="catdiv" colspan="3">&nbsp;</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=1">Hoe werkt dit forum?</a>
				<p class="forumdesc">Wat je kan en niet kan op dit forum. Hoe alles werkt en waarom. </p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">3</p></td>
			<td class="row2" align="center"><p class="topicdetails">4</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sat Nov 04, 2006 5:46 pm</p>
					<p class="topicdetails"><span style="color: #AA0000;" class="username-coloured">score</span>						<a href="./viewtopic.php?f=1&amp;p=40#p40"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=17">Nog vragen over dit forum?</a>
				<p class="forumdesc">Misschien is de werking van dit forum niet altijd even duidelijk voor je. Blijf niet met je vraag zitten en stel ze hier. Ik help je graag verder.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">0</p></td>
			<td class="row2" align="center"><p class="topicdetails">0</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">No posts</p>
							</td>
		</tr>
			<tr>
			<td class="cat" colspan="2"><h4><a href="./viewforum.php?f=20">Landeninformatie</a></h4></td>
			<td class="catdiv" colspan="3">&nbsp;</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=2">Duitsland</a>
				<p class="forumdesc">Vragen en antwoorden over Duitse berggebieden.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">2</p></td>
			<td class="row2" align="center"><p class="topicdetails">5</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sun Nov 04, 2007 3:45 pm</p>
					<p class="topicdetails">renneboogmarijke						<a href="./viewtopic.php?f=2&amp;p=231#p231"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=3">Frankrijk</a>
				<p class="forumdesc">Vragen en antwoorden over Franse berggebieden.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">2</p></td>
			<td class="row2" align="center"><p class="topicdetails">2</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sat Nov 04, 2006 1:22 pm</p>
					<p class="topicdetails"><span style="color: #AA0000;" class="username-coloured">score</span>						<a href="./viewtopic.php?f=3&amp;p=39#p39"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=4">Italië</a>
				<p class="forumdesc">Vragen en antwoorden over Italiaanse berggebieden.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">5</p></td>
			<td class="row2" align="center"><p class="topicdetails">19</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Mon Apr 07, 2008 9:28 am</p>
					<p class="topicdetails">Howard						<a href="./viewtopic.php?f=4&amp;p=260#p260"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=5">Oostenrijk</a>
				<p class="forumdesc">Vragen en antwoorden over Oostenrijkse berggebieden.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">14</p></td>
			<td class="row2" align="center"><p class="topicdetails">64</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sun Aug 24, 2008 11:43 am</p>
					<p class="topicdetails">edje						<a href="./viewtopic.php?f=5&amp;p=282#p282"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=6">Spanje</a>
				<p class="forumdesc">Vragen en antwoorden over Spaanse berggebieden.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">1</p></td>
			<td class="row2" align="center"><p class="topicdetails">2</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sun Nov 04, 2007 4:05 pm</p>
					<p class="topicdetails">renneboogmarijke						<a href="./viewtopic.php?f=6&amp;p=233#p233"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=7">Zwitserland</a>
				<p class="forumdesc">Vragen en antwoorden over Zwitserse berggebieden.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">14</p></td>
			<td class="row2" align="center"><p class="topicdetails">42</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sat Dec 08, 2007 3:17 pm</p>
					<p class="topicdetails">Trotse luipaard						<a href="./viewtopic.php?f=7&amp;p=241#p241"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=8">Andere landen</a>
				<p class="forumdesc">Vragen en antwoorden over berggebieden in andere landen zoals Polen, Tsjechië, Slovenië, ...</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">2</p></td>
			<td class="row2" align="center"><p class="topicdetails">8</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Thu May 24, 2007 10:19 pm</p>
					<p class="topicdetails">Willy						<a href="./viewtopic.php?f=8&amp;p=175#p175"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="cat" colspan="2"><h4><a href="./viewforum.php?f=21">Berghutten</a></h4></td>
			<td class="catdiv" colspan="3">&nbsp;</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=9">Ervaringen</a>
				<p class="forumdesc">Hut bezocht en er positieve of negatieve ervaringen over, we vernemen het graag.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">5</p></td>
			<td class="row2" align="center"><p class="topicdetails">12</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Wed May 07, 2008 7:47 pm</p>
					<p class="topicdetails">renneboogmarijke						<a href="./viewtopic.php?f=9&amp;p=275#p275"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=10">Routebeschrijvingen</a>
				<p class="forumdesc">Jouw routebeschijving naar een hut kan hier terecht.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">1</p></td>
			<td class="row2" align="center"><p class="topicdetails">3</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sat Jul 28, 2007 2:58 pm</p>
					<p class="topicdetails">Philip						<a href="./viewtopic.php?f=10&amp;p=195#p195"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="cat" colspan="2"><h4><a href="./viewforum.php?f=22">Bergtoppen</a></h4></td>
			<td class="catdiv" colspan="3">&nbsp;</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=11">Voor de klimmers</a>
				<p class="forumdesc">Vragen en antwoorden over bergtoppen, hun routes, moeilijkheidsgraad, technische vereisten,...</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">5</p></td>
			<td class="row2" align="center"><p class="topicdetails">12</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Fri May 02, 2008 12:22 pm</p>
					<p class="topicdetails">Jan						<a href="./viewtopic.php?f=11&amp;p=272#p272"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="cat" colspan="2"><h4><a href="./viewforum.php?f=23">Diversen</a></h4></td>
			<td class="catdiv" colspan="3">&nbsp;</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=12">Reisverslagen</a>
				<p class="forumdesc">In afwachting dat ze netjes worden overgenomen op deze huttensite kan je hier alvast je reisverslagen posten.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">1</p></td>
			<td class="row2" align="center"><p class="topicdetails">2</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Wed Dec 05, 2007 3:31 pm</p>
					<p class="topicdetails">Jan						<a href="./viewtopic.php?f=12&amp;p=239#p239"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=13">Vakantieverblijven</a>
				<p class="forumdesc">Ergens een leuk adres tegengekomen dat een echte aanrader is? We willen het graag weten.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">1</p></td>
			<td class="row2" align="center"><p class="topicdetails">2</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Mon Dec 17, 2007 2:05 pm</p>
					<p class="topicdetails">Smetje						<a href="./viewtopic.php?f=13&amp;p=246#p246"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=14">Actualiteit</a>
				<p class="forumdesc">Discussies over actuele onderwerpen of gebeurtenissen in de Alpen.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">18</p></td>
			<td class="row2" align="center"><p class="topicdetails">53</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Thu Apr 17, 2008 5:51 pm</p>
					<p class="topicdetails">der dickgg						<a href="./viewtopic.php?f=14&amp;p=267#p267"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=15">Test jouw kennis</a>
				<p class="forumdesc">Kennisvragen over berggebieden en bergsport.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">7</p></td>
			<td class="row2" align="center"><p class="topicdetails">23</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Mon Aug 13, 2007 5:40 pm</p>
					<p class="topicdetails">Joris						<a href="./viewtopic.php?f=15&amp;p=204#p204"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=16">Humor</a>
				<p class="forumdesc">Moppen over bergsport of bergbewoners, als je er één hoort of leest, laat het ons weten.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">7</p></td>
			<td class="row2" align="center"><p class="topicdetails">7</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Sun May 20, 2007 2:40 pm</p>
					<p class="topicdetails">Joris						<a href="./viewtopic.php?f=16&amp;p=170#p170"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
			<tr>
			<td class="row1" width="50" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
			<td class="row1" width="100%">
								<a class="forumlink" href="./viewforum.php?f=18">Café</a>
				<p class="forumdesc">Alles wat niet in één van de andere fora thuis hoort. Dingen die je bezig houden, mededelingen of wat dan ook.</p>
							</td>
			<td class="row2" align="center"><p class="topicdetails">4</p></td>
			<td class="row2" align="center"><p class="topicdetails">9</p></td>
			<td class="row2" align="center" nowrap="nowrap">
									<p class="topicdetails">Thu Aug 07, 2008 10:50 am</p>
					<p class="topicdetails">Jan						<a href="./viewtopic.php?f=18&amp;p=280#p280"><img src="./styles/subsilver2/imageset/icon_topic_latest.gif" width="18" height="9" alt="View the latest post" title="View the latest post" /></a>
					</p>
							</td>
		</tr>
	</table>
<span class="gensmall"> | <a href="./memberlist.php?mode=leaders">The team</a></span><br />

<br clear="all" />

<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="./index.php">Board index</a></p>
			<p class="datetime">All times are UTC </p>
		</td>
	</tr>
	</table>	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat" colspan="2"><h4>Who is online</h4></td>
	</tr>
	<tr>
			<td class="row1" rowspan="2" align="center" valign="middle"><img src="./styles/subsilver2/theme/images/whosonline.gif" alt="Who is online" /></td>
			<td class="row1" width="100%"><span class="genmed">In total there is <strong>1</strong> user online :: 1 registered, 0 hidden and 0 guests (based on users active over the past 5 minutes)<br />Most users ever online was <strong>87</strong> on Mon Aug 13, 2007 11:33 am<br /><br />Registered users: <span style="color: #9E8DA7;" class="username-coloured">Alexa [Bot]</span></span></td>
	</tr>
			<tr>
			<td class="row1"><b class="gensmall">Legend :: <a style="color:#AA0000" href="./memberlist.php?mode=group&amp;g=5">Administrators</a>, <a style="color:#00AA00" href="./memberlist.php?mode=group&amp;g=4">Global moderators</a></b></td>
		</tr>
		</table>
	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat" colspan="2"><h4>Birthdays</h4></td>
	</tr>
	<tr>
		<td class="row1" align="center" valign="middle"><img src="./styles/subsilver2/theme/images/whosonline.gif" alt="Birthdays" /></td>
		<td class="row1" width="100%"><p class="genmed">No birthdays today</p></td>
	</tr>
	</table>

<br clear="all" />

<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<td class="cat" colspan="2"><h4>Statistics</h4></td>
</tr>
<tr>
	<td class="row1"><img src="./styles/subsilver2/theme/images/whosonline.gif" alt="Statistics" /></td>
	<td class="row1" width="100%" valign="middle"><p class="genmed">Total posts <strong>269</strong> | Total topics <strong>92</strong> | Total members <strong>119</strong> | Our newest member <strong>stef</strong></p></td>
</tr>
</table>


<br clear="all" />

<table class="legend">
<tr>
	<td width="20" align="center"><img src="./styles/subsilver2/imageset/forum_unread.gif" width="46" height="25" alt="New posts" title="New posts" /></td>
	<td><span class="gensmall">New posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="./styles/subsilver2/imageset/forum_read.gif" width="46" height="25" alt="No new posts" title="No new posts" /></td>
	<td><span class="gensmall">No new posts</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="./styles/subsilver2/imageset/forum_read_locked.gif" width="46" height="25" alt="No new posts [ Locked ]" title="No new posts [ Locked ]" /></td>
	<td><span class="gensmall">Forum locked</span></td>
</tr>
</table>

</div>

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

<div id="wrapfooter">
		<span class="copyright">Powered by <a href="https://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group
	</span>
</div>

</body>
</html>