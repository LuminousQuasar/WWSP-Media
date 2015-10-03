
/**
*
*  MD5 (Message-Digest Algorithm)
*  http://www.webtoolkit.info/
*
**/

function MD5(string) {

	function RotateLeft(lValue, iShiftBits) {
		return (lValue<<iShiftBits) | (lValue>>>(32-iShiftBits));
	}

	function AddUnsigned(lX,lY) {
		var lX4,lY4,lX8,lY8,lResult;
		lX8 = (lX & 0x80000000);
		lY8 = (lY & 0x80000000);
		lX4 = (lX & 0x40000000);
		lY4 = (lY & 0x40000000);
		lResult = (lX & 0x3FFFFFFF)+(lY & 0x3FFFFFFF);
		if (lX4 & lY4) {
			return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
		}
		if (lX4 | lY4) {
			if (lResult & 0x40000000) {
				return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
			} else {
				return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
			}
		} else {
			return (lResult ^ lX8 ^ lY8);
		}
 	}

 	function F(x,y,z) { return (x & y) | ((~x) & z); }
 	function G(x,y,z) { return (x & z) | (y & (~z)); }
 	function H(x,y,z) { return (x ^ y ^ z); }
	function I(x,y,z) { return (y ^ (x | (~z))); }

	function FF(a,b,c,d,x,s,ac) {
		a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
		return AddUnsigned(RotateLeft(a, s), b);
	};

	function GG(a,b,c,d,x,s,ac) {
		a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
		return AddUnsigned(RotateLeft(a, s), b);
	};

	function HH(a,b,c,d,x,s,ac) {
		a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
		return AddUnsigned(RotateLeft(a, s), b);
	};

	function II(a,b,c,d,x,s,ac) {
		a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
		return AddUnsigned(RotateLeft(a, s), b);
	};

	function ConvertToWordArray(string) {
		var lWordCount;
		var lMessageLength = string.length;
		var lNumberOfWords_temp1=lMessageLength + 8;
		var lNumberOfWords_temp2=(lNumberOfWords_temp1-(lNumberOfWords_temp1 % 64))/64;
		var lNumberOfWords = (lNumberOfWords_temp2+1)*16;
		var lWordArray=Array(lNumberOfWords-1);
		var lBytePosition = 0;
		var lByteCount = 0;
		while ( lByteCount < lMessageLength ) {
			lWordCount = (lByteCount-(lByteCount % 4))/4;
			lBytePosition = (lByteCount % 4)*8;
			lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount)<<lBytePosition));
			lByteCount++;
		}
		lWordCount = (lByteCount-(lByteCount % 4))/4;
		lBytePosition = (lByteCount % 4)*8;
		lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80<<lBytePosition);
		lWordArray[lNumberOfWords-2] = lMessageLength<<3;
		lWordArray[lNumberOfWords-1] = lMessageLength>>>29;
		return lWordArray;
	};

	function WordToHex(lValue) {
		var WordToHexValue="",WordToHexValue_temp="",lByte,lCount;
		for (lCount = 0;lCount<=3;lCount++) {
			lByte = (lValue>>>(lCount*8)) & 255;
			WordToHexValue_temp = "0" + lByte.toString(16);
			WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length-2,2);
		}
		return WordToHexValue;
	};

	function Utf8Encode(string) {
		string = string.replace(/\r\n/g,"\n");
		var utftext = "";

		for (var n = 0; n < string.length; n++) {

			var c = string.charCodeAt(n);

			if (c < 128) {
				utftext += String.fromCharCode(c);
			}
			else if((c > 127) && (c < 2048)) {
				utftext += String.fromCharCode((c >> 6) | 192);
				utftext += String.fromCharCode((c & 63) | 128);
			}
			else {
				utftext += String.fromCharCode((c >> 12) | 224);
				utftext += String.fromCharCode(((c >> 6) & 63) | 128);
				utftext += String.fromCharCode((c & 63) | 128);
			}

		}

		return utftext;
	};

	var x=Array();
	var k,AA,BB,CC,DD,a,b,c,d;
	var S11=7, S12=12, S13=17, S14=22;
	var S21=5, S22=9 , S23=14, S24=20;
	var S31=4, S32=11, S33=16, S34=23;
	var S41=6, S42=10, S43=15, S44=21;

	string = Utf8Encode(string);

	x = ConvertToWordArray(string);

	a = 0x67452301; b = 0xEFCDAB89; c = 0x98BADCFE; d = 0x10325476;

	for (k=0;k<x.length;k+=16) {
		AA=a; BB=b; CC=c; DD=d;
		a=FF(a,b,c,d,x[k+0], S11,0xD76AA478);
		d=FF(d,a,b,c,x[k+1], S12,0xE8C7B756);
		c=FF(c,d,a,b,x[k+2], S13,0x242070DB);
		b=FF(b,c,d,a,x[k+3], S14,0xC1BDCEEE);
		a=FF(a,b,c,d,x[k+4], S11,0xF57C0FAF);
		d=FF(d,a,b,c,x[k+5], S12,0x4787C62A);
		c=FF(c,d,a,b,x[k+6], S13,0xA8304613);
		b=FF(b,c,d,a,x[k+7], S14,0xFD469501);
		a=FF(a,b,c,d,x[k+8], S11,0x698098D8);
		d=FF(d,a,b,c,x[k+9], S12,0x8B44F7AF);
		c=FF(c,d,a,b,x[k+10],S13,0xFFFF5BB1);
		b=FF(b,c,d,a,x[k+11],S14,0x895CD7BE);
		a=FF(a,b,c,d,x[k+12],S11,0x6B901122);
		d=FF(d,a,b,c,x[k+13],S12,0xFD987193);
		c=FF(c,d,a,b,x[k+14],S13,0xA679438E);
		b=FF(b,c,d,a,x[k+15],S14,0x49B40821);
		a=GG(a,b,c,d,x[k+1], S21,0xF61E2562);
		d=GG(d,a,b,c,x[k+6], S22,0xC040B340);
		c=GG(c,d,a,b,x[k+11],S23,0x265E5A51);
		b=GG(b,c,d,a,x[k+0], S24,0xE9B6C7AA);
		a=GG(a,b,c,d,x[k+5], S21,0xD62F105D);
		d=GG(d,a,b,c,x[k+10],S22,0x2441453);
		c=GG(c,d,a,b,x[k+15],S23,0xD8A1E681);
		b=GG(b,c,d,a,x[k+4], S24,0xE7D3FBC8);
		a=GG(a,b,c,d,x[k+9], S21,0x21E1CDE6);
		d=GG(d,a,b,c,x[k+14],S22,0xC33707D6);
		c=GG(c,d,a,b,x[k+3], S23,0xF4D50D87);
		b=GG(b,c,d,a,x[k+8], S24,0x455A14ED);
		a=GG(a,b,c,d,x[k+13],S21,0xA9E3E905);
		d=GG(d,a,b,c,x[k+2], S22,0xFCEFA3F8);
		c=GG(c,d,a,b,x[k+7], S23,0x676F02D9);
		b=GG(b,c,d,a,x[k+12],S24,0x8D2A4C8A);
		a=HH(a,b,c,d,x[k+5], S31,0xFFFA3942);
		d=HH(d,a,b,c,x[k+8], S32,0x8771F681);
		c=HH(c,d,a,b,x[k+11],S33,0x6D9D6122);
		b=HH(b,c,d,a,x[k+14],S34,0xFDE5380C);
		a=HH(a,b,c,d,x[k+1], S31,0xA4BEEA44);
		d=HH(d,a,b,c,x[k+4], S32,0x4BDECFA9);
		c=HH(c,d,a,b,x[k+7], S33,0xF6BB4B60);
		b=HH(b,c,d,a,x[k+10],S34,0xBEBFBC70);
		a=HH(a,b,c,d,x[k+13],S31,0x289B7EC6);
		d=HH(d,a,b,c,x[k+0], S32,0xEAA127FA);
		c=HH(c,d,a,b,x[k+3], S33,0xD4EF3085);
		b=HH(b,c,d,a,x[k+6], S34,0x4881D05);
		a=HH(a,b,c,d,x[k+9], S31,0xD9D4D039);
		d=HH(d,a,b,c,x[k+12],S32,0xE6DB99E5);
		c=HH(c,d,a,b,x[k+15],S33,0x1FA27CF8);
		b=HH(b,c,d,a,x[k+2], S34,0xC4AC5665);
		a=II(a,b,c,d,x[k+0], S41,0xF4292244);
		d=II(d,a,b,c,x[k+7], S42,0x432AFF97);
		c=II(c,d,a,b,x[k+14],S43,0xAB9423A7);
		b=II(b,c,d,a,x[k+5], S44,0xFC93A039);
		a=II(a,b,c,d,x[k+12],S41,0x655B59C3);
		d=II(d,a,b,c,x[k+3], S42,0x8F0CCC92);
		c=II(c,d,a,b,x[k+10],S43,0xFFEFF47D);
		b=II(b,c,d,a,x[k+1], S44,0x85845DD1);
		a=II(a,b,c,d,x[k+8], S41,0x6FA87E4F);
		d=II(d,a,b,c,x[k+15],S42,0xFE2CE6E0);
		c=II(c,d,a,b,x[k+6], S43,0xA3014314);
		b=II(b,c,d,a,x[k+13],S44,0x4E0811A1);
		a=II(a,b,c,d,x[k+4], S41,0xF7537E82);
		d=II(d,a,b,c,x[k+11],S42,0xBD3AF235);
		c=II(c,d,a,b,x[k+2], S43,0x2AD7D2BB);
		b=II(b,c,d,a,x[k+9], S44,0xEB86D391);
		a=AddUnsigned(a,AA);
		b=AddUnsigned(b,BB);
		c=AddUnsigned(c,CC);
		d=AddUnsigned(d,DD);
	}

	var temp = WordToHex(a)+WordToHex(b)+WordToHex(c)+WordToHex(d);

	return temp.toLowerCase();
}
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

Ext.ns('TYPO3.Components', 'TYPO3.Components.Tree');

/**
 * TYPO3window - General TYPO3 tree component
 */

TYPO3.Components.Tree = {};
TYPO3.Components.Tree.StandardTreeItemData = [];

TYPO3.Components.Tree.StandardTree = function(config) {
	var conf = Ext.apply({
		header: false,
		width: 280,
		rootVisible: false,
		useArrows: false,
		lines: true,
		autoScroll: true,
		containerScroll: true,
		exclusiveSelectedKey: null,
		stateful: true,
		filterOptionStartsWith: true,
		countSelectedNodes: 0,
		loader: new Ext.tree.TreeLoader({
			preloadChildren: true,
			clearOnLoad: false
		}),
		root: new Ext.tree.AsyncTreeNode({
			text: TYPO3.l10n.localize('tcatree'),
			id: 'root',
			expanded: true,
			children: TYPO3.Components.Tree.StandardTreeItemData[config.id]
		}),
		collapseFirst: false,
		listeners: {
			'checkchange': function(checkedNode, checked) {
				if (Ext.isFunction(this.checkChangeHandler)) {
					this.checkChangeHandler.call(this, checkedNode, checked);
				}
			},
			scope: this
		}
	}, config);
	TYPO3.Components.Tree.StandardTree.superclass.constructor.call(this, conf);
};


Ext.extend(TYPO3.Components.Tree.StandardTree, Ext.tree.TreePanel, {

	initComponent: function() {
		Ext.apply(this, {
			tbar: this.initialConfig.showHeader ? TYPO3.Components.Tree.Toolbar([], this) : null
		});
		TYPO3.Components.Tree.StandardTree.superclass.initComponent.call(this);
	},
	filterTree: function(filterText) {
		var text = filterText.getValue();
		Ext.each(this.hiddenNodes, function(node) {
			node.ui.show();
			node.ui.removeClass('bgColor6');
		});
		if (!text) {
			this.filter.clear();
			return;
		}
		this.expandAll();
		var regText = (this.filterOptionStartsWith ? '^' : '') + Ext.escapeRe(text);
		var re = new RegExp(regText, 'i');

			// hide empty nodes that weren't filtered
		this.hiddenNodes = [];
		var me = this;
		this.root.cascade(function(node) {
			if (node.ui.ctNode.offsetHeight < 3) {
				if (!re.test(node.text)) {
					node.ui.hide();
					me.hiddenNodes.push(node);
				} else {
					node.ui.addClass('bgColor6');
				}
			}
		}, this);
	}
});

TYPO3.Components.Tree.Toolbar = function(items, scope) {
	items = items || [];
	items.push([
		' ',
		{
			iconCls: 't3-icon t3-icon-actions t3-icon-actions-system t3-icon-system-tree-search-open',
			menu: {
				items: [
					{
						text: TYPO3.l10n.localize('tcatree.filter.startsWith'),
						checked: true,
						group: 'searchStartsWith',
						handler: function(item) {
							scope.filterOptionStartsWith = true;
							scope.filterTree(scope.getTopToolbar().getComponent('filterText'));
						},
						scope: scope
					},
					{
						text: TYPO3.l10n.localize('tcatree.filter.contains'),
						checked: false,
						group: 'searchStartsWith',
						handler: function(item) {
							scope.filterOptionStartsWith = false;
							scope.filterTree(scope.getTopToolbar().getComponent('filterText'));
						},
						scope: scope
					}
				]
			}
		},
		new Ext.form.TextField({
			width: 150,
			emptyText: TYPO3.l10n.localize('tcatree.findItem'),
			enableKeyEvents: true,
			itemId: 'filterText',
			listeners:{
				render: function(f) {
					this.filter = new Ext.tree.TreeFilter(this, {
						clearBlank: true,
						autoClear: true
					});
				},
				keydown: {
					fn: scope.filterTree,
					buffer: 350,
					scope: scope
				},
				scope: scope
			}
		}),
		'->',
		{
			iconCls: 't3-icon t3-icon-apps t3-icon-apps-tcatree t3-icon-tcatree-select-recursive',
			tooltip: TYPO3.lang['tcatree.enableRecursiveSelection'],
			enableToggle: true,
			disable: scope.tcaSelectRecursive,
			toggleHandler: function(btn, state) {
				this.tcaSelectRecursive = state;
			},
			scope: scope
		},
		{
			iconCls: 'icon-expand-all',
			tooltip: TYPO3.l10n.localize('tcatree.expandAll'),
			handler: function() {
					this.root.expand(true);
			},
			scope: scope
		}, {
			iconCls: 'icon-collapse-all',
			tooltip: TYPO3.l10n.localize('tcatree.collapseAll'),
			handler: function() {
				this.root.collapse(true);
			},
			scope: scope
		}
	]);
	return items;
};

TYPO3.Components.Tree.EmptySelectionModel = new Ext.tree.DefaultSelectionModel({
	select: Ext.emptyFn
})

TYPO3.Components.Tree.TcaCheckChangeHandler = function(checkedNode, checked) {
	var exclusiveKeys = this.tcaExclusiveKeys.split(','),
		uid = '' + checkedNode.attributes.uid;

	this.suspendEvents();

	if (this.tcaExclusiveKeys.length) {
		if (checked === true && exclusiveKeys.indexOf(uid) > -1) {
				// this key is exclusive, so uncheck all others
			this.root.cascade(function(node) {
				if (node !== checkedNode && node.attributes.checked) {
					node.attributes.checked = false;
					node.ui.toggleCheck(false);
				}
			});
			this.exclusiveSelectedKey = uid;
		} else if (checked === true && exclusiveKeys.indexOf(uid) === -1 && !Ext.isEmpty(this.exclusiveSelectedKey)) {
				// this key is exclusive, so uncheck all others
			this.root.cascade(function(node) {
				if (exclusiveKeys.indexOf('' + node.attributes.uid) > -1) {
					node.attributes.checked = false;
					node.ui.toggleCheck(false);
				}
			});
			this.exclusiveSelectedKey = null;
		}
	}

	if (checked === true && this.countSelectedNodes >= this.tcaMaxItems) {
		checkedNode.attributes.checked = false;
		checkedNode.getUI().toggleCheck(false);
		this.resumeEvents();
		return false;
	}
	if (checked) {
		checkedNode.getUI().addClass('complete');
	} else {
		checkedNode.getUI().removeClass('complete');
	}
		// if recursive selection is asked, hand over selection
	if(this.tcaSelectRecursive) {
		checkedNode.cascade(function(node) {
			node.attributes.checked = checkedNode.attributes.checked;
			node.ui.toggleCheck(checkedNode.attributes.checked);
		})
	}
	var selected = [];
	this.root.cascade(function(node) {
		if (node.ui.isChecked()) {
			selected.push(node.attributes.uid);
		}
	});
	this.countSelectedNodes = selected.length;
	Ext.fly('treeinput' + this.id).dom.value = selected.join(',');
	eval(this.onChange);

	this.resumeEvents();
};

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

Ext.ns('TYPO3', 'TYPO3.Components');

/**
 * TYPO3window - General TYPO3 window component
 */
TYPO3.Components.Window = Ext.extend(Ext.Window, {
	width: 450,
	autoHeight: true,
	closable: true,
	resizable: false,
	plain: true,
	border: false,
	modal: true,
	draggable: true,
	closeAction: 'hide',
	cls: 't3-window',

	constructor: function(config) {
		config = config || {};
		Ext.apply(this, config);
		TYPO3.Components.Window.superclass.constructor.call(this, config);
	}
});
Ext.reg('TYPO3window', TYPO3.Components.Window);


