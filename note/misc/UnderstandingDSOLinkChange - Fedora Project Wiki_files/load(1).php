var mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}},mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}()),mediaWikiLoadStart;function isCompatible(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));}(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(
fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/w/load.php"});mw.loader.register([["site","05vufdg",[1]],["site.styles","1t7d976",[],"site"],["noscript","0zk2cp0",[],"noscript"],["filepage","19hnwtn"],["user.groups","1gmimol",[5]],["user","1iqbzs7",[6],"user"],["user.styles","0pb93jh",[],"user"],["user.defaults","0czwfi1"],["user.options","0j3lz3q",[7],"private"],["user.tokens","1vf83y7",[],"private"],["mediawiki.language.data","0msaucq",[177]],["mediawiki.skinning.elements","1dnoq8i"],["mediawiki.skinning.content","1a6204y"],["mediawiki.skinning.interface","02bw8zm"],["mediawiki.skinning.content.parsoid","1aekm5g"],["mediawiki.skinning.content.externallinks","0yhbcw2"],["jquery.accessKeyLabel","1nhrms7",[25,134]],["jquery.appear","1jn8dnq"],["jquery.async","1tjmo0w"],["jquery.autoEllipsis","08grjmp",[37]],["jquery.badge","0gnenfe",[174]],["jquery.byteLength","00g8evz"],["jquery.byteLimit","0pv5mdp",[21]],[
"jquery.checkboxShiftClick","00p8xrc"],["jquery.chosen","1tge8bq"],["jquery.client","1mu6b7n"],["jquery.color","0884olk",[27]],["jquery.colorUtil","142v0gh"],["jquery.confirmable","1b4bm6g",[178]],["jquery.cookie","09jh1fx"],["jquery.expandableField","039ldyt"],["jquery.farbtastic","03vj3v8",[27]],["jquery.footHovzer","0rcrlmx"],["jquery.form","1604jm4"],["jquery.fullscreen","05l5hlc"],["jquery.getAttrs","0hlyz8v"],["jquery.hidpi","11u7y51"],["jquery.highlightText","0kndtj1",[134]],["jquery.hoverIntent","0sypvl0"],["jquery.i18n","0buzxz9",[176]],["jquery.localize","1q6ztgn"],["jquery.makeCollapsible","16jvj67"],["jquery.mockjax","09a9dgf"],["jquery.mw-jump","1vifyxp"],["jquery.mwExtension","1ais53z"],["jquery.placeholder","1iu2991"],["jquery.qunit","0gr5w33"],["jquery.spinner","1mkio0o"],["jquery.jStorage","1lg85y8"],["jquery.suggestions","0qhjigb",[37]],["jquery.tabIndex","1cpjzw2"],["jquery.tablesorter","0gsqwtd",[134,179]],["jquery.textSelection","0csauvw",[25]],[
"jquery.throttle-debounce","03qym2x"],["jquery.xmldom","0a36tg6"],["jquery.tipsy","1vklth6"],["jquery.ui.core","1hvynto",[57],"jquery.ui"],["jquery.ui.core.styles","1o6ru5v",[],"jquery.ui"],["jquery.ui.accordion","13y4qek",[56,76],"jquery.ui"],["jquery.ui.autocomplete","1tpqykl",[65],"jquery.ui"],["jquery.ui.button","1eqbvk7",[56,76],"jquery.ui"],["jquery.ui.datepicker","154q0jr",[56],"jquery.ui"],["jquery.ui.dialog","0cfc65j",[60,63,67,69],"jquery.ui"],["jquery.ui.draggable","17yyzs5",[56,66],"jquery.ui"],["jquery.ui.droppable","062kkg0",[63],"jquery.ui"],["jquery.ui.menu","1exluga",[56,67,76],"jquery.ui"],["jquery.ui.mouse","1pbrllp",[76],"jquery.ui"],["jquery.ui.position","05to9r6",[],"jquery.ui"],["jquery.ui.progressbar","0lpkt3o",[56,76],"jquery.ui"],["jquery.ui.resizable","0zc1n64",[56,66],"jquery.ui"],["jquery.ui.selectable","1gnjlte",[56,66],"jquery.ui"],["jquery.ui.slider","1lwn5dm",[56,66],"jquery.ui"],["jquery.ui.sortable","0a3deqj",[56,66],"jquery.ui"],["jquery.ui.spinner",
"1t7weru",[60],"jquery.ui"],["jquery.ui.tabs","1bhubj1",[56,76],"jquery.ui"],["jquery.ui.tooltip","11ynsrw",[56,67,76],"jquery.ui"],["jquery.ui.widget","1ckpzvg",[],"jquery.ui"],["jquery.effects.core","0ryapp4",[],"jquery.ui"],["jquery.effects.blind","14b06px",[77],"jquery.ui"],["jquery.effects.bounce","0fl4l3f",[77],"jquery.ui"],["jquery.effects.clip","0tj7bcq",[77],"jquery.ui"],["jquery.effects.drop","1iv73em",[77],"jquery.ui"],["jquery.effects.explode","18nnqhf",[77],"jquery.ui"],["jquery.effects.fade","0cpkfsv",[77],"jquery.ui"],["jquery.effects.fold","1nsqxpn",[77],"jquery.ui"],["jquery.effects.highlight","0vzyfcz",[77],"jquery.ui"],["jquery.effects.pulsate","0l9z05z",[77],"jquery.ui"],["jquery.effects.scale","0is09d3",[77],"jquery.ui"],["jquery.effects.shake","0vdvvzc",[77],"jquery.ui"],["jquery.effects.slide","1gywxrr",[77],"jquery.ui"],["jquery.effects.transfer","0884ktf",[77],"jquery.ui"],["json","1gmimol"],["moment","1ksx78g",[174]],["mediawiki.apihelp","1rvhfyp"],[
"mediawiki.template","0iu9enk"],["mediawiki.template.mustache","1s7xkfw",[94]],["mediawiki.template.regexp","14svd6w",[94]],["mediawiki.apipretty","0oawmfq"],["mediawiki.api","0qa3ssl",[151,9]],["mediawiki.api.category","1azxih7",[139,98]],["mediawiki.api.edit","0trk19t",[139,98]],["mediawiki.api.login","093826l",[98]],["mediawiki.api.options","1bciw7b",[98]],["mediawiki.api.parse","18jwsdx",[98]],["mediawiki.api.upload","1855a8t",[100]],["mediawiki.api.user","0bv58xx",[98]],["mediawiki.api.watch","18iu0ve",[98]],["mediawiki.api.messages","1raxaml",[98]],["mediawiki.api.rollback","1r2e91b",[98]],["mediawiki.content.json","098nobo"],["mediawiki.confirmCloseWindow","1im0o2p"],["mediawiki.debug","1fxsay9",[32]],["mediawiki.diff.styles","0n22cw2"],["mediawiki.feedback","16dqpmw",[139,128,269]],["mediawiki.feedlink","1d1sxyd"],["mediawiki.filewarning","08kiefb",[265]],["mediawiki.ForeignApi","1l5gotz",[117]],["mediawiki.ForeignApi.core","1cqxwzz",[98,261]],["mediawiki.helplink","0a4u1dm"],[
"mediawiki.hidpi","0no64nf",[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","028m2ux"],["mediawiki.htmlform","1rhsuxy",[22,134]],["mediawiki.htmlform.checker","0xw80cu"],["mediawiki.htmlform.ooui","0sw44e2",[265]],["mediawiki.htmlform.styles","1rnas2p"],["mediawiki.htmlform.ooui.styles","140d83r"],["mediawiki.icon","1itbjin"],["mediawiki.inspect","1cq510r",[21,134]],["mediawiki.messagePoster","1fgyhdi",[116]],["mediawiki.messagePoster.wikitext","1oecd1b",[100,128]],["mediawiki.notification","02dbeuk",[187]],["mediawiki.notify","050at65"],["mediawiki.notification.convertmessagebox","0gupuso",[130]],["mediawiki.notification.convertmessagebox.styles","15sn0hu"],["mediawiki.RegExp","0flze5n"],["mediawiki.pager.tablePager","0xf2ohz"],["mediawiki.searchSuggest","14h0teg",[35,49,98]],["mediawiki.sectionAnchor","0ti650p"],["mediawiki.storage","0desrru"],["mediawiki.Title","01l7jum",[21,151]],["mediawiki.Upload","1g75j89",[104]],["mediawiki.ForeignUpload","1bjzlhn",[116,140]]
,["mediawiki.ForeignStructuredUpload.config","1fvsh13"],["mediawiki.ForeignStructuredUpload","05jmg6c",[142,141]],["mediawiki.Upload.Dialog","0qu4erp",[145]],["mediawiki.Upload.BookletLayout","01scawq",[140,178,149,258,92,267,269,275,276]],["mediawiki.ForeignStructuredUpload.BookletLayout","0x4ev7x",[143,145,107,182,250,247]],["mediawiki.toc","0ko3xs6",[155]],["mediawiki.Uri","0qaccqu",[151,96]],["mediawiki.user","1figyzk",[105,155,138,8]],["mediawiki.userSuggest","1egcr6g",[49,98]],["mediawiki.util","19scqbf",[16,131]],["mediawiki.viewport","0r3fsmu"],["mediawiki.checkboxtoggle","0cunfay"],["mediawiki.checkboxtoggle.styles","0b4gm4i"],["mediawiki.cookie","11vyuxb",[29]],["mediawiki.toolbar","1syrwkl",[52]],["mediawiki.experiments","0d7r9nh"],["mediawiki.action.edit","0rr8aq2",[22,52,159,98]],["mediawiki.action.edit.styles","1s7bv33"],["mediawiki.action.edit.collapsibleFooter","19lrarm",[41,126,138]],["mediawiki.action.edit.preview","0b8f4qz",[33,47,52,98,112,178]],[
"mediawiki.action.history","1tmd8zu"],["mediawiki.action.history.styles","0e5gxyx"],["mediawiki.action.history.diff","0n22cw2"],["mediawiki.action.view.dblClickEdit","04ndaa2",[187,8]],["mediawiki.action.view.metadata","0ucl247"],["mediawiki.action.view.categoryPage.styles","0x6ca8q"],["mediawiki.action.view.postEdit","1v6lkag",[155,178,94]],["mediawiki.action.view.redirect","1tjwfr6",[25]],["mediawiki.action.view.redirectPage","1euoxfp"],["mediawiki.action.view.rightClickEdit","1mtuvke"],["mediawiki.action.edit.editWarning","1b8vilf",[52,110,178]],["mediawiki.action.view.filepage","0nixjcq"],["mediawiki.language","0rn22m5",[175,10]],["mediawiki.cldr","0ueblai",[176]],["mediawiki.libs.pluralruleparser","0qy1w5g"],["mediawiki.language.init","0rdcv1b"],["mediawiki.jqueryMsg","1yi5gup",[174,151,8]],["mediawiki.language.months","0wpv8ng",[174]],["mediawiki.language.names","1qt8rd5",[177]],["mediawiki.language.specialCharacters","1lltfve",[174]],["mediawiki.libs.jpegmeta","1nffry1"],[
"mediawiki.page.gallery","19ovnay",[53,184]],["mediawiki.page.gallery.styles","14vpqcz"],["mediawiki.page.gallery.slideshow","16zu756",[139,98,267,283]],["mediawiki.page.ready","0fomdbi",[16,23,43]],["mediawiki.page.startup","1qe3ktm",[151]],["mediawiki.page.patrol.ajax","1oacn27",[47,139,98,187]],["mediawiki.page.watch.ajax","1h0t60e",[139,106,178,187]],["mediawiki.page.rollback","0mxxxje",[47,108]],["mediawiki.page.image.pagination","1u2kzye",[47,151]],["mediawiki.rcfilters.filters.base.styles","1cixcde"],["mediawiki.rcfilters.filters.dm","0w3k370",[148,261]],["mediawiki.rcfilters.filters.ui","18w8ud9",[193,149,264,277,279,280,284]],["mediawiki.special","024mh9a"],["mediawiki.special.apisandbox.styles","0no0b38"],["mediawiki.special.apisandbox","1o9gqoe",[98,178,248,264]],["mediawiki.special.block","0l8lmpc",[121,151]],["mediawiki.special.changecredentials.js","0xd52xb",[98,123]],["mediawiki.special.changeslist","1yagxz5"],["mediawiki.special.changeslist.legend","1md9kuo"],[
"mediawiki.special.changeslist.legend.js","0tqduyg",[41,155]],["mediawiki.special.changeslist.enhanced","087ozo5"],["mediawiki.special.changeslist.visitedstatus","1c77dn0"],["mediawiki.special.comparepages.styles","1il416h"],["mediawiki.special.edittags","0x1yrng",[24]],["mediawiki.special.edittags.styles","1noixha"],["mediawiki.special.import","0s1r159"],["mediawiki.special.movePage","08i92m8",[245]],["mediawiki.special.movePage.styles","1pnp2s2"],["mediawiki.special.pageLanguage","0kfsmz0",[265]],["mediawiki.special.pagesWithProp","0ap2h9f"],["mediawiki.special.preferences","0ep82lv",[110,174,132]],["mediawiki.special.userrights","0fzyz1z",[132]],["mediawiki.special.preferences.styles","18jyvum"],["mediawiki.special.recentchanges","1jssjk1"],["mediawiki.special.search","14xn5ff",[256]],["mediawiki.special.search.styles","0csrrlm"],["mediawiki.special.search.interwikiwidget.styles","1li2tlz"],["mediawiki.special.search.commonsInterwikiWidget","09a7yae",[148,178]],[
"mediawiki.special.undelete","0gjv4j5"],["mediawiki.special.upload","119ztlv",[47,139,98,110,178,182,223,94]],["mediawiki.special.upload.styles","0gouzlo"],["mediawiki.special.userlogin.common.styles","0eorjgg"],["mediawiki.special.userlogin.signup.styles","1ly0f1u"],["mediawiki.special.userlogin.login.styles","1rykc10"],["mediawiki.special.userlogin.signup.js","1fhl5at",[53,98,122,178]],["mediawiki.special.unwatchedPages","1e7fjdh",[139,106]],["mediawiki.special.watchlist","0o8mwaj",[98,265,8]],["mediawiki.special.version","0htn6oc"],["mediawiki.legacy.config","1d05gmv"],["mediawiki.legacy.commonPrint","000n1p3"],["mediawiki.legacy.protect","071cptp",[22]],["mediawiki.legacy.shared","15y9wrw"],["mediawiki.legacy.oldshared","07a5fw3"],["mediawiki.legacy.wikibits","1nxxev3"],["mediawiki.ui","0uu8h3u"],["mediawiki.ui.checkbox","188c099"],["mediawiki.ui.radio","1y8jaqi"],["mediawiki.ui.anchor","1m4efne"],["mediawiki.ui.button","1ooxipv"],["mediawiki.ui.input","1wzumvj"],[
"mediawiki.ui.icon","0njnq3l"],["mediawiki.ui.text","0mfar6r"],["mediawiki.widgets","0hhwlog",[22,37,139,98,246,267]],["mediawiki.widgets.styles","0r4gwei"],["mediawiki.widgets.DateInputWidget","1lx56bp",[92,267]],["mediawiki.widgets.datetime","1efcabs",[265]],["mediawiki.widgets.CategorySelector","1gmimol",[250]],["mediawiki.widgets.CategoryMultiselectWidget","0t7659c",[116,139,267]],["mediawiki.widgets.SelectWithInputWidget","1adeut5",[252,267]],["mediawiki.widgets.SelectWithInputWidget.styles","0bbk4m4"],["mediawiki.widgets.MediaSearch","020dh5p",[116,139,267]],["mediawiki.widgets.UserInputWidget","0dkg4ht",[267]],["mediawiki.widgets.UsersMultiselectWidget","09dvzwj",[267]],["mediawiki.widgets.SearchInputWidget","0m37gwo",[136,245]],["mediawiki.widgets.SearchInputWidget.styles","1fnxuim"],["mediawiki.widgets.StashedFileWidget","1284ob6",[265]],["es5-shim","1gmimol"],["dom-level2-shim","1gmimol"],["oojs","0o6uad5"],["mediawiki.router","0twoi8u",[263]],["oojs-router","0xx41ky",[261]],
["oojs-ui","1gmimol",[268,267,269]],["oojs-ui-core","1s88fqw",[174,261,266,270,271,272]],["oojs-ui-core.styles","0nisxbe"],["oojs-ui-widgets","0hpqywu",[265]],["oojs-ui-toolbars","0rbfej3",[265]],["oojs-ui-windows","1cekfku",[265]],["oojs-ui.styles.icons","1pjvb04"],["oojs-ui.styles.indicators","0x77z5a"],["oojs-ui.styles.textures","1bfqn3v"],["oojs-ui.styles.icons-accessibility","0isaoxt"],["oojs-ui.styles.icons-alerts","16brol8"],["oojs-ui.styles.icons-content","07405xs"],["oojs-ui.styles.icons-editing-advanced","0tpya1x"],["oojs-ui.styles.icons-editing-core","1uuaexq"],["oojs-ui.styles.icons-editing-list","0zqtz4x"],["oojs-ui.styles.icons-editing-styling","0f2415z"],["oojs-ui.styles.icons-interactions","079evyz"],["oojs-ui.styles.icons-layout","0bgznd3"],["oojs-ui.styles.icons-location","1qfuzw2"],["oojs-ui.styles.icons-media","1xbnjav"],["oojs-ui.styles.icons-moderation","0y6tl0g"],["oojs-ui.styles.icons-movement","091ozsk"],["oojs-ui.styles.icons-user","1l4jtk0"],[
"oojs-ui.styles.icons-wikimedia","07d271b"],["ext.confirmEdit.editPreview.ipwhitelist.styles","0jro8df"],["skins.fedora","08a22ep"],["skins.fedora.js","1l20xtl"],["ext.interwiki.specialpage","0uzyskj",[41]],["ext.cite.styles","0wa5fzt"],["ext.cite.a11y","1gzta0x"],["ext.cite.style","1k9ef9f"],["jquery.wikiEditor","1outmqg",[52,174],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","00mknyt",[50,62,300],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","0xfugk6",[49,296,146,144,94],"ext.wikiEditor"],["jquery.wikiEditor.preview","1klxsdt",[295,98],"ext.wikiEditor"],["jquery.wikiEditor.publish","067yzpy",[296],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","0xemhn7",[18,29,295,302],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","01zk2z7",[300,181],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","1aqwdbs",[],"ext.wikiEditor"],["ext.wikiEditor","1ikgbjp",[295,149],"ext.wikiEditor"],["ext.wikiEditor.styles","1r115cy",[],"ext.wikiEditor"],["ext.wikiEditor.dialogs","0au5uu2",[308,
297],"ext.wikiEditor"],["ext.wikiEditor.preview","0fr49er",[303,298],"ext.wikiEditor"],["ext.wikiEditor.publish","1l7l2wu",[303,299],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1kwrtpm",[303,301],"ext.wikiEditor"],["ext.wikiEditor.toolbar.styles","1lbmobx",[],"ext.wikiEditor"]]);;mw.config.set({"wgLoadScript":"/w/load.php","debug":!1,"skin":"fedora","stylepath":"/w/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgSearchType":"SearchMySQL","wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://fedoraproject.org","wgServerName":"fedoraproject.org","wgUserLanguage":"en",
"wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.29.2","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Fedora Project Wiki","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Fedora Project Wiki","5":"Fedora Project Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","100":"Archive","101":"Archive talk","102":"Meeting","103":"Meeting talk","104":"QA","105":"QA talk","106":"Legal","107":"Legal talk","108":"Licensing","109":"Licensing talk","110":"Packaging","111":"Packaging talk","112":"FUDCon","113":"FUDCon talk","114":"Test Day","115":"Test Day talk","116":"Test Results","117":"Test Results talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"fedora_project_wiki":4,"fedora_project_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,
"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"archive":100,"archive_talk":101,"meeting":102,"meeting_talk":103,"qa":104,"qa_talk":105,"legal":106,"legal_talk":107,"licensing":108,"licensing_talk":109,"packaging":110,"packaging_talk":111,"fudcon":112,"fudcon_talk":113,"test_day":114,"test_day_talk":115,"test_results":116,"test_results_talk":117,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Fedora Project Wiki","wgDBname":"fpo-mediawiki","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"fedora":"Fedora","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/w/extensions","wgCookiePrefix":"fpo-mediawiki_en_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\",
"wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!0,"wgCiteVisualEditorOtherGroup":!1,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumb","img_framed":"frame","img_frameless":"frameless"},"mw.msg.wikieditor":"--~~~~"});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/w/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=fedora&version=09p2emy";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());