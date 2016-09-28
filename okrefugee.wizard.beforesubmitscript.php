<script type="text/javascript">

var layer=MapFactory.BestLayerFromIcon(item,  map.getNamedValue("IconSets"), {icon:wizardDataSet.icon||item.getIcon()});

switch(layer.getName()){


	case 'Household Items':
	case 'Housing':
	case 'Volunteering':

		wizardDataSet.readAccess="special";

		break;

	default:
		break;

}

</script>


<script type="text/javascript">

/**
 * Custom visibility selection for Volunteer Opportunities
 */

<?php 

	IncludeCSSBlock('

		.tags-publish span{}
		.tags-publish span.selected{
			background-color: cornflowerblue;
		}

		');
?>


var published="everyone";
var unpublished="just coordinators, and me";

wizardDataSet.readAccess="public";

var defaultValue=published;

var setPublishedTo=function(v){
	if(v==published){
		wizardDataSet.readAccess="public"
	}else{
		wizardDataSet.readAccess="fb-member"
	}
};

return (new TagCloudSelectionModule(application, item, {
		values:[defaultValue],
		tags:[unpublished, published],
		shuffle:false,
        maxSelected:1,
        label:'Who can see this item',
        minScale:15,
        className:'tags-publish'
	})).addEvent('change',function(selection){

		var cloud=this;

		if(selection.length==0){
			if(wizardDataSet.readAccess=="public"){
				cloud.addValue(unpublished);
			}else{
				cloud.addValue(published)
			}
		}else{
			setPublishedTo(selection[0]);
		}


	});

</script>


<script type="text/javascript">


	var tips = {
		"components/com_geolive/users_files/user_files_982/Uploads/jvR_[G]_gYt_[ImAgE]_pU8.png":['Housing', 'Locations of housing'],
		"components/com_geolive/users_files/user_files_982/Uploads/EcI_pte_[ImAgE]_6XO_[G].png":['Services', 'Locations that offer services'],
		"components/com_geolive/users_files/user_files_982/Uploads/[G]_8cV_7Py_G7E_[ImAgE].png":['Household Items', 'Resources and Household items'],
		"components/com_geolive/users_files/user_files_982/Uploads/7S2_[ImAgE]_[G]_O2S_lAA.png":['Employment', 'Employment Opportunities'],
		"components/com_geolive/users_files/user_files_982/Uploads/3y3_8G9_[G]_[ImAgE]_wHJ.png":['Volunteering', 'Volunteering Oportunities']
	};

	var tip=tips[options.icon];
	popover.setTitle(tip[0]);
	popover.setText(tip[1]);

</script>