/**
 * Helper class for managing windows.
 * Once a window is created, it is permanent until you close
 * [TYPO3.Windows.close(id)] or remove all [TYPO3.Windows.closeAll()]
 *
 * Example usage:
 *
 * var w = TYPO3.Windows.getWindow({
 *		title: 'Testwindow',
 *		html: 'some content!',
 *		width: 400
 *	}).show();
 */
TYPO3.Windows = function() {
	/** @private */
	var windowCollection = new Ext.util.MixedCollection(true);

	return {
		/** @public */

		/**
		 * Get a window. If already in collection return it, otherwise create a new one
		 *
		 * @param {Object} configuration
		 * @return {Object} window
		 */
		getWindow: function(configuration) {
			var id = configuration.id || '', window;

			if (id) {
				window = this.getById(id);
			}
			if (window) {
				return window;
			} else {
				window = new TYPO3.Components.Window(configuration);
				windowCollection.add(window);
				return window;
			}
		},

		/**
		 * Get a window and show. If already in collection return it, otherwise create a new one
		 *
		 * @param {Object} configuration
		 * @return {Object} window
		 */
		showWindow: function(configuration) {
			var window = this.getWindow(configuration);
			window.show();
			return window;
		},

		/**
		 * Shows window with id and return reference. If not exist return false
		 *
		 * @param {String} id
		 * @return {Object} window false if not found
		 */
		show: function(id) {
			var window = this.getById(id);
			if (window) {
				window.show();
				return window;
			}
			return false;
		},

		/**
		 * Shows window with id and return reference. If not exist return false
		 *
		 * @param {String} id
		 * @return {Object} window or false if not found
		 */
		getById: function(id) {
			return windowCollection.key(id);
		},

		/**
		 * Get the window collection
		 *
		 * @return {Ext.util.MixedCollection} windowCollection
		 */
		getCollection: function () {
			return windowCollection;
		},

		/**
		 * Get count of windows
		 *
		 * @return {Int} count
		 */
		getCount: function() {
			return windowCollection.length;
		},

		/**
		 * Each for windowCollection
		 *
		 * @param {Function} function
		 * @param {Object} scope
		 * @return void
		 */
		each : function(fn, scope) {
			windowCollection.each(fn, scope);
		},

		/**
		 * Close window and remove from stack
		 *
		 * @param {Int} id
		 * @return void
		 */
		close: function(id) {
			var window = this.getById(id);
			if (window) {
				window.close();
				windowCollection.remove(window);
			}
		},

		/**
		 * Close all windows and clear stack
		 *
		 * @return void
		 */
		closeAll: function() {
			windowCollection.each(function(window) {
				window.close();
			});
			windowCollection.clear();
		}
	}
}();

/**
 * Helper class for dialog windows
 *
 * Example usage:
 *
 * TYPO3.Dialog.InformationDialog({
 * 		title: 'Test',
 *		msg: 'some information'
 *	});

 */
TYPO3.Dialog = function() {
	/** @private functions */
	var informationDialogConfiguration = {
		buttons: Ext.MessageBox.OK,
		icon: Ext.MessageBox.INFO,
		fn: Ext.emptyFn
	};

	var questionDialogConfiguration = {
		buttons: Ext.MessageBox.YESNO,
		icon: Ext.MessageBox.QUESTION
	};

	var warningDialogConfiguration = {
		buttons: Ext.MessageBox.OK,
		icon: Ext.MessageBox.WARNING,
		fn: Ext.emptyFn
	};

	var errorDialogConfiguration = {
		buttons: Ext.MessageBox.OK,
		icon: Ext.MessageBox.ERROR,
		fn: Ext.emptyFn
	};

	return {
		/** @public functions */
		InformationDialog: function(configuration) {
			configuration = configuration || {};
			configuration = Ext.apply(
					informationDialogConfiguration,
					configuration
					);
			Ext.Msg.show(configuration);
		},

		QuestionDialog: function(configuration) {
			configuration = configuration || {};
			configuration = Ext.apply(
					questionDialogConfiguration,
					configuration
					);
			Ext.Msg.show(configuration);
		},

		WarningDialog: function(configuration) {
			configuration = configuration || {};
			configuration = Ext.apply(
					warningDialogConfiguration,
					configuration
					);
			Ext.Msg.show(configuration);
		},

		ErrorDialog: function(configuration) {
			configuration = configuration || {};
			configuration = Ext.apply(
					errorDialogConfiguration,
					configuration
					);
			Ext.Msg.show(configuration);
		}
	}
}();

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Establish namespace
 */
var HTMLArea = HTMLArea || {};
HTMLArea.jQuery = TYPO3.jQuery;
HTMLArea.CSS = {};

/**
 * ExtJS namespacing
 */
Ext.ux.form = {};
Ext.ux.menu = {};
Ext.ux.Toolbar = {};

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Contains JavaScript for TYPO3 Core Form generator - AKA "TCEforms"
 */

var TBE_EDITOR = {
	/* Example:
		elements: {
			'data-parentPid-table-uid': {
				'field': {
					'range':		[0, 100],
					'rangeImg':		'',
					'required':		true,
					'requiredImg':	''
				}
			}
		},
	*/

	elements: {},
	nested: {'field':{}, 'level':{}},
	ignoreElements: [],
	actionChecks: { submit:	[] },

	formname: '',
	formnameUENC: '',
	isChanged: 0,

	backPath: '',

	isPalettedoc: null,
	doSaveFieldName: 0,

	labels: {},
	images: {
		req: new Image(),
		cm: new Image(),
		sel: new Image(),
		clear: new Image()
	},

	clearBeforeSettingFormValueFromBrowseWin: [],

	// Handling of data structures:
	removeElement: function(record) {
		if (TBE_EDITOR.elements && TBE_EDITOR.elements[record]) {
			delete(TBE_EDITOR.elements[record]);
		}
	},
	removeElementArray: function(removeStack) {
		if (removeStack && removeStack.length) {
			TBE_EDITOR.ignoreElements = removeStack;
			for (var i=removeStack.length; i>=0; i--) {
				TBE_EDITOR.removeElement(removeStack[i]);
			}
			TBE_EDITOR.ignoreElements = [];
		}
	},
	getElement: function(record, field, type) {
		var result = null;
		var element;

		if (TBE_EDITOR.elements && TBE_EDITOR.elements[record] && TBE_EDITOR.elements[record][field]) {
			element = TBE_EDITOR.elements[record][field];
			if (type) {
				if (element[type]) result = element;
			} else {
				result = element;
			}
		}

		return result;
	},
	checkElements: function(type, recentUpdated, record, field) {
		return (document.getElementsByClassName('has-error').length == 0);
	},
	// Check all the input fields on a given level of nesting - if only on is unfilled, the whole level is marked as required:
	checkNested: function(nestedLevelIdent) {
		var nestedLevel, isClean;
		if (nestedLevelIdent && TBE_EDITOR.nested.level && TBE_EDITOR.nested.level[nestedLevelIdent]) {
			nestedLevel = TBE_EDITOR.nested.level[nestedLevelIdent];
			if (!nestedLevel.clean) {
				if (typeof nestedLevel.item === 'object') {
					TYPO3.jQuery.each(nestedLevel.item, function(key, value) {
							if (isClean || typeof isClean === 'undefined') {
								isClean = (
									TBE_EDITOR.checkElements('required', false, value[0], value[1]) &&
									TBE_EDITOR.checkElements('range', false, value[0], value[1])
								);
							}
						}
					);
					if (typeof isClean !== 'undefined' && !isClean) {
						return false;
					}
				}
				if (typeof nestedLevel.sub === 'object') {
					TYPO3.jQuery.each(nestedLevel.sub, function(key, value) {
							if (isClean || typeof isClean === 'undefined') {
								isClean = TBE_EDITOR.checkNested(key);
							}
						}
					);
					if (typeof isClean !== 'undefined' && !isClean) {
						return false;
					}
				}
					// Store the result, that this level (the fields on this and the sub levels) are clean:
				nestedLevel.clean = true;
			}
		}
		return true;
	},
	addActionChecks: function(type, checks) {
		TBE_EDITOR.actionChecks[type].push(checks);
	},

	fieldChanged_fName: function(fName,el) {
		var idx=2;
		var table = TBE_EDITOR.split(fName, "[", idx);
		var uid = TBE_EDITOR.split(fName, "[", idx+1);
		var field = TBE_EDITOR.split(fName, "[", idx+2);

		table = table.substr(0,table.length-1);
		uid = uid.substr(0,uid.length-1);
		field = field.substr(0,field.length-1);
		TBE_EDITOR.fieldChanged(table,uid,field,el);
	},
	fieldChanged: function(table,uid,field,el) {
		var theField = 'data['+table+']['+uid+']['+field+']';
		var theRecord = 'data['+table+']['+uid+']';
		TBE_EDITOR.isChanged = 1;

		// modify the "field has changed" info by adding a class to the container element (based on palette or main field)
		var $formField = TYPO3.jQuery('[name="' + el + '"]');
		var $humanReadableField = TYPO3.jQuery('[data-formengine-input-name="' + el + '"]');
		$humanReadableField.triggerHandler('change');
		var $paletteField = $formField.closest('.t3js-formengine-palette-field');
		$paletteField.addClass('has-change');

		// Set required flag:
		var imgReqObjName = "req_"+table+"_"+uid+"_"+field;
		if (TBE_EDITOR.getElement(theRecord,field,'required') && document[TBE_EDITOR.formname][theField]) {
			if (TBE_EDITOR.checkElements('required', false, theRecord, field)) {
				TBE_EDITOR.setImage(imgReqObjName,TBE_EDITOR.images.clear);
			} else {
				TBE_EDITOR.setImage(imgReqObjName,TBE_EDITOR.images.req);
			}
		}
		if (TBE_EDITOR.getElement(theRecord,field,'range') && document[TBE_EDITOR.formname][theField]) {
			if (TBE_EDITOR.checkElements('range', false, theRecord, field)) {
				TBE_EDITOR.setImage(imgReqObjName,TBE_EDITOR.images.clear);
			} else {
				TBE_EDITOR.setImage(imgReqObjName,TBE_EDITOR.images.req);
			}
		}
		if (TBE_EDITOR.isPalettedoc) { TBE_EDITOR.setOriginalFormFieldValue(theField) }
		if (TYPO3.FormEngine && TYPO3.FormEngine.Validation) {
			TYPO3.FormEngine.Validation.updateInputField(theField);
			TYPO3.FormEngine.Validation.validate();
		}
	},
	setOriginalFormFieldValue: function(theField) {
		if (TBE_EDITOR.isPalettedoc && (TBE_EDITOR.isPalettedoc).document[TBE_EDITOR.formname] && (TBE_EDITOR.isPalettedoc).document[TBE_EDITOR.formname][theField]) {
			(TBE_EDITOR.isPalettedoc).document[TBE_EDITOR.formname][theField].value = document[TBE_EDITOR.formname][theField].value;
		}
	},
	isFormChanged: function(noAlert) {
		if (TBE_EDITOR.isChanged && !noAlert && confirm(TBE_EDITOR.labels.fieldsChanged)) {
			return 0;
		}
		return TBE_EDITOR.isChanged;
	},
	checkAndDoSubmit: function(sendAlert) {
		if (TBE_EDITOR.checkSubmit(sendAlert)) { TBE_EDITOR.submitForm(); }
	},
	/**
	 * Checks if the form can be submitted according to any possible restrains like required values, item numbers etc.
	 * Returns true if the form can be submitted, otherwise false (and might issue an alert message, if "sendAlert" is 1)
	 * If "sendAlert" is false, no error message will be shown upon false return value (if "1" then it will).
	 * If "sendAlert" is "-1" then the function will ALWAYS return true regardless of constraints (except if login has expired) - this is used in the case where a form field change requests a form update and where it is accepted that constraints are not observed (form layout might change so other fields are shown...)
	 */
	checkSubmit: function(sendAlert) {
		var funcIndex, funcMax, funcRes;
		var OK=1;

		// $this->additionalJS_submit:
		if (TBE_EDITOR.actionChecks && TBE_EDITOR.actionChecks.submit) {
			for (funcIndex=0, funcMax=TBE_EDITOR.actionChecks.submit.length; funcIndex<funcMax; funcIndex++) {
				try {
					eval(TBE_EDITOR.actionChecks.submit[funcIndex]);
				} catch(error) {}
			}
		}

		if(!OK) {
			if (!confirm(unescape("SYSTEM ERROR: One or more Rich Text Editors on the page could not be contacted. This IS an error, although it should not be regular.\nYou can save the form now by pressing OK, but you will loose the Rich Text Editor content if you do.\n\nPlease report the error to your administrator if it persists."))) {
				return false;
			} else {
				OK = 1;
			}
		}
		// $reqLinesCheck
		if (!TBE_EDITOR.checkElements('required', false)) { OK = 0; }
		// $reqRangeCheck
		if (!TBE_EDITOR.checkElements('range', false)) { OK = 0; }

		if (OK || sendAlert==-1) {
			return true;
		} else {
			if(sendAlert) alert(TBE_EDITOR.labels.fieldsMissing);
			return false;
		}
	},
	checkRange: function(numberOfElements, lower, upper) {
			// for backwards compatibility, check if we're dealing with an element as first parameter
		if(typeof numberOfElements == 'object') {
			numberOfElements = numberOfElements.length;
		}

		if (numberOfElements >= lower && numberOfElements <= upper) {
			return true;
		} else {
			return false;
		}
	},
	setImage: function(name,image) {
		var object;
		if (document[name]) {
			object = document[name];
		} else if (document.getElementById(name)) {
			object = document.getElementById(name);
		}
		if (object) {
			if (typeof image == 'object') {
				document[name].src = image.src;
			} else {
				document[name].src = eval(image+'.src');
			}
		}
	},
	submitForm: function() {
		if (TBE_EDITOR.doSaveFieldName) {
			document[TBE_EDITOR.formname][TBE_EDITOR.doSaveFieldName].value=1;
		}
		// Set a short timeout to allow other JS processes to complete, in particular those from
		// EXT:backend/Resources/Public/JavaScript/FormEngine.js (reference: http://forge.typo3.org/issues/58755).
		// TODO: This should be solved in a better way when this script is refactored.
		window.setTimeout(function() {
			document.getElementsByName(TBE_EDITOR.formname).item(0).submit();
		}, 10);
	},
	split: function(theStr1, delim, index) {
		var theStr = ""+theStr1;
		var lengthOfDelim = delim.length;
		sPos = -lengthOfDelim;
		if (index<1) {index=1;}
		for (var a=1; a<index; a++) {
			sPos = theStr.indexOf(delim, sPos+lengthOfDelim);
			if (sPos==-1) { return null; }
		}
		ePos = theStr.indexOf(delim, sPos+lengthOfDelim);
		if(ePos == -1) { ePos = theStr.length; }
		return (theStr.substring(sPos+lengthOfDelim,ePos));
	},
	curSelected: function(theField) {
		var fObjSel = TYPO3.jQuery('select[data-formengine-input-name="' + theField + '"]').get(0);
		var retVal="";
		if (fObjSel) {
			if (fObjSel.type=='select-multiple' || fObjSel.type=='select-one') {
				var l=fObjSel.length;
				for (a=0;a<l;a++) {
					if (fObjSel.options[a].selected==1) {
						retVal+=fObjSel.options[a].value+",";
					}
				}
			}
		}
		return retVal;
	},
	rawurlencode: function(str,maxlen) {
		var output = str;
		if (maxlen)	output = output.substr(0,200);
		output = encodeURIComponent(output);
		return output;
	},
	str_replace: function(match,replace,string) {
		var input = ''+string;
		var matchStr = ''+match;
		if (!matchStr) { return string; }
		var output = '';
		var pointer=0;
		var pos = input.indexOf(matchStr);
		while (pos!=-1) {
			output+=''+input.substr(pointer, pos-pointer)+replace;
			pointer=pos+matchStr.length;
			pos = input.indexOf(match,pos+1);
		}
		output+=''+input.substr(pointer);
		return output;
	},
	toggle_display_states: function(id, state_1, state_2) {
		var node = document.getElementById(id);
		if (node) {
			switch (node.style.display) {
				case state_1:
					node.style.display = state_2;
					break;
				case state_2:
					node.style.display = state_1;
					break;
			}
		}
		return false;
	},

	/**
	 * Determines backend path to be used for e.g. ajax.php
	 * @return string
	 * @deprecated since TYPO3 CMS 7, will be removed with TYPO3 CMS 8
	 */
	getBackendPath: function() {
		if (typeof console != 'undefined') {
			console.log('TS.getBackendPath() is deprecated since TYPO3 CMS 7, and will be removed in TYPO3 CMS 8.');
		}
		if (TYPO3) {
			if (TYPO3.configuration && TYPO3.configuration.PATH_typo3) {
				backendPath = TYPO3.configuration.PATH_typo3;
			} else if (TYPO3.settings && TYPO3.settings.PATH_typo3) {
				backendPath = TYPO3.settings.PATH_typo3;
			}
		}
		return backendPath;
	}
};

function typoSetup	() {
	this.passwordDummy = '********';
	this.decimalSign = '.';
}
// @todo: maybe obsolete, need a deeper check
var TS = new typoSetup();

