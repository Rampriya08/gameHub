(function(doc){
 varscriptElm=doc.scripts[doc.scripts.length-1]; 
varwarn=['[ionicons]Deprecatedscript,pleaseremove:'+scriptElm.outerHTML]; 
warn.push('Toimproveperformanceitisrecommendedtosetthedifferentialscriptsinthehead asfollows:') 
varparts=scriptElm.src.split('/'); parts.pop(); parts.push('ionicons'); varurl=parts.join('/'); 
varscriptElm=doc.createElement('script'); 
scriptElm.setAttribute('type','module');
 scriptElm.src=url+'/ionicons.esm.js'; 
doc.head.appendChild(scriptElm); warn.push(scriptElm.outerHTML); 
scriptElm=doc.createElement('script'); scriptElm.setAttribute('nomodule',''); 
scriptElm.src=url+'/ionicons.js'; doc.head.appendChild(scriptElm); warn.push(scriptElm.outerHTML);
 console.warn(warn.join('\n'));
})(document);
