var preferrer='';
try {
    preferrer = top.document.referrer;
} catch (e) {
    preferrer = '';
} finally {
var rndVal = 100*(Math.random());
document.write('<!-- '+rndVal+'-->');
    document.write('<scr' + 'ipt type="text\/javascript" src="http://www.sponsorads.de/a_script.php?s=115833&pref=' + escape(preferrer) + '&ref=' + escape(document.referrer) + '&ck=1&rndVal='+rndVal+'"><\/scr' + 'ipt>');}