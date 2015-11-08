<script type="text/javascript">

//generated map from import tool
var iconSetNameMap={
  "TV - private : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/ga_wNP_K7a_[ImAgE]_[G].png",
  "TV - private : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_lo2_phB_jMK_[ImAgE].png",
  "TV - private : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/VXX_LBi_BZ7_[G]_[ImAgE].png",
  "community paper : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/5EY_bPb_9pu_[G]_[ImAgE].png",
  "community paper : closed due to merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_ckm_cLL_[G]_dQ6.png",
  "community paper : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_k1v_esb_cE_[ImAgE].png",
  "community paper : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Drp_yoW_[ImAgE]_bO8.png",
  "community paper : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/MzA_[G]_[ImAgE]_itZ_37m.png",
  "community paper : new outlet produced by merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Ffw_[G]_WO_A9_[ImAgE].png",
  "community paper : shifted to online": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/A5b_[G]_PTW_[ImAgE]_jjt.png",
  "daily paper - free : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/ESs_jwW_3d_[G]_[ImAgE].png",
  "daily paper - free : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/qIw_uFv_[G]_bsm_[ImAgE].png",
  "daily paper - paid : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/95V_k0J_[ImAgE]_EWi_[G].png",
  "daily paper - paid : closed due to merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/Rs8_[G]_LGP_[ImAgE]_cQ5.png",
  "daily paper - paid : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_mYW_wsV_Jte.png",
  "daily paper - paid : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_UWx_N5D_OhI.png",
  "daily paper - paid : new outlet produced by merger": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_ytA_531_[ImAgE]_04.png",
  "daily paper - paid : daily becomes a community paper": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/PYa_[ImAgE]_kk8_[G]_lV6.png",
  "online : closed": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_L9q_GPZ_[ImAgE]_CSi.png",
  "online : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_Qrd_6BY_[ImAgE]_FYG.png",
  "radio - private : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_[G]_gB3_9Vv_ShV.png",
  "radio - public : decrease in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[G]_[ImAgE]_YCD_BF5_H7l.png",
  "radio - public : increase in service": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/XKD_[G]_[ImAgE]_e3z_Q48.png",
  "radio - public : new": "components\/com_geolive\/users_files\/user_files_400\/Uploads\/[ImAgE]_hAM_[G]_Rs0_pRI.png"
}


var layer=MapFactory.BestLayerFromIcon(item,  map.getNamedValue("IconSets"), {icon:wizardDataSet.icon||item.getIcon()});

var transitionType=wizardDataSet.Attribute_newsAttributes_Object.transitionType;
var name='';
if(layer.getName()=='Newspapers'){
 var paperType=wizardDataSet.Attribute_newsAttributes_Object.paperType;
 if((typeof paperType.length)=="number"){
  paperType=paperType[0];
 }
 name=paperType+" : "+transitionType;

}else if(layer.getName()=='Online News'){

 name="online : "+transitionType;

}else if(layer.getName()=='Radio'){
 var radioType=wizardDataSet.Attribute_newsAttributes_Object.radioType;
 if((typeof radioType.length)=="number"){
  radioType=radioType[0];
 }
name="radio - "+radioType+" : "+transitionType;
}else if(layer.getName()=='Television'){
 var tvType=wizardDataSet.Attribute_newsAttributes_Object.tvType;
 if((typeof tvType.length)=="number"){
  tvType=tvType[0];
 }
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