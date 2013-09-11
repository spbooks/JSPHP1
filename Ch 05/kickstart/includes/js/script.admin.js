window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

document.write(unescape('%3Cscript src="/kickstart/includes/js/libs/bootstrap.min.js"%3E%3C/script%3E'));
document.write(unescape('%3Cscript src="/kickstart/includes/js/libs/Markdown.Converter.js"%3E%3C/script%3E'));
document.write(unescape('%3Cscript src="/kickstart/includes/js/libs/markdown.Sanitizer.js"%3E%3C/script%3E'));
document.write(unescape('%3Cscript src="/kickstart/includes/js/libs/Markdown.Editor.js"%3E%3C/script%3E'));

;(function( $ ) {
	$(document).ready(function(){
		var converter = new Markdown.Converter();
     	var editor = new Markdown.Editor(converter);
   		editor.run();
	});

})( jQuery )