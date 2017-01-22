(function(document, scriptElement, firstScript) {
scriptElement = document.createElement('script');
scriptCFASync = document.createAttribute("data-cfasync");
scriptCFASync.value = false;
scriptElement.setAttributeNode(scriptCFASync);
var title = '';
if (document.title) {
    title = encodeURIComponent(document.title);
} else {
    try {
        title = encodeURIComponent(top.document.title);
    } catch (e) {}
}
scriptElement.src = "http:\/\/www.youradexchange.com\/ad\/display.php?r=32796&runauction=1&crr=9ab9eda4e3a2930bc934lRWfhdie-ZmaksnZvRie9hGb71HJ9tXfPtDL4kzT7wCP4kzOPtDLnB2J9ZWe65mZlt2J6dmZg1HflZmekMmZ5p3T7wyT7wCS6wSe91XY682863d685109ba00130" + '&cbrandom=' + Math.random() + "&cbtitle=" + title;
firstScript = document.scripts[0];
if(typeof firstScript == 'undefined'){
  firstScript = document.getElementsByTagName( 'script' )[0];
}
firstScript.parentNode.insertBefore(scriptElement, firstScript)
}(document));
var advpix93783=document.createElement('iframe');
advpix93783.src='//www.youradexchange.com/pix.html';
advpix93783.style.position='absolute';
advpix93783.style.left='-1000px';
advpix93783.style.top='-1000px';
advpix93783.style.width='1px';
advpix93783.style.height='1px';
advpix93783.style.visibility='hidden';
advpix93783.style.border='none';
advpix93783.style.backgroundColor='transparent';
document.body.appendChild(advpix93783);