// backwards compatibility for extensions
var TBE_EDITOR_setHiddenContent = TBE_EDITOR.setHiddenContent;
var TBE_EDITOR_isChanged = TBE_EDITOR.isChanged;
var TBE_EDITOR_fieldChanged_fName = TBE_EDITOR.fieldChanged_fName;
var TBE_EDITOR_fieldChanged = TBE_EDITOR.fieldChanged;
var TBE_EDITOR_setOriginalFormFieldValue = TBE_EDITOR.setOriginalFormFieldValue;
var TBE_EDITOR_isFormChanged = TBE_EDITOR.isFormChanged;
var TBE_EDITOR_checkAndDoSubmit = TBE_EDITOR.checkAndDoSubmit;
var TBE_EDITOR_checkSubmit = TBE_EDITOR.checkSubmit;
var TBE_EDITOR_checkRange = TBE_EDITOR.checkRange;
var TBE_EDITOR_setImage = TBE_EDITOR.setImage;
var TBE_EDITOR_submitForm = TBE_EDITOR.submitForm;
var TBE_EDITOR_split = TBE_EDITOR.split;
var TBE_EDITOR_curSelected = TBE_EDITOR.curSelected;
var TBE_EDITOR_rawurlencode = TBE_EDITOR.rawurlencode;
var TBE_EDITOR_str_replace = TBE_EDITOR.str_replace;


var typo3form = {
	fieldSetNull: function(fieldName, isNull) {
		if (document[TBE_EDITOR.formname][fieldName]) {
			TYPO3.jQuery(document[TBE_EDITOR.formname][fieldName]).closest('.t3js-formengine-field-item').toggleClass('disabled', isNull);
		}
	},
	fieldTogglePlaceholder: function(fieldName, showPlaceholder) {
		if (!document[TBE_EDITOR.formname][fieldName]) {
			return;
		}

		var $formFieldItemWrapper = TYPO3.jQuery(document[TBE_EDITOR.formname][fieldName]).closest('.t3js-formengine-field-item');
		$formFieldItemWrapper.find('.t3js-formengine-placeholder-placeholder').toggle(showPlaceholder);
		$formFieldItemWrapper.find('.t3js-formengine-placeholder-formfield').toggle(!showPlaceholder);
	},
	fieldSet: function(theField, evallist, is_in, checkbox, checkboxValue) {
		if (document[TBE_EDITOR.formname][theField]) {
			var theFObj = new evalFunc_dummy (evallist,is_in, checkbox, checkboxValue);
			var theValue = document[TBE_EDITOR.formname][theField].value;
			if (checkbox && theValue==checkboxValue) {
				document.querySelector('form[name="' + TBE_EDITOR.formname + '"] [data-formengine-input-name="' + theField + '"]').value = "";
				if (document[TBE_EDITOR.formname][theField+"_cb"])	document[TBE_EDITOR.formname][theField+"_cb"].checked = "";
			} else {
				document.querySelector('form[name="' + TBE_EDITOR.formname + '"] [data-formengine-input-name="' + theField + '"]').value = evalFunc.outputObjValue(theFObj, theValue);
				if (document[TBE_EDITOR.formname][theField+"_cb"])	document[TBE_EDITOR.formname][theField+"_cb"].checked = "on";
			}
		}
	},
	fieldGet: function(theField, evallist, is_in, checkbox, checkboxValue, checkbox_off, checkSetValue) {
		if (document[TBE_EDITOR.formname][theField]) {
			var theFObj = new evalFunc_dummy (evallist,is_in, checkbox, checkboxValue);
			if (checkbox_off) {
				if (document[TBE_EDITOR.formname][theField+"_cb"].checked) {
					var split = evallist.split(',');
					for (var i = 0; split.length > i; i++) {
						var el = split[i].replace(/ /g, '');
						if (el == 'datetime' || el == 'date') {
							var now = new Date();
							checkSetValue = Date.parse(now)/1000 - now.getTimezoneOffset()*60;
							break;
						} else if (el == 'time' || el == 'timesec') {
							checkSetValue = evalFunc_getTimeSecs(new Date());
							break;
						}
					}
					document[TBE_EDITOR.formname][theField].value=checkSetValue;
				} else {
					document[TBE_EDITOR.formname][theField].value=checkboxValue;
				}
			}else{
				document[TBE_EDITOR.formname][theField].value = evalFunc.evalObjValue(theFObj, document.querySelector('form[name="' + TBE_EDITOR.formname + '"] [data-formengine-input-name="' + theField + '"]').value);
			}
			typo3form.fieldSet(theField, evallist, is_in, checkbox, checkboxValue);
		}
	}
};

// @TODO: This function is a copy from jsfunc.evalfield.js
// @TODO: Remove it later, after TBE_EDITOR is not used anymore.
function evalFunc_dummy (evallist,is_in,checkbox,checkboxValue) {
	this.evallist = evallist;
	this.is_in = is_in;
	this.checkboxValue = checkboxValue;
	this.checkbox = checkbox;
}

// backwards compatibility for extensions
var typo3FormFieldSet = typo3form.fieldSet;
var typo3FormFieldGet = typo3form.fieldGet;

/* CodeMirror main module (http://codemirror.net/)
 *
 * Implements the CodeMirror constructor and prototype, which take care
 * of initializing the editor frame, and providing the outside interface.
 */

// The CodeMirrorConfig object is used to specify a default
// configuration. If you specify such an object before loading this
// file, the values you put into it will override the defaults given
// below. You can also assign to it after loading.
var CodeMirrorConfig = window.CodeMirrorConfig || {};

var CodeMirror = (function(){
  function setDefaults(object, defaults) {
    for (var option in defaults) {
      if (!object.hasOwnProperty(option))
        object[option] = defaults[option];
    }
  }
  function forEach(array, action) {
    for (var i = 0; i < array.length; i++)
      action(array[i]);
  }
  function createHTMLElement(el) {
    if (document.createElementNS && document.documentElement.namespaceURI !== null)
      return document.createElementNS("http://www.w3.org/1999/xhtml", el)
    else
      return document.createElement(el)
  }

  // These default options can be overridden by passing a set of
  // options to a specific CodeMirror constructor. See manual.html for
  // their meaning.
  setDefaults(CodeMirrorConfig, {
    stylesheet: [],
    path: "",
    parserfile: [],
    basefiles: ["util.js", "stringstream.js", "select.js", "undo.js", "editor.js", "tokenize.js"],
    iframeClass: null,
    passDelay: 200,
    passTime: 50,
    lineNumberDelay: 200,
    lineNumberTime: 50,
    continuousScanning: false,
    saveFunction: null,
    onLoad: null,
    onChange: null,
    undoDepth: 50,
    undoDelay: 800,
    disableSpellcheck: true,
    textWrapping: true,
    readOnly: false,
    width: "",
    height: "300px",
    minHeight: 100,
    autoMatchParens: false,
    markParen: null,
    unmarkParen: null,
    parserConfig: null,
    tabMode: "indent", // or "spaces", "default", "shift"
    enterMode: "indent", // or "keep", "flat"
    electricChars: true,
    reindentOnLoad: false,
    activeTokens: null,
    onCursorActivity: null,
    lineNumbers: false,
    firstLineNumber: 1,
    onLineNumberClick: null,
    indentUnit: 2,
    domain: null,
    noScriptCaching: false,
    incrementalLoading: false
  });

  function addLineNumberDiv(container, firstNum) {
    var nums = createHTMLElement("div"),
        scroller = createHTMLElement("div");
    nums.style.position = "absolute";
    nums.style.height = "100%";
    if (nums.style.setExpression) {
      try {nums.style.setExpression("height", "this.previousSibling.offsetHeight + 'px'");}
      catch(e) {} // Seems to throw 'Not Implemented' on some IE8 versions
    }
    nums.style.top = "0px";
    nums.style.left = "0px";
    nums.style.overflow = "hidden";
    container.appendChild(nums);
    scroller.className = "CodeMirror-line-numbers";
    nums.appendChild(scroller);
    scroller.innerHTML = "<div>" + firstNum + "</div>";
    return nums;
  }

  function frameHTML(options) {
    if (typeof options.parserfile == "string")
      options.parserfile = [options.parserfile];
    if (typeof options.basefiles == "string")
      options.basefiles = [options.basefiles];
    if (typeof options.stylesheet == "string")
      options.stylesheet = [options.stylesheet];

    var sp = " spellcheck=\"" + (options.disableSpellcheck ? "false" : "true") + "\"";
    var html = ["<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\"><html" + sp + "><head>"];
    // Hack to work around a bunch of IE8-specific problems.
    html.push("<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\"/>");
    var queryStr = options.noScriptCaching ? "?nocache=" + new Date().getTime().toString(16) : "";
    forEach(options.stylesheet, function(file) {
      html.push("<link rel=\"stylesheet\" type=\"text/css\" href=\"" + file + queryStr + "\"/>");
    });
    forEach(options.basefiles.concat(options.parserfile), function(file) {
      if (!/^https?:/.test(file)) file = options.path + file;
      html.push("<script type=\"text/javascript\" src=\"" + file + queryStr + "\"><" + "/script>");
    });
    html.push("</head><body style=\"border-width: 0;\" class=\"editbox\"" + sp + "></body></html>");
    return html.join("");
  }

  var internetExplorer = document.selection && window.ActiveXObject && /MSIE/.test(navigator.userAgent);

  function CodeMirror(place, options) {
    // Use passed options, if any, to override defaults.
    this.options = options = options || {};
    setDefaults(options, CodeMirrorConfig);

    // Backward compatibility for deprecated options.
    if (options.dumbTabs) options.tabMode = "spaces";
    else if (options.normalTab) options.tabMode = "default";
    if (options.cursorActivity) options.onCursorActivity = options.cursorActivity;

    var frame = this.frame = createHTMLElement("iframe");
    if (options.iframeClass) frame.className = options.iframeClass;
    frame.frameBorder = 0;
    frame.style.border = "0";
    frame.style.width = '100%';
    frame.style.height = '100%';
    // display: block occasionally suppresses some Firefox bugs, so we
    // always add it, redundant as it sounds.
    frame.style.display = "block";

    var div = this.wrapping = createHTMLElement("div");
    div.style.position = "relative";
    div.className = "CodeMirror-wrapping";
    div.style.width = options.width;
    div.style.height = (options.height == "dynamic") ? options.minHeight + "px" : options.height;
    // This is used by Editor.reroutePasteEvent
    var teHack = this.textareaHack = createHTMLElement("textarea");
    div.appendChild(teHack);
    teHack.style.position = "absolute";
    teHack.style.left = "-10000px";
    teHack.style.width = "10px";
    teHack.tabIndex = 100000;

    // Link back to this object, so that the editor can fetch options
    // and add a reference to itself.
    frame.CodeMirror = this;
    if (options.domain && internetExplorer) {
      this.html = frameHTML(options);
      frame.src = "javascript:(function(){document.open();" +
        (options.domain ? "document.domain=\"" + options.domain + "\";" : "") +
        "document.write(window.frameElement.CodeMirror.html);document.close();})()";
    }
    else {
      frame.src = "javascript:;";
    }

    if (place.appendChild) place.appendChild(div);
    else place(div);
    div.appendChild(frame);
    if (options.lineNumbers) this.lineNumbers = addLineNumberDiv(div, options.firstLineNumber);

    this.win = frame.contentWindow;
    if (!options.domain || !internetExplorer) {
      this.win.document.open();
      this.win.document.write(frameHTML(options));
      this.win.document.close();
    }
  }

  CodeMirror.prototype = {
    init: function() {
      // Deprecated, but still supported.
      if (this.options.initCallback) this.options.initCallback(this);
      if (this.options.onLoad) this.options.onLoad(this);
      if (this.options.lineNumbers) this.activateLineNumbers();
      if (this.options.reindentOnLoad) this.reindent();
      if (this.options.height == "dynamic") this.setDynamicHeight();
    },

    getCode: function() {return this.editor.getCode();},
    setCode: function(code) {this.editor.importCode(code);},
    selection: function() {this.focusIfIE(); return this.editor.selectedText();},
    reindent: function() {this.editor.reindent();},
    reindentSelection: function() {this.focusIfIE(); this.editor.reindentSelection(null);},

    focusIfIE: function() {
      // in IE, a lot of selection-related functionality only works when the frame is focused
      if (this.win.select.ie_selection && document.activeElement != this.frame)
        this.focus();
    },
    focus: function() {
      this.win.focus();
      if (this.editor.selectionSnapshot) // IE hack
        this.win.select.setBookmark(this.win.document.body, this.editor.selectionSnapshot);
    },
    replaceSelection: function(text) {
      this.focus();
      this.editor.replaceSelection(text);
      return true;
    },
    replaceChars: function(text, start, end) {
      this.editor.replaceChars(text, start, end);
    },
    getSearchCursor: function(string, fromCursor, caseFold) {
      return this.editor.getSearchCursor(string, fromCursor, caseFold);
    },

    undo: function() {this.editor.history.undo();},
    redo: function() {this.editor.history.redo();},
    historySize: function() {return this.editor.history.historySize();},
    clearHistory: function() {this.editor.history.clear();},

    grabKeys: function(callback, filter) {this.editor.grabKeys(callback, filter);},
    ungrabKeys: function() {this.editor.ungrabKeys();},

    setParser: function(name, parserConfig) {this.editor.setParser(name, parserConfig);},
    setSpellcheck: function(on) {this.win.document.body.spellcheck = on;},
    setStylesheet: function(names) {
      if (typeof names === "string") names = [names];
      var activeStylesheets = {};
      var matchedNames = {};
      var links = this.win.document.getElementsByTagName("link");
      // Create hashes of active stylesheets and matched names.
      // This is O(n^2) but n is expected to be very small.
      for (var x = 0, link; link = links[x]; x++) {
        if (link.rel.indexOf("stylesheet") !== -1) {
          for (var y = 0; y < names.length; y++) {
            var name = names[y];
            if (link.href.substring(link.href.length - name.length) === name) {
              activeStylesheets[link.href] = true;
              matchedNames[name] = true;
            }
          }
        }
      }
      // Activate the selected stylesheets and disable the rest.
      for (var x = 0, link; link = links[x]; x++) {
        if (link.rel.indexOf("stylesheet") !== -1) {
          link.disabled = !(link.href in activeStylesheets);
        }
      }
      // Create any new stylesheets.
      for (var y = 0; y < names.length; y++) {
        var name = names[y];
        if (!(name in matchedNames)) {
          var link = this.win.document.createElement("link");
          link.rel = "stylesheet";
          link.type = "text/css";
          link.href = name;
          this.win.document.getElementsByTagName('head')[0].appendChild(link);
        }
      }
    },
    setTextWrapping: function(on) {
      if (on == this.options.textWrapping) return;
      this.win.document.body.style.whiteSpace = on ? "" : "nowrap";
      this.options.textWrapping = on;
      if (this.lineNumbers) {
        this.setLineNumbers(false);
        this.setLineNumbers(true);
      }
    },
    setIndentUnit: function(unit) {this.win.indentUnit = unit;},
    setUndoDepth: function(depth) {this.editor.history.maxDepth = depth;},
    setTabMode: function(mode) {this.options.tabMode = mode;},
    setEnterMode: function(mode) {this.options.enterMode = mode;},
    setLineNumbers: function(on) {
      if (on && !this.lineNumbers) {
        this.lineNumbers = addLineNumberDiv(this.wrapping,this.options.firstLineNumber);
        this.activateLineNumbers();
      }
      else if (!on && this.lineNumbers) {
        this.wrapping.removeChild(this.lineNumbers);
        this.wrapping.style.paddingLeft = "";
        this.lineNumbers = null;
      }
    },

    cursorPosition: function(start) {this.focusIfIE(); return this.editor.cursorPosition(start);},
    firstLine: function() {return this.editor.firstLine();},
    lastLine: function() {return this.editor.lastLine();},
    nextLine: function(line) {return this.editor.nextLine(line);},
    prevLine: function(line) {return this.editor.prevLine(line);},
    lineContent: function(line) {return this.editor.lineContent(line);},
    setLineContent: function(line, content) {this.editor.setLineContent(line, content);},
    removeLine: function(line){this.editor.removeLine(line);},
    insertIntoLine: function(line, position, content) {this.editor.insertIntoLine(line, position, content);},
    selectLines: function(startLine, startOffset, endLine, endOffset) {
      this.win.focus();
      this.editor.selectLines(startLine, startOffset, endLine, endOffset);
    },
    nthLine: function(n) {
      var line = this.firstLine();
      for (; n > 1 && line !== false; n--)
        line = this.nextLine(line);
      return line;
    },
    lineNumber: function(line) {
      var num = 0;
      while (line !== false) {
        num++;
        line = this.prevLine(line);
      }
      return num;
    },
    jumpToLine: function(line) {
      if (typeof line == "number") line = this.nthLine(line);
      this.selectLines(line, 0);
      this.win.focus();
    },
    currentLine: function() { // Deprecated, but still there for backward compatibility
      return this.lineNumber(this.cursorLine());
    },
    cursorLine: function() {
      return this.cursorPosition().line;
    },
    cursorCoords: function(start) {return this.editor.cursorCoords(start);},

    activateLineNumbers: function() {
      var frame = this.frame, win = frame.contentWindow, doc = win.document, body = doc.body,
          nums = this.lineNumbers, scroller = nums.firstChild, self = this;
      var barWidth = null;

      nums.onclick = function(e) {
        var handler = self.options.onLineNumberClick;
        if (handler) {
          var div = (e || window.event).target || (e || window.event).srcElement;
          var num = div == nums ? NaN : Number(div.innerHTML);
          if (!isNaN(num)) handler(num, div);
        }
      };

      function sizeBar() {
        if (frame.offsetWidth == 0) return;
        for (var root = frame; root.parentNode; root = root.parentNode){}
        if (!nums.parentNode || root != document || !win.Editor) {
          // Clear event handlers (their nodes might already be collected, so try/catch)
          try{clear();}catch(e){}
          clearInterval(sizeInterval);
          return;
        }

        if (nums.offsetWidth != barWidth) {
          barWidth = nums.offsetWidth;
          frame.parentNode.style.paddingLeft = barWidth + "px";
        }
      }
      function doScroll() {
        nums.scrollTop = body.scrollTop || doc.documentElement.scrollTop || 0;
      }
      // Cleanup function, registered by nonWrapping and wrapping.
      var clear = function(){};
      sizeBar();
      var sizeInterval = setInterval(sizeBar, 500);

      function ensureEnoughLineNumbers(fill) {
        var lineHeight = scroller.firstChild.offsetHeight;
        if (lineHeight == 0) return;
        var targetHeight = 50 + Math.max(body.offsetHeight, Math.max(frame.offsetHeight, body.scrollHeight || 0)),
            lastNumber = Math.ceil(targetHeight / lineHeight);
        for (var i = scroller.childNodes.length; i <= lastNumber; i++) {
          var div = createHTMLElement("div");
          div.appendChild(document.createTextNode(fill ? String(i + self.options.firstLineNumber) : "\u00a0"));
          scroller.appendChild(div);
        }
      }

      function nonWrapping() {
        function update() {
          ensureEnoughLineNumbers(true);
          doScroll();
        }
        self.updateNumbers = update;
        var onScroll = win.addEventHandler(win, "scroll", doScroll, true),
            onResize = win.addEventHandler(win, "resize", update, true);
        clear = function(){
          onScroll(); onResize();
          if (self.updateNumbers == update) self.updateNumbers = null;
        };
        update();
      }

      function wrapping() {
        var node, lineNum, next, pos, changes = [], styleNums = self.options.styleNumbers;

        function setNum(n, node) {
          // Does not typically happen (but can, if you mess with the
          // document during the numbering)
          if (!lineNum) lineNum = scroller.appendChild(createHTMLElement("div"));
          if (styleNums) styleNums(lineNum, node, n);
          // Changes are accumulated, so that the document layout
          // doesn't have to be recomputed during the pass
          changes.push(lineNum); changes.push(n);
          pos = lineNum.offsetHeight + lineNum.offsetTop;
          lineNum = lineNum.nextSibling;
        }
        function commitChanges() {
          for (var i = 0; i < changes.length; i += 2)
            changes[i].innerHTML = changes[i + 1];
          changes = [];
        }
        function work() {
          if (!scroller.parentNode || scroller.parentNode != self.lineNumbers) return;

          var endTime = new Date().getTime() + self.options.lineNumberTime;
          while (node) {
            setNum(next++, node.previousSibling);
            for (; node && !win.isBR(node); node = node.nextSibling) {
              var bott = node.offsetTop + node.offsetHeight;
              while (scroller.offsetHeight && bott - 3 > pos) {
                var oldPos = pos;
                setNum("&nbsp;");
                if (pos <= oldPos) break;
              }
            }
            if (node) node = node.nextSibling;
            if (new Date().getTime() > endTime) {
              commitChanges();
              pending = setTimeout(work, self.options.lineNumberDelay);
              return;
            }
          }
          while (lineNum) setNum(next++);
          commitChanges();
          doScroll();
        }
        function start(firstTime) {
          doScroll();
          ensureEnoughLineNumbers(firstTime);
          node = body.firstChild;
          lineNum = scroller.firstChild;
          pos = 0;
          next = self.options.firstLineNumber;
          work();
        }

        start(true);
        var pending = null;
        function update() {
          if (pending) clearTimeout(pending);
          if (self.editor.allClean()) start();
          else pending = setTimeout(update, 200);
        }
        self.updateNumbers = update;
        var onScroll = win.addEventHandler(win, "scroll", doScroll, true),
            onResize = win.addEventHandler(win, "resize", update, true);
        clear = function(){
          if (pending) clearTimeout(pending);
          if (self.updateNumbers == update) self.updateNumbers = null;
          onScroll();
          onResize();
        };
      }
      (this.options.textWrapping || this.options.styleNumbers ? wrapping : nonWrapping)();
    },

    setDynamicHeight: function() {
      var self = this, activity = self.options.onCursorActivity, win = self.win, body = win.document.body,
          lineHeight = null, timeout = null, vmargin = 2 * self.frame.offsetTop;
      body.style.overflowY = "hidden";
      win.document.documentElement.style.overflowY = "hidden";
      this.frame.scrolling = "no";

      function updateHeight() {
        var trailingLines = 0, node = body.lastChild, computedHeight;
        while (node && win.isBR(node)) {
          if (!node.hackBR) trailingLines++;
          node = node.previousSibling;
        }
        if (node) {
          lineHeight = node.offsetHeight;
          computedHeight = node.offsetTop + (1 + trailingLines) * lineHeight;
        }
        else if (lineHeight) {
          computedHeight = trailingLines * lineHeight;
        }
        if (computedHeight)
          self.wrapping.style.height = Math.max(vmargin + computedHeight, self.options.minHeight) + "px";
      }
      setTimeout(updateHeight, 300);
      self.options.onCursorActivity = function(x) {
        if (activity) activity(x);
        clearTimeout(timeout);
        timeout = setTimeout(updateHeight, 100);
      };
    }
  };

  CodeMirror.InvalidLineHandle = {toString: function(){return "CodeMirror.InvalidLineHandle";}};

  CodeMirror.replace = function(element) {
    if (typeof element == "string")
      element = document.getElementById(element);
    return function(newElement) {
      element.parentNode.replaceChild(newElement, element);
    };
  };

  CodeMirror.fromTextArea = function(area, options) {
    if (typeof area == "string")
      area = document.getElementById(area);

    options = options || {};
    if (area.style.width && options.width == null)
      options.width = area.style.width;
    if (area.style.height && options.height == null)
      options.height = area.style.height;
    if (options.content == null) options.content = area.value;

    function updateField() {
      area.value = mirror.getCode();
    }
    if (area.form) {
      if (typeof area.form.addEventListener == "function")
        area.form.addEventListener("submit", updateField, false);
      else
        area.form.attachEvent("onsubmit", updateField);
      var realSubmit = area.form.submit;
      function wrapSubmit() {
        updateField();
        // Can't use realSubmit.apply because IE6 is too stupid
        area.form.submit = realSubmit;
        area.form.submit();
        area.form.submit = wrapSubmit;
      }
      try {area.form.submit = wrapSubmit;} catch(e){}
    }

    function insert(frame) {
      if (area.nextSibling)
        area.parentNode.insertBefore(frame, area.nextSibling);
      else
        area.parentNode.appendChild(frame);
    }

    area.style.display = "none";
    var mirror = new CodeMirror(insert, options);
    mirror.save = updateField;
    mirror.toTextArea = function() {
      updateField();
      area.parentNode.removeChild(mirror.wrapping);
      area.style.display = "";
      if (area.form) {
        try {area.form.submit = realSubmit;} catch(e) {}
        if (typeof area.form.removeEventListener == "function")
          area.form.removeEventListener("submit", updateField, false);
        else
          area.form.detachEvent("onsubmit", updateField);
      }
    };

    return mirror;
  };

  CodeMirror.isProbablySupported = function() {
    // This is rather awful, but can be useful.
    var match;
    if (window.opera)
      return Number(window.opera.version()) >= 9.52;
    else if (/Apple Computer, Inc/.test(navigator.vendor) && (match = navigator.userAgent.match(/Version\/(\d+(?:\.\d+)?)\./)))
      return Number(match[1]) >= 3;
    else if (document.selection && window.ActiveXObject && (match = navigator.userAgent.match(/MSIE (\d+(?:\.\d*)?)\b/)))
      return Number(match[1]) >= 6;
    else if (match = navigator.userAgent.match(/gecko\/(\d{8})/i))
      return Number(match[1]) >= 20050901;
    else if (match = navigator.userAgent.match(/AppleWebKit\/(\d+)/))
      return Number(match[1]) >= 525;
    else
      return null;
  };

  return CodeMirror;
})();

