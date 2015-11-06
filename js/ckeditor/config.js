/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'ch';
	// config.uiColor = '#AADC6E';
	config.baseHref = '/ci-cieditor/userfiles/';
	config.extraAllowedContent = 'span;ul;li;table;td;style;*[id];*(*);*{*}';
	//config.extraAllowedContent = '*{*}';
	//config.allowedContent = true;
	//config.ignoreEmptyParagraph = false;
	//config.extraAllowedContent = 'style';
	//config.allowedContent = true;
	//config.allowedContent = 'h1 h2 h3 p blockquote strong em;' + 'a[!href];' +'img(left,right)[!src,alt,width,height];';
	//config.allowedContent = '/^([a-z0-9\-*\s]+)((?:\s*\{[!\w\-,\s\*]+\}\s*|\s*\[[!\w\-,\s\*]+\]\s*|\s*\([!\w\-,\s\*]+\)\s*){0,3})(?:;\s*|$)/i'
};
