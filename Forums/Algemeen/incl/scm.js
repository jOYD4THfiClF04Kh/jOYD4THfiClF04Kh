if(document.images){
bp0=new Image();bp0.src='pics/img.png';
bp1=new Image();bp1.src='pics/ou.png'
bp2=new Image();bp2.src='pics/lb.png';
bp3=new Image();bp3.src='pics/rb.png'}

if(typeof document.layers!='object'){document.write('<link rel="stylesheet" type="text/css" href="incl/stl.css">')}
if(typeof document.all=='object'){msie=1}else{msie=0}

function ow(m,n){
if(n==1){dd='nyc='}else{dd='wik='}
uri=self.location;uri=uri.toString()
if(uri.indexOf('show.php')!=-1){uri=uri.split('&')
uri=uri[0];window.location=uri+'&'+dd+m
}else if(uri.indexOf('?rp')!=-1){uri=uri.split('&')
uri=uri[0];window.location=uri+'&'+dd+m
}else if(uri.indexOf('search.php')!=-1){
if(uri.indexOf('search.php?src=')!=-1){uri=uri.split('&');uri=uri[0].toString()}else{uri='search.php?u=0'}
window.location=uri+'&'+dd+m
}else{window.location='index.php?'+dd+m}}

function tyt(){pp=Math.round(999999*Math.random());window.location='index.php?u='+pp}

function adp(n){
txt=document.forms[0].text;nme=document.forms[0].name
sbj=document.forms[0].title;img=document.forms[0].image
img=img.value.toLowerCase()
if((img.indexOf('.gif')==-1)&&(img.indexOf('.jpg')==-1)&&(img.indexOf('.png')==-1)&&(img.indexOf('.jpeg')==-1)&&(img.indexOf('.jfif')==-1)||(document.forms[0].image.value==null)||(img=='http://')){document.forms[0].image.value=''}
if((txt.value!='')&&(nme.value!='')&&(sbj.value!='')){return true}
else{alert(n);return false}}

function sp(m){a=document.forms[0].text;a.value=a.value+m}

function wr(s){a=document.forms[0].nckp;switch(s){
case'w1':document.qq.src='pics/w1.gif';break;case'w2':document.qq.src='pics/w2.gif';break;
case'w3':document.qq.src='pics/w3.gif';break;case'w4':document.qq.src='pics/w4.gif';break;
case'w5':document.qq.src='pics/w5.gif';break;case'w6':document.qq.src='pics/w6.gif';break;
case'w7':document.qq.src='pics/w7.gif';break;case's1':document.qq.src='pics/s1.gif';break;
case's2':document.qq.src='pics/s2.gif';break;case's3':document.qq.src='pics/s3.gif';break;
case's4':document.qq.src='pics/s4.gif';break;case's5':document.qq.src='pics/s5.gif';break;
case's6':document.qq.src='pics/s6.gif';break;case's7':document.qq.src='pics/s7.gif';break;
default:document.qq.src='pics/w1.gif';break}a.value=s;return false}

function df(){document.write('<img src="pics/w1.gif" name="qq" width="11" height="14" hspace="2" alt="">')}

function adt(){if(msie==1){d=1;mmw=window.setInterval('tr()',20)}}
function rdt(){if(msie==1){window.clearInterval(mmw);lnk.style.color='#ffffff'}}

function tr(){
if(d==1){lnk.style.color='#eeeeee';d++}
else if(d==2){lnk.style.color='#dddddd';d++}
else if(d==3){lnk.style.color='#cccccc';d++}
else if(d==4){lnk.style.color='#bbbbbb';d++}
else if(d==5){lnk.style.color='#aaaaaa';d++}
else if(d==6){lnk.style.color='#999999';d++}
else if(d==7){lnk.style.color='#888888';d++}
else if(d==8){lnk.style.color='#777777';d++}
else if(d==9){lnk.style.color='#666666';d++}
else if(d==10){lnk.style.color='#555555';d++}
else if(d==11){lnk.style.color='#444444';d++}
else if(d==12){lnk.style.color='#333333';d++}
else if(d==13){lnk.style.color='#222222';d++}
else if(d==14){lnk.style.color='#111111';d++}
else if(d==15){lnk.style.color='#000000';d++}
else{d=0}}

function prw(){
crq=document.forms[0].action
dd=window.open('','prv','height=200,width=550,resizable=1,scrollbars=1')
document.forms[0].action='preview.php';document.forms[0].target='prv'
document.forms[0].submit();dd.focus()
setTimeout("document.forms[0].action=crq;document.forms[0].target=''",500)}

function img(n,m){b=n.src.toString()
if(!n.complete){n.src='pics/img.png'}else if(b.indexOf('pics/img.png')!=-1){n.src=m}
else{dd=window.open(m,'img','height=200,width=300,resizable=1,scrollbars=1,status=1');dd.focus()}}

function chs(m){x=document.forms[0].image.value;if(x==''){x='http://'}
y=prompt(m,x);if(y!=null){document.forms[0].image.value=y}}

function dle(u){fno=confirm(u);if(fno){return true}else{return false}}

function ban(w){w=escape(w);url='ban.php?ban='+w
window.open(url,'ban','height=270,width=250,resizable=1,scrollbars=1')}

function mll(a,b){document.write('<a href="mailto:'+a+'@'+b+'">'+a+'@'+b+'</a>')}