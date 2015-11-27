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

var defaultValue=published;

var setPublishedTo=function(v){
	if(v==published){
		wizardDataSet.readAccess="public"
	}else{
		wizardDataSet.readAccess="special"
	}
};

return (new TagCloudSelectionModule(application, item, {
		values:[defaultValue],
		tags:[unpublished, published],
		shuffle:false,
        maxSelected:1,
        label:'Who can see this item',
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