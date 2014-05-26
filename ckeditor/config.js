/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = 'inlinesave,sourcedialog';
    config.removePlugins = 'bidi';
    //config.removeButtons = 'Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak';
    //'basicstyles''bidi''elementspath''enterkey''floatingspace''indentblock''indentlist''justify''link''list''magicline''pagebreak''pastetext''removeformat''showblocks''showborders''wsc'
    config.toolbar_Custom =
        [
            { name: 'clipboard',   items : [ 'Inlinesave','-','Cut','Copy','Paste','PasteText','-','Undo','Redo' ] },
            { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','-','RemoveFormat' ] },
            { name: 'links',       items : [ 'Link','Unlink' ] },
            { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
            { name: 'editing',     items : [ 'SelectAll','-', 'Scayt' ] },
            { name: 'tools',       items : [ 'ShowBlocks','-', 'Sourcedialog' ] }
        ];
    config.toolbar = 'Custom';
    config.allowedContent = true;
};
