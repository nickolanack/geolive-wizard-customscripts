
<script type="text/javascript">

/* 
  * Custom script. gets predefined values from module immediately before this module 
  * and creates a mapping between that and the icon-set layer mapping in the second icon-set. 
  *
  * Important. if the icon being selected does not match the desired icon for the type attribute selected
  * then you should go into the Icon-set (with all the icons) and sort each group of icons to match the attribute
  * defined list order. (at this time the attribute list cannot be ordered)
  */
var useIconSetAt=1;
var iconSets=map.getNamedValue('IconSets');
if(iconSets&&iconSets.length>useIconSetAt){
   var iconSet=iconSets[useIconSetAt];
   var typeModule=moduleGroup[moduleIndex-1];
   if(typeModule&&typeModule.TextFieldModule&&typeModule.TextFieldModule.options.listValues){
      var list=typeModule.TextFieldModule.options.listValues;
      var listValues=[];
      Object.each(list,function(item){ listValues.push(item.value); })
      var layersImg=[];
      Object.each(iconSet.layerMap,function(layer,image){
      
     /*     if((mapItem.getLayer().getId()+"")==(layer+"")){     */
              layersImg.push(image);
     /*     }     */

      });
      var editor=typeModule.TextFieldModule;
      var useImage=null;

      var collect=function(x){

          var v=editor.getValue();
          if(!v)return;
          var i=listValues.indexOf(v);
          if(i>=0){
              var image=layersImg[i];
              object.image=image;
              markerDataObject.icon=object.image;
          }else{
  
             object.image=false;
          }
      };
      submissionFunctions[stepIndex].push(function(){
          collect();
      });
      editor.addEvent('onChange', function(){ collect(); });
   }
}else{


}









var d= new Element('div',{'class':'user-icon'});
var ul=new Element('ul');
d.appendChild(ul);

var selected=null;

var setValue=function(i, el){
    var e=moduleGroup[moduleIndex-2].TextFieldModule;
    if(e==null)return;
    if(e.getTextField()==null){
         //could add a short timeout here
         return;
    }
    e.setValue(e.getTextField().options.listValues[i].value);
  /*console.debug(e);*/

  if(selected)selected.removeClass('selected');
  selected=el;
  selected.addClass('selected');
};

var checkThis=function(i,el, timeout){
   var time=timeout||200;
   setTimeout(function(){
      try{
          var e=moduleGroup[moduleIndex-2].TextFieldModule;
          if(e.getTextField()==null){
              return;
          }
          if(e.getValue()==e.getTextField().options.listValues[i].value){
               el.parentNode.addClass('selected');
               selected=el.parentNode;
          }
      }catch(e){
           JSConsoleError(['Custom Script Exception Finding Selected Item',e]);
      }
   },time);
};
ul.appendChild(new Element('li')).appendChild(new Asset.image('templates/shimatheme/images/media-images/self-advocate.png',{ width:"90", onload:function(){
 checkThis(0, this);
 checkThis(0, this, 1000); //added an additional check after 1 sec.
 this.parentNode.addEvent('click',function(){
      setValue(0, this);
   });
}}));

ul.appendChild(new Element('li')).appendChild(new Asset.image('templates/shimatheme/images/media-images/government.png',{ width:"90",  onload:function(){
 checkThis(1, this);
 checkThis(1, this, 1000);
 this.parentNode.addEvent('click',function(){
      setValue(1, this);
   });
}}));

ul.appendChild(new Element('li')).appendChild(new Asset.image('templates/shimatheme/images/media-images/pathways.png',{ width:"90",  onload:function(){
   checkThis(2, this);
   checkThis(2, this, 1000);
 this.parentNode.addEvent('click',function(){
      setValue(2, this);
   });
}}));

ul.appendChild(new Element('li')).appendChild(new Asset.image('templates/shimatheme/images/media-images/employer.png',{ width:"90",  onload:function(){
 checkThis(3, this);
 checkThis(3, this, 1000);
 this.parentNode.addEvent('click',function(){
      setValue(3, this);
   });
}}));

ul.appendChild(new Element('li')).appendChild(new Asset.image('templates/shimatheme/images/media-images/family.png',{ width:"90",  onload:function(){
 checkThis(4, this);
 checkThis(4, this, 1000);
 this.parentNode.addEvent('click',function(){
      setValue(4, this);
   });
}}));


return d;












   var locationSearch=new GoogleSearch(item.getLatLng().toString());
   locationSearch.addEvent('onSuccess',function(a){
   console.debug(a);
      /* the title should be right above this script module */
      var titleModule=moduleGroup[moduleIndex-1].TextFieldModule;
      if(titleModule.getValue()==false||titleModule.getValue()==""){

         if(a.length){
            var s=JSTextUtilities.FormatGoogleGeolocation(a, [
                'locality, administrative_area_level_1',
                'administrative_area_level_2,  administrative_area_level_1',
                'formatted_address'
            ]);
            titleModule.setValue(s);
         }
      }
   });
   locationSearch.execute();


</script>





<script type="text/javascript">
  


   var locationSearch=new GoogleSearch(item.getLatLng().toString());
   locationSearch.addEvent('onSuccess',function(a){
   console.debug(a);
      /* the title should be right above this script module */
      var titleModule=moduleGroup[moduleIndex-1].TextFieldModule;
      if(titleModule.getValue()==false||titleModule.getValue()==""){

         if(a.length){
            var s=JSTextUtilities.FormatGoogleGeolocation(a, [
                'locality, administrative_area_level_1',
                'administrative_area_level_2,  administrative_area_level_1',
                'formatted_address'
            ]);
            titleModule.setValue(s);
         }
      }
   });
   locationSearch.execute();

  
</script>