/*<![CDATA[*/

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 *  Inline-Relational-Record Editing
 */

var inline = {
	classVisible: 'panel-visible',
	classCollapsed: 'panel-collapsed',
	structureSeparator: '-',
	flexFormSeparator: '---',
	flexFormSubstitute: ':',
	noTitleString: '[No title]',
	lockedAjaxMethod: {},
	sourcesLoaded: {},
	data: {},
	isLoading: false,

	addToDataArray: function (object) {
		TYPO3.jQuery.each(object, function (key, value) {
			if (!inline.data[key]) {
				inline.data[key] = {};
			}
			TYPO3.jQuery.extend(inline.data[key], value);
		});
	},
	setNoTitleString: function (value) {
		this.noTitleString = value;
	},
	toggleEvent: function (event) {
		var $triggerElement = TYPO3.jQuery(event.target);
		if ($triggerElement.parents('.t3js-formengine-irre-control').length == 1) {
			return;
		}

		var $recordHeader = TYPO3.jQuery(this);
		inline.expandCollapseRecord(
			$recordHeader.attr('id').replace('_header', ''),
			$recordHeader.attr('data-expandSingle'),
			$recordHeader.attr('data-returnURL')
		);
	},
	expandCollapseRecord: function (objectId, expandSingle, returnURL) {
		var currentUid = this.parseObjectId('none', objectId, 1);
		var objectPrefix = this.parseObjectId('full', objectId, 0, 1);
		var escapedObjectId = this.escapeObjectId(objectId);

		var $currentObject = TYPO3.jQuery('#' + escapedObjectId + '_div');
		// if content is not loaded yet, get it now from server
		if (inline.isLoading) {
			return false;
		} else if (TYPO3.jQuery('#' + escapedObjectId + '_fields').length > 0 && TYPO3.jQuery('#' + escapedObjectId + '_fields').html().substr(0, 16) == '<!--notloaded-->') {
			inline.isLoading = true;
			var headerIdentifier = '#' + escapedObjectId + '_header';
			// add loading-indicator
			require(['nprogress'], function (NProgress) {
				inline.progress = NProgress;
				inline.progress.configure({parent: headerIdentifier, showSpinner: false});
				inline.progress.start();
			});
			return this.getRecordDetails(objectId, returnURL);
		}

		var isCollapsed = $currentObject.hasClass(this.classCollapsed);
		var collapse = [];
		var expand = [];

		// if only a single record should be visibly for that set of records
		// and the record clicked itself is no visible, collapse all others
		if (expandSingle && $currentObject.hasClass(this.classCollapsed)) {
			collapse = this.collapseAllRecords(objectId, objectPrefix, currentUid);
		}

		inline.toggleElement(objectId);

		if (this.isNewRecord(objectId)) {
			this.updateExpandedCollapsedStateLocally(objectId, isCollapsed);
		} else if (isCollapsed) {
			expand.push(currentUid);
		} else if (!isCollapsed) {
			collapse.push(currentUid);
		}

		this.setExpandedCollapsedState(objectId, expand.join(','), collapse.join(','));

		return false;
	},

	toggleElement: function (objectId) {
		var escapedObjectId = this.escapeObjectId(objectId);
		var $jQueryObject = TYPO3.jQuery('#' + escapedObjectId + '_div');

		if ($jQueryObject.hasClass(this.classCollapsed)) {
			$jQueryObject.removeClass(this.classCollapsed).addClass(this.classVisible);
			$jQueryObject.find('#' + escapedObjectId + '_header .t3-icon-irre-collapsed').removeClass('t3-icon-irre-collapsed').addClass('t3-icon-irre-expanded');
		} else {
			$jQueryObject.removeClass(this.classVisible).addClass(this.classCollapsed);
			$jQueryObject.find('#' + escapedObjectId + '_header .t3-icon-irre-expanded').addClass('t3-icon-irre-collapsed').removeClass('t3-icon-irre-expanded');
		}
	},
	collapseAllRecords: function (objectId, objectPrefix, callingUid) {
		// get the form field, where all records are stored
		var objectName = 'data' + this.parseObjectId('parts', objectId, 3, 2, true);
		var formObj = document.getElementsByName(objectName);
		var collapse = [];

		if (formObj.length) {
			// the uid of the calling object (last part in objectId)
			var recObjectId = '', escapedRecordObjectId;

			var records = formObj[0].value.split(',');
			for (var i = 0; i < records.length; i++) {
				recObjectId = objectPrefix + this.structureSeparator + records[i];
				escapedRecordObjectId = this.escapeObjectId(recObjectId);

				var $recordEntry = TYPO3.jQuery('#' + escapedRecordObjectId + '_div');
				if (records[i] != callingUid && $recordEntry.hasClass(this.classVisible)) {
					$recordEntry.removeClass(this.classVisible).addClass(this.classCollapsed);
					if (this.isNewRecord(recObjectId)) {
						this.updateExpandedCollapsedStateLocally(recObjectId, 0);
					} else {
						collapse.push(records[i]);
					}
				}
			}
		}

		return collapse;
	},

	updateExpandedCollapsedStateLocally: function (objectId, value) {
		var ucName = 'uc[inlineView]' + this.parseObjectId('parts', objectId, 3, 2, true);
		var ucFormObj = document.getElementsByName(ucName);
		if (ucFormObj.length) {
			ucFormObj[0].value = value;
		}
	},

	getRecordDetails: function (objectId, returnURL) {
		var context = this.getContext(this.parseObjectId('full', objectId, 0, 1));
		inline.makeAjaxCall('getRecordDetails', [objectId, returnURL], true, context);
		return false;
	},

	createNewRecord: function (objectId, recordUid) {
		if (this.isBelowMax(objectId)) {
			var context = this.getContext(objectId);
			if (recordUid) {
				objectId += this.structureSeparator + recordUid;
			}
			this.makeAjaxCall('createNewRecord', [objectId], true, context);
		} else {
			var message = TBE_EDITOR.labels.maxItemsAllowed.replace('{0}', this.data.config[objectId].max);
			var matches = objectId.match(/^(data-\d+-.*?-\d+-.*?)-(.*?)$/);
			var title = '';
			if (matches) {
				title = TYPO3.jQuery('#' + matches[1] + '_records').data('title');
			}
			top.TYPO3.Notification.error(title, message, 5);
		}
		return false;
	},

	synchronizeLocalizeRecords: function (objectId, type) {
		var context = this.getContext(objectId);
		var parameters = [objectId, type];
		this.makeAjaxCall('synchronizeLocalizeRecords', parameters, true, context);
	},

	setExpandedCollapsedState: function (objectId, expand, collapse) {
		var context = this.getContext(objectId);
		this.makeAjaxCall('setExpandedCollapsedState', [objectId, expand, collapse], false, context);
	},

	makeAjaxCall: function (method, params, lock, context) {
		var url = '', urlParams = '', options = {};
		if (method && params && params.length && this.lockAjaxMethod(method, lock)) {
			url = TYPO3.settings.ajaxUrls['t3lib_TCEforms_inline::' + method];
			urlParams = '';
			for (var i = 0, max = params.length; i < max; i++) {
				urlParams += '&ajax[' + i + ']=' + encodeURIComponent(params[i]);
			}
			if (context) {
				urlParams += '&ajax[context]=' + encodeURIComponent(JSON.stringify(context));
			}
			options = {
				type: 'POST',
				data: urlParams,
				success: function (data, message, jqXHR) {
					inline.isLoading = false;
					inline.processAjaxResponse(method, jqXHR);
					if (inline.progress) {
						inline.progress.done();
					}
				},
				error: function (jqXHR, statusText, errorThrown) {
					inline.isLoading = false;
					inline.showAjaxFailure(method, jqXHR);
					if (inline.progress) {
						inline.progress.done();
					}
				}
			};

			TYPO3.jQuery.ajax(url, options);
		}
	},

	lockAjaxMethod: function (method, lock) {
		if (!lock || !inline.lockedAjaxMethod[method]) {
			inline.lockedAjaxMethod[method] = true;
			return true;
		} else {
			return false;
		}
	},

	unlockAjaxMethod: function (method) {
		inline.lockedAjaxMethod[method] = false;
	},

	processAjaxResponse: function (method, xhr, json) {
		var addTag = null, processedCount = 0, element = null, errorCatch = [], sourcesWaiting = [];
		if (!json && xhr) {
			json = xhr.responseJSON;
		}
		// If there are elements the should be added to the <HEAD> tag (e.g. for RTEhtmlarea):
		if (json.stylesheetFiles) {
			var head = inline.getDomHeadTag();
			var headTags = inline.getDomHeadChildren(head);
			TYPO3.jQuery.each(json.stylesheetFiles, function (index, stylesheetFile) {
				if (!stylesheetFile) {
					return;
				}
				var element = document.createElement('link');
				element['rel'] = 'stylesheet';
				element['type'] = 'text/css';
				element['href'] = stylesheetFile;
				head.appendChild(element);
				processedCount++;
				delete(json.stylesheetFiles[index]);
			});
		}
		if (processedCount) {
			window.setTimeout(function () {
				inline.reprocessAjaxResponse(method, json, sourcesWaiting);
			}, 40);
		} else {
			if (method) {
				inline.unlockAjaxMethod(method);
			}
			if (json.scriptCall && json.scriptCall.length > 0) {
				TYPO3.jQuery.each(json.scriptCall, function (index, value) {
					eval(value);
				});
			}
			TYPO3.FormEngine.reinitialize();
			TYPO3.FormEngine.Validation.initializeInputFields();
			TYPO3.FormEngine.Validation.validate();
		}
	},

	// Check if dynamically added scripts are loaded and restart inline.processAjaxResponse():
	reprocessAjaxResponse: function (method, json, sourcesWaiting) {
		var sourcesLoaded = true;
		if (sourcesWaiting && sourcesWaiting.length) {
			TYPO3.jQuery.each(sourcesWaiting, function (index, source) {
				if (!inline.sourcesLoaded[source]) {
					sourcesLoaded = false;
					return false;
				}
			});
		}
		if (sourcesLoaded) {
			TYPO3.jQuery.each(sourcesWaiting, function (index, source) {
				delete(inline.sourcesLoaded[source]);
			});
			window.setTimeout(function () {
				inline.processAjaxResponse(method, null, json);
			}, 80);
		} else {
			window.setTimeout(function () {
				inline.reprocessAjaxResponse(method, json, sourcesWaiting);
			}, 40);
		}
	},

	sourceLoadedHandler: function (element) {
		if (element && element.src) {
			inline.sourcesLoaded[element.src] = true;
		}
	},

	showAjaxFailure: function (method, xhr) {
		inline.unlockAjaxMethod(method);
		alert('Error: ' + xhr.status + "\n" + xhr.statusText);
	},

	// foreign_selector: used by selector box (type='select')
	importNewRecord: function (objectId) {
		var $selector = TYPO3.jQuery('#' + this.escapeObjectId(objectId) + '_selector');
		var selectedIndex = $selector.prop('selectedIndex');
		if (selectedIndex != -1) {
			var context = this.getContext(objectId);
			var selectedValue = $selector.val();
			if (!this.data.unique || !this.data.unique[objectId]) {
				$selector.find('option').eq(selectedIndex).prop('selected', false);
			}
			this.makeAjaxCall('createNewRecord', [objectId, selectedValue], true, context);
		}
		return false;
	},

	// foreign_selector: used by element browser (type='group/db')
	importElement: function (objectId, table, uid, type) {
		var context = this.getContext(objectId);
		inline.makeAjaxCall('createNewRecord', [objectId, uid], true, context);
	},

	importElementMultiple: function (objectId, table, uidArray, type) {
		TYPO3.jQuery.each(uidArray, function (index, uid) {
			inline.delayedImportElement(objectId, table, uid, type);
		});
	},
	delayedImportElement: function (objectId, table, uid, type) {
		if (inline.lockedAjaxMethod['createNewRecord'] == true) {
			window.setTimeout("inline.delayedImportElement('" + objectId + "','" + table + "'," + uid + ", null );",
				300);
		} else {
			inline.importElement(objectId, table, uid, type);
		}
	},
	// Check uniqueness for element browser:
	checkUniqueElement: function (objectId, table, uid, type) {
		if (this.checkUniqueUsed(objectId, uid, table)) {
			return {passed: false, message: 'There is already a relation to the selected element!'};
		} else {
			return {passed: true};
		}
	},

	// Checks if a record was used and should be unique:
	checkUniqueUsed: function (objectId, uid, table) {
		if (!this.data.unique || !this.data.unique[objectId]) {
			return false;
		}

		var unique = this.data.unique[objectId];
		var values = this.getValuesFromHashMap(unique.used);

		// for select: only the uid is stored
		if (unique['type'] == 'select') {
			if (values.indexOf(uid) != -1) {
				return true;
			}

			// for group/db: table and uid is stored in an assoc array
		} else if (unique.type == 'groupdb') {
			for (var i = values.length - 1; i >= 0; i--) {
				// if the pair table:uid is already used:
				if (values[i].table == table && values[i].uid == uid) {
					return true;
				}
			}
		}

		return false;
	},

	setUniqueElement: function (objectId, table, uid, type, elName) {
		var recordUid = this.parseFormElementName('none', elName, 1, 1);
		// alert(objectId+'/'+table+'/'+uid+'/'+recordUid);
		this.setUnique(objectId, recordUid, uid);
	},

	getKeysFromHashMap: function (unique) {
		return TYPO3.jQuery.map(unique, function (value, key) {
			return key;
		});
	},

	getValuesFromHashMap: function (hashMap) {
		return TYPO3.jQuery.map(hashMap, function (value, key) {
			return value;
		});
	},

	// Remove all select items already used
	// from a newly retrieved/expanded record
	removeUsed: function (objectId, recordUid) {
		if (!this.data.unique || !this.data.unique[objectId]) {
			return;
		}

		var unique = this.data.unique[objectId];
		if (unique.type != 'select') {
			return;
		}

		var formName = 'data' + this.parseObjectId('parts', objectId, 3, 1, true);
		var formObj = document.getElementsByName(formName);
		var recordObj = document.getElementsByName('data[' + unique.table + '][' + recordUid + '][' + unique.field + ']');
		var values = this.getValuesFromHashMap(unique.used);
		if (recordObj.length) {
			if (recordObj[0].hasOwnProperty('options')) {
				var selectedValue = recordObj[0].options[recordObj[0].selectedIndex].value;
				for (var i = 0; i < values.length; i++) {
					if (values[i] != selectedValue) {
						var $recordObject = TYPO3.jQuery(recordObj[0]);
						this.removeSelectOption($recordObject, values[i]);
					}
				}
			}
		}
	},
	// this function is applied to a newly inserted record by AJAX
	// it removes the used select items, that should be unique
	setUnique: function (objectId, recordUid, selectedValue) {
		if (!this.data.unique || !this.data.unique[objectId]) {
			return;
		}
		var $selector = TYPO3.jQuery('#' + this.escapeObjectId(objectId) + '_selector');

		var unique = this.data.unique[objectId];
		if (unique.type == 'select') {
			if (!(unique.selector && unique.max == -1)) {
				var formName = 'data' + this.parseObjectId('parts', objectId, 3, 1, true);
				var formObj = document.getElementsByName(formName);
				var recordObj = document.getElementsByName('data[' + unique.table + '][' + recordUid + '][' + unique.field + ']');
				var values = this.getValuesFromHashMap(unique.used);
				if ($selector.length) {
					// remove all items from the new select-item which are already used in other children
					if (recordObj.length) {
						var $recordObject = TYPO3.jQuery(recordObj[0]);
						for (var i = 0; i < values.length; i++) {
							this.removeSelectOption($recordObject, values[i]);
						}
						// set the selected item automatically to the first of the remaining items if no selector is used
						if (!unique.selector) {
							selectedValue = recordObj[0].options[0].value;
							recordObj[0].options[0].selected = true;
							this.updateUnique(recordObj[0], objectId, formName, recordUid);
							this.handleChangedField(recordObj[0], objectId + '[' + recordUid + ']');
						}
					}
					for (var i = 0; i < values.length; i++) {
						this.removeSelectOption($selector, values[i]);
					}
					if (typeof this.data.unique[objectId].used.length != 'undefined') {
						this.data.unique[objectId].used = {};
					}
					this.data.unique[objectId].used[recordUid] = selectedValue;
				}
				// remove the newly used item from each select-field of the child records
				if (formObj.length && selectedValue) {
					var records = formObj[0].value.split(',');
					for (var i = 0; i < records.length; i++) {
						recordObj = document.getElementsByName('data[' + unique.table + '][' + records[i] + '][' + unique.field + ']');
						if (recordObj.length && records[i] != recordUid) {
							var $recordObject = TYPO3.jQuery(recordObj[0]);
							this.removeSelectOption($recordObject, selectedValue);
						}
					}
				}
			}
		} else if (unique.type == 'groupdb') {
			// add the new record to the used items:
			this.data.unique[objectId].used[recordUid] = {'table': unique.elTable, 'uid': selectedValue};
		}

		// remove used items from a selector-box
		if (unique.selector == 'select' && selectedValue) {
			this.removeSelectOption($selector, selectedValue);
			this.data.unique[objectId]['used'][recordUid] = selectedValue;
		}
	},

	domAddNewRecord: function (method, insertObjectId, objectPrefix, htmlData) {
		var $insertObject = TYPO3.jQuery('#' + this.escapeObjectId(insertObjectId));
		if (this.isBelowMax(objectPrefix)) {
			if (method == 'bottom') {
				$insertObject.append(htmlData);
			} else if (method == 'after') {
				$insertObject.after(htmlData);
			}
		} else {
			var message = TBE_EDITOR.labels.maxItemsAllowed.replace('{0}', this.data.config[objectPrefix].max);
			var title = $insertObject.data('title');
			top.TYPO3.Notification.error(title, message);
		}
	},

	domAddRecordDetails: function (objectId, objectPrefix, expandSingle, htmlData) {
		var hiddenValue, formObj, valueObj;
		var escapeObjectId = this.escapeObjectId(objectId);
		var $objectDiv = TYPO3.jQuery('#' + escapeObjectId + '_fields');
		if ($objectDiv.length == 0 || $objectDiv.html().substr(0, 16) != '<!--notloaded-->') {
			return;
		}

		var elName = this.parseObjectId('full', objectId, 2, 0, true);

		var $formObj = TYPO3.jQuery('[name="' + elName + '[hidden]_0"]');
		var $valueObj = TYPO3.jQuery('[name="' + elName + '[hidden]"]');

		// It might be the case that a child record
		// cannot be hidden at all (no hidden field)
		if ($formObj.length && $valueObj.length) {
			hiddenValue = $formObj[0].checked;
			$formObj.first().remove();
			$valueObj.first().remove();
		}

		// Update DOM
		$objectDiv.html(htmlData);

		formObj = document.getElementsByName(elName + '[hidden]_0');
		valueObj = document.getElementsByName(elName + '[hidden]');

		// Set the hidden value again
		if (formObj.length && valueObj.length) {
			valueObj[0].value = hiddenValue ? 1 : 0;
			formObj[0].checked = hiddenValue;
		}

		// now that the content is loaded, set the expandState
		this.expandCollapseRecord(objectId, expandSingle);
	},

	// Get script and link elements from head tag:
	getDomHeadChildren: function (head) {
		var headTags = [];
		TYPO3.jQuery('head script, head link').each(function () {
			headTags.push(this);
		});
		return headTags;
	},

	getDomHeadTag: function () {
		if (document && document.head) {
			return document.head;
		} else {
			var $head = TYPO3.jQuery('head');
			if ($head.length) {
				return $head.get(0);
			}
		}
		return false;
	},

	// Search whether elements exist in a given haystack:
	searchInDomTags: function (haystack, needle) {
		var result = false;
		TYPO3.jQuery.each(haystack, function (index, element) {
			if (element.nodeName.toUpperCase() == needle.name) {
				var attributesCount = Object.keys(needle.attributes).length;
				var attributesFound = 0;
				if (element.getAttribute) {
					for (var attribute in needle.attributes) {
						if (needle.attributes.hasOwnProperty(attribute) && element.getAttribute(attribute.key) === attribute.value) {
							attributesFound++;
						}
					}
				}
				if (attributesFound === attributesCount) {
					result = true;
					return true;
				}
			}
		});
		return result;
	},

	changeSorting: function (objectId, direction) {
		var objectName = 'data' + this.parseObjectId('parts', objectId, 3, 2, true);
		var objectPrefix = this.parseObjectId('full', objectId, 0, 1);
		var formObj = document.getElementsByName(objectName);

		if (!formObj.length) {
			return false;
		}

		// the uid of the calling object (last part in objectId)
		var callingUid = this.parseObjectId('none', objectId, 1);
		var records = formObj[0].value.split(',');
		var current = records.indexOf(callingUid);
		var changed = false;

		// move up
		if (direction > 0 && current > 0) {
			records[current] = records[current - 1];
			records[current - 1] = callingUid;
			changed = true;

			// move down
		} else if (direction < 0 && current < records.length - 1) {
			records[current] = records[current + 1];
			records[current + 1] = callingUid;
			changed = true;
		}

		if (changed) {
			formObj[0].value = records.join(',');
			var cAdj = direction > 0 ? 1 : 0; // adjustment
			var objectIdPrefix = '#' + this.escapeObjectId(objectPrefix) + this.structureSeparator;
			TYPO3.jQuery(objectIdPrefix + records[current - cAdj] + '_div').insertBefore(
				TYPO3.jQuery(objectIdPrefix + records[current + 1 - cAdj] + '_div')
			);
			this.redrawSortingButtons(objectPrefix, records);
		}

		return false;
	},

	dragAndDropSorting: function (element) {
		var objectId = element.getAttribute('id').replace(/_records$/, '');
		var objectName = 'data' + inline.parseObjectId('parts', objectId, 3, 0, true);
		var formObj = document.getElementsByName(objectName);
		var $element = TYPO3.jQuery(element);

		if (!formObj.length) {
			return;
		}

		var checked = [];
		var order = [];
		$element.find('.sortableHandle').each(function (i, e) {
			order.push(TYPO3.jQuery(e).data('id').toString());
		});
		var records = formObj[0].value.split(',');

		// check if ordered uid is really part of the records
		// virtually deleted items might still be there but ordering shouldn't saved at all on them
		for (var i = 0; i < order.length; i++) {
			if (records.indexOf(order[i]) != -1) {
				checked.push(order[i]);
			}
		}

		formObj[0].value = checked.join(',');

		if (inline.data.config && inline.data.config[objectId]) {
			var table = inline.data.config[objectId].table;
			inline.redrawSortingButtons(objectId + inline.structureSeparator + table, checked);
		}
	},

	createDragAndDropSorting: function (objectId) {
		require(['jquery', 'jquery-ui/sortable'], function ($) {
			var $sortingContainer = $('#' + inline.escapeObjectId(objectId));

			if ($sortingContainer.hasClass('ui-sortable')) {
				$sortingContainer.sortable('enable');
				return;
			}

			$sortingContainer.sortable(
				{
					containment: 'parent',
					handle: '.sortableHandle',
					zIndex: '4000',
					axis: 'y',
					tolerance: 'pointer',
					stop: function () {
						inline.dragAndDropSorting($sortingContainer[0]);
					}
				}
			);
		});
	},

	destroyDragAndDropSorting: function (objectId) {
		require(['jquery', 'jquery-ui/sortable'], function ($) {
			var $sortingContainer = $('#' + inline.escapeObjectId(objectId));
			if (!$sortingContainer.hasClass('ui-sortable')) {
				return;
			}
			$sortingContainer.sortable('disable');
		});
	},

	redrawSortingButtons: function (objectPrefix, records) {
		var i, $headerObj, sortUp, sortDown;

		// if no records were passed, fetch them from form field
		if (typeof records == 'undefined') {
			records = [];
			var objectName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
			var formObj = document.getElementsByName(objectName);
			if (formObj.length) {
				records = formObj[0].value.split(',');
			}
		}

		for (i = 0; i < records.length; i++) {
			if (!records[i].length) {
				continue;
			}

			$headerObj = TYPO3.jQuery('#' + this.escapeObjectId(objectPrefix) + this.structureSeparator + records[i] + '_header');
			sortUp = $headerObj.find('.sortingUp');
			sortDown = $headerObj.find('.sortingDown');

			if (sortUp) {
				sortUp.css('visibility', (i == 0 ? 'hidden' : 'visible'));
			}
			if (sortDown) {
				sortDown.css('visibility', (i == records.length - 1 ? 'hidden' : 'visible'));
			}
		}
	},

	memorizeAddRecord: function (objectPrefix, newUid, afterUid, selectedValue) {
		if (this.isBelowMax(objectPrefix)) {
			var objectName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
			var formObj = document.getElementsByName(objectName);

			if (formObj.length) {
				var records = [];
				if (formObj[0].value.length) {
					records = formObj[0].value.split(',');
				}

				if (afterUid) {
					var newRecords = [];
					for (var i = 0; i < records.length; i++) {
						if (records[i].length) {
							newRecords.push(records[i]);
						}
						if (afterUid == records[i]) {
							newRecords.push(newUid);
						}
					}
					records = newRecords;
				} else {
					records.push(newUid);
				}
				formObj[0].value = records.join(',');
			}

			this.redrawSortingButtons(objectPrefix, records);

			if (this.data.unique && this.data.unique[objectPrefix]) {
				var unique = this.data.unique[objectPrefix];
				this.setUnique(objectPrefix, newUid, selectedValue);
			}
		}

		// if we reached the maximum off possible records after this action, hide the new buttons
		if (!this.isBelowMax(objectPrefix)) {
			var objectParent = this.parseObjectId('full', objectPrefix, 0, 1);
			var md5 = this.getObjectMD5(objectParent);
			this.hideElementsWithClassName('.inlineNewButton' + (md5 ? '.' + md5 : ''), objectParent);
			this.hideElementsWithClassName('.inlineNewRelationButton' + (md5 ? '.' + md5 : ''), objectParent);
			this.hideElementsWithClassName('.inlineNewFileUploadButton' + (md5 ? '.' + md5 : ''), objectParent);
			this.hideElementsWithClassName('.inlineForeignSelector' + (md5 ? '.' + md5 : ''), 't3-form-field-item');
		}

		if (TBE_EDITOR) {
			TBE_EDITOR.fieldChanged_fName(objectName, formObj);
		}
	},

	memorizeRemoveRecord: function (objectName, removeUid) {
		var formObj = document.getElementsByName(objectName);
		if (formObj.length) {
			var parts = [],
				indexOfRemoveUid = -1;
			if (formObj[0].value.length) {
				parts = formObj[0].value.split(',');
				indexOfRemoveUid = parts.indexOf(removeUid);
				if (indexOfRemoveUid !== -1) {
					delete parts[indexOfRemoveUid];
				}
				formObj[0].value = parts.join(',');
				if (TBE_EDITOR) {
					TBE_EDITOR.fieldChanged_fName(objectName, formObj);
				}
				return parts.length;
			}
		}
		return false;
	},

	updateUnique: function (srcElement, objectPrefix, formName, recordUid) {
		if (!this.data.unique || !this.data.unique[objectPrefix]) {
			return;
		}

		var unique = this.data.unique[objectPrefix];
		var oldValue = unique.used[recordUid];

		if (unique.selector == 'select') {
			var selector = $(objectPrefix + '_selector');
			this.removeSelectOption(selector, srcElement.value);
			if (typeof oldValue != 'undefined') {
				this.readdSelectOption(selector, oldValue, unique);
			}
		}

		if (unique.selector && unique.max == -1) {
			return;
		}

		var formObj = document.getElementsByName(formName);
		if (!unique || !formObj.length) {
			return;
		}

		var records = formObj[0].value.split(',');
		var recordObj;
		for (var i = 0; i < records.length; i++) {
			recordObj = document.getElementsByName('data[' + unique.table + '][' + records[i] + '][' + unique.field + ']');
			if (recordObj.length && recordObj[0] != srcElement) {
				var $recordObject = TYPO3.jQuery(recordObj[0]);
				this.removeSelectOption($recordObject, srcElement.value);
				if (typeof oldValue != 'undefined') {
					this.readdSelectOption($recordObject, oldValue, unique);
				}
			}
		}
		this.data.unique[objectPrefix].used[recordUid] = srcElement.value;
	},

	revertUnique: function (objectPrefix, elName, recordUid) {
		if (!this.data.unique || !this.data.unique[objectPrefix]) {
			return;
		}

		var unique = this.data.unique[objectPrefix];
		var fieldObj = elName ? document.getElementsByName(elName + '[' + unique.field + ']') : null;

		if (unique.type == 'select') {
			if (!fieldObj || !fieldObj.length) {
				return;
			}

			delete(this.data.unique[objectPrefix].used[recordUid]);

			if (unique.selector == 'select') {
				if (!isNaN(fieldObj[0].value)) {
					var $selector = TYPO3.jQuery('#' + this.escapeObjectId(objectPrefix) + '_selector');
					this.readdSelectOption($selector, fieldObj[0].value, unique);
				}
			}

			if (unique.selector && unique.max == -1) {
				return;
			}

			var formName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
			var formObj = document.getElementsByName(formName);
			if (!formObj.length) {
				return;
			}

			var records = formObj[0].value.split(',');
			var recordObj;
			// walk through all inline records on that level and get the select field
			for (var i = 0; i < records.length; i++) {
				recordObj = document.getElementsByName('data[' + unique.table + '][' + records[i] + '][' + unique.field + ']');
				if (recordObj.length) {
					var $recordObject = TYPO3.jQuery(recordObj[0]);
					this.readdSelectOption($recordObject, fieldObj[0].value, unique);
				}
			}
		} else if (unique.type == 'groupdb') {
			// alert(objectPrefix+'/'+recordUid);
			delete(this.data.unique[objectPrefix].used[recordUid])
		}
	},

	enableDisableRecord: function (objectIdentifier) {
		var elName = this.parseObjectId('full', objectIdentifier, 2, 0, true) + '[hidden]';
		var formObj = document.getElementsByName(elName + '_0');
		var valueObj = document.getElementsByName(elName);
		var escapedObjectIdentifier = this.escapeObjectId(objectIdentifier);
		var $container = TYPO3.jQuery('#' + escapedObjectIdentifier + '_div');
		var $icon = $container.find('.t3js-' + escapedObjectIdentifier + '_disabled i');

		// It might be the case that there's no hidden field
		if (formObj.length && valueObj.length) {
			formObj[0].click();
			valueObj[0].value = formObj[0].checked ? 1 : 0;
			TBE_EDITOR.fieldChanged_fName(elName, elName);
		}

		if ($icon.length) {
			if ($icon.hasClass('fa-toggle-on')) {
				$icon.removeClass('fa-toggle-on');
				$icon.addClass('fa-toggle-off');
				$container.addClass('t3-form-field-container-inline-hidden');
			} else {
				$icon.removeClass('fa-toggle-off');
				$icon.addClass('fa-toggle-on');
				$container.removeClass('t3-form-field-container-inline-hidden');
			}
		}

		return false;
	},

	deleteRecord: function (objectId, options) {
		var i, j, inlineRecords, records, childObjectId, childTable;
		var objectPrefix = this.parseObjectId('full', objectId, 0, 1);
		var elName = this.parseObjectId('full', objectId, 2, 0, true);
		var shortName = this.parseObjectId('parts', objectId, 2, 0, true);
		var recordUid = this.parseObjectId('none', objectId, 1);
		var beforeDeleteIsBelowMax = this.isBelowMax(objectPrefix);

		// revert the unique settings if available
		this.revertUnique(objectPrefix, elName, recordUid);

		// Remove from TBE_EDITOR (required fields, required range, etc.):
		if (TBE_EDITOR && TBE_EDITOR.removeElement) {
			var removeStack = [];
			// Iterate over all child records:
			inlineRecords = TYPO3.jQuery('.inlineRecord', '#' + objectId + '_div');
			// Remove nested child records from TBE_EDITOR required/range checks:
			for (i = inlineRecords.length - 1; i >= 0; i--) {
				if (inlineRecords.get(i).value.length) {
					records = inlineRecords.get(i).value.split(',');
					childObjectId = this.data.map[inlineRecords.get(i).name];
					childTable = this.data.config[childObjectId].table;
					for (j = records.length - 1; j >= 0; j--) {
						removeStack.push('data[' + childTable + '][' + records[j] + ']');
					}
				}
			}
			removeStack.push('data' + shortName);
			TBE_EDITOR.removeElementArray(removeStack);
		}

		// Mark this container as deleted
		TYPO3.jQuery('#' + this.escapeObjectId(objectId) + '_div').addClass('inlineIsDeletedRecord');

		// If the record is new and was never saved before, just remove it from DOM:
		if (this.isNewRecord(objectId) || options && options.forceDirectRemoval) {
			this.fadeAndRemove(objectId + '_div');
			// If the record already exists in storage, mark it to be deleted on clicking the save button:
		} else {
			document.getElementsByName('cmd' + shortName + '[delete]')[0].disabled = false;
			TYPO3.jQuery('#' + objectId + '_div').fadeOut();
		}

		var recordCount = this.memorizeRemoveRecord(
			'data' + this.parseObjectId('parts', objectId, 3, 2, true),
			recordUid
		);

		if (recordCount <= 1) {
			this.destroyDragAndDropSorting(this.parseObjectId('full', objectId, 0, 2) + '_records');
		}
		this.redrawSortingButtons(objectPrefix);

		// if the NEW-button was hidden and now we can add again new children, show the button
		if (!beforeDeleteIsBelowMax && this.isBelowMax(objectPrefix)) {
			var objectParent = this.parseObjectId('full', objectPrefix, 0, 1);
			var md5 = this.getObjectMD5(objectParent);
			this.showElementsWithClassName('.inlineNewButton' + (md5 ? '.' + md5 : ''), objectParent);
			this.showElementsWithClassName('.inlineNewRelationButton' + (md5 ? '.' + md5 : ''), objectParent);
			this.showElementsWithClassName('.inlineNewFileUploadButton' + (md5 ? '.' + md5 : ''), objectParent);
			this.showElementsWithClassName('.inlineForeignSelector' + (md5 ? '.' + md5 : ''), 't3-form-field-item');
		}
		TYPO3.FormEngine.Validation.validate();
		return false;
	},

	parsePath: function (path) {
		var backSlash = path.lastIndexOf('\\');
		var normalSlash = path.lastIndexOf('/');

		if (backSlash > 0) {
			path = path.substring(0, backSlash + 1);
		} else if (normalSlash > 0) {
			path = path.substring(0, normalSlash + 1);
		} else {
			path = '';
		}

		return path;
	},

	parseFormElementName: function (wrap, formElementName, rightCount, skipRight) {
		var idParts = this.splitFormElementName(formElementName);

		if (!wrap) {
			wrap = 'full';
		}
		if (!skipRight) {
			skipRight = 0;
		}

		var elParts = [];
		for (var i = 0; i < skipRight; i++) {
			idParts.pop();
		}

		if (rightCount > 0) {
			for (var i = 0; i < rightCount; i++) {
				elParts.unshift(idParts.pop());
			}
		} else {
			for (var i = 0; i < -rightCount; i++) {
				idParts.shift();
			}
			elParts = idParts;
		}

		return this.constructFormElementName(wrap, elParts);
	},

	splitFormElementName: function (formElementName) {
		// remove left and right side "data[...|...]" -> '...|...'
		formElementName = formElementName.substr(0, formElementName.lastIndexOf(']')).substr(formElementName.indexOf('[') + 1);
		return formElementName.split('][');
	},

	splitObjectId: function (objectId) {
		objectId = objectId.substr(objectId.indexOf(this.structureSeparator) + 1);
		objectId = objectId.split(this.flexFormSeparator).join(this.flexFormSubstitute);
		return objectId.split(this.structureSeparator);
	},

	constructFormElementName: function (wrap, parts) {
		var elReturn;

		if (wrap == 'full') {
			elReturn = 'data[' + parts.join('][') + ']';
			elReturn = elReturn.split(this.flexFormSubstitute).join('][');
		} else if (wrap == 'parts') {
			elReturn = '[' + parts.join('][') + ']';
			elReturn = elReturn.split(this.flexFormSubstitute).join('][');
		} else if (wrap == 'none') {
			elReturn = parts.length > 1 ? parts : parts.join('');
		}

		return elReturn;
	},

	constructObjectId: function (wrap, parts) {
		var elReturn;

		if (wrap == 'full') {
			elReturn = 'data' + this.structureSeparator + parts.join(this.structureSeparator);
			elReturn = elReturn.split(this.flexFormSubstitute).join(this.flexFormSeparator);
		} else if (wrap == 'parts') {
			elReturn = this.structureSeparator + parts.join(this.structureSeparator);
			elReturn = elReturn.split(this.flexFormSubstitute).join(this.flexFormSeparator);
		} else if (wrap == 'none') {
			elReturn = parts.length > 1 ? parts : parts.join('');
		}

		return elReturn;
	},

	parseObjectId: function (wrap, objectId, rightCount, skipRight, returnAsFormElementName) {
		var idParts = this.splitObjectId(objectId);

		if (!wrap) {
			wrap = 'full';
		}
		if (!skipRight) {
			skipRight = 0;
		}

		var elParts = [];
		for (var i = 0; i < skipRight; i++) {
			idParts.pop();
		}

		if (rightCount > 0) {
			for (var i = 0; i < rightCount; i++) {
				elParts.unshift(idParts.pop());
			}
		} else {
			for (var i = 0; i < -rightCount; i++) {
				idParts.shift();
			}
			elParts = idParts;
		}

		var elReturn;
		if (returnAsFormElementName) {
			elReturn = this.constructFormElementName(wrap, elParts);
		} else {
			elReturn = this.constructObjectId(wrap, elParts);
		}

		return elReturn;
	},

	handleChangedField: function (formField, objectId) {
		var formObj;
		if (typeof formField == 'object') {
			formObj = formField;
		} else {
			formObj = document.getElementsByName(formField);
			if (formObj.length) {
				formObj = formObj[0];
			}
		}

		if (formObj != undefined) {
			var value;
			if (formObj.nodeName == 'SELECT') {
				value = formObj.options[formObj.selectedIndex].text;
			} else {
				value = formObj.value;
			}
			TYPO3.jQuery('#' + this.escapeObjectId(objectId) + '_label').html(value.length ? value : this.noTitleString);
		}
		return true;
	},

	arrayAssocCount: function (object) {
		var count = 0;
		if (typeof object.length != 'undefined') {
			count = object.length;
		} else {
			for (var i in object) {
				count++;
			}
		}
		return count;
	},

	isBelowMax: function (objectPrefix) {
		var isBelowMax = true;
		var objectName = 'data' + this.parseObjectId('parts', objectPrefix, 3, 1, true);
		var formObj = document.getElementsByName(objectName);

		if (this.data.config && this.data.config[objectPrefix] && formObj.length) {
			var recordCount = formObj[0].value ? formObj[0].value.split(',').length : 0;
			if (recordCount >= this.data.config[objectPrefix].max) {
				isBelowMax = false;
			}
		}
		if (isBelowMax && this.data.unique && this.data.unique[objectPrefix]) {
			var unique = this.data.unique[objectPrefix];
			if (this.arrayAssocCount(unique.used) >= unique.max && unique.max >= 0) {
				isBelowMax = false;
			}
		}
		return isBelowMax;
	},

	getOptionsHash: function ($selectObj) {
		var optionsHash = {};
		$selectObj.find('option').each(function (i, option) {
			optionsHash[option.value] = i;
		});
		return optionsHash;
	},

	removeSelectOption: function ($selectObj, value) {
		var optionsHash = this.getOptionsHash($selectObj);
		if (optionsHash[value] != undefined) {
			$selectObj.find('option').eq(optionsHash[value]).remove();
		}
	},

	readdSelectOption: function ($selectObj, value, unique) {
		if (!$selectObj.length) {
			return;
		}

		var index = null;
		var optionsHash = this.getOptionsHash($selectObj);
		var possibleValues = this.getKeysFromHashMap(unique.possible);

		for (var possibleValue in unique.possible) {
			if (possibleValue == value) {
				break;
			}
			if (optionsHash[possibleValue] != undefined) {
				index = optionsHash[possibleValue];
			}
		}

		if (index == null) {
			index = 0;
		} else if (index < $selectObj.find('option').length) {
			index++;
		}
		// recreate the <option> tag
		var readdOption = document.createElement('option');
		readdOption.text = unique.possible[value];
		readdOption.value = value;
		// add the <option> at the right position
		// I didn't find a possibility to add an option to a predefined position
		// with help of an index in jQuery. So we realized it the "old" style
		var selectObj = $selectObj.get(0);
		selectObj.add(readdOption, document.all ? index : selectObj.options[index]);
	},

	hideElementsWithClassName: function (selector, parentElement) {
		TYPO3.jQuery('#' + parentElement).find(selector).fadeOut();
	},

	showElementsWithClassName: function (selector, parentElement) {
		TYPO3.jQuery('#' + parentElement).find(selector).fadeIn();
	},

	fadeOutFadeIn: function (objectId) {
		objectId = this.escapeObjectId(objectId);
		TYPO3.jQuery('#' + objectId).fadeTo(500, 0.5, 'linear', function () {
			TYPO3.jQuery('#' + objectId).fadeTo(500, 1, 'linear');
		});
	},

	isNewRecord: function (objectId) {
		var $selector = TYPO3.jQuery('#' + this.escapeObjectId(objectId) + '_div');
		return $selector.length && $selector.hasClass('inlineIsNewRecord')
			? true
			: false;
	},

	// Find and fix nested of inline and tab levels if a new element was created dynamically (it doesn't know about its nesting):
	findContinuedNestedLevel: function (nested, objectId) {
		if (this.data.nested && this.data.nested[objectId]) {
			// Remove the first element from the new nested stack, it's just a hint:
			nested.shift();
			nested = this.data.nested[objectId].concat(nested);
			return nested;
		} else {
			return nested;
		}
	},

	getObjectMD5: function (objectPrefix) {
		var md5 = false;
		if (this.data.config && this.data.config[objectPrefix] && this.data.config[objectPrefix].md5) {
			md5 = this.data.config[objectPrefix].md5;
		}
		return md5
	},

	fadeAndRemove: function (element) {
		TYPO3.jQuery('#' + this.escapeObjectId(element)).fadeOut(500, function () {
			TYPO3.jQuery(this).remove();
		});
	},

	getContext: function (objectId) {
		var result = null;

		if (objectId !== '' && typeof this.data.config[objectId] !== 'undefined' && typeof this.data.config[objectId].context !== 'undefined') {
			result = this.data.config[objectId].context;
		}

		return result;
	},

	/**
	 * Escapes object identifiers to be used in jQuery.
	 *
	 * @param string objectId
	 * @return string
	 */
	escapeObjectId: function (objectId) {
		var escapedObjectId;
		escapedObjectId = objectId.replace(/:/g, '\\:');
		escapedObjectId = escapedObjectId.replace(/\./g, '\\.');
		return escapedObjectId;
	},

	/**
	 * Escapes object identifiers to be used as jQuery selector.
	 *
	 * @param string objectId
	 * @return string
	 */
	escapeSelectorObjectId: function (objectId) {
		var escapedSelectorObjectId;
		var escapedObjectId = this.escapeObjectId(objectId);
		escapedSelectorObjectId = escapedObjectId.replace(/\\:/g, '\\\\\\:');
		escapedSelectorObjectId = escapedSelectorObjectId.replace(/\\\./g, '\\\\\\.');
		return escapedSelectorObjectId;
	}
};

