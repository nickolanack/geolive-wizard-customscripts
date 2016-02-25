<script type="text/javascript">

//@depracated this is not used. it was intended to be the custom legend

<?php

IncludeCSSBlock('

.submenu-icon{
    margin: 0;
    display: block;
    width: 190px;
    margin-top: 10px;
}
.submenu-icon>li{
    float: left;
    list-style: none;
}
.submenu-icon>li>img{
    height: 32px;
}

');

?>

//generated map from import tool
var iconSetNameMap={
  'Television':{
    "new private TV station": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Fxs_[G]_jHI_[ImAgE]_buK.png",
    "private TV station that closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/ga_wNP_K7a_[ImAgE]_[G].png",
    "private TV station that decreased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_lo2_phB_jMK_[ImAgE].png",
    "private TV station that increased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/VXX_LBi_BZ7_[G]_[ImAgE].png",
    "new public TV station": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/7j8_[ImAgE]_0W3_[G]_EKx.png",
    "public TV station that closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_fe3_DIh_m6r_[ImAgE].png",
    "public TV station that decreased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_Kva_[G]_KNi_GhP.png",
    "public TV station that increased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Ti1_cfJ_[ImAgE]_AEg.png"
  },
  'Newspapers':{
    "community paper that closed due to merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_ckm_cLL_[G]_dQ6.png",
    "community paper that decreased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_k1v_esb_cE_[ImAgE].png",
    "community paper that increased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Drp_yoW_[ImAgE]_bO8.png",
    "new community paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/MzA_[G]_[ImAgE]_itZ_37m.png",
    "new community paper produced by a merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Ffw_[G]_WO_A9_[ImAgE].png",
    "community paper that shifted to online": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/A5b_[G]_PTW_[ImAgE]_jjt.png",
    "free daily paper that closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/ESs_jwW_3d_[G]_[ImAgE].png",
    "new free daily paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/qIw_uFv_[G]_bsm_[ImAgE].png",
    "free daily paper that increased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Xfp_DTl_[G]_avi_[ImAgE].png",
    "free daily paper that decreased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_zrH_oVI_BtL_[G].png",
    "free daily paper that became a community paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/nPT_[ImAgE]_[G]_HnR_1gp.png",
    "paid daily paper that closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/95V_k0J_[ImAgE]_EWi_[G].png",
    "new paid daily paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_UWx_N5D_OhI.png",
    "paid daily paper that closed due to merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Rs8_[G]_LGP_[ImAgE]_cQ5.png",
    "paid daily paper that decreased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_mYW_wsV_Jte.png",
    "new paid daily paper produced by a merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_ytA_531_[ImAgE]_04.png",
    "paid daily paper that became a community paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/PYa_[ImAgE]_kk8_[G]_lV6.png"
  },
  'Online News':{
    "n online news station that closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_L9q_GPZ_[ImAgE]_CSi.png",
    "n new online news station": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Qrd_6BY_[ImAgE]_FYG.png",
    "n online news station that increased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/SPT_WE6_[ImAgE]_XPb_[G].png",
    "n online news station that decreased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/08u_[G]_7Ze_[ImAgE]_e4x.png",
  },
  'Radio':{
    "new private radio station": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_gB3_9Vv_ShV.png",
    "private radio station that decreased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_FB8_[ImAgE]_XxD_L0W.png",
    "private radio station that increased in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_[ImAgE]_sbP_IWk_QIL.png",
    "private radio station that closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/qok_qWp_[G]_[ImAgE]_QvV.png",
    "new public radio station": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_hAM_[G]_Rs0_pRI.png",
    "public radio station that decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_[ImAgE]_YCD_BF5_H7l.png",
    "public radio station that increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/XKD_[G]_[ImAgE]_e3z_Q48.png",
    "public radio station that closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_CHO_gOM_tjn.png"
  }
}

var list=new Element('ul', {"class":"submenu-icon"});
var layerName=layerMetadata.name;//layer.getName();
var iconSet=iconSetNameMap[layerName];
var icons=Object.keys(iconSet);
icons.forEach(function(key){

    var icon=iconSet[key];
    var li=new Element('li');
    li.appendChild(new Asset.image(icon));
    //new UIPopover(li,{title:'', description:'Map icons with this symbol indicate a '+key, anchor:UIPopover.AnchorTo('right')});
    list.appendChild(li);

});
//list.inject(element,'after');
//

var div=new Element('div',{html:layerMetadata.description, style:'display:inline-table;'});
div.appendChild(list);
popover.setText(div);

// }

</script>




<script type="text/javascript">

/**
 * this script adds a legend title.
 */
    <?php

IncludeCSSBlock('

        .legend-title{

            font-weight: 100;
            margin: 5px;
            color: #444444;
            font-size: 17px;
            text-shadow: 0 0 1px rgba(0,0,0,0.4);
            text-align: center;

        }

    ')

?>

    var title=new Element('h3',{html:"Legend", "class":'legend-title'});
    title.inject(element, 'top');
    new UIPopover(title,{title:'', description:'Turn these filters on and off to view changes by media type', anchor:UIPopover.AnchorTo('right')});

// }

</script>

<script type="text/javascript">


/**
 * This script overrides the default map login behavior to use a site login function
 */

    var userIsGuest=<?php
echo json_encode(Core::Client()->isGuest());
?>;

    if(userIsGuest){
        //from another script
        window.openLoginWindow();
    }else{
        defaultBehaviorFn();
    }

// }

</script>


<script type="text/javascript">

/**
 * this script draws custom legend detail views for each layer
 */

<?php

IncludeCSSBlock('

.legend-layer-detail{
    width:310px;
    margin-top: 10px;
    text-align:center;
}
.l-tbl{
    display:table;
    width:93%;
    margin-top: 10px;
    border-top: 1px solid cornflowerblue;
    text-align:left;
}
.l-lft{
    display:table-cell;
    vertical-align:middle;
    width:40%;
    text-align: center;
}
.l-rht{
    display:table-cell;
    width:60%;
    vertical-align:middle;
}

.l-rht img{
    width:30px;
    height:auto;
    display: inline-block;
    margin-right: 10px;
}

.l-rht label {
    display: inline-block;
}

.l-rht>div {
    margin: 20px;
}

.l-tbl label {
    color: white;
}

.newspapers.popover>.tip,.newspapers.popover{
    max-width: 400px;
}

.newspapers .legend-layer-detail{
    width:400px;

}

.radio.popover>.tip, .radio.popover, .television.popover>.tip, .television.popover{
    max-width: 350px;
}

.radio .legend-layer-detail, .television .legend-layer-detail{
    width:350px;
}
span.layer-title {
    margin-right: 10px;
    text-align: left;
    display: block;
}

');

?>

var layerDetailMap={
  'Television':{
    html:'<div class="l-lft">'+
            '<label>Public TV station</label><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_ITb_SS6_[ImAgE]_LWT.png">'+
            '<label>Private TV station</label><img src="http://newspoverty.geolive.ca/components/com_geolive/users_files/user_files_400/Uploads/Qa5_[G]_[ImAgE]_4Ah_oTD.png">'+
        '</div><div class="l-rht">'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_W0v_B5_yuK_[ImAgE].png"><label>New</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/grw_0dl_[ImAgE]_cu4_[G].png"><label>Increased service</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_hVp_WtL_VlO_[ImAgE].png"><label>Decreased service</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/zf0_[ImAgE]_Dj9_[G]_Ogd.png"><label>Closed</label></div>'+
        '</div>'
  },
  'Newspapers':{
    html:'<div class="l-lft">'+
            '<label>Free daily newspaper</label><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_F7F_WJc_C6j_[ImAgE].png">'+
            '<label>Community newspaper</label><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/lQO_[G]_zUZ_[ImAgE]_FQv.png">'+
            '<label>Paid daily newspaper</label><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/4jQ_ULS_[G]_[ImAgE]_l92.png">'+
        '</div><div class="l-rht">'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_W0v_B5_yuK_[ImAgE].png"><label>New</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/grw_0dl_[ImAgE]_cu4_[G].png"><label>Increased frequency</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_hVp_WtL_VlO_[ImAgE].png"><label>Decreased frequency</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/zf0_[ImAgE]_Dj9_[G]_Ogd.png"><label>Closed</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/components/com_geolive/users_files/user_files_400/Uploads/[G]_[ImAgE]_y8s_wIS_0KD.png"><label>Closed due to merger</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/components/com_geolive/users_files/user_files_400/Uploads/MqZ_2D9_[G]_zSz_[ImAgE].png"><label>Opened after merger</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/components/com_geolive/users_files/user_files_400/Uploads/Tij_[G]_[ImAgE]_nkF_db1.png"><label>Transitioned</label></div>'+
        '</div>'
  },
  'Online news':{
    html:'<div class="l-lft">'+
            '<label>Online news</label><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/gdZ_kvi_[G]_Ka7_[ImAgE].png">'+
        '</div><div class="l-rht">'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_W0v_B5_yuK_[ImAgE].png"><label>New</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/zf0_[ImAgE]_Dj9_[G]_Ogd.png"><label>Closed</label></div>'+
        '</div>'
  },
  'Radio':{
    html:'<div class="l-lft">'+
            '<label>Public radio</label><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[ImAgE]_[G]_WNv_exD_hzn.png">'+
            '<label>Private radio</label><img src="http://newspoverty.geolive.ca/components/com_geolive/users_files/user_files_400/Uploads/[ImAgE]_zp_[G]_8J5_V8w.png">'+
        '</div><div class="l-rht">'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_W0v_B5_yuK_[ImAgE].png"><label>New</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/grw_0dl_[ImAgE]_cu4_[G].png"><label>Increased service</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/[G]_hVp_WtL_VlO_[ImAgE].png"><label>Decreased service</label></div>'+
            '<div><img src="http://newspoverty.geolive.ca/administrator/components/com_geolive/users_files/user_files_400/Uploads/zf0_[ImAgE]_Dj9_[G]_Ogd.png"><label>Closed</label></div>'+
        '</div>'
  }
}

var layerName=layerMetadata.name;//layer.getName();
var cssName=layerName.replace(' ' ,'-').toLowerCase();
var detail=new Element('span', {html:layerDetailMap[layerName].html, 'class':'l-tbl'});


var div=new Element('div',{html:'<span class="layer-title">'+layerMetadata.description+'</span>', style:'display:inline-table;', 'class':'legend-layer-detail'});
div.appendChild(detail);
popover.setText(div);
popover.options.className=popover.options.className+' '+cssName;

</script>


<script type="text/javascript">

    tile.addEvent('click',function(){

tile.setImage("<?php echo UrlFrom(Core::AssetsDir() . DS . 'Tile Icons' . DS . 'help.png') . '?tint=rgb(255, 255, 255)'; ?>");
 PushBoxWindow.open("http://newspoverty.geolive.ca/help.html",{handler:"iframe", size:{x:700,y:450}});
});


</script>


<script type="text/javascript">
/**
 * Wizard Custom Script. beforeSubmit
 */
//generated map from import tool
var iconSetNameMap={
  "TV - private : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Fxs_[G]_jHI_[ImAgE]_buK.png",
  "TV - private : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/ga_wNP_K7a_[ImAgE]_[G].png",
  "TV - private : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_lo2_phB_jMK_[ImAgE].png",
  "TV - private : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/VXX_LBi_BZ7_[G]_[ImAgE].png",
  "TV - public : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/7j8_[ImAgE]_0W3_[G]_EKx.png",
  "TV - public : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_fe3_DIh_m6r_[ImAgE].png",
  "TV - public : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_Kva_[G]_KNi_GhP.png",
  "TV - public : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Ti1_cfJ_[ImAgE]_AEg.png",
  "community paper : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/5EY_bPb_9pu_[G]_[ImAgE].png",
  "community paper : closed due to merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_ckm_cLL_[G]_dQ6.png",
  "community paper : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_k1v_esb_cE_[ImAgE].png",
  "community paper : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Drp_yoW_[ImAgE]_bO8.png",
  "community paper : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/MzA_[G]_[ImAgE]_itZ_37m.png",
  "community paper : new outlet produced by merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Ffw_[G]_WO_A9_[ImAgE].png",
  "community paper : shifted to online": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/A5b_[G]_PTW_[ImAgE]_jjt.png",
  "daily paper - free : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/ESs_jwW_3d_[G]_[ImAgE].png",
  "daily paper - free : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/qIw_uFv_[G]_bsm_[ImAgE].png",
  "daily paper - free : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Xfp_DTl_[G]_avi_[ImAgE].png",
  "daily paper - free : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_zrH_oVI_BtL_[G].png",
  "daily paper - free : daily becomes a community paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/nPT_[ImAgE]_[G]_HnR_1gp.png",
  "daily paper - paid : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/95V_k0J_[ImAgE]_EWi_[G].png",
  "daily paper - paid : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_UWx_N5D_OhI.png",
  "daily paper - paid : closed due to merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Rs8_[G]_LGP_[ImAgE]_cQ5.png",
  "daily paper - paid : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_mYW_wsV_Jte.png",
  "daily paper - paid : new outlet produced by merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_ytA_531_[ImAgE]_04.png",
  "daily paper - paid : daily becomes a community paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/PYa_[ImAgE]_kk8_[G]_lV6.png",
  "online : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_L9q_GPZ_[ImAgE]_CSi.png",
  "online : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Qrd_6BY_[ImAgE]_FYG.png",
  "online : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/SPT_WE6_[ImAgE]_XPb_[G].png",
  "online : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/08u_[G]_7Ze_[ImAgE]_e4x.png",
  "radio - private : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_gB3_9Vv_ShV.png",
  "radio - private : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_FB8_[ImAgE]_XxD_L0W.png",
  "radio - private : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_[ImAgE]_sbP_IWk_QIL.png",
  "radio - private : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/qok_qWp_[G]_[ImAgE]_QvV.png",
  "radio - public : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_hAM_[G]_Rs0_pRI.png",
  "radio - public : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_[ImAgE]_YCD_BF5_H7l.png",
  "radio - public : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/XKD_[G]_[ImAgE]_e3z_Q48.png",
  "radio - public : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_CHO_gOM_tjn.png"
}

var layer=MapFactory.BestLayerFromIcon(item,  map.getNamedValue("IconSets"), {icon:wizardDataSet.icon||item.getIcon()});

var transitionType=wizardDataSet.Attribute_newsAttributes_Object.transitionType;
var name='';

if(layer.getName()=='Newspapers'){
 var paperType=wizardDataSet.Attribute_newsAttributes_Object.paperType;

name=paperType+" : "+transitionType;

}else if(layer.getName()=='Online news'){

 name="online : "+transitionType;

}else if(layer.getName()=='Radio'){
 var radioType=wizardDataSet.Attribute_newsAttributes_Object.radioType;

name="radio - "+radioType+" : "+transitionType;
}else if(layer.getName()=='Television'){
 var tvType=wizardDataSet.Attribute_newsAttributes_Object.tyType;

name="TV - "+tvType+" : "+transitionType;
}else{
 alert("Icon map script is broken, has the layer list or names changed");
}

alert(name);
if((typeof iconSetNameMap[name])=="undefined"){
  alert("Icon map script is broken, generated icon map key: "+name+" is not valid, or missing");
}else{
 wizardDataSet.icon=iconSetNameMap[name];
}

</script>


<script type="text/javascript">
/**
 * Custom Cluster Settings.
 */


if(window.Cluster){
Cluster.Symbol=ClusterSymbol;
ClusterSymbol.IconScale=function(sum){
   return 20+(5*Math.log(sum)/Math.log(2));
};
ClusterSymbol.IconStyle=function(name){
   //expect to be bound to ClusterSymbol object
   if(name=="hover"){

      return {
            path: google.maps.SymbolPath.CIRCLE,
            fillColor:"rgb(130, 51, 130)",
            fillOpacity:0.7,
            strokeWeight:1.5,
            strokeColor:"rgb(130, 51, 130)",
            labelOrigin:google.maps.Point(0, 0)
      };


   }else{


      return {
        path: google.maps.SymbolPath.CIRCLE,
        fillColor:"#0A79B1",
        fillOpacity:0.4,
        strokeWeight:1.5,
        strokeColor:"#0A79B1",
        labelOrigin:google.maps.Point(0, 0)

    };

   }
};

}else{
    setTimeout(start,100);
}

</script>




<script type="text/javascript">
/**
 * Tutorial Cluster Settings.
 */





</script>







