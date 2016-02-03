<script type="text/javascript">

var ul=new Element('ul', {'class':''});
var li=new Element('li', {'class':'WizardButton disabled', style:'margin: 10px 0;'});
var txt=new Element('span', {'class':'btn-label', html:'preview'});

ul.appendChild(li);
li.appendChild(txt);


var previous=moduleGroup[moduleIndex-1];

var hasFiles=function(){

	if(previous.TextFieldModule){

		return (JSTextUtilities.ParseLinks(previous.TextFieldModule.getValue()).length>0);

	}
	return false;
};

var getFiles=function(){

	return JSTextUtilities.ParseLinks(previous.TextFieldModule.getValue()).map(function(o){
		return o.url;
	});
};

var updateButton=function(){
	if(hasFiles()){
		li.removeClass('disabled');
	}else{
		li.addClass('disabled');
	}
};

var KMLDocumentQuery = new Class({
    Extends: XMLControlQuery,
    initialize: function(url) {
       var me = this;
        me.parent(url, 'none', {});
    }
});


var ProposalLayer=new Class({
Extends:GeoliveLayer,
	_initMarker:function(data, xml, markerDataArray, i){
		var me=this;
		me.parent(Object.append(data,{
		   icon:'https://storage.googleapis.com/support-kms-prod/SNP_2752125_en_v0',
		   clickable:false
		}), xml, markerDataArray, i);
	},
	_getKmlQuery:function(){
		var me=this;
		return new KMLDocumentQuery(me.options.url);
	}

});

var layers=[];



li.addEvent('click',function(){
	if(!li.hasClass('disabled')){
		//display layers
		//HACK!
		wizard.viewer.pushbox.win.setStyle('display', 'none');
		wizard.viewer.pushbox.overlay.setStyle('display', 'none');

		Array.each(getFiles(),function(url){



			layers.push(new ProposalLayer(map, {
				url:url
			}));



		});
	}
});

wizard.addEvent('resume',function(){
	Array.each(layers,function(layer){
		layer.hide();
	});
	wizard.viewer.pushbox.win.setStyle('display', null);
	wizard.viewer.pushbox.overlay.setStyle('display', null);
});

previous.TextFieldModule.addEvent('change', updateButton);

return ul;

</script>