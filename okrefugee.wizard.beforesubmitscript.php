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