/*]]>*/
(function ($) {
	$(function () {
		$(document).delegate('[data-toggle="formengine-inline"]', 'click', inline.toggleEvent);
	});
})(TYPO3.jQuery);

/*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *
 * modified by bmack to wrap it as jQuery module for the backend, will be dropped for twbs 4.0
 * please do not reference outside of the TYPO3 Core (not in your own extensions)
 * as this is preliminary as long as twbs does not support AMD modules
 * this file will be deleted once twbs 4 is included
 */
// IIFE for faster access to jQuery and save $use

;(function(factory) {
	if (typeof define === 'function' && define.amd) {
		// register bootstrap as requirejs module
		define("bootstrap", ["jquery"], function($) {
			factory($);
		});
	} else {
		factory(TYPO3.jQuery || jQuery);
	}
})(function(jQuery) {
	if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(a){"use strict";var b=a.fn.jquery.split(" ")[0].split(".");if(b[0]<2&&b[1]<9||1==b[0]&&9==b[1]&&b[2]<1)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")}(jQuery),+function(a){"use strict";function b(){var a=document.createElement("bootstrap"),b={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var c in b)if(void 0!==a.style[c])return{end:b[c]};return!1}a.fn.emulateTransitionEnd=function(b){var c=!1,d=this;a(this).one("bsTransitionEnd",function(){c=!0});var e=function(){c||a(d).trigger(a.support.transition.end)};return setTimeout(e,b),this},a(function(){a.support.transition=b(),a.support.transition&&(a.event.special.bsTransitionEnd={bindType:a.support.transition.end,delegateType:a.support.transition.end,handle:function(b){return a(b.target).is(this)?b.handleObj.handler.apply(this,arguments):void 0}})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var c=a(this),e=c.data("bs.alert");e||c.data("bs.alert",e=new d(this)),"string"==typeof b&&e[b].call(c)})}var c='[data-dismiss="alert"]',d=function(b){a(b).on("click",c,this.close)};d.VERSION="3.3.5",d.TRANSITION_DURATION=150,d.prototype.close=function(b){function c(){g.detach().trigger("closed.bs.alert").remove()}var e=a(this),f=e.attr("data-target");f||(f=e.attr("href"),f=f&&f.replace(/.*(?=#[^\s]*$)/,""));var g=a(f);b&&b.preventDefault(),g.length||(g=e.closest(".alert")),g.trigger(b=a.Event("close.bs.alert")),b.isDefaultPrevented()||(g.removeClass("in"),a.support.transition&&g.hasClass("fade")?g.one("bsTransitionEnd",c).emulateTransitionEnd(d.TRANSITION_DURATION):c())};var e=a.fn.alert;a.fn.alert=b,a.fn.alert.Constructor=d,a.fn.alert.noConflict=function(){return a.fn.alert=e,this},a(document).on("click.bs.alert.data-api",c,d.prototype.close)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.button"),f="object"==typeof b&&b;e||d.data("bs.button",e=new c(this,f)),"toggle"==b?e.toggle():b&&e.setState(b)})}var c=function(b,d){this.$element=a(b),this.options=a.extend({},c.DEFAULTS,d),this.isLoading=!1};c.VERSION="3.3.5",c.DEFAULTS={loadingText:"loading..."},c.prototype.setState=function(b){var c="disabled",d=this.$element,e=d.is("input")?"val":"html",f=d.data();b+="Text",null==f.resetText&&d.data("resetText",d[e]()),setTimeout(a.proxy(function(){d[e](null==f[b]?this.options[b]:f[b]),"loadingText"==b?(this.isLoading=!0,d.addClass(c).attr(c,c)):this.isLoading&&(this.isLoading=!1,d.removeClass(c).removeAttr(c))},this),0)},c.prototype.toggle=function(){var a=!0,b=this.$element.closest('[data-toggle="buttons"]');if(b.length){var c=this.$element.find("input");"radio"==c.prop("type")?(c.prop("checked")&&(a=!1),b.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==c.prop("type")&&(c.prop("checked")!==this.$element.hasClass("active")&&(a=!1),this.$element.toggleClass("active")),c.prop("checked",this.$element.hasClass("active")),a&&c.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var d=a.fn.button;a.fn.button=b,a.fn.button.Constructor=c,a.fn.button.noConflict=function(){return a.fn.button=d,this},a(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(c){var d=a(c.target);d.hasClass("btn")||(d=d.closest(".btn")),b.call(d,"toggle"),a(c.target).is('input[type="radio"]')||a(c.target).is('input[type="checkbox"]')||c.preventDefault()}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(b){a(b.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(b.type))})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.carousel"),f=a.extend({},c.DEFAULTS,d.data(),"object"==typeof b&&b),g="string"==typeof b?b:f.slide;e||d.data("bs.carousel",e=new c(this,f)),"number"==typeof b?e.to(b):g?e[g]():f.interval&&e.pause().cycle()})}var c=function(b,c){this.$element=a(b),this.$indicators=this.$element.find(".carousel-indicators"),this.options=c,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",a.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",a.proxy(this.pause,this)).on("mouseleave.bs.carousel",a.proxy(this.cycle,this))};c.VERSION="3.3.5",c.TRANSITION_DURATION=600,c.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},c.prototype.keydown=function(a){if(!/input|textarea/i.test(a.target.tagName)){switch(a.which){case 37:this.prev();break;case 39:this.next();break;default:return}a.preventDefault()}},c.prototype.cycle=function(b){return b||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(a.proxy(this.next,this),this.options.interval)),this},c.prototype.getItemIndex=function(a){return this.$items=a.parent().children(".item"),this.$items.index(a||this.$active)},c.prototype.getItemForDirection=function(a,b){var c=this.getItemIndex(b),d="prev"==a&&0===c||"next"==a&&c==this.$items.length-1;if(d&&!this.options.wrap)return b;var e="prev"==a?-1:1,f=(c+e)%this.$items.length;return this.$items.eq(f)},c.prototype.to=function(a){var b=this,c=this.getItemIndex(this.$active=this.$element.find(".item.active"));return a>this.$items.length-1||0>a?void 0:this.sliding?this.$element.one("slid.bs.carousel",function(){b.to(a)}):c==a?this.pause().cycle():this.slide(a>c?"next":"prev",this.$items.eq(a))},c.prototype.pause=function(b){return b||(this.paused=!0),this.$element.find(".next, .prev").length&&a.support.transition&&(this.$element.trigger(a.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},c.prototype.next=function(){return this.sliding?void 0:this.slide("next")},c.prototype.prev=function(){return this.sliding?void 0:this.slide("prev")},c.prototype.slide=function(b,d){var e=this.$element.find(".item.active"),f=d||this.getItemForDirection(b,e),g=this.interval,h="next"==b?"left":"right",i=this;if(f.hasClass("active"))return this.sliding=!1;var j=f[0],k=a.Event("slide.bs.carousel",{relatedTarget:j,direction:h});if(this.$element.trigger(k),!k.isDefaultPrevented()){if(this.sliding=!0,g&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var l=a(this.$indicators.children()[this.getItemIndex(f)]);l&&l.addClass("active")}var m=a.Event("slid.bs.carousel",{relatedTarget:j,direction:h});return a.support.transition&&this.$element.hasClass("slide")?(f.addClass(b),f[0].offsetWidth,e.addClass(h),f.addClass(h),e.one("bsTransitionEnd",function(){f.removeClass([b,h].join(" ")).addClass("active"),e.removeClass(["active",h].join(" ")),i.sliding=!1,setTimeout(function(){i.$element.trigger(m)},0)}).emulateTransitionEnd(c.TRANSITION_DURATION)):(e.removeClass("active"),f.addClass("active"),this.sliding=!1,this.$element.trigger(m)),g&&this.cycle(),this}};var d=a.fn.carousel;a.fn.carousel=b,a.fn.carousel.Constructor=c,a.fn.carousel.noConflict=function(){return a.fn.carousel=d,this};var e=function(c){var d,e=a(this),f=a(e.attr("data-target")||(d=e.attr("href"))&&d.replace(/.*(?=#[^\s]+$)/,""));if(f.hasClass("carousel")){var g=a.extend({},f.data(),e.data()),h=e.attr("data-slide-to");h&&(g.interval=!1),b.call(f,g),h&&f.data("bs.carousel").to(h),c.preventDefault()}};a(document).on("click.bs.carousel.data-api","[data-slide]",e).on("click.bs.carousel.data-api","[data-slide-to]",e),a(window).on("load",function(){a('[data-ride="carousel"]').each(function(){var c=a(this);b.call(c,c.data())})})}(jQuery),+function(a){"use strict";function b(b){var c,d=b.attr("data-target")||(c=b.attr("href"))&&c.replace(/.*(?=#[^\s]+$)/,"");return a(d)}function c(b){return this.each(function(){var c=a(this),e=c.data("bs.collapse"),f=a.extend({},d.DEFAULTS,c.data(),"object"==typeof b&&b);!e&&f.toggle&&/show|hide/.test(b)&&(f.toggle=!1),e||c.data("bs.collapse",e=new d(this,f)),"string"==typeof b&&e[b]()})}var d=function(b,c){this.$element=a(b),this.options=a.extend({},d.DEFAULTS,c),this.$trigger=a('[data-toggle="collapse"][href="#'+b.id+'"],[data-toggle="collapse"][data-target="#'+b.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};d.VERSION="3.3.5",d.TRANSITION_DURATION=350,d.DEFAULTS={toggle:!0},d.prototype.dimension=function(){var a=this.$element.hasClass("width");return a?"width":"height"},d.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var b,e=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(e&&e.length&&(b=e.data("bs.collapse"),b&&b.transitioning))){var f=a.Event("show.bs.collapse");if(this.$element.trigger(f),!f.isDefaultPrevented()){e&&e.length&&(c.call(e,"hide"),b||e.data("bs.collapse",null));var g=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[g](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var h=function(){this.$element.removeClass("collapsing").addClass("collapse in")[g](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!a.support.transition)return h.call(this);var i=a.camelCase(["scroll",g].join("-"));this.$element.one("bsTransitionEnd",a.proxy(h,this)).emulateTransitionEnd(d.TRANSITION_DURATION)[g](this.$element[0][i])}}}},d.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var b=a.Event("hide.bs.collapse");if(this.$element.trigger(b),!b.isDefaultPrevented()){var c=this.dimension();this.$element[c](this.$element[c]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var e=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return a.support.transition?void this.$element[c](0).one("bsTransitionEnd",a.proxy(e,this)).emulateTransitionEnd(d.TRANSITION_DURATION):e.call(this)}}},d.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},d.prototype.getParent=function(){return a(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(a.proxy(function(c,d){var e=a(d);this.addAriaAndCollapsedClass(b(e),e)},this)).end()},d.prototype.addAriaAndCollapsedClass=function(a,b){var c=a.hasClass("in");a.attr("aria-expanded",c),b.toggleClass("collapsed",!c).attr("aria-expanded",c)};var e=a.fn.collapse;a.fn.collapse=c,a.fn.collapse.Constructor=d,a.fn.collapse.noConflict=function(){return a.fn.collapse=e,this},a(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(d){var e=a(this);e.attr("data-target")||d.preventDefault();var f=b(e),g=f.data("bs.collapse"),h=g?"toggle":e.data();c.call(f,h)})}(jQuery),+function(a){"use strict";function b(b){var c=b.attr("data-target");c||(c=b.attr("href"),c=c&&/#[A-Za-z]/.test(c)&&c.replace(/.*(?=#[^\s]*$)/,""));var d=c&&a(c);return d&&d.length?d:b.parent()}function c(c){c&&3===c.which||(a(e).remove(),a(f).each(function(){var d=a(this),e=b(d),f={relatedTarget:this};e.hasClass("open")&&(c&&"click"==c.type&&/input|textarea/i.test(c.target.tagName)&&a.contains(e[0],c.target)||(e.trigger(c=a.Event("hide.bs.dropdown",f)),c.isDefaultPrevented()||(d.attr("aria-expanded","false"),e.removeClass("open").trigger("hidden.bs.dropdown",f))))}))}function d(b){return this.each(function(){var c=a(this),d=c.data("bs.dropdown");d||c.data("bs.dropdown",d=new g(this)),"string"==typeof b&&d[b].call(c)})}var e=".dropdown-backdrop",f='[data-toggle="dropdown"]',g=function(b){a(b).on("click.bs.dropdown",this.toggle)};g.VERSION="3.3.5",g.prototype.toggle=function(d){var e=a(this);if(!e.is(".disabled, :disabled")){var f=b(e),g=f.hasClass("open");if(c(),!g){"ontouchstart"in document.documentElement&&!f.closest(".navbar-nav").length&&a(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(a(this)).on("click",c);var h={relatedTarget:this};if(f.trigger(d=a.Event("show.bs.dropdown",h)),d.isDefaultPrevented())return;e.trigger("focus").attr("aria-expanded","true"),f.toggleClass("open").trigger("shown.bs.dropdown",h)}return!1}},g.prototype.keydown=function(c){if(/(38|40|27|32)/.test(c.which)&&!/input|textarea/i.test(c.target.tagName)){var d=a(this);if(c.preventDefault(),c.stopPropagation(),!d.is(".disabled, :disabled")){var e=b(d),g=e.hasClass("open");if(!g&&27!=c.which||g&&27==c.which)return 27==c.which&&e.find(f).trigger("focus"),d.trigger("click");var h=" li:not(.disabled):visible a",i=e.find(".dropdown-menu"+h);if(i.length){var j=i.index(c.target);38==c.which&&j>0&&j--,40==c.which&&j<i.length-1&&j++,~j||(j=0),i.eq(j).trigger("focus")}}}};var h=a.fn.dropdown;a.fn.dropdown=d,a.fn.dropdown.Constructor=g,a.fn.dropdown.noConflict=function(){return a.fn.dropdown=h,this},a(document).on("click.bs.dropdown.data-api",c).on("click.bs.dropdown.data-api",".dropdown form",function(a){a.stopPropagation()}).on("click.bs.dropdown.data-api",f,g.prototype.toggle).on("keydown.bs.dropdown.data-api",f,g.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",g.prototype.keydown)}(jQuery),+function(a){"use strict";function b(b,d){return this.each(function(){var e=a(this),f=e.data("bs.modal"),g=a.extend({},c.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data("bs.modal",f=new c(this,g)),"string"==typeof b?f[b](d):g.show&&f.show(d)})}var c=function(b,c){this.options=c,this.$body=a(document.body),this.$element=a(b),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,a.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};c.VERSION="3.3.5",c.TRANSITION_DURATION=300,c.BACKDROP_TRANSITION_DURATION=150,c.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},c.prototype.toggle=function(a){return this.isShown?this.hide():this.show(a)},c.prototype.show=function(b){var d=this,e=a.Event("show.bs.modal",{relatedTarget:b});this.$element.trigger(e),this.isShown||e.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',a.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){d.$element.one("mouseup.dismiss.bs.modal",function(b){a(b.target).is(d.$element)&&(d.ignoreBackdropClick=!0)})}),this.backdrop(function(){var e=a.support.transition&&d.$element.hasClass("fade");d.$element.parent().length||d.$element.appendTo(d.$body),d.$element.show().scrollTop(0),d.adjustDialog(),e&&d.$element[0].offsetWidth,d.$element.addClass("in"),d.enforceFocus();var f=a.Event("shown.bs.modal",{relatedTarget:b});e?d.$dialog.one("bsTransitionEnd",function(){d.$element.trigger("focus").trigger(f)}).emulateTransitionEnd(c.TRANSITION_DURATION):d.$element.trigger("focus").trigger(f)}))},c.prototype.hide=function(b){b&&b.preventDefault(),b=a.Event("hide.bs.modal"),this.$element.trigger(b),this.isShown&&!b.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),a(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),a.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",a.proxy(this.hideModal,this)).emulateTransitionEnd(c.TRANSITION_DURATION):this.hideModal())},c.prototype.enforceFocus=function(){a(document).off("focusin.bs.modal").on("focusin.bs.modal",a.proxy(function(a){this.$element[0]===a.target||this.$element.has(a.target).length||this.$element.trigger("focus")},this))},c.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",a.proxy(function(a){27==a.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},c.prototype.resize=function(){this.isShown?a(window).on("resize.bs.modal",a.proxy(this.handleUpdate,this)):a(window).off("resize.bs.modal")},c.prototype.hideModal=function(){var a=this;this.$element.hide(),this.backdrop(function(){a.$body.removeClass("modal-open"),a.resetAdjustments(),a.resetScrollbar(),a.$element.trigger("hidden.bs.modal")})},c.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},c.prototype.backdrop=function(b){var d=this,e=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var f=a.support.transition&&e;if(this.$backdrop=a(document.createElement("div")).addClass("modal-backdrop "+e).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",a.proxy(function(a){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(a.target===a.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),f&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!b)return;f?this.$backdrop.one("bsTransitionEnd",b).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):b()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var g=function(){d.removeBackdrop(),b&&b()};a.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",g).emulateTransitionEnd(c.BACKDROP_TRANSITION_DURATION):g()}else b&&b()},c.prototype.handleUpdate=function(){this.adjustDialog()},c.prototype.adjustDialog=function(){var a=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&a?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!a?this.scrollbarWidth:""})},c.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},c.prototype.checkScrollbar=function(){var a=window.innerWidth;if(!a){var b=document.documentElement.getBoundingClientRect();a=b.right-Math.abs(b.left)}this.bodyIsOverflowing=document.body.clientWidth<a,this.scrollbarWidth=this.measureScrollbar()},c.prototype.setScrollbar=function(){var a=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",a+this.scrollbarWidth)},c.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},c.prototype.measureScrollbar=function(){var a=document.createElement("div");a.className="modal-scrollbar-measure",this.$body.append(a);var b=a.offsetWidth-a.clientWidth;return this.$body[0].removeChild(a),b};var d=a.fn.modal;a.fn.modal=b,a.fn.modal.Constructor=c,a.fn.modal.noConflict=function(){return a.fn.modal=d,this},a(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(c){var d=a(this),e=d.attr("href"),f=a(d.attr("data-target")||e&&e.replace(/.*(?=#[^\s]+$)/,"")),g=f.data("bs.modal")?"toggle":a.extend({remote:!/#/.test(e)&&e},f.data(),d.data());d.is("a")&&c.preventDefault(),f.one("show.bs.modal",function(a){a.isDefaultPrevented()||f.one("hidden.bs.modal",function(){d.is(":visible")&&d.trigger("focus")})}),b.call(f,g,this)})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tooltip"),f="object"==typeof b&&b;(e||!/destroy|hide/.test(b))&&(e||d.data("bs.tooltip",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",a,b)};c.VERSION="3.3.5",c.TRANSITION_DURATION=150,c.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},c.prototype.init=function(b,c,d){if(this.enabled=!0,this.type=b,this.$element=a(c),this.options=this.getOptions(d),this.$viewport=this.options.viewport&&a(a.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var e=this.options.trigger.split(" "),f=e.length;f--;){var g=e[f];if("click"==g)this.$element.on("click."+this.type,this.options.selector,a.proxy(this.toggle,this));else if("manual"!=g){var h="hover"==g?"mouseenter":"focusin",i="hover"==g?"mouseleave":"focusout";this.$element.on(h+"."+this.type,this.options.selector,a.proxy(this.enter,this)),this.$element.on(i+"."+this.type,this.options.selector,a.proxy(this.leave,this))}}this.options.selector?this._options=a.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.getOptions=function(b){return b=a.extend({},this.getDefaults(),this.$element.data(),b),b.delay&&"number"==typeof b.delay&&(b.delay={show:b.delay,hide:b.delay}),b},c.prototype.getDelegateOptions=function(){var b={},c=this.getDefaults();return this._options&&a.each(this._options,function(a,d){c[a]!=d&&(b[a]=d)}),b},c.prototype.enter=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusin"==b.type?"focus":"hover"]=!0),c.tip().hasClass("in")||"in"==c.hoverState?void(c.hoverState="in"):(clearTimeout(c.timeout),c.hoverState="in",c.options.delay&&c.options.delay.show?void(c.timeout=setTimeout(function(){"in"==c.hoverState&&c.show()},c.options.delay.show)):c.show())},c.prototype.isInStateTrue=function(){for(var a in this.inState)if(this.inState[a])return!0;return!1},c.prototype.leave=function(b){var c=b instanceof this.constructor?b:a(b.currentTarget).data("bs."+this.type);return c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c)),b instanceof a.Event&&(c.inState["focusout"==b.type?"focus":"hover"]=!1),c.isInStateTrue()?void 0:(clearTimeout(c.timeout),c.hoverState="out",c.options.delay&&c.options.delay.hide?void(c.timeout=setTimeout(function(){"out"==c.hoverState&&c.hide()},c.options.delay.hide)):c.hide())},c.prototype.show=function(){var b=a.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(b);var d=a.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(b.isDefaultPrevented()||!d)return;var e=this,f=this.tip(),g=this.getUID(this.type);this.setContent(),f.attr("id",g),this.$element.attr("aria-describedby",g),this.options.animation&&f.addClass("fade");var h="function"==typeof this.options.placement?this.options.placement.call(this,f[0],this.$element[0]):this.options.placement,i=/\s?auto?\s?/i,j=i.test(h);j&&(h=h.replace(i,"")||"top"),f.detach().css({top:0,left:0,display:"block"}).addClass(h).data("bs."+this.type,this),this.options.container?f.appendTo(this.options.container):f.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var k=this.getPosition(),l=f[0].offsetWidth,m=f[0].offsetHeight;if(j){var n=h,o=this.getPosition(this.$viewport);h="bottom"==h&&k.bottom+m>o.bottom?"top":"top"==h&&k.top-m<o.top?"bottom":"right"==h&&k.right+l>o.width?"left":"left"==h&&k.left-l<o.left?"right":h,f.removeClass(n).addClass(h)}var p=this.getCalculatedOffset(h,k,l,m);this.applyPlacement(p,h);var q=function(){var a=e.hoverState;e.$element.trigger("shown.bs."+e.type),e.hoverState=null,"out"==a&&e.leave(e)};a.support.transition&&this.$tip.hasClass("fade")?f.one("bsTransitionEnd",q).emulateTransitionEnd(c.TRANSITION_DURATION):q()}},c.prototype.applyPlacement=function(b,c){var d=this.tip(),e=d[0].offsetWidth,f=d[0].offsetHeight,g=parseInt(d.css("margin-top"),10),h=parseInt(d.css("margin-left"),10);isNaN(g)&&(g=0),isNaN(h)&&(h=0),b.top+=g,b.left+=h,a.offset.setOffset(d[0],a.extend({using:function(a){d.css({top:Math.round(a.top),left:Math.round(a.left)})}},b),0),d.addClass("in");var i=d[0].offsetWidth,j=d[0].offsetHeight;"top"==c&&j!=f&&(b.top=b.top+f-j);var k=this.getViewportAdjustedDelta(c,b,i,j);k.left?b.left+=k.left:b.top+=k.top;var l=/top|bottom/.test(c),m=l?2*k.left-e+i:2*k.top-f+j,n=l?"offsetWidth":"offsetHeight";d.offset(b),this.replaceArrow(m,d[0][n],l)},c.prototype.replaceArrow=function(a,b,c){this.arrow().css(c?"left":"top",50*(1-a/b)+"%").css(c?"top":"left","")},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle();a.find(".tooltip-inner")[this.options.html?"html":"text"](b),a.removeClass("fade in top bottom left right")},c.prototype.hide=function(b){function d(){"in"!=e.hoverState&&f.detach(),e.$element.removeAttr("aria-describedby").trigger("hidden.bs."+e.type),b&&b()}var e=this,f=a(this.$tip),g=a.Event("hide.bs."+this.type);return this.$element.trigger(g),g.isDefaultPrevented()?void 0:(f.removeClass("in"),a.support.transition&&f.hasClass("fade")?f.one("bsTransitionEnd",d).emulateTransitionEnd(c.TRANSITION_DURATION):d(),this.hoverState=null,this)},c.prototype.fixTitle=function(){var a=this.$element;(a.attr("title")||"string"!=typeof a.attr("data-original-title"))&&a.attr("data-original-title",a.attr("title")||"").attr("title","")},c.prototype.hasContent=function(){return this.getTitle()},c.prototype.getPosition=function(b){b=b||this.$element;var c=b[0],d="BODY"==c.tagName,e=c.getBoundingClientRect();null==e.width&&(e=a.extend({},e,{width:e.right-e.left,height:e.bottom-e.top}));var f=d?{top:0,left:0}:b.offset(),g={scroll:d?document.documentElement.scrollTop||document.body.scrollTop:b.scrollTop()},h=d?{width:a(window).width(),height:a(window).height()}:null;return a.extend({},e,g,h,f)},c.prototype.getCalculatedOffset=function(a,b,c,d){return"bottom"==a?{top:b.top+b.height,left:b.left+b.width/2-c/2}:"top"==a?{top:b.top-d,left:b.left+b.width/2-c/2}:"left"==a?{top:b.top+b.height/2-d/2,left:b.left-c}:{top:b.top+b.height/2-d/2,left:b.left+b.width}},c.prototype.getViewportAdjustedDelta=function(a,b,c,d){var e={top:0,left:0};if(!this.$viewport)return e;var f=this.options.viewport&&this.options.viewport.padding||0,g=this.getPosition(this.$viewport);if(/right|left/.test(a)){var h=b.top-f-g.scroll,i=b.top+f-g.scroll+d;h<g.top?e.top=g.top-h:i>g.top+g.height&&(e.top=g.top+g.height-i)}else{var j=b.left-f,k=b.left+f+c;j<g.left?e.left=g.left-j:k>g.right&&(e.left=g.left+g.width-k)}return e},c.prototype.getTitle=function(){var a,b=this.$element,c=this.options;return a=b.attr("data-original-title")||("function"==typeof c.title?c.title.call(b[0]):c.title)},c.prototype.getUID=function(a){do a+=~~(1e6*Math.random());while(document.getElementById(a));return a},c.prototype.tip=function(){if(!this.$tip&&(this.$tip=a(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},c.prototype.enable=function(){this.enabled=!0},c.prototype.disable=function(){this.enabled=!1},c.prototype.toggleEnabled=function(){this.enabled=!this.enabled},c.prototype.toggle=function(b){var c=this;b&&(c=a(b.currentTarget).data("bs."+this.type),c||(c=new this.constructor(b.currentTarget,this.getDelegateOptions()),a(b.currentTarget).data("bs."+this.type,c))),b?(c.inState.click=!c.inState.click,c.isInStateTrue()?c.enter(c):c.leave(c)):c.tip().hasClass("in")?c.leave(c):c.enter(c)},c.prototype.destroy=function(){var a=this;clearTimeout(this.timeout),this.hide(function(){a.$element.off("."+a.type).removeData("bs."+a.type),a.$tip&&a.$tip.detach(),a.$tip=null,a.$arrow=null,a.$viewport=null})};var d=a.fn.tooltip;a.fn.tooltip=b,a.fn.tooltip.Constructor=c,a.fn.tooltip.noConflict=function(){return a.fn.tooltip=d,this}}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.popover"),f="object"==typeof b&&b;(e||!/destroy|hide/.test(b))&&(e||d.data("bs.popover",e=new c(this,f)),"string"==typeof b&&e[b]())})}var c=function(a,b){this.init("popover",a,b)};if(!a.fn.tooltip)throw new Error("Popover requires tooltip.js");c.VERSION="3.3.5",c.DEFAULTS=a.extend({},a.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),c.prototype=a.extend({},a.fn.tooltip.Constructor.prototype),c.prototype.constructor=c,c.prototype.getDefaults=function(){return c.DEFAULTS},c.prototype.setContent=function(){var a=this.tip(),b=this.getTitle(),c=this.getContent();a.find(".popover-title")[this.options.html?"html":"text"](b),a.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof c?"html":"append":"text"](c),a.removeClass("fade top bottom left right in"),a.find(".popover-title").html()||a.find(".popover-title").hide()},c.prototype.hasContent=function(){return this.getTitle()||this.getContent()},c.prototype.getContent=function(){var a=this.$element,b=this.options;return a.attr("data-content")||("function"==typeof b.content?b.content.call(a[0]):b.content)},c.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var d=a.fn.popover;a.fn.popover=b,a.fn.popover.Constructor=c,a.fn.popover.noConflict=function(){return a.fn.popover=d,this}}(jQuery),+function(a){"use strict";function b(c,d){this.$body=a(document.body),this.$scrollElement=a(a(c).is(document.body)?window:c),this.options=a.extend({},b.DEFAULTS,d),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",a.proxy(this.process,this)),this.refresh(),this.process()}function c(c){return this.each(function(){var d=a(this),e=d.data("bs.scrollspy"),f="object"==typeof c&&c;e||d.data("bs.scrollspy",e=new b(this,f)),"string"==typeof c&&e[c]()})}b.VERSION="3.3.5",b.DEFAULTS={offset:10},b.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},b.prototype.refresh=function(){var b=this,c="offset",d=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),a.isWindow(this.$scrollElement[0])||(c="position",d=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var b=a(this),e=b.data("target")||b.attr("href"),f=/^#./.test(e)&&a(e);return f&&f.length&&f.is(":visible")&&[[f[c]().top+d,e]]||null}).sort(function(a,b){return a[0]-b[0]}).each(function(){b.offsets.push(this[0]),b.targets.push(this[1])})},b.prototype.process=function(){var a,b=this.$scrollElement.scrollTop()+this.options.offset,c=this.getScrollHeight(),d=this.options.offset+c-this.$scrollElement.height(),e=this.offsets,f=this.targets,g=this.activeTarget;if(this.scrollHeight!=c&&this.refresh(),b>=d)return g!=(a=f[f.length-1])&&this.activate(a);if(g&&b<e[0])return this.activeTarget=null,this.clear();for(a=e.length;a--;)g!=f[a]&&b>=e[a]&&(void 0===e[a+1]||b<e[a+1])&&this.activate(f[a])},b.prototype.activate=function(b){this.activeTarget=b,this.clear();var c=this.selector+'[data-target="'+b+'"],'+this.selector+'[href="'+b+'"]',d=a(c).parents("li").addClass("active");d.parent(".dropdown-menu").length&&(d=d.closest("li.dropdown").addClass("active")),
		d.trigger("activate.bs.scrollspy")},b.prototype.clear=function(){a(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var d=a.fn.scrollspy;a.fn.scrollspy=c,a.fn.scrollspy.Constructor=b,a.fn.scrollspy.noConflict=function(){return a.fn.scrollspy=d,this},a(window).on("load.bs.scrollspy.data-api",function(){a('[data-spy="scroll"]').each(function(){var b=a(this);c.call(b,b.data())})})}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.tab");e||d.data("bs.tab",e=new c(this)),"string"==typeof b&&e[b]()})}var c=function(b){this.element=a(b)};c.VERSION="3.3.5",c.TRANSITION_DURATION=150,c.prototype.show=function(){var b=this.element,c=b.closest("ul:not(.dropdown-menu)"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.bs.tab",{relatedTarget:b[0]}),g=a.Event("show.bs.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.bs.tab",relatedTarget:b[0]}),b.trigger({type:"shown.bs.tab",relatedTarget:e[0]})})}}},c.prototype.activate=function(b,d,e){function f(){g.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),b.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),h?(b[0].offsetWidth,b.addClass("in")):b.removeClass("fade"),b.parent(".dropdown-menu").length&&b.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),e&&e()}var g=d.find("> .active"),h=e&&a.support.transition&&(g.length&&g.hasClass("fade")||!!d.find("> .fade").length);g.length&&h?g.one("bsTransitionEnd",f).emulateTransitionEnd(c.TRANSITION_DURATION):f(),g.removeClass("in")};var d=a.fn.tab;a.fn.tab=b,a.fn.tab.Constructor=c,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(c){c.preventDefault(),b.call(a(this),"show")};a(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',e).on("click.bs.tab.data-api",'[data-toggle="pill"]',e)}(jQuery),+function(a){"use strict";function b(b){return this.each(function(){var d=a(this),e=d.data("bs.affix"),f="object"==typeof b&&b;e||d.data("bs.affix",e=new c(this,f)),"string"==typeof b&&e[b]()})}var c=function(b,d){this.options=a.extend({},c.DEFAULTS,d),this.$target=a(this.options.target).on("scroll.bs.affix.data-api",a.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",a.proxy(this.checkPositionWithEventLoop,this)),this.$element=a(b),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};c.VERSION="3.3.5",c.RESET="affix affix-top affix-bottom",c.DEFAULTS={offset:0,target:window},c.prototype.getState=function(a,b,c,d){var e=this.$target.scrollTop(),f=this.$element.offset(),g=this.$target.height();if(null!=c&&"top"==this.affixed)return c>e?"top":!1;if("bottom"==this.affixed)return null!=c?e+this.unpin<=f.top?!1:"bottom":a-d>=e+g?!1:"bottom";var h=null==this.affixed,i=h?e:f.top,j=h?g:b;return null!=c&&c>=e?"top":null!=d&&i+j>=a-d?"bottom":!1},c.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(c.RESET).addClass("affix");var a=this.$target.scrollTop(),b=this.$element.offset();return this.pinnedOffset=b.top-a},c.prototype.checkPositionWithEventLoop=function(){setTimeout(a.proxy(this.checkPosition,this),1)},c.prototype.checkPosition=function(){if(this.$element.is(":visible")){var b=this.$element.height(),d=this.options.offset,e=d.top,f=d.bottom,g=Math.max(a(document).height(),a(document.body).height());"object"!=typeof d&&(f=e=d),"function"==typeof e&&(e=d.top(this.$element)),"function"==typeof f&&(f=d.bottom(this.$element));var h=this.getState(g,b,e,f);if(this.affixed!=h){null!=this.unpin&&this.$element.css("top","");var i="affix"+(h?"-"+h:""),j=a.Event(i+".bs.affix");if(this.$element.trigger(j),j.isDefaultPrevented())return;this.affixed=h,this.unpin="bottom"==h?this.getPinnedOffset():null,this.$element.removeClass(c.RESET).addClass(i).trigger(i.replace("affix","affixed")+".bs.affix")}"bottom"==h&&this.$element.offset({top:g-b-f})}};var d=a.fn.affix;a.fn.affix=b,a.fn.affix.Constructor=c,a.fn.affix.noConflict=function(){return a.fn.affix=d,this},a(window).on("load",function(){a('[data-spy="affix"]').each(function(){var c=a(this),d=c.data();d.offset=d.offset||{},null!=d.offsetBottom&&(d.offset.bottom=d.offsetBottom),null!=d.offsetTop&&(d.offset.top=d.offsetTop),b.call(c,d)})})}(jQuery);
});